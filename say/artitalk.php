<div id="artitalk_main"></div>
<script>
      function load_artitalk() {
    setTimeout(function() {
        var HEAD = document.getElementsByTagName('head')[0] || document.documentElement;
        var src = 'https://unpkg.com/artitalk'
        var script = document.createElement('script')
        script.setAttribute('type','text/javascript')
        script.onload = function() {
           pjax_artitalk()
        }
        script.setAttribute('src', src)
        HEAD.appendChild(script)
    }, 1);
};
function pjax_artitalk() {
    if(!document.querySelectorAll("#artitalk_main")[0])return;
    new Artitalk({
    serverURL: '<?php $this->fields->lc_serverurl(); ?>',
    appId: '<?php $this->fields->lc_appid(); ?>', // Your LeanCloud appId
    appKey: '<?php $this->fields->lc_appkey(); ?>' // Your LeanCloud appKey
});
}
load_artitalk();
document.addEventListener('pjax:complete', function () {
    pjax_artitalk();
});
</script>