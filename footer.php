<footer id="footer1">
    <div>
        <h2>Du kan også finde os på</h2>
        <div style="margin:10px 0 30px 0;">
            <a href="https://www.facebook.com/heartflow.dk/" style="margin-right: 7px;"> <img src="<?php echo get_template_directory_uri(); ?>/assets/facebook.svg" alt="facebook" width="70" height="70" /></a>
            <a href="https://www.instagram.com/heartflowforeningen/"> <img src="<?php echo get_template_directory_uri(); ?>/assets/instagram.svg" alt="instagram" width="70" height="70" /></a>    
        </div>
        <h3 style="margin-bottom:10px;">Til toppen</h3>
        <a href="#top"><img src="<?php echo get_template_directory_uri(); ?>/assets/ftiltoppen.svg" alt="top" width="150" /></a>
        <div id="datalov" style="margin-top:30px;">
        <a style="text-decoration: underline;" href="<?php echo esc_url(home_url('/privatlivspolitik')); ?>">Privatslivspolitik</a>
            <p>og</p>
            <a style="text-decoration: underline;" href="<?php echo esc_url(home_url('/databehandlingsfortegnelse')); ?>">databehandlingsfortegnelse</a>
        </div>
        <p style="font-style: italic;">Copyright © 2020 Heart Flow Foreningen. All rights reserved</p>
        <?php wp_nav_menu(array("theme_location" => "footer-menu"))   ?>
    </div>
</footer>
<?php wp_footer() ?>

</body>

</html>