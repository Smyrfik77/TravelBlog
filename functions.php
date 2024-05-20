<?php 


add_action( 'wp_enqueue_scripts', function() {  

        wp_enqueue_style( 'style_header', get_template_directory_uri() . '/assets/css/style_header.css');
        wp_enqueue_style( 'style_footer', get_template_directory_uri() . '/assets/css/style_footer.css');
        wp_enqueue_style( 'buttonAnim', get_template_directory_uri() . '/assets/css/buttonAnim.css');
        wp_enqueue_style( 'biography', get_template_directory_uri() . '/assets/css/biography.css');
        wp_enqueue_style( 'events', get_template_directory_uri() . '/assets/css/events.css');
        wp_enqueue_style( 'gallery', get_template_directory_uri() . '/assets/css/gallery.css');
        wp_enqueue_style( 'journal', get_template_directory_uri() . '/assets/css/journal.css/custom.css' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');



    
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', '');

        wp_enqueue_script('jquery_my', 'https://code.jquery.com/jquery-3.0.0.min.js');

        wp_enqueue_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', array(), null, false );

        wp_enqueue_script( 'custom-modernizr', get_template_directory_uri() . '/assets/js/journalScript/modernizr.custom.79639.js', array(), null, true );
         
        wp_enqueue_script( 'bookblock', get_template_directory_uri() . '/assets/js/journalScript/jquery.bookblock.js', array('jquery'), null, true );         
            
        wp_enqueue_script( 'custom-jquery-plus-plus', get_template_directory_uri() . '/assets/js/journalScript/jquerypp.custom.js', array('jquery'), null, true );           
            
        wp_enqueue_script( 'jscrollpane', get_template_directory_uri() . '/assets/js/journalScript/jquery.jscrollpane.min.js', array('jquery'), null, true );

        wp_enqueue_script( 'jquery-mouse-wheel', get_template_directory_uri() . '/assets/js/journalScript/page.js', array('jquery'), null, true );

        wp_enqueue_script( 'script-journal', get_template_directory_uri() . '/assets/js/journalScript/scriptJournal.js', array( 'jquery' ), null, true );

        wp_enqueue_script( 'index', get_template_directory_uri() . '/assets/js/index.js', array(), 'null', true );
        wp_enqueue_script( 'events', get_template_directory_uri() . '/assets/js/events.js', array(), 'null', true );
});


add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
show_admin_bar(false);







// ДЛЯ ЗАГРУЗКИ SVG ЛОГОТИПА

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}
add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}




// Подключение нескольких изображений к записи

if (class_exists('MultiPostThumbnails')) {
 
    new MultiPostThumbnails(array(
    'label' => 'Secondary Image',
    'id' => 'secondary-image',
    'post_type' => 'post'
    
     ) );
     
     }








?>