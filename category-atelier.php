<?php /*Template name: category_atelier*/ 
    
    $args = array(
        'category_name' => 'Atelier',
        'posts_per_page' => 16,
    );

    $queryAtelier = new WP_Query($args);

    // Appel du header
    get_header();
?>

<?php
    echo '<div class="categorie-atelier">';
    echo '<h1>Nos atelier de perfectionnements sont offerts 1 fois par mois</h1>';

    while ($queryAtelier->have_posts()) {
        $queryAtelier->the_post();
        echo '
            <div class="content-post">
                <p class="titre_atelier">' .get_the_title(). '__<span style=color:red;>' .get_post_field('post_name'). '</span>__<span style=color:blue;>' .get_the_author_meta('display_name', $post->post_author ).'</span></p> 
            </div>
        ';
    }
?>

<?php
    // Appel du footer
    get_footer();  
?>