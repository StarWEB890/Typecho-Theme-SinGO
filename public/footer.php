<footer id="footer" class="clearfix">
  <div>
    Copyright &copy; <?php echo date('Y'); ?>       <?php if ($this->options->yourname): ?><?php $this->options->yourname(); ?>
        <?php else : ?><?php $this->options->title() ?><?php endif; ?> . All Rights Reserved.<br>
    
      <?php if ($this->options->moeicp): ?>
      <a href="https://icp.gov.moe/?keyword=<?php $this->options->moeicp(); ?>" target="_blank">萌ICP备<?php $this->options->moeicp(); ?>号</a>
      <br>
      <?php endif; ?>
    
    
<?php if ($this->options->visitstat): ?>
      <script>
        (function () {
  'use strict';

  /**
   * Completely random generation of unique strings
   * @param {Number} size Generate the length of a random string
   * @default 10
   * @returns {String} Randomly generated string
   */
  function unique(size) {
    size = size || 10;

    var r = function r() {
      return Math.random().toString(36).slice(2);
    };

    var result = r();

    while (result.length < size) {
      result += r();
    }

    return result.slice(0, size);
  }

  document.addEventListener('DOMContentLoaded', function () {
    var id = 'VS_' + unique();
    var script = document.createElement('script');
    script.src = '<?php $this->options->visitstat(); ?>/?p=' + id;
    script.referrerPolicy = 'no-referrer-when-downgrade';

    window[id] = function (data) {
      for (var key in data) {
        var dom = document.getElementById('vs_' + key);
        if (dom) dom.innerText = data[key];
      }

      script.parentNode.removeChild(script);
    };

    document.head.appendChild(script);
  });

})();
      </script>
        <i class="fa fa-user"></i> 总访问量：<span id="vs_site_pv">0</span>&nbsp;次
         |
      <i class="fa fa-eye"></i> 访客人数：<span id="vs_site_uv">0</span>&nbsp;人次
    <br>
    <?php endif; ?>   
    Powered by <a target="_blank" rel="noopener" href="https://typecho.org">Typecho</a> | Themes <a target="_blank" rel="noopener" href="#">SinGO</a>
    <br>
    <br>
    </div>
</footer>

