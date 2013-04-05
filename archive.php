<?php get_header(); ?>
<div id="content">
    <div id="noticias">
        <div id="title">
            <div class="centraliza">
                <!--<h1><img src="<?php bloginfo( 'template_directory' ) ?>/img/noticias/title.png" height="36" width="186" alt=""></h1>-->    
            </div>
        </div>
        <div id="lista" class="centraliza">
    <?php
        $temp = $wp_query;
        $wp_query= null;
        $wp_query = new WP_Query();
        $wp_query->query('posts_per_page=3'.'&paged='.$paged);
        while ($wp_query->have_posts()) : $wp_query->the_post();$first++;
    ?>
            <div class="artigo"> 
                <?php 
                if ( 1 == $first && is_home() && !is_paged() ) {
                    the_post_thumbnail(array(309,206));
                ?>
                <h2 id="primeiro"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                <?php
                }
                else{
                   the_post_thumbnail(array(114,119));
                ?>
                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                <?php
                }
                
                ?>
                <p><?php the_excerpt(); ?></p>
                <div class="separator"></div>
                <hr>
            </div>  
    <?php endwhile?>
        <?php wp_pagenavi(); ?>
        </div>
    </div>
    <?php $wp_query = null; $wp_query = $temp;?>    
    </div>

<?php get_footer(); ?>