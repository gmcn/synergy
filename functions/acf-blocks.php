<?php

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'advert',
            'title'             => __('Advert'),
            'description'       => __('A custom advert block.'),
            'render_template'   => 'template-parts/blocks/advert.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'advert', 'ad' ),
        ));
    }
}
