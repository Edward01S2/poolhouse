<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
});

// add_filter( 'upload_mimes', function( $mimes ) {
     
//     // New allowed mime types.
//     $mimes['svg']  = 'image/svg+xml';
//     $mimes['json'] = 'application/json';

//     //Optional. Remove a mime type.

 
//     return $mimes;
// });