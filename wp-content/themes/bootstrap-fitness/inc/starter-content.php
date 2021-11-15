<?php

function bootstrap_fitness_starter_content() {
	$starter_content = array(
	    'options' => array(
	    	'show_on_front' => 'page',
	        'page_on_front' => '{{home}}',
	        'page_for_posts' => '{{blog}}',
			'blogdescription' => esc_html__( 'Just another Preview Sites', 'bootstrap-fitness' )
	    ),
	    // Starter pages to include
        'posts' => array(
            'home' => array(
	            'post_type' => 'page',
	            'post_title' => esc_html__( 'Home', 'bootstrap-fitness' ),	            
	            'template' => 'template-home.php',
	        ),
			'about',
	        'blog',	
			'who-we-are' => array(
	            'post_type' => 'page',
	            'post_title' => esc_html__( 'Who we are', 'bootstrap-fitness' ),	            
	            'post_content' => esc_html__( 'we established this company in 1989. We opened our first office in London at the end of June, 1997 and were soon joined by a large number that came from other parts to work on technology projects here. Today we have offices around the world – Canada, Germany, Australia.', 'bootstrap-fitness' ),
	        ),     
        ),
		'attachments' => array(
			'offer-image' => array(
				'post_title' => _x( 'Offer Image', 'Theme starter content', 'bootstrap-fitness' ),
				'file' => 'images/about.jpg', // URL relative to the template directory.
			),
		),

		'theme_mods' => array(
	        'bootstrap_fitness_contact_number' => esc_html__( '+9779906789890', 'bootstrap-fitness' ),
	        'bootstrap_fitness_email_address' => esc_html__( 'bootstrapfitness@demo.com', 'bootstrap-fitness' ),
			'bs_header_cta_label' => esc_html__( 'BOOK AN APPOINTMENT', 'bootstrap-fitness' ),
	        'bs_header_cta_link' => esc_html__( '#', 'bootstrap-fitness' ),

			'bootstrap_fitness_social_media' => array(
				array(
					'social_media_repeater_class' => esc_attr( 'facebook' ),
					'social_media_link'     => esc_url( '#' ),		
				),
				array(
					'social_media_repeater_class' => esc_attr( 'twitter' ),
					'social_media_link'     => esc_url( '#' ),		
				),
				array(
					'social_media_repeater_class' => esc_attr( 'instagram' ),
					'social_media_link'     => esc_url( '#' ),		
				),
				array(
					'social_media_repeater_class' => esc_attr( 'youtube' ),
					'social_media_link'     => esc_url( '#' ),		
				),
				
			),

			'banner_section_top_title' => esc_html__( 'For your health', 'bootstrap-fitness' ),
			'banner_section_title' => esc_html__( 'BUILD YOUR BODY STRONG', 'bootstrap-fitness' ),
	        'banner_section_description' => esc_html__( 'We believe in working the body with a variety of training options to give you the best results possible. We offer a variety of equipment and programs to suit your needs.', 'bootstrap-fitness' ),
			'banner_section_cta_label' => esc_html__( 'Book Now', 'bootstrap-fitness' ),
	        'banner_section_cta_link' => esc_html__( '#', 'bootstrap-fitness' ),

			'bs_heading_for_who_we_are' =>  esc_html__( 'Who we are', 'bootstrap-fitness' ),
	
			'bs_copyright_text' => wp_kses_post( __( 'Bootstrap Fitness © 2021 All Rights Reserved Terms of Use and Privacy Policy', 'bootstrap-fitness' ) ),
			
			'bf_classes_heading' => wp_kses_post( __( 'Featured Classes', 'bootstrap-fitness' ) ),
			'bf_classes_sections' => array(
				array(
					'bf_classes_thumbnail' => esc_url( get_template_directory_uri().'/images/class1.jpg' ),
					'bf_classes_title'     => esc_html__( 'Fitness Classes', 'bootstrap-fitness' ),
					'bf_classes_btn'       => esc_html__( 'Learn More', 'bootstrap-fitness' ),
					'bf_classes_btnlink'   => esc_url( '#' ),
					
				),
				array(
					'bf_classes_thumbnail' => esc_url( get_template_directory_uri().'/images/class1.jpg' ),
					'bf_classes_title' 	 => esc_html__( 'Yoga Classes', 'bootstrap-fitness' ),
					'bf_classes_btn'     => esc_html__( 'Learn More', 'bootstrap-fitness' ),
					'bf_classes_btnlink' => esc_url( '#' ),
				),
				array(
					'bf_classes_thumbnail' => esc_url( get_template_directory_uri().'/images/class1.jpg' ),
					'bf_classes_title' => esc_html__( 'Dance Classes', 'bootstrap-fitness' ),
					'bf_classes_btn'     => esc_html__( 'Learn More', 'bootstrap-fitness' ),
					'bf_classes_btnlink' => esc_url( '#' ),
			
				),
			),

			'bf_heading_for_what_we_do' => wp_kses_post( __( 'What we do', 'bootstrap-fitness' ) ),
			'bf_desc_for_what_we_do' => wp_kses_post( __( 'Featured Classes', 'bootstrap-fitness' ) ),
			'bf_image_for_what_we_do' => esc_url( get_template_directory_uri().'/images/what-we-do.jpg' ),
			'bf_points_for_what_we_do' => array(
				array(
					'bf_what_we_do_thumbnail' => esc_url( get_template_directory_uri().'/images/service1.png' ),
					'bf_what_we_do_title'     => esc_html__( 'Weekly Challenge', 'bootstrap-fitness' ),
					'bf_what_we_do_desc'       => esc_html__( 'We are also pleased to announce that the final Weekly Classic has been added and a new challenge mode is coming soon!', 'bootstrap-fitness' ),
					
				),
				array(
					'bf_what_we_do_thumbnail' => esc_url( get_template_directory_uri().'/images/service1.png' ),
					'bf_what_we_do_title' 	 => esc_html__( 'Personal Trainer', 'bootstrap-fitness' ),
					'bf_what_we_do_desc'     => esc_html__( 'Personal Trainer and Personal Development Coach to Over 8,000 People: We are dedicated business owners who take pride in providing quality products', 'bootstrap-fitness' ),
				),
				array(
					'bf_what_we_do_thumbnail' => esc_url( get_template_directory_uri().'/images/service1.png' ),
					'bf_what_we_do_title' => esc_html__( 'Group Classes', 'bootstrap-fitness' ),
					'bf_what_we_do_desc'     => esc_html__( 'With many people in our community who come together every Saturday for an inspiring workout, it seems like only fitting that WeWorkPlay Fitness has its own gym as well.', 'bootstrap-fitness' ),
				),
			),

			'bf_heading_for_offer' => wp_kses_post( __( 'Fitness Classes This Summer', 'bootstrap-fitness' ) ),
			'bf_content_for_offer' =>  esc_html__( 'Pay Now And Get 35% Discount', 'bootstrap-fitness' ),
			'bf_image_for_offer' =>  esc_url( get_template_directory_uri().'/images/about.jpg' ),
			'bf_read_more_label' =>  esc_html__( 'Become a Member', 'bootstrap-fitness' ),
			'bf_read_more_link' => esc_url( __( '#', 'bootstrap-fitness' ) ),
			
			'bf_heading_for_class_schedule' =>  esc_html__( 'Weekly Schedule Classes', 'bootstrap-fitness' ),

			'bf_heading_for_testimonial' =>  esc_html__( 'Testimonials', 'bootstrap-fitness' ),
			
			'bf_heading_for_trainers' =>  esc_html__( 'Our Expert Trainers', 'bootstrap-fitness' ),

			'bf_tickets_heading' =>  esc_html__( 'Our Pricing Plans', 'bootstrap-fitness' ),

			'blog_post_section_title' =>  esc_html__( 'Our Recent Blogs', 'bootstrap-fitness' ),
		),    
		'nav_menus' => array(
			'main-menu' => array(
				'name' => __( 'Main Menu', 'bootstrap-fitness' ),
				'items' => array(
					'page_home' => array(
						'type' => 'post_type',
						'object' => 'page',
						'object_id' => '{{home}}',
					),
					'page_about' => array(
						'type' => 'post_type',
						'object' => 'page',
						'object_id' => '{{about}}',
					),
					'page_blog' => array(
						'type' => 'post_type',
						'object' => 'page',
						'object_id' => '{{blog}}',
					),
					'page_who_we_are' => array(
						'type' => 'post_type',
						'object' => 'page',
						'object_id' => '{{who-we-are}}',
					),
				),
			),	
		),
		'widgets' => array(
						'footer-1' => array(
        						'my_text' => array(
								'text',
								array(
									'title' => esc_html__( 'Address', 'bootstrap-fitness' ),
									'text'  => '<p>' . esc_html__( 'Phone: +977-1-47012454', 'bootstrap-fitness' ) . '</p>'.
												'<p>' . esc_html__( 'Email: info@xyz-spa.com', 'bootstrap-fitness' ). '</p>'.
												'<p>' . esc_html__( 'GPO Box : 5612, Thamel ,Kathmandu ', 'bootstrap-fitness' ) . '</p>'.
												'<p>' . esc_html__( 'Fax Number: 503-555-1213', 'bootstrap-fitness' ). '</p>',
									)
								),
							),
							'footer-2' => array(
								'text_business_info',
							),
							'footer-3' => array(
								'meta',
							),
							'footer-4' => array(
								'search',
							),
			
			
		)
	);

	return $starter_content; 
}