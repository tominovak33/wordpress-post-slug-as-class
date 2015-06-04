<?php
/*
Plugin Name: Tomi Page Slug in Class
Description: Automatically the page or post slug as a class of the body prefixed with "slug-"
Version: 0.1
Author: Tomi Novak
*/

/*  Copyright 2015  Tomi Novak (email : dev.tomi33@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


class TomiPageSlugAsClass {

    function __construct() {
        add_filter( 'body_class', array($this, 'add_slug_as_class'));
    }

    function add_slug_as_class($classes) {
        global $post;

        if (isset($post)) {
            $classes[] = 'slug-' . $post->post_name;
        }

        return $classes;
    }

}

$tomi_menu = new TomiPageSlugAsClass();