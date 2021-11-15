jQuery(document).ready(function($){
    //Scroll to section
    $('body').on('click', '#sub-accordion-panel-bootstrap_fitness_homepage_panel .control-subsection .accordion-section-title', function(event) {
        var section_id = $(this).parent('.control-subsection').attr('id');
        scrollToSection( section_id );
    });
    
    //preview url of homepages templates 
     wp.customize.panel( 'bootstrap_fitness_homepage_panel', function( section ){
        section.expanded.bind( function( isExpanded ) {
            if( isExpanded ){
                wp.customize.previewer.previewUrl.set( data.home );
            }
        });
    });
     
});

function scrollToSection( section_id ){
    var preview_section_id = "banner_section";

    var $contents = jQuery('#customize-preview iframe').contents();

    switch ( section_id ) {
        
        case 'accordion-section-header_image':
        preview_section_id = "bootstrap_fitness_banner_section";
        break;

        case 'accordion-section-bootstrap_fitness_classes_section':
        preview_section_id = "bootstrap_fitness_classes_section";
        break;

        case 'accordion-section-bootstrap_fitness_what_we_do_section':
        preview_section_id = "bootstrap_fitness_what_we_do_section";
        break;

        case 'accordion-section-bootstrap_fitness_who_we_are_section':
        preview_section_id = "bootstrap_fitness_who_we_are_section";
        break;

        case 'accordion-section-bootstrap_fitness_class_schedule_section':
        preview_section_id = "bootstrap_fitness_class_schedule_section";
        break;

        case 'accordion-section-bootstrap_fitness_trainers_sections':
        preview_section_id = "bootstrap_fitness_trainers_sections";
        break;

        case 'accordion-section-bootstrap_fitness_offer_section':
        preview_section_id = "bootstrap_fitness_offer_section";
        break;

        case 'accordion-section-bootstrap_fitness_testimonial_sections':
        preview_section_id = "bootstrap_fitness_testimonial_sections";
        break;
        
        case 'accordion-section-bootstrap_fitness_teams_sections':
        preview_section_id = "bootstrap_fitness_teams_sections";
        break;

        case 'accordion-section-bootstrap_fitness_pricing_table':
        preview_section_id = "bootstrap_fitness_pricing_table";
        break;
        
        case 'accordion-section-bootstrap_fitness_blog_post_section':
        preview_section_id = "bootstrap_fitness_blog_post_section";
        break;
    }

    if( $contents.find('#'+preview_section_id).length > 0 && $contents.find('.home').length > 0 ){
        $contents.find("html, body").animate({
        scrollTop: $contents.find( "#" + preview_section_id ).offset().top
        }, 1000);
    }
}