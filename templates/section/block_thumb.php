<div class="myui-panel myui-panel-bg clearfix">
    <div class="myui-panel-box clearfix">
        <div class="myui-panel_bd clearfix">
            <div class="myui-panel_hd">
                <div class="myui-panel__head clearfix"><span class="icon icon-cinema"></span>
                    <h3 class="title"><?php echo $title; ?></h3>
                </div>
                <?php if($slug) : ?>
                <a class="more text-muted" href="<?php echo $slug; ?>">Xem thêm <i class="fa fa-angle-right"></i></a>
                <?php endif ?>
            </div>
            <ul class="myui-vodlist clearfix">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-lg-6 col-md-6 col-sm-4 col-xs-3">
                        <?php include THEMETEMPLADE.'/movie_card.php'?>
                    </div>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
</div>