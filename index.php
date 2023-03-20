<div id="content">
<?php if(have_posts()): while (have_posts()):the_post(); ?>
<div class="post">
　　<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<!-- 　　<?php the_excerpt(); ?> -->
　　<p class="postinfo">
　　<?php echo get_the_date(); ?><?php the_time(); ?>｜カテゴリー：<?php the_category(' , '); ?>
　　</p>       
</div>
<?php endwhile; endif; ?>
<div>