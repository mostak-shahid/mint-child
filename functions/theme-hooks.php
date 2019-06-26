<?php
// add_action( 'action_before_footer', 'bottom_section_fnc', 10, 1 );
// function bottom_section_fnc ($page_details) {
//  get_template_part( 'template-parts/section', 'bottom' );
// }

// add_action( 'wp_head', 'remove_theme_actions' );
// function remove_theme_actions () {
//  remove_action( 'action_contact_page_form', 'contact_info', 5 );
//  remove_action( 'action_contact_page_form', 'form_generator', 10 );
//  remove_action( 'action_team_archive_page', 'team_archive_page_fnc', 10 );
// }
add_action( 'init', 'child_text_layout_manager' );
function child_text_layout_manager () {
    global $mosacademy_options;
    if ($mosacademy_options['sections-price-text-layout'] == 'container-fliud-spacing') {
        add_action( 'action_before_price', 'start_container_fluid', 10, 1 );
        add_action( 'action_before_price', 'start_row', 11, 1 );
        add_action( 'action_before_price', 'start_container_col_10', 12, 1 );

        add_action( 'action_after_price', 'end_div', 10, 1 );
        add_action( 'action_after_price', 'end_div', 11, 1 );
        add_action( 'action_after_price', 'end_div', 12, 1 );   
    } elseif ($mosacademy_options['sections-price-text-layout'] == 'container-fliud') {
        add_action( 'action_before_price', 'start_container_fluid', 10, 1 );
        add_action( 'action_after_price', 'end_div', 10, 1 );
    } elseif ($mosacademy_options['sections-price-text-layout'] == 'container-full') {
        add_action( 'action_before_price', 'start_full_width', 10, 1 );
        add_action( 'action_after_price', 'end_div', 10, 1 );
    } else {
        add_action( 'action_before_price', 'start_container', 10, 1 );
        add_action( 'action_after_price', 'end_div', 10, 1 );
    }
    if ($mosacademy_options['sections-special-text-layout'] == 'container-fliud-spacing') {
        add_action( 'action_before_special', 'start_container_fluid', 10, 1 );
        add_action( 'action_before_special', 'start_row', 11, 1 );
        add_action( 'action_before_special', 'start_container_col_10', 12, 1 );

        add_action( 'action_after_special', 'end_div', 10, 1 );
        add_action( 'action_after_special', 'end_div', 11, 1 );
        add_action( 'action_after_special', 'end_div', 12, 1 );   
    } elseif ($mosacademy_options['sections-special-text-layout'] == 'container-fliud') {
        add_action( 'action_before_special', 'start_container_fluid', 10, 1 );
        add_action( 'action_after_special', 'end_div', 10, 1 );
    } elseif ($mosacademy_options['sections-special-text-layout'] == 'container-full') {
        add_action( 'action_before_special', 'start_full_width', 10, 1 );
        add_action( 'action_after_special', 'end_div', 10, 1 );
    } else {
        add_action( 'action_before_special', 'start_container', 10, 1 );
        add_action( 'action_after_special', 'end_div', 10, 1 );
    }
    if ($mosacademy_options['sections-testimonial-text-layout'] == 'container-fliud-spacing') {
        add_action( 'action_before_testimonial', 'start_container_fluid', 10, 1 );
        add_action( 'action_before_testimonial', 'start_row', 11, 1 );
        add_action( 'action_before_testimonial', 'start_container_col_10', 12, 1 );

        add_action( 'action_after_testimonial', 'end_div', 10, 1 );
        add_action( 'action_after_testimonial', 'end_div', 11, 1 );
        add_action( 'action_after_testimonial', 'end_div', 12, 1 );   
    } elseif ($mosacademy_options['sections-testimonial-text-layout'] == 'container-fliud') {
        add_action( 'action_before_testimonial', 'start_container_fluid', 10, 1 );
        add_action( 'action_after_testimonial', 'end_div', 10, 1 );
    } elseif ($mosacademy_options['sections-testimonial-text-layout'] == 'container-full') {
        add_action( 'action_before_testimonial', 'start_full_width', 10, 1 );
        add_action( 'action_after_testimonial', 'end_div', 10, 1 );
    } else {
        add_action( 'action_before_testimonial', 'start_container', 10, 1 );
        add_action( 'action_after_testimonial', 'end_div', 10, 1 );
    }
    if ($mosacademy_options['sections-map-text-layout'] == 'container-fliud-spacing') {
        add_action( 'action_before_map', 'start_container_fluid', 10, 1 );
        add_action( 'action_before_map', 'start_row', 11, 1 );
        add_action( 'action_before_map', 'start_container_col_10', 12, 1 );

        add_action( 'action_after_map', 'end_div', 10, 1 );
        add_action( 'action_after_map', 'end_div', 11, 1 );
        add_action( 'action_after_map', 'end_div', 12, 1 );   
    } elseif ($mosacademy_options['sections-map-text-layout'] == 'container-fliud') {
        add_action( 'action_before_map', 'start_container_fluid', 10, 1 );
        add_action( 'action_after_map', 'end_div', 10, 1 );
    } elseif ($mosacademy_options['sections-map-text-layout'] == 'container-full') {
        add_action( 'action_before_map', 'start_full_width', 10, 1 );
        add_action( 'action_after_map', 'end_div', 10, 1 );
    } else {
        add_action( 'action_before_map', 'start_container', 10, 1 );
        add_action( 'action_after_map', 'end_div', 10, 1 );
    }
}





