<?php get_header()?>


<?php if (have_posts()): ?>


<?php while(have_posts()) : the_post() ?>

<div class="postContainer">
<div class="post">
<h1>
<a href="<?php the_permalink() ?>"><?php the_title() ?>
</a>
</h1>

<span> <?php the_date()?> at <?php the_time() ?>
</span>
<p><?php the_content() ?>                 </p>
</div>
</div>


<?php endwhile; ?>

<div class="older-posts">
<?php previous_posts_link ("Previous posts") ?>
</div>


<div class="newer-posts">
<?php next_posts_link ("Newer posts") ?>
</div>

<?php endif; ?>

<?php get_footer() ?>