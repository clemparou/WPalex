<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title(); ?></title>
        <?php wp_head(); ?>
        <link rel="stylesheet" type="text/css" href="wp-content/themes/test_site_wp/style.css" />
        
    </head>
    
    <body>
        <div id="legrandtout">
            
            <div id="mosaic">
                
                <?php 

                // the query

                $the_query = new WP_Query( array( 'cat' => 3 ) );
                
                ?>
                
                <?php if ( $the_query->have_posts() ) : ?>

                    <!-- pagination here -->

                    <!-- the loop -->
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        
                        <div class="projets">
                            
                            
                                <div class="flipbox"> 
                                    <div class="front">
                                        
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('carre',['class' => 'post_image']); ?></a>
                                    </div>
                                    
                                        <div class="back">
                                            <a href="<?php the_permalink(); ?>">
                                            <h2> <?php the_title(); ?> </h2>
                                            
                                            </a>
                                            
                                        </div>

                                    <p class='category' <?php echo the_category(); ?> </p>
                                </div>
                           
                        </div>
                    <?php endwhile; ?>
                    <!-- end of the loop -->

                    <!-- pagination here -->

                    <?php wp_reset_postdata(); ?>

                <?php else : ?>
                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
                
                <?php 

                // the query

                $the_query = new WP_Query( array( 'cat' => -3 ) );
                
                ?>
                
                <?php if ( $the_query->have_posts() ) : ?>

                    <!-- pagination here -->

                    <!-- the loop -->
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="projets">
                            <div class="flipbox"> 
                                <div class="front">
                                 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('carre',['class' => 'post_image']); ?></a>
                                </div>
                                <div class="back">
                                            <a href="<?php the_permalink(); ?>">
                                            <h2> <?php the_title(); ?> </h2>
                                            
                                            </a>
                                            
                                </div>
                                <p class='category' <?php echo the_category(); ?> </p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <!-- end of the loop -->

                    <!-- pagination here -->

                    <?php wp_reset_postdata(); ?>

                <?php else : ?>
                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
                
                <div id="menu">
                <h1 id="titre_menu">titre boite 1</h1>
                <div id='btn_maison'>bouton 1
                    <img class=logo src="wp-content/themes/test_site_wp/images/logo_maison.svg">
                    <img class="fleche" src="wp-content/themes/test_site_wp/images/fleche.svg">
                </div>
                <div id='btn_business'>bouton 2
                    <img class=logo src="wp-content/themes/test_site_wp/images/logo_business.svg">
                    <img class="fleche" src="wp-content/themes/test_site_wp/images/fleche.svg">
                </div>
                <div id='btn_religion'>bouton 3
                    <img class=logo src="wp-content/themes/test_site_wp/images/logo_religion.svg">
                    <img class="fleche" src="wp-content/themes/test_site_wp/images/fleche.svg">
                </div>
                <div id='btn_tout'>bouton 4
                    <img class=logo src="wp-content/themes/test_site_wp/images/logo_religion.svg">
                    <img class="fleche" src="wp-content/themes/test_site_wp/images/fleche.svg">
                </div>
                
            </div>
                            
            </div>
            
        </div>
        <?php
            wp_enqueue_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js', array(), '1.7' );
            wp_enqueue_script( 'jquery-ui-core', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js', array( 'jquery' ), '1.8', true);
            wp_enqueue_script( 'script', "/wp-content/themes/test_site_wp/js/script.js", array( 'jquery' ), '1.0', true );
        ?>
        <?php wp_footer(); ?>
        
    </body>