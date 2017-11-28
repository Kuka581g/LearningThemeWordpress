<section>

    
    <?php
        
        if ( have_posts() ) :
            while( have_posts() ) :
                the_post();
                echo '<div style="margin-left: 60px;
                width: 90%;">';
                echo    '<legend style="text-align: center; margin-top: 10px; font-size:31px;">' . get_the_title() . '</legend>';
                echo    the_content();
                echo '<hr>'; 
                echo '</div>';

            endwhile;
        endif;
        

    ?>

    <div>
        <h3></h3>
                    
    </div>

    <!-- PARTENAIRES -->
    <div class="partenaires">
        <h3 style="text-align: center; font-size: 2em;">Nos partenaires</h3>
        <?php echo do_shortcode('[logoshowcase show_title="true" image_size="original" dots="false" arrows="false" slides_scroll="4" center_mode="true" slides_column="3"]'); ?>            
    </div> <!-- /.partenaires -->
</section>