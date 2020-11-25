<?php get_header() ?>
<img id="underside_billede" src="<?php the_field('billede'); ?>" alt="">

<div class="underside">

<div id="underside_tekst">
        <p><?php the_field('databehandling'); ?></p>
    </div>
</div>
<?php get_footer( '2' ) ?>