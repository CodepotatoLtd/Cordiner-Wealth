<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public static function parent_category(){
        $cats = get_the_category();
        $parent = array_filter($cats, function($item){
           return $item->parent === 0;
        });
        return $parent[0];
    }

    public static function grab_three_vids(){
        $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
        return new \WP_Query([
            'cat' => 6,
            'posts_per_page' => 3,
            'paged' => $paged,
        ]);
    }
}
