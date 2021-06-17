<?php
$post = $wp_query->post;
if ( in_category( 'latest-news' ) ) { 
    include( TEMPLATEPATH.'/single-latest-news.php' );
} else if( in_category('team') ) {
	include( TEMPLATEPATH.'/single-team.php' );
} else {
	include( TEMPLATEPATH.'/single-default.php' );
}