<?php
/*
Plugin Name: SyntaxHighlighter Evolved: Arduino
Plugin URI: https://github.com/carlynorama/wp-syntaxhighlighter-arduino
Description: A SytaxHighlighter Brush for highlighting Arduino code for the SyntaxHighlighter Evolved plugin by Alex Gorbatchev. Please see the README for full credits.
Version: 1.0.1
Author: Carlyn Maw
Author URI: http://carlynorama.com
License: GPL2
*/
/*
Copyright 2014  Carlyn Maw  (email : carlynorama@gmail.com)

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

 
// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
add_action( 'init', 'syntaxhighlighter_arduino_regscript' );
 
// Tell SyntaxHighlighter Evolved about this new language/brush
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_arduino_addlang' );
 
// Register the brush file with WordPress
function syntaxhighlighter_arduino_regscript() {
    wp_register_script( 'syntaxhighlighter-brush-arduino', plugins_url( 'scripts/shBrushArduino.js', __FILE__ ), array('syntaxhighlighter-core'), '1.2.3' );
}
 
// Filter SyntaxHighlighter Evolved's language array
function syntaxhighlighter_arduino_addlang( $brushes ) {
    $brushes['arduino'] = 'arduino';
    $brushes['arduinolite'] = 'arduino';
 
    return $brushes;
}
 
?>