
<section class="clean-block clean-hero"
         style="color: rgba(20,20,20,0.85);background: url(<?= op_get_poster_url() ?>) center/cover no-repeat;margin-top: -28vh;filter: blur(0px);">
    <div class="text" style="margin-top: 20vh;width: 80vw;max-width: 1280px;height: auto;">
        <h1 style="font-size: calc(1.325rem + 0.9vw);color: rgb(240,190,8);"><?php the_title(); ?>
            (<?= op_get_year() ?>)</h1>
        <p style="font-style: italic;font-size: calc(1rem + 0.5vw);"><?= op_get_original_title() ?></p>
        <div class="mx-auto">
            <a class="btn btn-outline-warning btn-sm" type="button" href="<?= watchUrl() ?>">Xem Phim</a>
        </div>
    </div>
</section>
<div class="container" style="margin-top: 1vw;">
    <div class="text-light block-content">
        <div class="post-body">

            <h3 style="color: rgb(255,193,7);text-align: justify;"><?php the_title(); ?>
                (<?= op_get_year() ?>)</h3>
            <div class="post-info" style="text-align: justify;"><span
                        style="text-align: justify;"><b><?= op_get_original_title() ?></b></span>
            </div>

            <p style="margin-top: 8px;text-align: justify;">
            <p>
                <?php the_content();?>
            </p>
            <br>
            </p>

            <p style="margin-top: 8px;">
                Lượt Xem: <?= op_get_post_view() ?><br />
                Quốc Gia: <?= op_get_regions() ?><br />
                Năm Sản Xuất: <?= op_get_year() ?><br />
                Thể Loại: <?= op_get_genres(', ') ?><br />

                Diễn viên: <?= op_get_actors(10,', ') ?><br />

                Đạo diễn: <?= op_get_directors(10,', ') ?><br />

                Tags:  <?= op_get_tags(', ') ?><br />
            </p>
        </div>
    </div>
    <div class="box-comment" id="tabs-facebook" style="background: linear-gradient(to right, #ffff, #ffff);">
        <div class="fb-comments w-full" data-href="<?= getCurrentUrl() ?>" data-width="100%"
                 data-numposts="5" data-colorscheme="light" data-lazy="true">
            </div>
    </div>

</div>

<section style="margin-top: 8vh;" >
    <div class="container" style="margin-bottom: 5vh;">
        <h2 class="display-6 text-warning" style="font-size: calc(1.325rem + 0.9vw);text-align: center;">Phim cùng thể loại</h2>
        <p class="text-center text-light" style="font-size: calc(0.8rem + 0.1vw);">Biết đâu bạn thích?</p>
        <hr style="background: linear-gradient(90deg, var(--bs-cyan), var(--bs-yellow)), rgb(255,193,7);transform: scale(1);width: 100%;height: 2px;filter: saturate(200%);">
    </div>

    <div class="container">
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-5">
            <?php
            $postType = 'ophim';
            $taxonomyName = 'ophim_genres';
            $taxonomy = get_the_terms(get_the_id(), $taxonomyName);
            if ($taxonomy) {
                $category_ids = array();
                foreach ($taxonomy as $individual_category) $category_ids[] = $individual_category->term_id;
                $args = array('post_type' => $postType, 'post__not_in' => array(get_the_id()), 'posts_per_page' => 12, 'tax_query' => array(array('taxonomy' => $taxonomyName, 'field' => 'term_id', 'terms' => $category_ids,),));
                $my_query = new wp_query($args); ?>
                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

                        <?php include THEMETEMPLADE.'/section/section_movies_item.php'?>

                <?php endwhile; ?>

                <?php
                wp_reset_query();
            }
            ?>
        </div>
    </div>

    <div class="text-center" style="margin-top: 3vh;">
        <button class="btn btn-outline-warning" type="button" onclick="location.href='/';" style="margin-right: 1vw;padding-right: 15px;padding-left: 15px;padding-top: 5px;padding-bottom: 5px;font-size: calc(0.6rem + 0.4vw);font-weight: bold;margin-bottom: 1vh;">
            Công Cụ Tìm Kiếm
        </button>
    </div>
</section>


