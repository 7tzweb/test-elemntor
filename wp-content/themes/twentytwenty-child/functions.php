<?php
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
