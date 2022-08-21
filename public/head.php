<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  
  <title id="#pjax-container"><?php $this->options->title(); ?></title>
  <meta name="description" content="害怕孤独，但又享受孤独" />
  <meta name="keywords" content="" />
  <meta name="HandheldFriendly" content="True" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <?php if ($this->options->siteIcon): ?>
  <link rel="Shortcut Icon" href="<?php $this->options->siteIcon() ?>" />
  <link rel="Bootmark" href="<?php $this->options->siteIcon() ?>" />
  <?php endif; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>  

  <script src="<?php $this->options->themeUrl('assets/js/nprogress.js'); ?>"></script>
<link href="<?php $this->options->themeUrl('assets/css/nprogress.css'); ?>" rel="stylesheet" type="text/css">

  <?php if (!empty($this->options->search_form) && in_array('Pjax', $this->options->search_form)): ?>
<script src="https://cdn.bootcss.com/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>
<script>
$(document).pjax('a', '#pjax-container', {fragment:'#pjax-container', timeout:6000}); //这是a标签的pjax，#content 表示执行pjax后会发生变化的id，改成你主题的内容主体id或class。timeout是pjax响应时间限制，如果在设定时间内未响应就执行页面转跳，可自由设置；
//$(document).on('submit', 'form', function (event) {$.pjax.submit(event, '#content', {fragment:'#content', timeout:6000});}); //这是提交表单的pjax。form表示所有的提交表单都会执行pjax，比如搜索和提交评论，可自行修改改成你想要执行pjax的form id或class。#content 同上改成你主题的内容主体id或class；
$(document).on('pjax:send', function() { //pjax链接点击后显示加载动画；
  NProgress.start();
});
$(document).on('pjax:complete', function() { //pjax链接加载完成后隐藏加载动画；
  NProgress.done(); ;
    pajx_loadDuodsuo();//解决多说评论；
});
function pajx_loadDuodsuo(){
    var dus=$(".ds-thread");
    if($(dus).length==1){
        var el = document.createElement('div');
        el.setAttribute('data-thread-key',$(dus).attr("data-thread-key"));//必选参数
        el.setAttribute('data-url',$(dus).attr("data-url"));
        DUOSHUO.EmbedThread(el);
        $(dus).html(el);
    }
}
</script>
<?php endif; ?>  

  <meta name="description" content="<?php $this->options->description(); ?>">
    
  <link href="https://fonts.googleapis.com/css?family=Inconsolata|Titillium+Web" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
  
  <?php if (!empty($this->options->effect) && in_array('animate', $this->options->effect)): ?>
  <link href='https://cdn.bootcdn.net/ajax/libs/animate.css/4.1.1/animate.css' rel='stylesheet'>
  <?php endif; ?>  

  <?php if (!empty($this->options->effect) && in_array('KaTeX', $this->options->effect)): ?>
    <link href='https://jsd.xsnetw.tk/npm/katex/dist/katex.min.css' rel='stylesheet'>
    <script src="https://jsd.xsnetw.tk/npm/katex/dist/katex.min.js"></script>
    <script src="https://jsd.xsnetw.tk/npm/katex/dist/contrib/auto-render.min.js"></script>
  <?php endif; ?>  

    <link href='https://cdn.bootcdn.net/ajax/libs/font-awesome/6.1.2/css/all.min.css' rel='stylesheet'>
  
    <link href='<?php $this->options->themeUrl('assets/css/codes.css'); ?>' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap-grid.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.7.2/animate.min.css">
  
<link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/style.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/pinglun.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/layui.css'); ?>">

<script src="<?php $this->options->themeUrl('assets/js/OwO.min.js'); ?>"></script>
<link href="<?php $this->options->themeUrl('assets/css/OwO.min.css'); ?>" rel="stylesheet">
  
<?php if ($this->options->chat == 'Chatra') {
$this->need('chat/chatra.php');
}elseif ($this->options->chat == 'DaoVoice'){
    $this->need('chat/daovoice.php');
}else{
}
?>

<?php $this->header(); ?>
</head>
<body>