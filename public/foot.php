<?php $this->need('public/sidebar.php'); ?>
<?php $this->need('public/footer.php'); ?>

<script src="//apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="//cdn.bootcss.com/scrollReveal.js/3.3.2/scrollreveal.min.js"></script>

<script src="<?php $this->options->themeUrl('assets/js/jquery.fitvids.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('assets/js/search.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('assets/js/app.js'); ?>"></script>

<?php if (!empty($this->options->effect) && in_array('clicklove', $this->options->effect)): ?>
<script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/clicklove.js'); ?>"></script>
<?php endif; ?>
<script>
    renderMathInElement(document.body);
  </script>
</body>

<?php if (!empty($this->options->effect) && in_array('commentTyping', $this->options->effect)): ?>
<!--评论框跳动的彩球,js链接 -->
<script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/commentTyping.js'); ?>"></script>
<?php endif; ?>

</html>