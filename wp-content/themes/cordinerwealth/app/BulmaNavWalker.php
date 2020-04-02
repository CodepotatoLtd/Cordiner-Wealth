<?php
namespace App;

class BulmaNavWalker extends \Walker_Nav_Menu {

    public function start_lvl( &$output, $depth = 0, $args = array() ) {

        $output .= "<div class='navbar-dropdown shadow-xl z-10' style='display:none'>";
        $output .= "<a class='navbar-item menu-back' href='#'><img src='/wp-content/themes/metisfinancial/dist/images/icon-arrow-left.svg'>Back</a>";
    }

    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

        $liClasses = '';

        if (in_array("client-login", $item->classes)) {
            foreach ($item->classes as $cssclass){
                $liClasses .= $cssclass.' ';
            }
        } else {
            $liClasses = 'navbar-item';
            foreach ($item->classes as $cssclass){
                $liClasses .= $cssclass.' ';
                }
        }

        $hasChildren = $args->walker->has_children;
        $liClasses .= $hasChildren? " has-dropdown is-hoverable": "";

        if($hasChildren){
            $output .= "<span class='".$liClasses."'>";
            $output .= "\n<a class='navbar-item dropdown-item' href='".$item->url."'>".$item->title."</a>";
        }
        else {
            $output .= "<a class='".$liClasses."' href='".$item->url."'>".$item->title;
        }

        // Adds has_children class to the item so end_el can determine if the current element has children
        if ( $hasChildren ) {
            $item->classes[] = 'has_children';
        }
    }

    public function end_el(&$output, $item, $depth = 0, $args = array(), $id = 0 ){

        if(in_array("has_children", $item->classes)) {

            $output .= "</span>";
        }
        $output .= "</a>";
    }

    public function end_lvl (&$output, $depth = 0, $args = array()) {

        $output .= "</div>";
    }
}