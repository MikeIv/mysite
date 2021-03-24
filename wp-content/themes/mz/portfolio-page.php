<?php
/*
Template Name: Портфолио
*/
?>

<?php get_header('pages'); ?>





    <main>


        <?php //while (have_posts()): the_post(); ?>
        <h1><a href="<?php //the_permalink(); ?>"><?php //the_title(); ?></a></h1>
            <div><?php //the_content(); ?></div>
        <?php //endwhile; ?>







        <section class="portfolio">
            <h1 class="v-hidden">Портфолио</h1>

            <ul class="portfolio__list">

<?php while ( have_posts()): the_post(); ?>

                  <?php  get_template_part( 'parts/portfolio/portfolio', '', $post->ID ); ?>

<?php  endwhile; ?>
            </ul>
        </section>


        <?php get_template_part( 'parts/portfolio/advantage' ); ?>



    </main>


<?php get_footer(); ?>