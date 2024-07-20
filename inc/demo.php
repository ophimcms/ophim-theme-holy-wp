<?php

function add_theme_widgets() {
    $activate = array(
        'widget-footer' => array(
            'wg_footer-0',
        )
    );
    update_option('widget_wg_footer', array(
        0 => array('footer' => '<footer class="page-footer dark" style="background: rgb(20,20,20);">
                    <div class="text-uppercase footer-copyright" style="background: rgba(20,20,20,0.07);border-style: none;">
                    <p><strong>Elune Media Team 2021</strong></p>
                    </div>
                    </footer>')
    ));
    update_option('sidebars_widgets',  $activate);

}

add_action('after_switch_theme', 'add_theme_widgets', 10, 2);