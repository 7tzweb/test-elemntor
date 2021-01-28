<?php

/* Part 3 - Users Disable wp admin bar for this user, using code */
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar()
{
    //get current user
    $current_user = wp_get_current_user();

    //Disable wp admin bar for this user,
    if ($current_user->data->user_email == 'wptest@elementor.com') {
        show_admin_bar(false);
    }
}

/* Part 4 - Post Types */
// custom post type function
function create_posttype()
{

    register_post_type('Products',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Products'),
                'singular_name' => __('Product'),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'products'),
            'show_in_rest' => true,

        )
    );
}
// Hooking up our function to theme setup
add_action('init', 'create_posttype');

/*
 * Creating a function to create our CPT
 */

function custom_post_type()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Products', 'Post Type General Name', 'twentytwenty'),
        'singular_name' => _x('Product', 'Post Type Singular Name', 'twentytwenty'),
        'menu_name' => __('Products', 'twentytwenty'),
        'parent_item_colon' => __('Parent Product', 'twentytwenty'),
        'all_items' => __('All Products', 'twentytwenty'),
        'view_item' => __('View Product', 'twentytwenty'),
        'add_new_item' => __('Add New Product', 'twentytwenty'),
        'add_new' => __('Add New', 'twentytwenty'),
        'edit_item' => __('Edit Product', 'twentytwenty'),
        'update_item' => __('Update Product', 'twentytwenty'),
        'search_items' => __('Search Product', 'twentytwenty'),
        'not_found' => __('Not Found', 'twentytwenty'),
        'not_found_in_trash' => __('Not found in Trash', 'twentytwenty'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label' => __('Products', 'twentytwenty'),
        'description' => __('Product news and reviews', 'twentytwenty'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),

        /* A hierarchical CPT is like Pages and can have
         * Parent and child items. A non-hierarchical CPT
         * is like Posts.
         */
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
        // This is where we add taxonomies to our CPT
        'taxonomies' => array('category'),

    );

    // Registering your Custom Post Type
    register_post_type('Products', $args);

}

/* Hook into the 'init' action so that the function
 * Containing our post type registration is not
 * unnecessarily executed.
 */

add_action('init', 'custom_post_type', 0);

//Part 5 add Shortcode prodacut 5 with this shortcode
// function that runs when shortcode is called

/*
Part 6
I understood in section 6 that need to add a filter of result that you get part of the prodact
so i add option to get prodact without title and without color and without price and without image
 */

function shortcodes_get_pr($arr)
{
    $content_post = get_post($arr['pr_id']);

    // part 5
    // $ress = "<div class='boxout' style='background: ".$arr['color'].";' >
    // <img class='img-box' src='".get_field('main_image')['url']."' />
    // <h3>".$content_post->post_title."</h3>
    // <span>".get_field('sale_price')."</span>
    // </div>";

    // part 6
    $add = "<div class='boxout' ";
    if ($arr['color']) {
        $add .= "style='background: " . $arr['color'] . ";'> ";
    } else {
        $add .= ">";
    }

    if ($arr['img']) {
        $add .= " <img class='img-box' src='" . get_field('main_image')['url'] . "' />";
    } else {
        $add .= "";
    }

    if ($arr['title']) {
        $add .= " <h3>" . $content_post->post_title . "</h3>";
    } else {
        $add .= "";
    }

    if ($arr['price']) {
        $add .= " <span>" . get_field('sale_price') . "</span>";
    } else {
        $add .= "";
    }

    $add .= " </div>";

    // print_r($add);die;

    // return  $content_post->ID;
    return $add;

}
add_shortcode('get_pr', 'shortcodes_get_pr');

