<?php 

function inlinecss( $path = array() ) {

	global $kirby;

	$file_path = $kirby->roots->index() . "/" . $path;

	if ( file_exists( $file_path ) ) {
		printf('<style>%s</style>', file_get_contents( $file_path ) );
	}
}