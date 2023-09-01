<?php

/**
 * montymobile functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package montymobile
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '8.5.1');
}

require_once 'custom-menu-walker.php';

function custom_search_rewrite_rule()
{
	add_rewrite_rule('^search/page/([0-9]{1,})/?', 'index.php?pagename=search&paged=$matches[1]', 'top');
}
add_action('init', 'custom_search_rewrite_rule');

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function montymobile_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on montymobile, use a find and replace
		* to change 'montymobile' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('montymobile', get_template_directory() . '/languages');


	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'montymobile'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_image_size('background', 1920, 1080, true);
	add_image_size('background-no-crop', 1920, 1080);
	add_image_size('xl-thumb', 1440, 810);
	add_image_size('lg-thumb', 960, 540);
	add_image_size('md-thumb', 480, 270);
	add_image_size('sm-thumb', 240, 135);

	add_image_size('mid-thumb', 350, 200);

	add_image_size('logo', 200, 100);
}
add_action('after_setup_theme', 'montymobile_setup');

require_once("includes/custom-menu.php");


if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title'    => 'Theme General Settings',
		'menu_title'    => 'Theme Settings',
		'menu_slug'     => 'theme-general-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));
}

/**
 * Enqueue scripts and styles.
 */
function montymobile_scripts()
{

	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), _S_VERSION);
	wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/slick/slick.css', array(), _S_VERSION);
	wp_enqueue_style('slick-theme-css', get_template_directory_uri() . '/assets/slick/slick-theme.css', array(), _S_VERSION);

	wp_enqueue_style('montymobile-style', get_stylesheet_uri(), array(), _S_VERSION);


	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.bundle.js', array(), _S_VERSION, true);
	wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/slick/slick.min.js', array("jquery"), _S_VERSION, true);

	//wp_enqueue_script('scamble-text-js', get_template_directory_uri() . '/assets/ScrambleTextPlugin3.min.js', array("jquery"), _S_VERSION, true);
	wp_enqueue_script('montymobile-js', get_template_directory_uri() . '/js/scripts.js', array("jquery"), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'montymobile_scripts');



// Function to recursively build hierarchical menu array
function build_menu_hierarchy($items, $parent_id = 0)
{
	$menu = array();

	foreach ($items as $item) {
		if ($item->menu_item_parent == $parent_id) {
			$menu_item = (array) $item;
			$menu_item['children'] = build_menu_hierarchy($items, $item->ID);
			$menu[] = $menu_item;
		}
	}

	return $menu;
}

require_once "blocks/register.php";
