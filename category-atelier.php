<?php /*Template name: category_atelier*/ 
    
    $args = array(
        'category_name' => 'Atelier',
        'posts_per_page' => 10,
    );

    $queryAtelier = new WP_Query($args);

    // Appel du header
    get_header();
?>

<?php
    echo '<div class="categorie-atelier">';

    while ($queryAtelier->have_posts()) {
        $queryAtelier->the_post();
        echo '
            <div class="content-post">
                <h3 class="titre_atelier">' .get_the_title(). '</h3>
            </div>
        ';
    }
?>

<?php
    // Appel du footer
    get_footer();  
?>