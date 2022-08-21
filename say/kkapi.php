<div id="ispeak"></div>
<link
  rel="stylesheet"
  href="https://cdn.staticfile.org/highlight.js/10.6.0/styles/atom-one-dark.min.css"
/>
<link
  rel="stylesheet"
  href="https://cdn1.tianli0.top/npm/ispeak/style.css"
/>

<style>
  #article-container .D-avatar {
    margin: 0 10px 0 0;
  }
  .D-footer {
    display: none;
  }
</style>
<script src="https://cdn.staticfile.org/highlight.js/10.6.0/highlight.min.js"></script>
<script src="https://cdn.staticfile.org/marked/2.0.0/marked.min.js"></script>
<script src="https://lib.baomitu.com/discuss/latest/dist/discuss.js"></script>
<script src="https://cdn1.tianli0.top/npm/ispeak/ispeak.umd.js"></script>
<script>
function load_ispeak() {
    setTimeout(function() {
        var HEAD = document.getElementsByTagName('head')[0] || document.documentElement;
        var src = 'https://cdn1.tianli0.top/npm/ispeak/ispeak.umd.js'
        var script = document.createElement('script')
        script.setAttribute('type','text/javascript')
        script.onload = function() {
           pjax_ispeak()
        }
        script.setAttribute('src', src)
        HEAD.appendChild(script)
    }, 1);
};
function pjax_ispeak() {
    if(!document.querySelectorAll("#ispeak")[0])return;
    ispeak
      .init({
        el: '#ispeak',
        api: '<?php $this->fields->ispeak_api(); ?>',
        author: '<?php $this->fields->ispeak_author(); ?>',
        pageSize: 10,
        loading_img: 'https://cdn.staticaly.com/gh/StarWEB890/TuChuang@master/images/load.6i582rbr59s0.gif',
        initCommentName: 'Discuss',
        initCommentOptions: {
          serverURLs: '<?php $this->fields->ispeak_discuss_serverurl(); ?>',
          lang: 'cn',
          ph: '<?php $this->fields->ispeak_discuss_ph(); ?>',
          emotMaps: <?php $this->fields->ispeak_discuss_emotmaps(); ?>,
        }
      });
}
load_ispeak();
document.addEventListener('pjax:complete', function () {
    pjax_ispeak();
});
</script>