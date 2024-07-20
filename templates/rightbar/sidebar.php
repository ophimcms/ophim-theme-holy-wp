<div class="col-md-wide-3 col-xs-1 myui-sidebar hidden-sm hidden-xs">
    <div class="myui-panel myui-panel-bg clearfix">
        <div class="myui-panel-box clearfix">
            <div class="myui-panel_hd">
                <div class="myui-panel__head active clearfix">
                    <h3 class="title"><?php echo $title; ?></h3> <span class="icon icon-cinema"></span>
                </div>
            </div>
            <div class="myui-panel_bd">
                <ul class="myui-vodlist__media active col-pd clearfix">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <li>
                            <div class="thumb">
                                <a class="myui-vodlist__thumb img-xs-70"
                                style="background: url(<?= op_get_thumb_url() ?>);"
                                href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"></a>
                            </div>
                            <div class="detail detail-side">
                                <h4 class="title">
                                    <a href="<?php the_permalink(); ?>"><i class="fa fa-angle-right text-muted pull-right"></i> <?php the_title(); ?></a>
                                </h4>
                                <h5 class="font-12"><?= op_get_original_title() ?></h5>
                                <p class="font-12"><span class="text-muted"><?= op_get_episode() ?></span></p>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
