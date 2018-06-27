<?php /* Template Name: Home Template */?>
<?php get_header(); ?>
    <main role="main">
        <section class="intro-slide">
            <?php echo do_shortcode('[smartslider3 slider=3]'); ?>
         </section>
         <?php
            $args= array(
                'category_name'=> 'naslovnica',
                'posts_per_page'=> 3,
            );
            $query = new WP_Query($args);
        ?>
<?php

// the query
$the_query = new WP_Query( $args );
?>

<?php if ( $the_query->have_posts() ) : ?>

    <!-- start of the loop -->
    <section id="cards">
    <div class = "container" id = "introNews">
        <div class = "row">
            
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class = "col-md-4">
            
                <div class="card">
                <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <div class= "image" style="background: url(<?php the_post_thumbnail_url('medium'); ?>); background-size: cover; background-position: center center">
        			</a>
        		        <?php endif; ?>
                    </div>
                <div class="card-body">
                         <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-outline-secondary">Vidi više</a>
                    </div>
                </div>
            </div>
                
                
                
        	<?php endwhile; ?><!-- end of the loop -->
                
        	<!-- put pagination functions here -->
        	<?php wp_reset_postdata(); ?>
                
        <?php else:  ?>
                
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                
        <?php endif; ?> 
        </div>

    </div>
    </section>
   

    
 </main>
<?php get_footer(); ?>