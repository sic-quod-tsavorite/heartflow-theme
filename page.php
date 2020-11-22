<?php get_header() ?>

<?php echo do_shortcode('[metaslider id="268"]'); ?>

<div id="tekst-field-1">
    <h2><?php the_field('Overskrift'); ?></h2>
    <?php the_field('beskrivelse'); ?>
    <div>
        <hr>
    </div>
    <h2><?php the_field('nyheder'); ?></h2>
</div>

<div id="cards">
    <div>
        <img src="<?php the_field('billede_1'); ?>" alt="">
        <h2><?php the_field('overskrift_1'); ?></h2>
        <br>
        <p><?php the_field('beskrivelse_1'); ?></p>
    </div>
    <div>
        <img src="<?php the_field('billede_2'); ?>" alt="">
        <h2><?php the_field('overskrift_2'); ?></h2>
        <br>
        <p><?php the_field('beskrivelse_2'); ?></p>
    </div>
    <div>
        <img src="<?php the_field('billede_3'); ?>" alt="">
        <h2><?php the_field('overskrift_3'); ?></h2>
        <br>
        <p><?php the_field('beskrivelse_3'); ?></p>
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

<?php get_footer() ?>