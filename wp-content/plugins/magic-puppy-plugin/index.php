<?php

/*

Plugin Name: Magic Puppy

*/

function wporg_shortcodes_init()
{
    function wporg_shortcode($atts = [], $content = null)
    {
        $content .= <<<EOT

<div ng-app="myApp" ng-controller="myCtrl">
<h1>The Magic Puppy</h1>
    <figure>
        <img class="magicpuppy" src="{{currentPicture}}" alt="picture of puppy"/>
        <figcaption>Picture by {{currentAuthor}}</figcaption>
    </figure>
    <button ng-click="nextPicture()">Next</button>
EOT;
        return $content;
    }
    add_shortcode('magic-puppy-plugin', 'wporg_shortcode');
}
add_action('init', 'wporg_shortcodes_init');
//bring in external resources
wp_register_style('your_css_and_js', plugins_url('styles/main.css',__FILE__ ));
wp_enqueue_style('your_css_and_js');
wp_register_script('your_css_and_js', 'https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.15/angular.js');
wp_enqueue_script('your_css_and_js');
wp_register_script('your_css_and_js1', plugins_url('js/main.js',__FILE__ ));
wp_enqueue_script('your_css_and_js1');
