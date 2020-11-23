<footer id="footer1">
    <div>
        <h2>Du kan også finde os på</h2>
        <div style="margin:10px 0 30px 0;">
            <a href="facebook.com" style="margin-right: 7px;">
                <img src="<?php echo get_template_directory_uri(); ?> /assets/facebook.svg" alt=" Logo" width="70" height="70" />
            </a>
            <a href="instagram.com"> <img src="<?php echo get_template_directory_uri(); ?>/assets/instagram.svg" alt="Logo" width="70" height="70" /></a>
        </div>
        <div id="datalov" style="margin-top:30px;">
            <a style="text-decoration: underline;" href="">Privatslivspolitik</a>
            <p>og</p>
            <a style="text-decoration: underline;" href="">databehandlingsfortegnelse</a>
        </div>
        <p style="font-style: italic;">Copyright © 2020 Heart Flow Foreningen. All rights reserved</p>
        <?php wp_nav_menu(array("theme_location" => "footer-menu"))   ?>
    </div>
</footer>
<?php wp_footer() ?>

</body>

</html>