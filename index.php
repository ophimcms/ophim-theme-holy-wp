<?php
get_header();
?>

<?php include THEMETEMPLADE.'/main_search.php'?>

<main class="page landing-page">
    <?php if ( is_active_sidebar('widget-area') ) {
        dynamic_sidebar( 'widget-area' );
    } else {
        _e(' Go to Appearance -> Widgets to add some widgets.', 'ophim');
    }
    ?>
    <section style="margin-top: 8vh;">
        <div class="text-center" style="margin-top: 3vh;">
            <a class="btn btn-outline-warning" type="button" href="#" style="margin-right: 1vw;padding-right: 15px;padding-left: 15px;padding-top: 5px;padding-bottom: 5px;font-size: calc(0.6rem + 0.4vw);margin-bottom: 1vh;">
                <b>Công Cụ Tìm Kiếm</b>
            </a>
        </div>
    </section>

</main>


<?php
get_footer();
?>
