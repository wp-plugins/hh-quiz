<?php
/*
Plugin Name: HH Quiz
Plugin URI: http://www.hirner.at/archives/22592
Description: Zur einfachen Verwendung des GPL JavaScript-Framewoks gleichen Namens von Felix Riesterer - es ermöglicht das Erstellen verschieder Quiz
Version: 1.0.0
Author: Helmut Hirner
Author URI: http://helmut.hirner.at/
License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/




function my_quiz_script() {
wp_enqueue_script('Quiz', WP_CONTENT_URL . '/plugins/hhquiz/quiz.js');
}    
 
add_action('wp_enqueue_scripts', 'my_quiz_script'); // For use on the Front end (ie. Theme)

function add_my_styles() {
wp_register_style( 'blocker-css', WP_CONTENT_URL . '/plugins/hhquiz/css/anzeige-blocker.css');
wp_enqueue_style( 'blocker-css' );
} 
add_action('init', 'add_my_styles');
?>