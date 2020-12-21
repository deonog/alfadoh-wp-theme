<?php
    function wpb_customize_register($wp_customize){

    /*----------------------------------------*/
    /*  Global
    /*----------------------------------------*/

    $wp_customize->add_section('Global', array(
        'title' => __('Global', 'alfadoh-theme'),
        'description'  => sprintf(__('Add text and images','alfadoh-theme')),
        'priority'  => 130
    ));

    /*----------------------------------------*/
    /*  Home
    /*----------------------------------------*/

    $wp_customize->add_section('Home', array(
        'title' => __('Home', 'alfadoh-theme'),
        'description'  => sprintf(__('Add text and images','alfadoh-theme')),
        'priority'  => 130
    ));

    // Header Background Image

    $wp_customize->add_setting('home_header_bg', array(
        'default'  => get_bloginfo('template_directory').'/inc/img/header.jpg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_header_bg', array(
        'label'  => __('Header Bachground Image', 'alfadoh-theme'),
        'section'  => 'Home', 
        'settings'  => 'home_header_bg',
        'priority' => 1
    )));

    // Header H1

    $wp_customize->add_setting('home_header_h1', array(
        'default'  => _x('Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, vel?', 'alfadoh-theme'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('home_header_h1', array(
        'label'  => __('Header Heading 1', 'alfadoh-theme'),
        'section'  => 'Home', 
        'priority' => 2
    ));
    
    $wp_customize->selective_refresh->add_partial( 'home_header_h1', array(
        'selector' => '.home_header_h1',
    ) );

    // Header H1

    $wp_customize->add_setting('home_header_h2', array(
        'default'  => _x('Lorem ipsum dolor sit amet consectetur', 'alfadoh-theme'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('home_header_h2', array(
        'label'  => __('Header Heading 2', 'alfadoh-theme'),
        'section'  => 'Home', 
        'priority' => 3
    ));
    
    $wp_customize->selective_refresh->add_partial( 'home_header_h2', array(
        'selector' => '.home_header_h2',
    ) );

    // About Heading

    $wp_customize->add_setting('home_about_h', array(
        'default'  => _x('Meet Kendryx Alfadoh', 'alfadoh-theme'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('home_about_h', array(
        'label'  => __('About Heading', 'alfadoh-theme'),
        'section'  => 'Home', 
        'priority' => 4
    ));
    
    $wp_customize->selective_refresh->add_partial( 'home_about_h', array(
        'selector' => '.home_about_h',
    ) );

    // About Paragraph

    $wp_customize->add_setting('home_about_p', array(
        'default'  => _x('Born in one of the most beautiful river deltas of the world, he completed the major part of
        his education in Nigeria. There, he worked with many advertising companies primarily as a
        media studio artist. Today, he is working as an art therapist with unaccompanied teenagers
        with traumatic conditions in Dortmund and is founder of the Afroroots Germany Association
        promoting integration, education, development and raising awareness of climate change.', 'alfadoh-theme'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('home_about_p', array(
        'label'  => __('About Text', 'alfadoh-theme'),
        'section'  => 'Home', 
        'priority' => 5
    ));
    
    $wp_customize->selective_refresh->add_partial( 'home_about_p', array(
        'selector' => '.home_about_p',
    ) );

    // About Image

    $wp_customize->add_setting('home_about_img', array(
        'default'  => get_bloginfo('template_directory').'/inc/img/paintings/painting-6.png',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_about_img', array(
        'label'  => __('About Image', 'alfadoh-theme'),
        'section'  => 'Home', 
        'settings'  => 'home_about_img',
        'priority' => 6
    )));

    $wp_customize->selective_refresh->add_partial( 'home_about_img', array(
        'selector' => '.home_about_img',
    ) );
    
    // Services Heading

    $wp_customize->add_setting('home_services_h', array(
        'default'  => _x('Services', 'alfadoh-theme'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('home_services_h', array(
        'label'  => __('Services Heading', 'alfadoh-theme'),
        'section'  => 'Home', 
        'priority' => 7
    ));
    
    $wp_customize->selective_refresh->add_partial( 'home_services_h', array(
        'selector' => '.home_services_h',
    ) );

    // Services Paragraph

    $wp_customize->add_setting('home_services_p', array(
        'default'  => _x('Through my art, I am trying to link Africa and Europe. For me, art is light, love, life,
        things seen, felt and experienced, the past and the future. With my paintings I am trying to
        harmoniously free the soul of the viewer.', 'alfadoh-theme'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('home_services_p', array(
        'label'  => __('Services Text', 'alfadoh-theme'),
        'section'  => 'Home', 
        'priority' => 8
    ));

    $wp_customize->selective_refresh->add_partial( 'home_services_p', array(
        'selector' => '.home_services_p',
    ) );

    // Paintings Heading

    $wp_customize->add_setting('home_products_h', array(
        'default'  => _x('Featured Art Pieces', 'alfadoh-theme'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('home_products_h', array(
        'label'  => __('Products Heading', 'alfadoh-theme'),
        'section'  => 'Home', 
        'priority' => 9
    ));
    
    $wp_customize->selective_refresh->add_partial( 'home_products_h', array(
        'selector' => '.home_products_h',
    ) );

    // Services Paragraph

    $wp_customize->add_setting('home_products_p', array(
        'default'  => _x('Through my art, I am trying to link Africa and Europe. For me, art is light, love, life,
        things seen, felt and experienced, the past and the future. With my paintings I am trying to
        harmoniously free the soul of the viewer.', 'alfadoh-theme'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('home_products_p', array(
        'label'  => __('Products Text', 'alfadoh-theme'),
        'section'  => 'Home', 
        'priority' => 10
    ));

    $wp_customize->selective_refresh->add_partial( 'home_products_p', array(
        'selector' => '.home_products_p',
    ) );

    // Blog Heading

    $wp_customize->add_setting('home_blog_h', array(
        'default'  => _x('Blog', 'alfadoh-theme'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('home_blog_h', array(
        'label'  => __('Blog Heading', 'alfadoh-theme'),
        'section'  => 'Home', 
        'priority' => 11
    ));
    
    $wp_customize->selective_refresh->add_partial( 'home_blog_h', array(
        'selector' => '.home_blog_h',
    ) );

    // Blog Paragraph

    $wp_customize->add_setting('home_blog_p', array(
        'default'  => _x('Through my art, I am trying to link Africa and Europe. For me, art is light, love, life,
        things seen, felt and experienced, the past and the future. With my paintings I am trying to
        harmoniously free the soul of the viewer.', 'alfadoh-theme'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('home_blog_p', array(
        'label'  => __('Blog Text', 'alfadoh-theme'),
        'section'  => 'Home', 
        'priority' => 12
    ));

    $wp_customize->selective_refresh->add_partial( 'home_blog_p', array(
        'selector' => '.home_blog_p',
    ) );

    /*----------------------------------------*/
    /*  About
    /*----------------------------------------*/

    $wp_customize->add_section('About', array(
        'title' => __('About', 'alfadoh-theme'),
        'description'  => sprintf(__('Add text and images','alfadoh-theme')),
        'priority'  => 130
    ));

    // Header Background Image

    $wp_customize->add_setting('about_header_bg', array(
        'default'  => get_bloginfo('template_directory').'/inc/img/header.jpg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_header_bg', array(
        'label'  => __('Header Bachground Image', 'alfadoh-theme'),
        'section'  => 'About', 
        'settings'  => 'about_header_bg',
        'priority' => 1
    )));

    // About 1 Heading

    $wp_customize->add_setting('about_about_1_h', array(
        'default'  => _x('The Story', 'alfadoh-theme'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('about_about_1_h', array(
        'label'  => __('About 1 Heading', 'alfadoh-theme'),
        'section'  => 'About', 
        'priority' => 2
    ));
    
    $wp_customize->selective_refresh->add_partial( 'about_about_1_h', array(
        'selector' => '.about_about_1_h',
    ) );

    // About 1 Paragraph

    $wp_customize->add_setting('about_about_1_p', array(
        'default'  => _x('Born in one of the most beautiful river deltas of the world, he completed the major part of
        his education in Nigeria. There, he worked with many advertising companies primarily as a
        media studio artist. Today, he is working as an art therapist with unaccompanied teenagers
        with traumatic conditions in Dortmund and is founder of the Afroroots Germany Association
        promoting integration, education, development and raising awareness of climate change.', 'alfadoh-theme'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('about_about_1_p', array(
        'label'  => __('About 1 Text', 'alfadoh-theme'),
        'section'  => 'About', 
        'priority' => 3
    ));
    
    $wp_customize->selective_refresh->add_partial( 'about_about_1_p', array(
        'selector' => '.about_about_1_p',
    ) );

    // About 2 Paragraph

    $wp_customize->add_setting('about_about_1_p_2', array(
        'default'  => _x('Colors always had a special meaning in his life. He started painting in 1987 and his homeland
        Nigeria inspired him time and time again. He experiments with many techniques and works
        with materials such as oil, sand, charcoal and acrylic.', 'alfadoh-theme'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('about_about_1_p_2', array(
        'label'  => __('About 1 Text 2', 'alfadoh-theme'),
        'section'  => 'About', 
        'priority' => 4
    ));
    
    $wp_customize->selective_refresh->add_partial( 'about_about_1_p_2', array(
        'selector' => '.about_about_1_p_2',
    ) );

    // About 1 Image

    $wp_customize->add_setting('about_about_1_img', array(
        'default'  => get_bloginfo('template_directory').'/inc/img/paintings/painting-6.png',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_about_1_img', array(
        'label'  => __('About 1 Image', 'alfadoh-theme'),
        'section'  => 'About', 
        'settings'  => 'about_about_1_img',
        'priority' => 5
    )));

    $wp_customize->selective_refresh->add_partial( 'about_about_1_img', array(
        'selector' => '.about_about_1_img',
    ) );

    // About 2 Heading

    $wp_customize->add_setting('about_about_2_h', array(
        'default'  => _x('The Process', 'alfadoh-theme'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('about_about_2_h', array(
        'label'  => __('About 2 Heading', 'alfadoh-theme'),
        'section'  => 'About', 
        'priority' => 6
    ));
    
    $wp_customize->selective_refresh->add_partial( 'about_about_2_h', array(
        'selector' => '.about_about_2_h',
    ) );

    // About 2 Paragraph

    $wp_customize->add_setting('about_about_2_p', array(
        'default'  => _x('Born in one of the most beautiful river deltas of the world, he completed the major part of
        his education in Nigeria. There, he worked with many advertising companies primarily as a
        media studio artist. Today, he is working as an art therapist with unaccompanied teenagers
        with traumatic conditions in Dortmund and is founder of the Afroroots Germany Association
        promoting integration, education, development and raising awareness of climate change.', 'alfadoh-theme'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('about_about_2_p', array(
        'label'  => __('About 2 Text', 'alfadoh-theme'),
        'section'  => 'About', 
        'priority' => 7
    ));
    
    $wp_customize->selective_refresh->add_partial( 'about_about_2_p', array(
        'selector' => '.about_about_2_p',
    ) );

    // About 2 Paragraph

    $wp_customize->add_setting('about_about_2_p_2', array(
        'default'  => _x('Colors always had a special meaning in his life. He started painting in 1987 and his homeland
        Nigeria inspired him time and time again. He experiments with many techniques and works
        with materials such as oil, sand, charcoal and acrylic.', 'alfadoh-theme'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('about_about_2_p_2', array(
        'label'  => __('About 2 Text 2', 'alfadoh-theme'),
        'section'  => 'About', 
        'priority' => 8
    ));
    
    $wp_customize->selective_refresh->add_partial( 'about_about_2_p_2', array(
        'selector' => '.about_about_2_p_2',
    ) );

    // About 2 Image

    $wp_customize->add_setting('about_about_2_img', array(
        'default'  => get_bloginfo('template_directory').'/inc/img/paintings/painting-6.png',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_about_2_img', array(
        'label'  => __('About 2 Image', 'alfadoh-theme'),
        'section'  => 'About', 
        'settings'  => 'about_about_2_img',
        'priority' => 9
    )));

    $wp_customize->selective_refresh->add_partial( 'about_about_2_img', array(
        'selector' => '.about_about_2_img',
    ) );

    // Header Background Image

    $wp_customize->add_setting('about_banner_bg', array(
        'default'  => get_bloginfo('template_directory').'/inc/img/paintings/painting-5.png',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_banner_bg', array(
        'label'  => __('Banner Background', 'alfadoh-theme'),
        'section'  => 'About', 
        'settings'  => 'about_banner_bg',
        'priority' => 10
    )));

    // Banner Text

    $wp_customize->add_setting('about_banner_h', array(
        'default'  => _x('“Through my art, I am trying to link Africa and Europe. For me, art is light, love, life,
        things seen, felt and experienced, the past and the future. With my paintings I am trying to
        harmoniously free the soul of the viewer.”', 'alfadoh-theme'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('about_banner_h', array(
        'label'  => __('Banner Text', 'alfadoh-theme'),
        'section'  => 'About', 
        'priority' => 11
    ));
    
    $wp_customize->selective_refresh->add_partial( 'about_banner_h', array(
        'selector' => '.about_banner_h',
    ) );

    // Profile Image

    $wp_customize->add_setting('about_profile_img', array(
        'default'  => get_bloginfo('template_directory').'/inc/img/paintings/painting-6.png',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_profile_img', array(
        'label'  => __('Profile Image', 'alfadoh-theme'),
        'section'  => 'About', 
        'settings'  => 'about_profile_img',
        'priority' => 12
    )));

    $wp_customize->selective_refresh->add_partial( 'about_profile_img', array(
        'selector' => '.about_profile_img',
    ) );

    // Profile Name

    $wp_customize->add_setting('about_profile_name', array(
        'default'  => _x('Kendryx Alfadoh', 'alfadoh-theme'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('about_profile_name', array(
        'label'  => __('Profile Name', 'alfadoh-theme'),
        'section'  => 'About', 
        'priority' => 13
    ));
    
    $wp_customize->selective_refresh->add_partial( 'about_profile_name', array(
        'selector' => '.about_profile_name',
    ));

    // Profile Title

    $wp_customize->add_setting('about_profile_title', array(
        'default'  => _x('Owner / Artist / Designer / DJ', 'alfadoh-theme'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('about_profile_title', array(
        'label'  => __('Profile Title', 'alfadoh-theme'),
        'section'  => 'About', 
        'priority' => 14
    ));
    
    $wp_customize->selective_refresh->add_partial( 'about_profile_title', array(
        'selector' => '.about_profile_title',
    ));
    
    // Profile Text

    $wp_customize->add_setting('about_profile_p', array(
        'default'  => _x('My art, the colors have always been a part of me and my life. The people, the colors and the
        earth of my homeland
        Nigeria inspire me. Art is light, love and life, things seen, felt and experienced, the past
        and the future. Art sets the
        soul free… Through my art, I am trying to link Africa with Europe and the rest of the world.', 'alfadoh-theme'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('about_profile_p', array(
        'label'  => __('Profile Text', 'alfadoh-theme'),
        'section'  => 'About', 
        'priority' => 15
    ));
    
    $wp_customize->selective_refresh->add_partial( 'about_profile_p', array(
        'selector' => '.about_profile_p',
    ));

    /*----------------------------------------*/
    /*  Services
    /*----------------------------------------*/

    $wp_customize->add_section('Services', array(
        'title' => __('Services', 'alfadoh-theme'),
        'description'  => sprintf(__('Add text and images','alfadoh-theme')),
        'priority'  => 130
    ));

    // Header Background Image

    $wp_customize->add_setting('services_header_bg', array(
        'default'  => get_bloginfo('template_directory').'/inc/img/header.jpg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'services_header_bg', array(
        'label'  => __('Header Bachground Image', 'alfadoh-theme'),
        'section'  => 'Services', 
        'settings'  => 'services_header_bg',
        'priority' => 1
    )));

    // Services Heading

    $wp_customize->add_setting('services_h', array(
        'default'  => _x('What I do', 'alfadoh-theme'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('services_h', array(
        'label'  => __('Services Heading', 'alfadoh-theme'),
        'section'  => 'Services', 
        'priority' => 2
    ));
    
    $wp_customize->selective_refresh->add_partial( 'services_h', array(
        'selector' => '.services_h',
    ) );

    // Services Text

    $wp_customize->add_setting('services_p', array(
        'default'  => _x('There are always situations that call for more than just a photograph. Have your portrait
        painted by a really experienced fine artist who can literally paint anything you can dream
        up! A portrait is a representation of a particular person. Such paintings have always been more
        than just a record. They have
        been used to show the power, importance, virtue, beauty, wealth, taste, learning or other
        important qualities that
        characterize the sitter. It is one of the best ways to depict a person and show his/her
        character', 'alfadoh-theme'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('services_p', array(
        'label'  => __('Services Text 1', 'alfadoh-theme'),
        'section'  => 'Services', 
        'priority' => 3
    ));
    
    $wp_customize->selective_refresh->add_partial( 'services_p', array(
        'selector' => '.services_p',
    ) );

    // Services Text 2

    $wp_customize->add_setting('services_p_2', array(
        'default'  => _x('I am always ready to meet all your wishes and preferences in your portrait, whether it’s
        created as a personal painting or a piece of art for an official person. Contact me
        today to
        discuss your future portrait.', 'alfadoh-theme'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('services_p_2', array(
        'label'  => __('Services Text 2', 'alfadoh-theme'),
        'section'  => 'Services', 
        'priority' => 4
    ));
    
    $wp_customize->selective_refresh->add_partial( 'services_p_2', array(
        'selector' => '.services_p_2',
    ) );

    /*----------------------------------------*/
    /*  Collection
    /*----------------------------------------*/

    $wp_customize->add_section('Collection', array(
        'title' => __('Collection', 'alfadoh-theme'),
        'description'  => sprintf(__('Add text and images','alfadoh-theme')),
        'priority'  => 130
    ));

    // Header Background Image

    $wp_customize->add_setting('products_header_bg', array(
        'default'  => get_bloginfo('template_directory').'/inc/img/header.jpg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'products_header_bg', array(
        'label'  => __('Header Bachground Image', 'alfadoh-theme'),
        'section'  => 'Collection', 
        'settings'  => 'products_header_bg',
        'priority' => 1
    )));
    
    /*----------------------------------------*/
    /*  Blog
    /*----------------------------------------*/

    $wp_customize->add_section('Blog', array(
        'title' => __('Blog', 'alfadoh-theme'),
        'description'  => sprintf(__('Add text and images','alfadoh-theme')),
        'priority'  => 130
    ));

    // Header Background Image

    $wp_customize->add_setting('blog_header_bg', array(
        'default'  => get_bloginfo('template_directory').'/inc/img/header.jpg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'blog_header_bg', array(
        'label'  => __('Header Bachground Image', 'alfadoh-theme'),
        'section'  => 'Blog', 
        'settings'  => 'blog_header_bg',
        'priority' => 1
    )));

    /*----------------------------------------*/
    /*  Contact
    /*----------------------------------------*/

    $wp_customize->add_section('Contact', array(
        'title' => __('Contact', 'alfadoh-theme'),
        'description'  => sprintf(__('Add text and images','alfadoh-theme')),
        'priority'  => 130
    ));

    // Header Background Image

    $wp_customize->add_setting('contact_header_bg', array(
        'default'  => get_bloginfo('template_directory').'/inc/img/header.jpg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_header_bg', array(
        'label'  => __('Header Bachground Image', 'alfadoh-theme'),
        'section'  => 'Contact', 
        'settings'  => 'contact_header_bg',
        'priority' => 1
    )));

    // Contact Email

    $wp_customize->add_setting('contact_email', array(
        'default'  => _x('hello@alfadoh.com', 'alfadoh-theme'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('contact_email', array(
        'label'  => __('Email', 'alfadoh-theme'),
        'section'  => 'Contact', 
        'priority' => 2
    ));
    
    $wp_customize->selective_refresh->add_partial( 'contact_email', array(
        'selector' => '.contact_email',
    ) );

    /*----------------------------------------*/
    /*  Privacy
    /*----------------------------------------*/

    $wp_customize->add_section('Privacy', array(
        'title' => __('Privacy', 'alfadoh-theme'),
        'description'  => sprintf(__('Add text and images','alfadoh-theme')),
        'priority'  => 130
    ));

    // Header Background Image

    $wp_customize->add_setting('privacy_header_bg', array(
        'default'  => get_bloginfo('template_directory').'/inc/img/header.jpg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'privacy_header_bg', array(
        'label'  => __('Header Bachground Image', 'alfadoh-theme'),
        'section'  => 'Privacy', 
        'settings'  => 'privacy_header_bg',
        'priority' => 1
    )));

    /*----------------------------------------*/
    /*  Footer
    /*----------------------------------------*/

    $wp_customize->add_section('Footer', array(
        'title' => __('Footer', 'alfadoh-theme'),
        'description'  => sprintf(__('Add text and images','alfadoh-theme')),
        'priority'  => 130
    ));

    // Footer Text

    $wp_customize->add_setting('footer_p', array(
        'default'  => _x('Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor qui
        autem velit nostrum harum modi, est eos fugiat quidem quis.', 'alfadoh-theme'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('footer_p', array(
        'label'  => __('Footer Text', 'alfadoh-theme'),
        'section'  => 'Footer', 
        'priority' => 1
    ));
    
    $wp_customize->selective_refresh->add_partial( 'footer_p', array(
        'selector' => '.footer_p',
    ) );

    // Instagram URL

    $wp_customize->add_setting('ig_url', array(
        'default'  => _x('https://www.instagram.com', 'alfadoh-theme'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('ig_url', array(
        'label'  => __('Instagram URL', 'alfadoh-theme'),
        'section'  => 'Footer', 
        'priority' => 2
    ));

    $wp_customize->selective_refresh->add_partial( 'ig_url', array(
        'selector' => '.ig_url',
    ) );

    // Facebook URL

    $wp_customize->add_setting('fb_url', array(
        'default'  => _x('https://www.facebook.com', 'alfadoh-theme'),
        'type'  => 'theme_mod'
    ));
    
    $wp_customize->add_control('fb_url', array(
        'label'  => __('Facebook URL', 'alfadoh-theme'),
        'section'  => 'Footer', 
        'priority' => 3
    ));

    $wp_customize->selective_refresh->add_partial( 'fb_url', array(
        'selector' => '.fb_url',
    ) );
    


    


    











    }

    add_action('customize_register', 'wpb_customize_register');