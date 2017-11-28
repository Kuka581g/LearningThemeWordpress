<?php get_header(); ?>
<div class="page" style="background-color: #f1f1f1;">
<div class="main single">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="post" style="margin-left: 10px; padding-bottom: 50px;">
<h1 class="post-title"><?php the_title(); ?></h1>
<p class="post-info">
Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
</p>
<div class="post-content">
<?php the_content(); ?>
</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<!-- PARTENAIRES -->
<div class="partenaires">
        <h3 style="text-align: center; font-size: 2em;">Nos partenaires</h3>
        <?php echo do_shortcode('[logoshowcase show_title="true" image_size="original" dots="false" arrows="false" slides_scroll="4" center_mode="true" slides_column="3"]'); ?>            
    </div> <!-- /.partenaires -->
</div>
</div>
<?php get_footer(); ?>