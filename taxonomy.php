<?php
get_header();
?>
<?php include THEMETEMPLADE.'/main_search.php'?>
<section style="margin-top: 8vh;">
    <div class="container" style="margin-bottom: 5vh;">
        <h2 id="main" class="display-6 text-warning" style="font-size: calc(1.325rem + 0.9vw);text-align: center;">
            <?php echo single_tag_title(); ?></h2>
        <hr
                style="background: linear-gradient(90deg, var(--bs-cyan), var(--bs-yellow)), rgb(255,193,7);transform: scale(1);width: 100%;height: 2px;filter: saturate(200%);">
    </div>
    <div class="container">
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-5">
            <?php
            if (have_posts()) {
            while (have_posts()) { the_post(); ?>
                <?php include THEMETEMPLADE.'/section/section_movies_item.php'?>
            <?php } wp_reset_postdata(); } else{ echo '  <p>Không tìm thấy phim trong mục này</p>';} ?>
        </div>
    </div>
    <?php ophim_pagination(); ?>
</section>

<?php
get_footer();
?>
