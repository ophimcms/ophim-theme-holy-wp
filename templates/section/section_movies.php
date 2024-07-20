<section style="margin-top: 8vh;">
    <div class="container" style="margin-bottom: 5vh;">
        <h2 class="display-6 text-warning" style="font-size: calc(1.325rem + 0.9vw);text-align: center;">
            <?php echo $title; ?></h2>
        <hr
            style="background: linear-gradient(90deg, var(--bs-cyan), var(--bs-yellow)), rgb(255,193,7);transform: scale(1);width: 100%;height: 2px;filter: saturate(200%);">
    </div>

    <div class="container">
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-5">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <?php include THEMETEMPLADE.'/section/section_movies_item.php'?>
                <?php endwhile; ?>
        </div>
    </div>

    <?php if($slug) : ?>
        <div class="text-center" style="margin-top: 3vh;">
            <a class="btn btn-outline-warning" type="button" href="<?php echo $slug; ?>"
                style="margin-right: 1vw;padding-right: 15px;padding-left: 15px;padding-top: 5px;padding-bottom: 5px;font-size: calc(0.6rem + 0.4vw);margin-bottom: 1vh;">
                <b>Xem Thêm</b>
            </a>
        </div>
    <?php endif ?>
</section>
