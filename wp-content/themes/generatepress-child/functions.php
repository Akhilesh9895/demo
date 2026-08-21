<?php 
function my_bootstrap_theme_enqueue_styles() { 

    wp_enqueue_style(
        'common-style',
        get_stylesheet_directory_uri() . '/assets/css/vendors.min.css',
        array(),
        null
    );

    wp_enqueue_style(
        'icon-style',
        get_stylesheet_directory_uri() . '/assets/css/icon.min.css',
        array(),
        null
    );

    wp_enqueue_style(
        'main-style',
        get_stylesheet_directory_uri() . '/assets/css/style.min.css',
        array('common-style'),
        null
    );

    wp_enqueue_style(
        'responsive-style',
        get_stylesheet_directory_uri() . '/assets/css/responsive.min.css',
        array('main-style'),
        null
    );

    wp_enqueue_style(
        'tax-style',
        get_stylesheet_directory_uri() . '/assets/demos/tax/tax.css',
        array('main-style', 'responsive-style'),
        null
    );

} 

add_action('wp_enqueue_scripts', 'my_bootstrap_theme_enqueue_styles');

// function my_theme_register_menus() {
//     register_nav_menus(array(
//         'primary' => __('Primary Menu', 'my-theme'),
//     ));
// }
// add_action('after_setup_theme', 'my_theme_register_menus');


class Bootstrap_Nav_Walker extends Walker_Nav_Menu {

    // Start <ul>
    public function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);

        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }

    // Start <li>
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {

        $classes = empty($item->classes) ? array() : (array) $item->classes;

        $classes[] = 'nav-item';

        if (in_array('menu-item-has-children', $classes)) {
            $classes[] = 'dropdown';
        }

        if (in_array('current-menu-item', $classes)) {
            $classes[] = 'active';
        }

        $class_names = implode(' ', array_filter($classes));

        $output .= '<li class="' . esc_attr($class_names) . '">';

        $attributes = '';

        if (!empty($item->url)) {
            $attributes .= ' href="' . esc_url($item->url) . '"';
        }

        $attributes .= ' class="nav-link"';

        $output .= '<a' . $attributes . '>';

        $output .= esc_html($item->title);

        $output .= '</a>';
    }

    // End <li>
    public function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "</li>\n";
    }

    // End <ul>
    public function end_lvl(&$output, $depth = 0, $args = null) {
        $output .= "</ul>\n";
    }
}


// Remove GeneratePress default stylesheet
function my_child_theme_dequeue_generatepress_styles() {
    wp_dequeue_style('generate-style');
}
add_action('wp_enqueue_scripts', 'my_child_theme_dequeue_generatepress_styles', 20);

// Remove GeneratePress default scripts
function my_child_theme_dequeue_generatepress_scripts() {
    wp_dequeue_script('generate-menu');
    wp_dequeue_script('generate-classlist');
}
add_action('wp_enqueue_scripts', 'my_child_theme_dequeue_generatepress_scripts', 20);

// Remove WordPress block library CSS
function custom_remove_wp_block_library_css() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles'); 
    wp_dequeue_style('global-styles-inline'); 
}
add_action('wp_enqueue_scripts', 'custom_remove_wp_block_library_css', 100);
function allow_svg_uploads($mimes) {

    $mimes['svg']  = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';

    return $mimes;
}

add_filter('upload_mimes', 'allow_svg_uploads');


function fix_svg_mime_type($data, $file, $filename, $mimes) {

    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if ($ext === 'svg') {
        $data['ext']  = 'svg';
        $data['type'] = 'image/svg+xml';
    }

    return $data;
}

add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 4);

function load_dashicons_frontend() {
    wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'load_dashicons_frontend');





