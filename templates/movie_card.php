<div class="myui-vodlist__box">
    <a href="<?php the_permalink(); ?>" class="myui-vodlist__thumb" title="<?php the_title(); ?>"
        style="background: url(<?= op_get_thumb_url() ?>);">
        <span class="play hidden-xs"></span>
        <span class="pic-tag pic-tag-top" style="background-color: #00000066;"><?= op_get_episode() ?></span></a>
    <div class="myui-vodlist__detail">
        <h4 class="title text-overflow">
            <a class="text-fff" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        </h4>
        <p class="text text-overflow text-muted hidden-xs"><?= op_get_original_title() ?> (<?= op_get_year() ?>)</p>
    </div>
</div>
