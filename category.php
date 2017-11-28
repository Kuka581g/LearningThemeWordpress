<?php get_header() ?>

    <?php if (have_posts()) :
            while (have_posts()) :
                the_post(); ?>
            <div class="page">
                <article <?php post_class();?>>
                    <div class="post-body" style="background-color: #f1f1f1;">
                        <?php the_title('<h3>', '</h3>'); ?>
                        <?php the_content(); ?>
                        <a href="<?php the_permalink(); ?>">Lire la suite</a>
                    </div>
                </article>
            </div>
            <?php endwhile;
        endif;
    ?>
<?php get_footer() ?>