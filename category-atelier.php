<?php 
    
    $args = array(
        'category_name' => 'Atelier',
        'posts_per_page' => 16,
    );

    $queryAtelier = new WP_Query($args);

    // Appel du header
    get_header();
?>

<?php
    echo '<h1>Nos atelier de perfectionnements sont offerts 1 fois par mois</h1>';
    echo '<div class="grille-atelier">';
    
    if(have_posts()):
        echo '<div class="grille-atelier">';
        while (have_posts() ) : the_post(); 

            $postTitle = get_the_title();
            echo 'postTitle';

            $postname = get_post_field('post_name');
            echo 'postname';

            $postAuthor = get_the_author_meta('display_name', $post->post_author);  
            echo 'postAuthor';

            $gridArea = '.$postTitle.'/'.$postname.'/'.$postAuthor.';

            echo '
                <div class="content-post">
                    <p>Grid : '.$gridArea. " " .substr(get_post_field('post_name'),2,4).'</p>
                </div>
            ';
        endwhile;
        echo '</div>';
    endif;

    function positionGrid($postAuthor){
        switch ($postAuthor) {
            case Luna:
                return 1;
                break;
            case Eddy:
                return 2;
                break;
            case Derick:
                return 3;
                break;
            case Maybell:
                return 4;
                break;
            default: 
                return 0;
                break;
        }
    }
?>

<?php
    // Appel du footer
    get_footer();  
?>