<?php

// Sanitize text
function sanitize_text($text)
{
    return sanitize_text_field($text);
}

function add_input($wp_customize, $type, $section, $name, $title)
{
    $wp_customize->add_setting($name, array(
        // 'default'           => __('Title', 'theme-name'),
        'sanitize_callback' => 'sanitize_text'
    ));
    if ($type == 'text') {
        // Add control
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                $name,
                array(
                    'label'    =>  $title,
                    'section'  => $section,
                    'settings' => $name,
                    'type'     => 'text'
                )
            )
        );
    } elseif ($type == 'media') {
        $wp_customize->add_control(
            new WP_Customize_Media_Control(
                $wp_customize,
                $name,
                array(
                    'label'    =>  $title,
                    'section'  => $section,
                    'settings' => $name,
                )
            )
        );
    }
}

function theme_name_register_theme_customizer($wp_customize)
{
    // Create custom panel.
    $wp_customize->add_panel('footer', array(
        'priority'       => 10,
        'theme_supports' => '',
        'title'          => __('Footer', 'theme_name'),
    ));
    // Add section.
    $wp_customize->add_section('footer_intro', array(
        'title'    => __('Giới thiệu', 'theme-name'),
        'panel'    => 'footer',
        'priority' => 10
    ));
    add_input($wp_customize, 'text', 'footer_intro', 'footer_intro', 'Giới thiệu');
    // Add section.
    $wp_customize->add_section('footer_system', array(
        'title'    => __('Hệ thống', 'theme-name'),
        'panel'    => 'footer',
        'priority' => 10
    ));
    add_input($wp_customize, 'text', 'footer_system', 'footer_system_description', 'Mô tả');

    // for ($i = 1; $i < 20; $i++) {
    //     add_input($wp_customize, 'text', 'footer_system', 'footer_system_' . $i, 'Địa chỉ ' . $i);
    // }

    $wp_customize->add_section('footer_link', array(
        'title'    => __('Link', 'theme-name'),
        'panel'    => 'footer',
        'priority' => 10
    ));

    for ($i = 1; $i < 20; $i++) {
        add_input($wp_customize, 'text', 'footer_link', 'footer_link_name_' . $i, 'Tên link ' . $i);
        add_input($wp_customize, 'text', 'footer_link', 'footer_link_' . $i, 'Link ' . $i);
    }

    $wp_customize->add_section('copyright', array(
        'title'    => __('Copy right', 'theme-name'),
        'panel'    => 'footer',
        'priority' => 10
    ));
    add_input($wp_customize, 'text', 'copyright', 'footer_copyright', 'copyright');


    // Create custom panel.
    $wp_customize->add_panel('info', array(
        'priority'       => 0,
        'theme_supports' => '',
        'title'          => __('Thông tin cơ bản', 'theme_name'),
    ));
    // Add section.
    $wp_customize->add_section('info_basic', array(
        'title'    => __('Cơ bản', 'theme-name'),
        'panel'    => 'info',
        'priority' => 10
    ));
    add_input($wp_customize, 'text', 'info_basic', 'info_basic_phone', 'Số điện thoại');
    add_input($wp_customize, 'text', 'info_basic', 'info_basic_address', 'Địa chỉ');
    add_input($wp_customize, 'text', 'info_basic', 'info_basic_work_time', 'Giờ làm việc');
    add_input($wp_customize, 'text', 'info_basic', 'info_basic_work_day', 'Ngày làm việc');
    add_input($wp_customize, 'text', 'info_basic', 'info_basic_facebook', 'Facebook');
    add_input($wp_customize, 'text', 'info_basic', 'info_basic_instagram', 'Instagram');
    add_input($wp_customize, 'text', 'info_basic', 'info_basic_tiktok', 'Tiktok');
    add_input($wp_customize, 'text', 'info_basic', 'info_basic_youtube', 'Youtube');

    // Create custom panel.
    $wp_customize->add_panel('home_page', array(
        'priority'       => 1,
        'theme_supports' => '',
        'title'          => __('Trang chủ', 'theme_name'),
    ));
    // Add section.
    $wp_customize->add_section('featured_services', array(
        'title'    => __('Dịch vụ nổi bật', 'theme-name'),
        'panel'    => 'home_page',
        'priority' => 10
    ));

    for ($i = 1; $i < 20; $i++) {
        add_input($wp_customize, 'text', 'featured_services', 'featured_services_name_' . $i, 'Tên ' . $i);
        add_input($wp_customize, 'media', 'featured_services', 'featured_services_image_' . $i, 'Ảnh ' . $i);
        add_input($wp_customize, 'text', 'featured_services', 'featured_services_description_' . $i, 'Mô tả ' . $i);
    }

    // Create custom panel.
    $wp_customize->add_panel('intro_page', array(
        'priority'       => 1,
        'theme_supports' => '',
        'title'          => __('Trang giới thiệu', 'theme_name'),
    ));
    // Add section.
    $wp_customize->add_section('about_us', array(
        'title'    => __('Về chúng tôi', 'theme-name'),
        'panel'    => 'intro_page',
        'priority' => 10
    ));
    add_input($wp_customize, 'text', 'about_us', 'about_us', 'Về chúng tôi');
    // Add section.
    $wp_customize->add_section('our_service', array(
        'title'    => __('Dịch vụ của chúng tôi', 'theme-name'),
        'panel'    => 'intro_page',
        'priority' => 10
    ));
    add_input($wp_customize, 'text', 'our_service', 'our_service_description', 'Dịch vụ của chúng tôi');
    for ($i = 1; $i < 20; $i++) {
        add_input($wp_customize, 'text', 'our_service', 'our_service_' . $i, 'Tên dịch vụ ' . $i);
    }

    // Add section.
    $wp_customize->add_section('our_team', array(
        'title'    => __('Đội của chúng tôi', 'theme-name'),
        'panel'    => 'intro_page',
        'priority' => 10
    ));
    add_input($wp_customize, 'text', 'our_team', 'our_team', 'Đội của chúng tôi');
    // Add section.
    $wp_customize->add_section('policy', array(
        'title'    => __('Chính sách', 'theme-name'),
        'panel'    => 'intro_page',
        'priority' => 10
    ));
    add_input($wp_customize, 'text', 'policy', 'policy', 'Mô tả chính sách');
    for ($i = 1; $i < 5; $i++) {
        add_input($wp_customize, 'text', 'policy', 'policy_' . $i, 'Chính sách ' . $i);
    }
}
add_action('customize_register', 'theme_name_register_theme_customizer');
