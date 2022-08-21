<?php

/**
 * 
 * “ 一个Hexo的主题，被原作者移植到Typecho ” <br /> “ 环境要求：PHP 5.4 ~ 7.2 ”
 * 
 * @package SinGO
 * @author SinGO工作室
 * @link //www.xsnetw.cf
 *
 **/

?>
<?php $this->need('public/header.php'); ?>
  <div class="l_body">
    <div class='container clearfix'>
      <div id="pjax-container" class='l_main'>
        
<section class="post-list">
	
<?php while($this->next()): ?>
    <div class='post-wrapper'>
      <article class="animate__animated animate__flipInX post reveal">
  <section class="meta">
    
    <h2 class="title">
      <a href="<?php $this->permalink() ?>">
      <?php $this->title() ?>
      </a>
    </h2>
    
    <time datetime="<?php $this->date('c'); ?>">
    <?php _e('时间: '); ?>
    <?php $this->date(); ?>&nbsp;|&nbsp;
    <?php _e('分类: '); ?><?php $this->category(','); ?>
    </time>
		
  </section>
  <section class="article typo">
  <?php $this->content(); ?>
  <div class="readmore">
  <a href="/posts/22447/" class="mores mores-primary mores-ghost mores-shine light">
        <div></div>

        <div></div>
    
        <div></div>
    
        <div></div>
        阅读更多....
      </a>
  </p>
  </section>
</article>
    </div>
    <?php endwhile; ?>
</section>


      </div>
      <?php $this->need('public/foot.php'); ?>