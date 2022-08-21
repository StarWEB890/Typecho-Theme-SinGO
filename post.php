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
        
      <article id="page-"
  class="animate__animated animate__fadeInDown post white-box article-type-page"
  itemscope itemprop="blogPost">
	<section class='meta'>
	<h2 class="title">
  	<a href="<?php $this->permalink() ?>">
    <?php $this->title() ?>
    </a>
  </h2>
  <time datetime="<?php $this->date('c'); ?>">
    <?php _e('时间: '); ?>
    <?php $this->date(); ?>
    &nbsp;|&nbsp;
    <?php _e('分类: '); ?><?php $this->category(','); ?>
    </time>
	
	</section>
	<section class="article typo">
  	<div class="article-entry" itemprop="articleBody">
    <?php $this->content(); ?>

  	</div>
	  
		
	
	</section>
</article>

<article class="animate__animated animate__fadeInUp" style="backdrop-filter: blur(20px);box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);margin:15px 0 0 0;padding:11px;background-color:rgba(255, 255, 255, 0.8);border-radius: 20px;">
	<h2 style="position: relative;font-family: 'Titillium Web', Helvetica, 'Hiragino Sans GB', 'Hiragino Sans GB W3', Source Han Sans CN Regular, WenQuanYi Micro Hei, 'Microsoft YaHei', Arial, sans-serif;font-weight: normal;left: 3px;">
		<i class="fa fa-comment" aria-hidden="true" style="color: #4caf50;"></i>
		评论
	</h2>
  <?php $this->need('public/comment.php'); ?>
	</article>

      </div>
      <?php $this->need('public/foot.php'); ?>