<?php

namespace App;

use App\Product;

class Scraping
{
    public static function movie_urls()
    {
        require_once 'simple_html_dom.php';

        $links = array();
        $current_page = file_get_html('http://review-movie.herokuapp.com/');
        $elements = $current_page->fine('.entry-title a');
        foreach ($elements as $element) {
            $links[] = $element->href;
        }

        foreach ($links as $link) {
            Scraping::get_product('http://review-movie.herokuapp.com/' . $link);
        }
    }

    public static function get_product($link)
    {
        $page = file_get_html($link);
        $title = $page->find('.entry-title')[0]->plaintext;
        $image_url = $page->find('.entry-content img')[0]->src;
        $product = new Product(array('title' => $title, 'image_url' => $image_url));
    }
}
