<?php
if (class_exists('WPBakeryVisualComposerAbstract')) {
	$path =  get_template_directory() . '/inc/visualcomposer/';
	$files = glob($path . '/shortcodes/*.php');
	foreach($files as $file){
		if( __FILE__ != basename($file) ){
			include_once $file;
		}
	}
}
?>