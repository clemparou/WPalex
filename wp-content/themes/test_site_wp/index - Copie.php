<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title(); ?></title>
        <?php wp_head(); ?>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    </head>
    
    <body>
        <div id="legrandtout">
            <div id="menu">
                <h1>titre boite 1</h1>
                <div>bouton 1
                    <img class=logo src="wp-content/themes/test_site_wp/images/logo_maison.svg">
                    <img class="fleche" src="wp-content/themes/test_site_wp/images/fleche.svg">
                </div>
                <div>bouton 2
                    <img class=logo src="wp-content/themes/test_site_wp/images/logo_business.svg">
                    <img class="fleche" src="wp-content/themes/test_site_wp/images/fleche.svg">
                </div>
                <div>bouton 3
                    <img class=logo src="wp-content/themes/test_site_wp/images/logo_religion.svg">
                    <img class="fleche" src="wp-content/themes/test_site_wp/images/fleche.svg">
                </div>
                
            </div>
            <div id="mosaic">
                <?php 

                // the query
                
                $the_query = new WP_Query( array( 'category_name' => 'alaune' ) );
                
                ?>
                
                <?php if ( $the_query->have_posts() ) : ?>

                    <!-- pagination here -->

                    <!-- the loop -->
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <h2><?php the_title(); ?></h2>
                    <?php endwhile; ?>
                    <!-- end of the loop -->

                    <!-- pagination here -->

                    <?php wp_reset_postdata(); ?>

                <?php else : ?>
                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
                <?php 

                // the query
                
                $the_query = new WP_Query( array( 'category_name' => 'maison' ) );
                
                ?>
                
                <?php if ( $the_query->have_posts() ) : ?>

                    <!-- pagination here -->

                    <!-- the loop -->
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <h2><?php the_title(); ?></h2>
                    <?php endwhile; ?>
                    <!-- end of the loop -->

                    <!-- pagination here -->

                    <?php wp_reset_postdata(); ?>

                <?php else : ?>
                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
                
                
                <div class="projets">
                    <div class="flipbox"> 
                        <div class="front">front (photo)</div>
                        <div class="back">back (lieu+etiquette)</div>
                    </div>
                </div>
                
                
                
                
                
            </div>
            
        </div>
        <?php wp_footer(); ?>
    </body>