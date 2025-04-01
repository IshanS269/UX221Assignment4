<?php
function indoorsports_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'indoorsports_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage Sections', 'indoor-sports' ),
		)
	);


	/*=========================================
	Slider Section
	=========================================*/
	$wp_customize->add_section(
		'slider_setting', array(
			'title' => esc_html__( 'Slider Section', 'indoor-sports' ),
			'description'=> __('<a>Note :</a> Image Size Should Be 750*597 and Use only PNG Image.','indoor-sports'),
			'priority' => 1,
			'panel' => 'indoorsports_frontpage_sections',
		)
	);


	$wp_customize->add_setting('indoorsports_slider_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new indoorsports_Tab_Control($wp_customize, 'indoorsports_slider_tabs', array(
	   'section' => 'slider_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'indoor-sports'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'slider1',
            	'slider2',
            	'slider3',
            	'slider4',
            	'slider5',
            	'slider6',
				'slider_bookappbtnlink',
				'slider_bookappbtntext',
				'slider_learmorebtnlink',
				'slider_learmorebtntext'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'indoor-sports'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
                'slider_titlecolor',
                'slider_descriptioncolor',
                'slider_btntxt1color',
				'slider_btnbg1color',
				'slider_btnbg2color',
				'slider_btntxthovercolor',
				'slider_learnmorecolor',
				'slider_learnmorehrvcolor'
            ),
     	),
		 array(
		   'name' => esc_html__('Layout', 'indoor-sports'),
		   'icon' => 'dashicons dashicons-layout',
		   'fields' => array(
			   'indoor_sports_slider_section_width',
			   'indoorsports_slider_padding',
			   'indoor_sports_slider_top_padding',
			   'indoor_sports_slider_bottom_padding'
		   ),
		)
    	),
	))); 



	// General Tab

	// Slider 1
	$wp_customize->add_setting( 
    	'slider1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider1',
		array(
		    'label'   		=> __('Slider 1','indoor-sports'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		



	// Slider 2
	$wp_customize->add_setting(
    	'slider2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider2',
		array(
		    'label'   		=> __('Slider 2','indoor-sports'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 3
	$wp_customize->add_setting(
    	'slider3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'slider3',
		array(
		    'label'   		=> __('Slider 3','indoor-sports'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 4
	$wp_customize->add_setting(
    	'slider4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'slider4',
		array(
		    'label'   		=> __('Slider 4','indoor-sports'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);



	// Slider 5
	$wp_customize->add_setting(
    	'slider5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider5',
		array(
		    'label'   		=> __('Slider 5','indoor-sports'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// Slider 6
	$wp_customize->add_setting(
    	'slider6',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider6',
		array(
		    'label'   		=> __('Slider 6','indoor-sports'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);


	// slider bookappbtnlink
	$sliderbookappbtnlink = esc_html__('#', 'indoor-sports' );
	$wp_customize->add_setting(
    	'slider_bookappbtnlink',
    	array(
			'default' => $sliderbookappbtnlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_bookappbtnlink',
		array(
		    'label'   		=> __('Book Appointment Button Link','indoor-sports'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// slider bookappbtntext
	$sliderbookappbtntext = esc_html__('Book Appointment', 'indoor-sports' );
	$wp_customize->add_setting(
    	'slider_bookappbtntext',
    	array(
			'default' => $sliderbookappbtntext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_bookappbtntext',
		array(
		    'label'   		=> __('Book Appointment Button Text','indoor-sports'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// slider learnmorebtnlink
	$sliderlearnmorebtnlink = esc_html__('#', 'indoor-sports' );
	$wp_customize->add_setting(
    	'slider_learmorebtnlink',
    	array(
			'default' => $sliderlearnmorebtnlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_learmorebtnlink',
		array(
		    'label'   		=> __('Learn More Button Link','indoor-sports'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// slider learnmorebtntext
	$sliderlearnmorebtntext = esc_html__('Learn More', 'indoor-sports' );
	$wp_customize->add_setting(
    	'slider_learmorebtntext',
    	array(
			'default' => $sliderlearnmorebtntext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_learmorebtntext',
		array(
		    'label'   		=> __('Learn More Button Text','indoor-sports'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);



	// Style setting

	// slider title Color
	$slidertitlecolor = esc_html__('#fff', 'indoor-sports' );
	$wp_customize->add_setting(
    	'slider_titlecolor',
    	array(
			'default' => $slidertitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_titlecolor',
		array(
		    'label'   		=> __('Title Color','indoor-sports'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// slider description Color
	$sliderdescriptioncolor = esc_html__('#F6E8DA', 'indoor-sports' );
	$wp_customize->add_setting(
    	'slider_descriptioncolor',
    	array(
			'default' => $sliderdescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_descriptioncolor',
		array(
		    'label'   		=> __('Description Color','indoor-sports'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btntxt1 Color
	$sliderbtntxt1color = esc_html__('#fff', 'indoor-sports' );
	$wp_customize->add_setting(
    	'slider_btntxt1color',
    	array(
			'default' => $sliderbtntxt1color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btntxt1color',
		array(
		    'label'   		=> __('Button Text Color','indoor-sports'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btnbg1 Color
	$sliderbtnbg1color = esc_html__('#00B9FF', 'indoor-sports' );
	$wp_customize->add_setting(
    	'slider_btnbg1color',
    	array(
			'default' => $sliderbtnbg1color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btnbg1color',
		array(
		    'label'   		=> __('Button BG Color','indoor-sports'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btnbg2 Color
	$sliderbtnbg2color = esc_html__('#006CCB', 'indoor-sports' );
	$wp_customize->add_setting(
    	'slider_btnbg2color',
    	array(
			'default' => $sliderbtnbg2color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btnbg2color',
		array(
		    'label'   		=> __('Button BG Color','indoor-sports'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	

	// slider btntxthover Color
	$sliderbtntxthovercolor = esc_html__('#F40101', 'indoor-sports' );
	$wp_customize->add_setting(
    	'slider_btntxthovercolor',
    	array(
			'default' => $sliderbtntxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btntxthovercolor',
		array(
		    'label'   		=> __('Button Text Hover Color','indoor-sports'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider learnmore Color
	$sliderlearnmorecolor = esc_html__('#fff', 'indoor-sports' );
	$wp_customize->add_setting(
    	'slider_learnmorecolor',
    	array(
			'default' => $sliderlearnmorecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_learnmorecolor',
		array(
		    'label'   		=> __('Learn More Color','indoor-sports'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider learnmorehrv Color
	$sliderlearnmorehrvcolor = esc_html__('#F40101', 'indoor-sports' );
	$wp_customize->add_setting(
    	'slider_learnmorehrvcolor',
    	array(
			'default' => $sliderlearnmorehrvcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_learnmorehrvcolor',
		array(
		    'label'   		=> __('Learn More Hover Color','indoor-sports'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// layout setting
	$wp_customize->add_setting('indoor_sports_slider_section_width',array(
        'default' => 'Full Width',
        'sanitize_callback' => 'indoorsports_sanitize_choices',
    ));
    $wp_customize->add_control('indoor_sports_slider_section_width',array(
        'type' => 'select',
        'label' => __('Section Width','indoor-sports'),
        'choices' => array (
            'Box Width' => __('Box Width','indoor-sports'),
            'Full Width' => __('Full Width','indoor-sports')
        ),
        'section' => 'slider_setting',
    ));


     // oursports section padding 
	$wp_customize->add_setting('indoorsports_slider_padding',array(
      'sanitize_callback'   => 'esc_html'
    ));
    $wp_customize->add_control('indoorsports_slider_padding',array(
      'label' => __('Section Padding','indoor-sports'),
      'section' => 'slider_setting'
    ));

    $wp_customize->add_setting('indoor_sports_slider_top_padding',array(
        'default' => '0',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('indoor_sports_slider_top_padding',array(
	    'type' => 'number',
	    'label' => __('Top','indoor-sports'),
	    'section' => 'slider_setting',
    ));

 	$wp_customize->add_setting('indoor_sports_slider_bottom_padding',array(
        'default' => '0',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('indoor_sports_slider_bottom_padding',array(
	    'type' => 'number',
	    'label' => __('Bottom','indoor-sports'),
	    'section' => 'slider_setting',
    ));




	/*=========================================
	oursports Section
	=========================================*/
	$wp_customize->add_section(
		'oursports_setting', array(
			'title' => esc_html__( 'OurSports Section', 'indoor-sports' ),
			'priority' => 2,
			'panel' => 'indoorsports_frontpage_sections',
		)
	);



	$wp_customize->add_setting('indoorsports_oursports_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new indoorsports_Tab_Control($wp_customize, 'indoorsports_oursports_tabs', array(
	   'section' => 'oursports_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'indoor-sports'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'oursports_disable_section',
            	'oursports_heading',
            	'oursports1',
            	'oursports2',
            	'oursports3',
            	'oursports4',
            	'oursports5',
            	'oursports6',
				'oursports_learmorebtntext'
            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'indoor-sports'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'oursports_headingcolor',
            	'oursports_boxtitlecolorcolor',
				'oursports_btntextcolor',
				'oursports_btntexthrvcolor'
            ),
     	),
  		array(
	        'name' => esc_html__('Layout', 'indoor-sports'),
	        'icon' => 'dashicons dashicons-layout',
	        'fields' => array(
	            'indoor_sports_oursports_section_width',
	            'indoorsports_oursports_padding',
	            'indoor_sports_oursports_top_padding',
	            'indoor_sports_oursports_bottom_padding'
	        ),
     	)
	    
    	),
	))); 



	// General

	// hide show oursports section
	$wp_customize->add_setting(
        'oursports_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    ); 
    $wp_customize->add_control(
        new indoorsports_Toggle_Switch_Custom_Control(
            $wp_customize,
            'oursports_disable_section',
            array(
                'settings'      => 'oursports_disable_section',
                'section'       => 'oursports_setting',
                'label'         => __( 'Disable Section', 'indoor-sports' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'indoor-sports' ),
                    'off' => __( 'No', 'indoor-sports' )
                ),
            )
        )
    );


	

    // oursports title
	$wp_customize->add_setting(
    	'oursports_heading',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'oursports_heading',
		array(
		    'label'   		=> __('Heading','indoor-sports'),
		    'section'		=> 'oursports_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// oursports 1
	$wp_customize->add_setting( 
    	'oursports1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'oursports1',
		array(
		    'label'   		=> __('Oursports 1','indoor-sports'),
		    'section'		=> 'oursports_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		

	

	// oursports 2
	$wp_customize->add_setting(
    	'oursports2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'oursports2',
		array(
		    'label'   		=> __('Oursports 2','indoor-sports'),
		    'section'		=> 'oursports_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// oursports 3
	$wp_customize->add_setting(
    	'oursports3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'oursports3',
		array(
		    'label'   		=> __('Oursports 3','indoor-sports'),
		    'section'		=> 'oursports_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// oursports 4
	$wp_customize->add_setting(
    	'oursports4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'oursports4',
		array(
		    'label'   		=> __('Oursports 4','indoor-sports'),
		    'section'		=> 'oursports_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);


	// oursports 5
	$wp_customize->add_setting(
    	'oursports5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'oursports5',
		array(
		    'label'   		=> __('Oursports 5','indoor-sports'),
		    'section'		=> 'oursports_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);


	// oursports 6
	$wp_customize->add_setting(
    	'oursports6',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'oursports6',
		array(
		    'label'   		=> __('Oursports 6','indoor-sports'),
		    'section'		=> 'oursports_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// oursports learnmorebtntext
	$oursportslearnmorebtntext = esc_html__('Learn More', 'indoor-sports' );
	$wp_customize->add_setting(
    	'oursports_learmorebtntext',
    	array(
			'default' => $oursportslearnmorebtntext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'oursports_learmorebtntext',
		array(
		    'label'   		=> __('Learn More Button Text','indoor-sports'),
		    'section'		=> 'oursports_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);



	// style

	// oursports headingcolor color
	$oursportsheadingcolor = esc_html__('#000', 'indoor-sports' );
	$wp_customize->add_setting(
    	'oursports_headingcolor',
    	array(
			'default' => $oursportsheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'oursports_headingcolor',
		array(
		    'label'   		=> __('Heading Color','indoor-sports'),
		    'section'		=> 'oursports_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	// oursports boxtitlecolor color
	$oursportsboxtitlecolorcolor = esc_html__('#fff', 'indoor-sports' );
	$wp_customize->add_setting(
    	'oursports_boxtitlecolorcolor',
    	array(
			'default' => $oursportsboxtitlecolorcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'oursports_boxtitlecolorcolor',
		array(
		    'label'   		=> __('Title Color','indoor-sports'),
		    'section'		=> 'oursports_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// oursports btntext color
	$oursportsbtntextcolor = esc_html__('#F68802', 'indoor-sports' );
	$wp_customize->add_setting(
    	'oursports_btntextcolor',
    	array(
			'default' => $oursportsbtntextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'oursports_btntextcolor',
		array(
		    'label'   		=> __('Button Text Color','indoor-sports'),
		    'section'		=> 'oursports_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// oursports btntexthrv color
	$oursportsbtntexthrvcolor = esc_html__('#fff', 'indoor-sports' );
	$wp_customize->add_setting(
    	'oursports_btntexthrvcolor',
    	array(
			'default' => $oursportsbtntexthrvcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'oursports_btntexthrvcolor',
		array(
		    'label'   		=> __('Button Text Hover Color','indoor-sports'),
		    'section'		=> 'oursports_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	


	// layout setting
	$wp_customize->add_setting('indoor_sports_oursports_section_width',array(
        'default' => 'Box Width',
        'sanitize_callback' => 'indoorsports_sanitize_choices',
    ));
    $wp_customize->add_control('indoor_sports_oursports_section_width',array(
        'type' => 'select',
        'label' => __('Section Width','indoor-sports'),
        'choices' => array (
            'Box Width' => __('Box Width','indoor-sports'),
            'Full Width' => __('Full Width','indoor-sports')
        ),
        'section' => 'oursports_setting',
    ));


    // oursports section padding 
	$wp_customize->add_setting('indoorsports_oursports_padding',array(
      'sanitize_callback'   => 'esc_html'
    ));
    $wp_customize->add_control('indoorsports_oursports_padding',array(
      'label' => __('Section Padding','indoor-sports'),
      'section' => 'oursports_setting'
    ));

    $wp_customize->add_setting('indoor_sports_oursports_top_padding',array(
        'default' => '5',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('indoor_sports_oursports_top_padding',array(
	    'type' => 'number',
	    'label' => __('Top','indoor-sports'),
	    'section' => 'oursports_setting',
    ));

 	$wp_customize->add_setting('indoor_sports_oursports_bottom_padding',array(
        'default' => '2',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('indoor_sports_oursports_bottom_padding',array(
	    'type' => 'number',
	    'label' => __('Bottom','indoor-sports'),
	    'section' => 'oursports_setting',
    ));



    /*=========================================
	Blog Section
	=========================================*/
	$wp_customize->add_section(
		'blog_setting', array(
			'title' => esc_html__( 'Blog Section', 'indoor-sports' ),
			'priority' => 3,
			'panel' => 'indoorsports_frontpage_sections',
		)
	);



	

	$wp_customize->add_setting('indoorsports_blog_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new indoorsports_Tab_Control($wp_customize, 'indoorsports_blog_tabs', array(
	   'section' => 'blog_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'indoor-sports'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
				'blog_disable_section',
            	'blog_heading',
				'blog_learmorebtnlink'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'indoor-sports'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
                'blog_headingcolor',
                'blog_titlecolor',
                'blog_datetextcolor',
                'blog_topbtntextcolor',
                'blog_topbtnBGcolor'

            ),
     	),
		 array(
		   'name' => esc_html__('Layout', 'indoor-sports'),
		   'icon' => 'dashicons dashicons-layout',
		   'fields' => array(
			   'indoor_sports_blog_section_width',
			   'indoorsports_blog_padding',
			   'indoor_sports_blog_top_padding',
			   'indoor_sports_blog_bottom_padding'
		   ),
		)
	    
    	),
	))); 

	// General Tab

	// hide show blog section
	$wp_customize->add_setting(
        'blog_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    ); 
    $wp_customize->add_control(
        new indoorsports_Toggle_Switch_Custom_Control(
            $wp_customize,
            'blog_disable_section',
            array(
                'settings'      => 'blog_disable_section',
                'section'       => 'blog_setting',
                'label'         => __( 'Disable Section', 'indoor-sports' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'indoor-sports' ),
                    'off' => __( 'No', 'indoor-sports' )
                ),
            )
        )
    );

	// blog heading Color
	$wp_customize->add_setting(
    	'blog_heading',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'blog_heading',
		array(
		    'label'   		=> __('Heading','indoor-sports'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// blog showmorebtnlink
	$blogshowmorebtnlink = esc_html__('#', 'indoor-sports' );
	$wp_customize->add_setting(
    	'blog_learmorebtnlink',
    	array(
			'default' => $blogshowmorebtnlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_learmorebtnlink',
		array(
		    'label'   		=> __('Show More Button Link','indoor-sports'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);
	
	// Style setting

	// blog heading Color
	$blogheadingcolor = esc_html__('#000', 'indoor-sports' );
	$wp_customize->add_setting(
    	'blog_headingcolor',
    	array(
			'default' => $blogheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_headingcolor',
		array(
		    'label'   		=> __('Heading Color','indoor-sports'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// blog title Color
	$blogtitlecolor = esc_html__('#000', 'indoor-sports' );
	$wp_customize->add_setting(
    	'blog_titlecolor',
    	array(
			'default' => $blogtitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_titlecolor',
		array(
		    'label'   		=> __('Title Color','indoor-sports'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// blog datetext Color
	$blogdatetextcolor = esc_html__('#8f8c8c', 'indoor-sports' );
	$wp_customize->add_setting(
    	'blog_datetextcolor',
    	array(
			'default' => $blogdatetextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_datetextcolor',
		array(
		    'label'   		=> __('Date Text Color','indoor-sports'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

		// Top Button Text Color
	$blogtopbtntextcolor = esc_html__('#fff', 'indoor-sports' );
	$wp_customize->add_setting(
    	'blog_topbtntextcolor',
    	array(
			'default' => $blogtopbtntextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_topbtntextcolor',
		array(
		    'label'   		=> __('Top Button Text Color','indoor-sports'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


// Top Button BG Color
	$blogtopbtnBGcolor = esc_html__('#2F2F2F', 'indoor-sports' );
	$wp_customize->add_setting(
    	'blog_topbtnBGcolor',
    	array(
			'default' => $blogtopbtnBGcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_topbtnBGcolor',
		array(
		    'label'   		=> __('Top Button BG Color','indoor-sports'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// layout setting
	$wp_customize->add_setting('indoor_sports_blog_section_width',array(
        'default' => 'Box Width',
        'sanitize_callback' => 'indoorsports_sanitize_choices',
    ));
    $wp_customize->add_control('indoor_sports_blog_section_width',array(
        'type' => 'select',
        'label' => __('Section Width','indoor-sports'),
        'choices' => array (
            'Box Width' => __('Box Width','indoor-sports'),
            'Full Width' => __('Full Width','indoor-sports')
        ),
        'section' => 'blog_setting',
    ));


    // blog section padding 
	$wp_customize->add_setting('indoorsports_blog_padding',array(
      'sanitize_callback'   => 'esc_html'
    ));
    $wp_customize->add_control('indoorsports_blog_padding',array(
      'label' => __('Section Padding','indoor-sports'),
      'section' => 'blog_setting'
    ));

    $wp_customize->add_setting('indoor_sports_blog_top_padding',array(
        'default' => '2',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('indoor_sports_blog_top_padding',array(
	    'type' => 'number',
	    'label' => __('Top','indoor-sports'),
	    'section' => 'blog_setting',
    ));

 	$wp_customize->add_setting('indoor_sports_blog_bottom_padding',array(
        'default' => '2',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('indoor_sports_blog_bottom_padding',array(
	    'type' => 'number',
	    'label' => __('Bottom','indoor-sports'),
	    'section' => 'blog_setting',
    ));

	$wp_customize->register_control_type('indoorsports_Tab_Control');
}

add_action( 'customize_register', 'indoorsports_blog_setting' );

// oursports selective refresh
function indoorsports_blog_section_partials( $wp_customize ){	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.home-blog .title h6',
		'settings'            => 'blog_title',
		'render_callback'  => 'indoorsports_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.home-blog .title h2',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'indoorsports_blog_subtitle_render_callback',
	
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.home-blog .title p',
		'settings'            => 'blog_description',
		'render_callback'  => 'indoorsports_blog_description_render_callback',
	
	) );	
	}

add_action( 'customize_register', 'indoorsports_blog_section_partials' );

// blog_title
function indoorsports_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function indoorsports_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// oursports description
function indoorsports_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}


