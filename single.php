<?php
get_header();
?>
<section style="margin-top: 8vh;">
    <div class="container">
        <?php
        while ( have_posts() ) : the_post();
            ?>

            <div class="group-film" style="color: #FFF">
                <h2><?php the_title(); ?>
                </h2>
                <div class="">
                    <?php  the_content(); ?>
                </div>

            </div>


        <?php
        endwhile;
        ?>
    </div>
    <?php ophim_pagination(); ?>
</section>

<?php
get_footer();
?>
