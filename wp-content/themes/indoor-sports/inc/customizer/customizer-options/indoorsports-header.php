<?php
function indoorsports_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'header_section', 
		array(
			'priority'      => 2,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Header', 'indoor-sports'),
		) 
	);
	
	/*=========================================
	Indoor Sports Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','indoor-sports'),
			'panel'  		=> 'header_section',
		)
    );


    // top header Site Title Color
	$topheadersitetitlecol = esc_html__('#fff', 'indoor-sports' );
	$wp_customize->add_setting(
    	'topheader_sitetitlecol',
    	array(
			'default' => $topheadersitetitlecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'topheader_sitetitlecol',
		array(
		    'label'   		=> __('Site Title Color','indoor-sports'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// top header Tagline Color
	$topheadertaglinecol = esc_html__('#fff', 'indoor-sports' );
	$wp_customize->add_setting(
    	'topheader_taglinecol',
    	array(
			'default' => $topheadertaglinecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'topheader_taglinecol',
		array(
		    'label'   		=> __('Tagline Color','indoor-sports'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
 
	/*=========================================
	Indoor Sports header
	=========================================*/
	$wp_customize->add_section(
        'top_header',
        array(
        	'priority'      => 5,
            'title' 		=> __('Header','indoor-sports'),
			'panel'  		=> 'header_section',
		)
    );	

    $wp_customize->add_setting('indoorsports_reset_header_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new indoorsports_Reset_Custom_Control($wp_customize, 'indoor_sports_reset_header_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset Header Settings', 'indoor-sports'),
	  'description' => 'indoor_sports_header_reset_settings',
	  'section' => 'top_header'
	)));

    $wp_customize->add_setting('indoorsports_top_header_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new indoorsports_Tab_Control($wp_customize, 'indoorsports_top_header_tabs', array(
	   'section' => 'top_header',
	   'priority' => 1,
	   'buttons' => array(
	      array(
     		'name' => esc_html__('General', 'indoor-sports'),
 			'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'hide_show_sticky',
				'topheader_phonetext',
				'topheader_fblink',
				'topheader_instagramlink',
				'topheader_twitterlink',
				'topheader_linkedinlink',
				'topheader_addresstext',
            	'topheader_mobnotext'
            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'indoor-sports'),
            'icon' => 'dashicons dashicons-art',
            'fields' => array(
				'header_addressiconcolor',
				'header_addresstextcolor',
				'header_mobnotextcolor',
            	'header_mobnobgcolor1',
            	'header_mobtxthovercolor',
				'header_mobbghovercolor',
            	'header_menuscolor',
            	'header_menuiconcolor',
            	'header_submenusbgcolor',
            	'header_submenutextcolor',
            	'header_submenustxthovercolor',
				'header_menubg1color',
				'header_menubg2color',
				'header_menubrdcolor'
            ),
         ),
		 array(
		   'name' => esc_html__('Layout', 'indoor-sports'),
		   'icon' => 'dashicons dashicons-layout',
		   'fields' => array(
			   'indoor_sports_header_section_width',
		   ),
		)
	    
    	),
	)));

	// general setting

	// sticky header
	$wp_customize->add_setting( 'hide_show_sticky',array(
        'default' => false,
        'sanitize_callback' => 'indoorsports_switch_sanitization'
   	) );
   	$wp_customize->add_control( new indoorsports_Toggle_Switch_Custom_Control( $wp_customize, 'hide_show_sticky',array(
        'label' => __( 'Show Sticky Header','indoor-sports' ),
        'section' => 'top_header'
   	)));


	// topheader address text
	$topheaderaddresstext = esc_html__('', 'indoor-sports' );
	$wp_customize->add_setting(
    	'topheader_addresstext',
    	array(
			'default' => $topheaderaddresstext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_addresstext',
		array(
		    'label'   		=> __('Address','indoor-sports'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader mobno
	$topheadermobnotext = esc_html__('', 'indoor-sports' );
	$wp_customize->add_setting(
    	'topheader_mobnotext',
    	array(
			'default' => $topheadermobnotext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_mobnotext',
		array(
		    'label'   		=> __('Mobile No','indoor-sports'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// Style setting

	// header addressicon Color
	$headeraddressiconcolor = esc_html__('#1CB4F7', 'indoor-sports' );
	$wp_customize->add_setting(
    	'header_addressiconcolor',
    	array(
			'default' => $headeraddressiconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_addressiconcolor',
		array(
		    'label'   		=> __('Address Icon Color','indoor-sports'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header addresstext Color
	$headeraddresstextcolor = esc_html__('#fff', 'indoor-sports' );
	$wp_customize->add_setting(
    	'header_addresstextcolor',
    	array(
			'default' => $headeraddresstextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_addresstextcolor',
		array(
		    'label'   		=> __('Address Text Color','indoor-sports'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header btntext Color
	$headerbtntextcolor = esc_html__('#1CB4F7', 'indoor-sports' );
	$wp_customize->add_setting(
    	'header_mobnotextcolor',
    	array(
			'default' => $headerbtntextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_mobnotextcolor',
		array(
		    'label'   		=> __('Mobile No Text Color','indoor-sports'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header btnbg Color 1
	$headerbtnbgcolor1 = esc_html__('#606060', 'indoor-sports' );
	$wp_customize->add_setting(
    	'header_mobnobgcolor1',
    	array(
			'default' => $headerbtnbgcolor1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_mobnobgcolor1',
		array(
		    'label'   		=> __('Mobile No BG Color','indoor-sports'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header btntxthover Color 
	$headerbtntxthovercolor = esc_html__('#fff', 'indoor-sports' );
	$wp_customize->add_setting(
    	'header_mobtxthovercolor',
    	array(
			'default' => $headerbtntxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_mobtxthovercolor',
		array(
		    'label'   		=> __('Mobile No Text Hover Color','indoor-sports'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header btnbghover Color 
	$headerbtnbghovercolor = esc_html__('#393838', 'indoor-sports' );
	$wp_customize->add_setting(
    	'header_mobbghovercolor',
    	array(
			'default' => $headerbtnbghovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_mobbghovercolor',
		array(
		    'label'   		=> __('Mobile No BG Hover Color','indoor-sports'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header menus Color
	$headermenuscolor = esc_html__('#fff', 'indoor-sports' );
	$wp_customize->add_setting(
    	'header_menuscolor',
    	array(
			'default' => $headermenuscolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menuscolor',
		array(
		    'label'   		=> __('Menus Color','indoor-sports'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header menuicon Color
	$headermenuiconcolor = esc_html__('#fff', 'indoor-sports' );
	$wp_customize->add_setting(
    	'header_menuiconcolor',
    	array(
			'default' => $headermenuiconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menuiconcolor',
		array(
		    'label'   		=> __('Icon Color','indoor-sports'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	$headersubmenusbgcolor = esc_html__('#000', 'indoor-sports' );
	$wp_customize->add_setting(
    	'header_submenusbgcolor',
    	array(
			'default' => $headersubmenusbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenusbgcolor',
		array(
		    'label'   		=> __('SubMenus BG Color','indoor-sports'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header submenutext Color
	$headersubmenutextcolor = esc_html__('#fff', 'indoor-sports' );
	$wp_customize->add_setting(
    	'header_submenutextcolor',
    	array(
			'default' => $headersubmenutextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenutextcolor',
		array(
		    'label'   		=> __('SubMenus Text Color','indoor-sports'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header submenustxthover Color
	$headersubmenustxthovercolor = esc_html__('#1CB4F7', 'indoor-sports' );
	$wp_customize->add_setting(
    	'header_submenustxthovercolor',
    	array(
			'default' => $headersubmenustxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenustxthovercolor',
		array(
		    'label'   		=> __('Menu Hover Color','indoor-sports'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header menubg1 Color
	$headermenubg1color = esc_html__('#626262', 'indoor-sports' );
	$wp_customize->add_setting(
    	'header_menubg1color',
    	array(
			'default' => $headermenubg1color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menubg1color',
		array(
		    'label'   		=> __('Menu BG Color','indoor-sports'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header menubg2 Color
	$headermenubg2color = esc_html__('#363636', 'indoor-sports' );
	$wp_customize->add_setting(
    	'header_menubg2color',
    	array(
			'default' => $headermenubg2color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menubg2color',
		array(
		    'label'   		=> __('Menu BG Color','indoor-sports'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header menubrd Color
	$headermenubrdcolor = esc_html__('#000', 'indoor-sports' );
	$wp_customize->add_setting(
    	'header_menubrdcolor',
    	array(
			'default' => $headermenubrdcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menubrdcolor',
		array(
		    'label'   		=> __('Menu Border Color','indoor-sports'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// layout setting
	$wp_customize->add_setting('indoor_sports_header_section_width',array(
        'default' => 'Box Width',
        'sanitize_callback' => 'indoorsports_sanitize_choices',
    ));
    $wp_customize->add_control('indoor_sports_header_section_width',array(
        'type' => 'select',
        'label' => __('Section Width','indoor-sports'),
        'choices' => array (
            'Box Width' => __('Box Width','indoor-sports'),
            'Full Width' => __('Full Width','indoor-sports')
        ),
        'section' => 'top_header',
    ));
	
	$wp_customize->register_control_type('indoorsports_Tab_Control');
	$wp_customize->register_panel_type( 'indoorsports_WP_Customize_Panel' );
	$wp_customize->register_section_type( 'indoorsports_WP_Customize_Section' );

}
add_action( 'customize_register', 'indoorsports_header_settings' );



if ( class_exists( 'WP_Customize_Panel' ) ) {
  	class indoorsports_WP_Customize_Panel extends WP_Customize_Panel {
	   public $panel;
	   public $type = 'indoorsports_panel';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'type', 'panel', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;
	      return $array;
    	}
  	}
}

if ( class_exists( 'WP_Customize_Section' ) ) {
  	class indoorsports_WP_Customize_Section extends WP_Customize_Section {
	   public $section;
	   public $type = 'indoorsports_section';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'panel', 'type', 'description_hidden', 'section', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;

	      if ( $this->panel ) {
	        $array['customizeAction'] = sprintf( 'Customizing &#9656; %s', esc_html( $this->manager->get_panel( $this->panel )->title ) );
	      } else {
	        $array['customizeAction'] = 'Customizing';
	      }
	      return $array;
    	}
  	}
}






