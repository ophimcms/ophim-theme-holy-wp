<?php
get_header();
?>
<section style="margin-top: 8vh;">
    <div class="container" style="margin-bottom: 5vh;">
        <h2 id="main" class="display-6 text-warning" style="font-size: calc(1.325rem + 0.9vw);text-align: center;">
            <?php echo single_tag_title(); ?></h2>
        <hr
                style="background: linear-gradient(90deg, var(--bs-cyan), var(--bs-yellow)), rgb(255,193,7);transform: scale(1);width: 100%;height: 2px;filter: saturate(200%);">
    </div>
    <div class="container" style="color:#FFF;">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>
                <div class="TpRwCont" style="margin-bottom: 20px">
                    <div class="col-md-12 blogShort">

                        <a href="<?php the_permalink(); ?>"><img style="width: 150px;margin-right: 15px" src="<?= op_remove_domain(get_the_post_thumbnail_url()) ?>"
                                                                 alt="<?php the_title(); ?>" class="pull-left img-responsive thumb margin10 img-thumbnail"></a>
                        <br>
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <article>
                            <p>
                                <?php the_excerpt(); ?>
                            </p></article>
                        <a class="btn btn-blog pull-right marginBottom10" href="<?php the_permalink(); ?>">Xem thêm</a>
                    </div>

                </div>
            <?php }
            wp_reset_postdata();
        } ?>
    </div>
    <?php ophim_pagination(); ?>
</section>

<?php
get_footer();
?>
