<?php


new \Kirki\Panel(
	'techub_panle',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Techub Options', 'techub' ),
		'description' => esc_html__( 'My Panel Description.', 'techub' ),
	]
);

// Section 01 
// Header Info

function techub_header_info_section(){

     new \Kirki\Section(
          'techub_header_section',
          [
               'title'       => esc_html__( 'Header Info', 'techub' ),
               'description' => esc_html__( 'My Section Description.', 'techub' ),
               'panel'       => 'techub_panle',
               'priority'    => 160,
          ]
     );

     // Header Top bar switch

     new \Kirki\Field\Checkbox_Switch(
          [
               'settings'    => 'header_top_switch',
               'label'       => esc_html__( 'Header Topbar Switch', 'techub' ),
               'description' => esc_html__( 'Header topbar switch information', 'techub' ),
               'section'     => 'techub_header_section',
               'default'     => 'off',
               'choices'     => [
                    'on'  => esc_html__( 'Enable', 'techub' ),
                    'off' => esc_html__( 'Disable', 'techub' ),
               ],
          ]
     );
     // Header right switch

     new \Kirki\Field\Checkbox_Switch(
          [
               'settings'    => 'header_right_switch',
               'label'       => esc_html__( 'Header Right Switch', 'techub' ),
               'description' => esc_html__( 'Header Right switch information', 'techub' ),
               'section'     => 'techub_header_section',
               'default'     => 'off',
               'choices'     => [
                    'on'  => esc_html__( 'Enable', 'techub' ),
                    'off' => esc_html__( 'Disable', 'techub' ),
               ],
          ]
     );

     // Address content

     new \Kirki\Field\Text(
          [
               'settings' => 'address_text',
               'label'    => esc_html__( 'Address Text', 'techub' ),
               'section'  => 'techub_header_section',
               'default'  => esc_html__( 'Manchester 21, Zurich, CH', 'techub' ),
               'priority' => 10,
          ]
     );
     // Address URL
     new \Kirki\Field\Text(
          [
               'settings' => 'address_url',
               'label'    => esc_html__( 'Address URL', 'techub' ),
               'section'  => 'techub_header_section',
               'default'  => esc_html__( '#', 'techub' ),
               'priority' => 10,
          ]
     );


     // Email Address
     new \Kirki\Field\Text(
          [
               'settings' => 'email_address',
               'label'    => esc_html__( 'Email Address', 'techub' ),
               'section'  => 'techub_header_section',
               'default'  => esc_html__( 'info@companyname.com', 'techub' ),
               'priority' => 10,
          ]
     );

     // Header Button Text
     new \Kirki\Field\Text(
          [
               'settings' => 'header_button_text',
               'label'    => esc_html__( 'Button Text', 'techub' ),
               'section'  => 'techub_header_section',
               'default'  => esc_html__( 'Get a Quete', 'techub' ),
               'priority' => 10,
          ]
     );
     
     // Header Button URL
     new \Kirki\Field\Text(
          [
               'settings' => 'header_button_url',
               'label'    => esc_html__( 'Button URL', 'techub' ),
               'section'  => 'techub_header_section',
               'default'  => esc_html__( '#', 'techub' ),
               'priority' => 10,
          ]
     );
}
techub_header_info_section();


// Header Side 
function techub_header_side_section(){

     new \Kirki\Section(
          'header_side_info_section',
          [
               'title'       => esc_html__( 'Header Offcanvas', 'techub' ),
               'description' => esc_html__( 'My Section Description.', 'techub' ),
               'panel'       => 'techub_panle',
               'priority'    => 160,
          ]
     );

     // Header side switch

     new \Kirki\Field\Checkbox_Switch(
          [
               'settings'    => 'header_side_info_switch',
               'label'       => esc_html__( 'Header Side Info Switch', 'techub' ),
               'description' => esc_html__( 'Header side switch information', 'techub' ),
               'section'     => 'header_side_info_section',
               'default'     => 'off',
               'choices'     => [
                    'on'  => esc_html__( 'Enable', 'techub' ),
                    'off' => esc_html__( 'Disable', 'techub' ),
               ],
          ]
     );
     new \Kirki\Field\Checkbox_Switch(
          [
               'settings'    => 'header_side_social_switch',
               'label'       => esc_html__( 'Header Side Social Switch', 'techub' ),
               'description' => esc_html__( 'Header Side Social switch information', 'techub' ),
               'section'     => 'header_side_info_section',
               'default'     => 'off',
               'choices'     => [
                    'on'  => esc_html__( 'Enable', 'techub' ),
                    'off' => esc_html__( 'Disable', 'techub' ),
               ],
          ]
     );

     // Header side logo
     new \Kirki\Field\Image(
          [
               'settings'    => 'header_side_logo',
               'label'       => esc_html__( 'Techub Logo', 'techub' ),
               'description' => esc_html__( 'Please set your header side logo', 'techub' ),
               'section'     => 'header_side_info_section',
               'default'     => get_template_directory_uri().'/assets/img/logo/logo.png',
          ]
     );

     // Header Side content

     new \Kirki\Field\Textarea(
          [
               'settings' => 'header_side_content',
               'label'    => esc_html__( 'Header Side Content', 'techub' ),
               'section'  => 'header_side_info_section',
               'default'  => esc_html__( 'Techub is the partner of choice for many of the world’s leading enterprises. We help businesses development.', 'techub' ),
               'priority' => 10,
          ]
     );
     // Address text
     new \Kirki\Field\Text(
          [
               'settings' => 'header_side_address_text',
               'label'    => esc_html__( 'Header Side Address Text', 'techub' ),
               'section'  => 'header_side_info_section',
               'default'  => esc_html__( 'Techub is the partner', 'techub' ),
               'priority' => 10,
          ]
     );
     // Address URL
     new \Kirki\Field\Text(
          [
               'settings' => 'header_side_address_url',
               'label'    => esc_html__( 'Header Side Address URL', 'techub' ),
               'section'  => 'header_side_info_section',
               'default'  => esc_html__( '#', 'techub' ),
               'priority' => 10,
          ]
     );


     // Email Address
     new \Kirki\Field\Text(
          [
               'settings' => 'header_side_email_address',
               'label'    => esc_html__( 'Header Side Email Address', 'techub' ),
               'section'  => 'header_side_info_section',
               'default'  => esc_html__( 'info@companyname.com', 'techub' ),
               'priority' => 10,
          ]
     );

     // Phone Number
     new \Kirki\Field\Text(
          [
               'settings' => 'header_side_phone_number',
               'label'    => esc_html__( 'Header Side Phone Number', 'techub' ),
               'section'  => 'header_side_info_section',
               'default'  => esc_html__( '+880 18766958', 'techub' ),
               'priority' => 10,
          ]
     );


}
techub_header_side_section();


// Section 02
function techub_header_social_section(){
     new \Kirki\Section(
          'techub_header_social_section',
          [
               'title'       => esc_html__( 'Header Social', 'techub' ),
               'description' => esc_html__( 'Techub Header Social Info', 'techub' ),
               'panel'       => 'techub_panle',
               'priority'    => 160,
          ]
     );
     
     new \Kirki\Field\Text(
          [
               'settings' => 'header_fb_url',
               'label'    => esc_html__( 'Facebook URL', 'techub' ),
               'section'  => 'techub_header_social_section',
               'default'  => esc_html__( '#', 'techub' ),
               'priority' => 10,
          ]
     );
     new \Kirki\Field\Text(
          [
               'settings' => 'header_instagram_url',
               'label'    => esc_html__( 'Instagram URL', 'techub' ),
               'section'  => 'techub_header_social_section',
               'default'  => esc_html__( '#', 'techub' ),
               'priority' => 10,
          ]
     );
     new \Kirki\Field\Text(
          [
               'settings' => 'header_twitter_url',
               'label'    => esc_html__( 'Twitter URL', 'techub' ),
               'section'  => 'techub_header_social_section',
               'default'  => esc_html__( '#', 'techub' ),
               'priority' => 10,
          ]
     );
     new \Kirki\Field\Text(
          [
               'settings' => 'header_pinterest_url',
               'label'    => esc_html__( 'Pinterst URL', 'techub' ),
               'section'  => 'techub_header_social_section',
               'default'  => esc_html__( '#', 'techub' ),
               'priority' => 10,
          ]
     );
}
techub_header_social_section();


function techub_header_logo_section(){
     new \Kirki\Section(
          'techub_header_logo_section',
          [
               'title'       => esc_html__( 'Header Logo', 'techub' ),
               'description' => esc_html__( 'Techub Header Logo Info', 'techub' ),
               'panel'       => 'techub_panle',
               'priority'    => 160,
          ]
     );

     new \Kirki\Field\Image(
          [
               'settings'    => 'header_logo',
               'label'       => esc_html__( 'Techub Logo', 'techub' ),
               'description' => esc_html__( 'Please set your header logo', 'techub' ),
               'section'     => 'techub_header_logo_section',
               'default'     => get_template_directory_uri().'/assets/img/logo/logo.png',
          ]
     );
}

techub_header_logo_section();
