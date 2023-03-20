<div id="content">
<div class="post">
　　<h2><?php the_title(); ?></h2>
　　<?php the_excerpt(); ?>
　　<p class="postinfo">
　　<?php echo get_the_date(); ?><?php the_time(); ?>｜カテゴリー：<?php the_category(' , '); ?>
　　</p>       
</div>
<div>