<?php
function indoorsports_footer( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	// Footer Panel // 
	$wp_customize->add_panel( 
		'footer_section', 
		array(
			'priority'      => 34,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Footer', 'indoor-sports'),
		) 
	);

	// Footer Bottom // 
	$wp_customize->add_section(
        'footer_bottom',
        array(
            'title' 		=> __('Footer','indoor-sports'),
			'panel'  		=> 'footer_section',
			'priority'      => 3,
		)
    );
	
	// Footer Copyright Head
	$wp_customize->add_setting(
		'footer_btm_copy_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'indoorsports_sanitize_text',
			'priority'  => 3,
		)
	);
	
	// Footer Copyright 
	$indoorsports_foo_copy = esc_html__('Copyright &copy; [current_year] [site_title] | Powered by [theme_author]', 'indoor-sports' );
	$wp_customize->add_setting(
    	'footer_copyright',
    	array(
			'default' => $indoorsports_foo_copy,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyright',
		array(
		    'label'   		=> __('CopyRight','indoor-sports'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'textarea',
			'transport'         => $selective_refresh,
		)  
	);	

	// footer copyright color
	$footercopyrightcolor = esc_html__('#000', 'indoor-sports' );
	$wp_customize->add_setting(
    	'footer_copyrightcolor',
    	array(
			'default' => $footercopyrightcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyrightcolor',
		array(
		    'label'   		=> __('Copyright Color','indoor-sports'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// footer copyrightbg color
	$footercopyrightbgcolor = esc_html__('#fff', 'indoor-sports' );
	$wp_customize->add_setting(
    	'footer_copyrightbgcolor',
    	array(
			'default' => $footercopyrightbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyrightbgcolor',
		array(
		    'label'   		=> __('Copyright BG Color','indoor-sports'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer text color
	$footertextcolor = esc_html__('#fff', 'indoor-sports' );
	$wp_customize->add_setting(
    	'footer_textcolor',
    	array(
			'default' => $footertextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_textcolor',
		array(
		    'label'   		=> __('Text Color','indoor-sports'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer texthrv color
	$footertexthrvcolor = esc_html__('#fff', 'indoor-sports' );
	$wp_customize->add_setting(
    	'footer_texthrvcolor',
    	array(
			'default' => $footertexthrvcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_texthrvcolor',
		array(
		    'label'   		=> __('Hover Color','indoor-sports'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer icon color
	$footericoncolor = esc_html__('#fff', 'indoor-sports' );
	$wp_customize->add_setting(
    	'footer_iconcolor',
    	array(
			'default' => $footericoncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_iconcolor',
		array(
		    'label'   		=> __('Icon Color','indoor-sports'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer listhover color
	$footerlisthovercolor = esc_html__('#fff', 'indoor-sports' );
	$wp_customize->add_setting(
    	'footer_listhovercolor',
    	array(
			'default' => $footerlisthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_listhovercolor',
		array(
		    'label'   		=> __('List Hover Color','indoor-sports'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer backtotopicon color
	$footerbacktotopiconcolor = esc_html__('#fff', 'indoor-sports' );
	$wp_customize->add_setting(
    	'footer_backtotopiconcolor',
    	array(
			'default' => $footerbacktotopiconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_backtotopiconcolor',
		array(
		    'label'   		=> __('Back To Top Icon Color','indoor-sports'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer backtotopbg color
	$footerbacktotopbgcolor = esc_html__('#1CB4F7', 'indoor-sports' );
	$wp_customize->add_setting(
    	'footer_backtotopbgcolor',
    	array(
			'default' => $footerbacktotopbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_backtotopbgcolor',
		array(
		    'label'   		=> __('Back To Top BG Color','indoor-sports'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer backtotopbghrv color
	$footerbacktotopbghrvcolor = esc_html__('#000', 'indoor-sports' );
	$wp_customize->add_setting(
    	'footer_backtotopbghrvcolor',
    	array(
			'default' => $footerbacktotopbghrvcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_backtotopbghrvcolor',
		array(
		    'label'   		=> __('Back To Top BG Hover Color','indoor-sports'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

}
add_action( 'customize_register', 'indoorsports_footer' );
// Footer selective refresh
function indoorsports_footer_partials( $wp_customize ){	
	// footer_copyright
	$wp_customize->selective_refresh->add_partial( 'footer_copyright', array(
		'selector'            => '.copy-right .copyright-text',
		'settings'            => 'footer_copyright',
		'render_callback'  => 'indoorsports_footer_copyright_render_callback',
	) );
	
	}
add_action( 'customize_register', 'indoorsports_footer_partials' );

// copyright_content
function indoorsports_footer_copyright_render_callback() {
	return get_theme_mod( 'footer_copyright' );
}