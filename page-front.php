<?php /* Template Name: Home Template */?>
<?php get_header(); ?>
    <main role="main">
        <section class="intro-slide">
            <?php echo do_shortcode('[smartslider3 slider=2]'); ?>
         </section>
         <?php
            $args= array(
                'category_name'=> 'Naslovnica',
                'posts_per_page'=> 3,
            );
            $query = new WP_Query($args);
            if($query->have_posts()){
                while($query->have_posts()){
                    $query->the_post();
                }
            }
        ?>
        </main>
<?php get_footer(); ?>