<?php get_header() ?>

<?php echo do_shortcode('[metaslider id="268"]'); ?>

<h1 style="display:none;">Heart Flow Foreningen: Meditation og indre ro</h1>

<meta name="description" content="Savner du indre ro så deltag i en guidet meditation - (hver mandag) modtag healing og alternativ behandling (hver tirsdag)" />

<div id="tekst-field-1">
    <h2><?php the_field('Overskrift'); ?></h2>
    <?php the_field('beskrivelse'); ?>
    <div id="hr">
        <hr>
    </div>
    <h2><?php the_field('nyheder'); ?></h2>
</div>

<div id="cards">
    <div>
        <img src="<?php the_field('billede_1'); ?>" alt="nyhedsbilleder">
        <h2><?php the_field('overskrift_1'); ?></h2>
        <br>
        <p><?php the_field('beskrivelse_1'); ?></p>
    </div>
    <div>
        <img src="<?php the_field('billede_2'); ?>" alt="nyhedsbilleder">
        <h2><?php the_field('overskrift_2'); ?></h2>
        <br>
        <p><?php the_field('beskrivelse_2'); ?></p>
    </div>
    <div>
        <img src="<?php the_field('billede_3'); ?>" alt="nyhedsbilleder">
        <h2><?php the_field('overskrift_3'); ?></h2>
        <br>
        <p><?php the_field('beskrivelse_3'); ?></p>
    </div>
</div>

<div id="video">
    <div>
        <iframe width="100%" height="100%" src="<?php the_field('heartflowvideo'); ?>" 
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
    </div>
</div>

<h2 id="nyhedsbrev">Nyhedsbrev</h2>

<div id="mailchimp">
    <div>
        <?php echo do_shortcode('[mc4wp_form id="414"]'); ?>
    </div>
    <div>
        <img alt="nyhedsbrev ikon" src="<?php echo get_template_directory_uri(); ?>/assets/nyhedsbrev_ikon.svg" height="100" />
    </div>
</div>

<div id="meditation">
    <div>
        <img src="<?php the_field('billede_m'); ?>" alt="">
    </div>
    <div>
        <h2><?php the_field('overskrift_m'); ?></h2>
        <p><?php the_field('beskrivelse_m'); ?></p>
        <a href="<?php the_field('knap_link'); ?>">
            <?php the_field('knappe_tekst'); ?>
        </a>
    </div>
</div>

<div id="begivenheder">
    <div id="section_b">
        <p><?php the_field('begivenhed_tekst'); ?></p>
    </div>
    <div id="line"></div>
    <div id="section_b">
        <a href="<?php the_field('begivenhed_link') ?>">
            <?php the_field('begivenhed_knap'); ?>
        </a>
    </div>
</div>

<div id="instagram">
    <?php echo do_shortcode('[instagram-feed num=9 cols=3 width=50]'); ?>
</div>
<div id="instagram-mobile">
    <?php echo do_shortcode('[instagram-feed num=4 cols=3 width=50]'); ?>
</div>
<?php get_footer() ?>