<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}



// Criand a função para remover ações.
function remove_parent_footer() {
    remove_action('interface_footer','interface_footer_info',30);    
}
// Chamando a função de remoção remove_parent_footer
add_action('interface_footer','remove_parent_footer');


// Add a nova funçao do tema filho.
add_action('interface_footer','interface_footer_info_child', 30);

// Nova função do tema filho.
function interface_footer_info_child() {         
   $output = '<div class="copyright">'.__( 'Copyright &copy;', 'interface' ).' '.interface_the_year().' ' .interface_site_link().' </div><!-- .copyright -->';
   echo $output;
}

?>