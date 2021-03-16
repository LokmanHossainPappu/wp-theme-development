<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "Timermaster";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Theme Options', 'Timermaster' ),
        'page_title'           => __( 'Theme Options', 'Timermaster' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'Timermaster' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'Timermaster' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'Timermaster' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'Timermaster' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'Timermaster' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'Timermaster' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'Timermaster' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'Timermaster' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'Timermaster' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'Timermaster' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'Timermaster' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
    

    Redux::setSection( $opt_name, array(
        'title' => __( 'Front page', 'Timermaster' ),
        'id'    => 'front-page',
        'desc'  => __( 'Front page Theme options.', 'Timermaster' ),
        'icon'  => 'el el-home'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Header Section', 'Timermaster' ),
        'desc'       => __( 'Header Section theme options ', 'Timermaster' ), 
        'id'         => 'header_section',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'logo_image',
                'type'     => 'media',
                'title'    => __( 'Logo Image', 'Timermaster' ),
                'desc'     => __( 'Upload your logo image', 
                'Timermaster' ),
                'url'      => true,
                'default'  => array(
                    'url' => get_template_directory_uri().'/images/logo.png',
                )
            ),
        )
    ) );


    Redux::setSection( $opt_name, array(
        'title'      => __( 'Latest News Section', 'Timermaster' ),
        'desc'       => __( 'Latest News  Section theme options ', 'Timermaster' ), 
        'id'         => 'news_section',
        'subsection' => true,
        'fields'     => array(
           
           array(
                'id'       => 'news_title',
                'type'     => 'text',
                'title'    => __( 'Latest News Title', 'Timermaster' ),
                'desc'     => __( 'Input your news sectiont title', 
                'Timermaster' ),
                'default'  => 'Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere
                tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.'
                
            ),
            array(
                'id'       => 'news_subtitle',
                'type'     => 'textarea',
                'title'    => __( 'Latest News subsTitle', 'Timermaster' ),
                'desc'     => __( 'Input your news section subtitle', 
                'Timermaster' ),
                'default'  => 'Latest News'
                
            ),
        )
    ) );


    

    Redux::setSection( $opt_name, array(
        'title'      => __( 'About Me Section', 'Timermaster' ),
        'desc'       => __( 'About me Section theme options ', 'Timermaster' ), 
        'id'         => 'aboutme_section',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'aboutme_title',
                'type'     => 'text',
                'title'    => __( 'Aboutme Title', 'Timermaster' ),
                'desc'     => __( 'Enter your about me title', 
                'Timermaster' ),
                'default'  => 'About me'
            ),

            array(
                'id'       => 'aboutme_desc',
                'type'     => 'editor',
                'title'    => __( 'About me Description', 'Timermaster' ),
                'desc'     => __( 'Enter your about me section description', 
                'Timermaster' ),
                'default'  => 'Hello, I’m a UI/UX Designer & Front End Developer from Victoria, Australia. I hold a master degree of Web Design from the World University.And scrambled it to make a type specimen book. It has survived not only five centuries'
            ),

            array(
                'id'       => 'About_me_image',
                'type'     => 'media',
                'title'    => __( 'About me section image', 'Timermaster' ),
                'desc'     => __( 'Upload your about me section image', 
                'Timermaster' ),
                'url'      => true,
                'default'  => array(
                    'url' => get_template_directory_uri().'/images/about/about.jpg',
                )
            ),
        )
    ) );

 Redux::setSection( $opt_name, array(
        'title'      => __( 'Latest work Section', 'Timermaster' ),
        'desc'       => __( 'Latest work  Section theme options ', 'Timermaster' ), 
        'id'         => 'work_section',
        'subsection' => true,
        'fields'     => array(
           
           array(
                'id'       => 'work_title',
                'type'     => 'text',
                'title'    => __( 'Latest work Title', 'Timermaster' ),
                'desc'     => __( 'Input your latest work title', 
                'Timermaster' ),
                'default'  => 'Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere
                tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.'
                
            ),
            array(
                'id'       => 'work_subtitle',
                'type'     => 'textarea',
                'title'    => __( 'Latest work subsTitle', 'Timermaster' ),
                'desc'     => __( 'Input your latest work section subtitle', 
                'Timermaster' ),
                'default'  => 'Latest work'
                
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Offer me Section', 'Timermaster' ),
        'desc'       => __( 'Offer me  Section theme options ', 'Timermaster' ), 
        'id'         => 'offer_me_section',
        'subsection' => true,
        'fields'     => array(
           
           array(
                'id'       => 'offer_me_title',
                'type'     => 'text',
                'title'    => __( 'offer me Title', 'Timermaster' ),
                'desc'     => __( 'Input your offer me title title', 
                'Timermaster' ),
                'default'  => 'Offer from me'
                
            ),
            array(
                'id'       => 'offer_me_subtitle',
                'type'     => 'textarea',
                'title'    => __( 'Offer me  subsTitle', 'Timermaster' ),
                'desc'     => __( 'Input your offer me section subtitle', 
                'Timermaster' ),
                'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed,
                quasi dolores numquam dolor vero ex, tempora commodi repellendus quod laborum'
                
            ),
        )
    ) );


    Redux::setSection( $opt_name, array(
        'title'      => __( 'Contact me Section', 'Timermaster' ),
        'desc'       => __( 'Contact me  Section theme options ', 'Timermaster' ), 
        'id'         => 'contact_me_section',
        'subsection' => true,
        'fields'     => array(
           
           array(
                'id'       => 'contact_me_title',
                'type'     => 'text',
                'title'    => __( 'contact me Title', 'Timermaster' ),
                'desc'     => __( 'Input your contact me title', 
                'Timermaster' ),
                'default'  => 'SO WHAT YOU THINK?'
                
            ),
            array(
                'id'       => 'contact_me_subtitle',
                'type'     => 'textarea',
                'title'    => __( 'contact me  subsTitle', 'Timermaster' ),
                'desc'     => __( 'Input your contact me subtitle', 
                'Timermaster' ),
                'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed,
                quasi dolores numquam dolor vero ex, tempora commodi repellendus quod laborum'
                
            ),
            array(
                'id'       => 'contact_me_Btn',
                'type'     => 'text',
                'title'    => __( 'contact me button label', 'Timermaster' ),
                'desc'     => __( 'Input your contact me Button title', 
                'Timermaster' ),
                'default'  => 'Fuck off!'
                
            ),

            array(
                'id'       => 'contact_me_url',
                'type'     => 'text',
                'title'    => __( 'contact me button url label', 'Timermaster' ),
                'desc'     => __( 'Input your contact me Button url', 
                'Timermaster' ),
                'default'  => ''
                
            ),
        )
    ) );


    Redux::setSection( $opt_name, array(
        'title'      => __( 'Footer Section', 'Timermaster' ),
        'desc'       => __( 'footer Section theme options ', 'Timermaster' ), 
        'id'         => 'footer_section',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'copy-right',
                'type'     => 'editor',
                'title'    => __( 'copy right option', 'Timermaster' ),
                'desc'     => __( 'Input your copy right', 
                'Timermaster' ),
                'default'  => 'Copyright: 2021 Design and Developed by Themefisher.
                Get More Free Bootstrap Templates'
            ),

            array(
                'id'       => 'social icon',
                'type'     => 'slides',
                'title'    => __( 'Social Account', 'Timermaster' ),
                'desc'     => __( 'input your social accout id', 
                'Timermaster' ),
                'placeholder' => array(
                    'title' => 'Input your social Icon name(ex:facebook)',
                    'description' => 'No need to input here',
                    'url' => 'Input your social links'
                )
            ),
        )
            ) );


    Redux::setSection( $opt_name, array(
        'title'      => __( 'Text Area', 'Timermaster' ),
        'desc'       => __( 'For full documentation on this field, visit: ', 'Timermaster' ) . '<a href="//docs.reduxframework.com/core/fields/textarea/" target="_blank">//docs.reduxframework.com/core/fields/textarea/</a>',
        'id'         => 'opt-textarea-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'textarea-example',
                'type'     => 'textarea',
                'title'    => __( 'Text Area Field', 'Timermaster' ),
                'subtitle' => __( 'Subtitle', 'Timermaster' ),
                'desc'     => __( 'Field Description', 'Timermaster' ),
                'default'  => 'Default Text',
            ),
        )
    ) );

    /*
     * <--- END SECTIONS
     */
