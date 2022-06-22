 function clear_pantheon_cahce_after_options_page_save() {
	$screen = get_current_screen();
	$mystring = $screen->base;
	$word = 'acf-options';

		if( strpos($mystring, $word) !== false ){
			pantheon_clear_edge_all();
			wp_cache_flush();
		}
}
add_action( 'acf/save_post', 'clear_pantheon_cahce_after_options_page_save', 20 );
