<?php get_header() ?>
<img id="underside_billede" src="<?php the_field('billede'); ?>" alt="">

<div class="underside">

<div id="underside_tekst">
        <h2><?php the_field('overskrift'); ?></h2>
        <br>
        <p><?php the_field('brodtekst'); ?></p>
    </div>
</div>
<?php get_footer( '2' ) ?>