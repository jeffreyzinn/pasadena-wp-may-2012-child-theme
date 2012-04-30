<?php

add_filter( 'the_content', 'my_special_instructions' );
function my_special_instructions( $content ) {
	return $content;
}