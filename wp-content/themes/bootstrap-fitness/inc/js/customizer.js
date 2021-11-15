/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

 function convertHex(hex){
	hex = hex.replace('#','');
	r = parseInt(hex.substring(0,2), 16);
	g = parseInt(hex.substring(2,4), 16);
	b = parseInt(hex.substring(4,6), 16);

	result = ''+r+','+g+','+b+'';
	return result;
}

 ( function( $ ) {	
	 //color
	wp.customize('primary_color',function ( value ) {
		value.bind(function ( to ) {
			console.log(to)
			color = convertHex(to)
			document.body.style.setProperty('--primary-color', color);
		});
	});

	wp.customize('secondary_color',function ( value ) {
		value.bind(function ( to ) {
			console.log(to)
			color = convertHex(to)
			document.body.style.setProperty('--secondary-color', color);
		});
	});

	wp.customize('dark_color',function ( value ) {
		value.bind(function ( to ) {
			console.log(to)
			color = convertHex(to)
			document.body.style.setProperty('--dark-color', color);
		});
	});

	wp.customize('light_color',function ( value ) {
		value.bind(function ( to ) {
			console.log(to)
			color = convertHex(to)
			document.body.style.setProperty('--light-color', color);
		});
	});

	wp.customize('text_color',function ( value ) {
		value.bind(function ( to ) {
			console.log(to)
			color = convertHex(to)
			document.body.style.setProperty('--text-color', color);
		});
	});

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Site title color
	wp.customize( 'bf_site_title_color_option', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).css( 'color', to );
		} );
	} );

	// Site title font family 
	wp.customize( 'bf_site_identity_font_family', function( value ) {
		value.bind( function( to ) {
			$("head").append("<link href='https://fonts.googleapis.com/css?family=" + to + ":200,300,400,500,600,700,800,900|' rel='stylesheet' type='text/css'>");
			$( 'header .site-title a' ).css( 'font-family', to );
		} );
	} );

	// Site title size 
	wp.customize( 'bf_site_title_size', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).css( 'font-size', to + "px" );
			$( 'header .custom-logo-link img' ).css( 'height', ( to * 2 ) + "px" );
		} );
	} );

	// font	family

	wp.customize('body_font_family',function ( value ) {
		value.bind(function ( to ) {
			$("head").append("<link href='https://fonts.googleapis.com/css?family=" + to + ":200,300,400,500,600,700,800,900|' rel='stylesheet' type='text/css'>");
				document.body.style.setProperty('--body-font', to);
			}
		);
	}
	);

	wp.customize('heading_font_family',function ( value ) {
		value.bind(function ( to ) {
			$("head").append("<link href='https://fonts.googleapis.com/css?family=" + to + ":200,300,400,500,600,700,800,900|' rel='stylesheet' type='text/css'>");
				document.body.style.setProperty('--heading-font', to);
			}
		);
	}
	);

	wp.customize( 'font_size', function( value ) {
		value.bind( function( to ) {
			$( 'html, :root' ).css( 'font-size', to );
		} );
	} );

	wp.customize( 'body_font_weight', function( value ) {
		value.bind( function( to ) {
			$( 'body' ).css( 'font-weight', to );
		} );
	} );

	wp.customize( 'body_line_height', function( value ) {
		value.bind( function( to ) {
			$( 'body' ).css( 'line-height', to );
		} );
	} );
 
	//classes
	wp.customize( 'bf_classes_heading', function( value ) {
		value.bind( function( to ) {
			$( '.classes h2.main-title' ).text( to );
		} );
	} );

	//what we do
	wp.customize( 'bf_heading_for_what_we_do', function( value ) {
		value.bind( function( to ) {
			$( '.services h2.main-title' ).text( to );
		} );
	} );

	wp.customize( 'bf_desc_for_what_we_do', function( value ) {
		value.bind( function( to ) {
			$( '.services .services-content p.main-content' ).text( to );
		} );
	} );

	//who we are
	wp.customize( 'bf_heading_for_who_we_are', function( value ) {
		value.bind( function( to ) {
			$( '.about h2.main-title' ).text( to );
		} );
	} );

	//classes schedule
	wp.customize( 'bf_heading_for_class_schedule', function( value ) {
		value.bind( function( to ) {
			$( '.class-schedule h2.main-title' ).text( to );
		} );
	} );

	//testimonial
	wp.customize( 'bf_heading_for_testimonial', function( value ) {
		value.bind( function( to ) {
			$( '.testimonial h2.main-title' ).text( to );
		} );
	} );

	wp.customize( 'bf_top_heading_for_testimonial', function( value ) {
		value.bind( function( to ) {
			$( '.testimonial span.sub-title' ).text( to );
		} );
	} );

	//trainer
	wp.customize( 'bf_heading_for_trainers', function( value ) {
		value.bind( function( to ) {
			$( '.trainers h2.main-title' ).text( to );
		} );
	} );

	//offers
	wp.customize( 'bf_heading_for_offer', function( value ) {
		value.bind( function( to ) {
			$( '.discount .discount-content h2' ).text( to );
		} );
	} );

	wp.customize( 'bf_content_for_offer', function( value ) {
		value.bind( function( to ) {
			$( '.discount .discount-content span' ).text( to );
		} );
	} );

	wp.customize( 'bf_read_more_label', function( value ) {
		value.bind( function( to ) {
			$( '.discount .discount-content a' ).text( to );
		} );
	} );

	//pricing
	wp.customize( 'bf_tickets_heading', function( value ) {
		value.bind( function( to ) {
			$( '.pricing h2.title' ).text( to );
		} );
	} );

	//blogs
	wp.customize( 'blog_post_section_title', function( value ) {
		value.bind( function( to ) {
			$( '.blogs h3.title' ).text( to );
		} );
	} );

	//copyright_text
	wp.customize( 'bf_copyright_text', function( value ) {
		value.bind( function( to ) {
			$( '.footer .copyright p' ).text( to );
		} );
	} );


} )( jQuery );



