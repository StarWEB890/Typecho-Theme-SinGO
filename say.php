<?php
/**
 * 说说
 *
 * @package custom
 */
?>
<?php $this->need('public/header.php'); ?>
  <div class="l_body">
    <div class='container clearfix'>
      <div id="pjax-container" class='l_main'>
        
      <article id="page-"
  class="animate__animated animate__bounceInDown post white-box article-type-page"
  itemscope itemprop="blogPost">
	<section class='meta'>
	<h2 class="title">
  	<a href="<?php $this->permalink() ?>">
    <?php $this->title() ?>
    </a>
  </h2>
	
	</section>
	<section class="article typo">
  	<div class="article-entry" itemprop="articleBody">
<?php if ($this->fields->shuoshuo == 'artitalk') {
$this->need('say/artitalk.php');
}elseif ($this->fields->shuoshuo == 'ispeak'){
    $this->need('say/kkapi.php');
}elseif ($this->fields->shuoshuo == 'daodao'){
    $this->need('say/daodao.php');
}else{
    echo '博主没有设置说说或说说设置错误！！';
}
?>

  	</div>
	  
		
	
	</section>
</article>
<article class="animate__animated animate__bounceInUp" style="backdrop-filter: blur(20px);box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);margin:15px 0 0 0;padding:11px;background-color:rgba(255, 255, 255, 0.8);border-radius: 20px;">
	<h2 style="position: relative;font-family: 'Titillium Web', Helvetica, 'Hiragino Sans GB', 'Hiragino Sans GB W3', Source Han Sans CN Regular, WenQuanYi Micro Hei, 'Microsoft YaHei', Arial, sans-serif;font-weight: normal;left: 3px;">
		<i class="fa fa-comment" aria-hidden="true" style="color: #4caf50;"></i>
		评论
	</h2>
  <?php $this->need('public/comment.php'); ?>
	</article>

      </div>
      <?php $this->need('public/foot.php'); ?>