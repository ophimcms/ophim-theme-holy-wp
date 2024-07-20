<nav class="navbar navbar-dark navbar-expand-lg fixed-top clean-navbar"
     style="color: rgba(33,37,41,0.2);background: rgba(0,0,0,0.3);">
    <div class="container">
        <a class="navbar-brand logo" href="/" style="color: rgb(240,190,12);font-size: calc(1.325rem + 0.6vw);">
            <?php op_the_logo('width:20px') ?>
        </a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span
                    class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav ms-auto">
                <?php
                $menu_items = wp_get_menu_array('primary-menu');
                foreach ($menu_items as $key => $item) : ?>
                    <?php if (empty($item['children'])) { ?>
                        <li class="nav-item item"><a class="nav-link" href="<?= $item['url'] ?>"><?= $item['title'] ?></a>
                        </li>
                    <?php } else { ?>

                        <li class="nav-item dropdown flex-nowrap" style="margin-top: 0px;">
                            <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown"
                               href="<?= $item['url'] ?>"><?= $item['title'] ?> </a>
                            <div class="dropdown-menu dropdown-menu-dark"
                                 style="background: linear-gradient(180deg, rgba(0,0,0,0.3), rgba(0,0,0,1.0));">
                        <?php foreach ($item['children'] as $k => $child): ?>
                                <a class="dropdown-item" href="<?= $child['url'] ?>"><?= $child['title'] ?></a>
                        <?php endforeach; ?>
                            </div>
                        </li>
                    <?php } ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>
