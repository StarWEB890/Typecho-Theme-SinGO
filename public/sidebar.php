
      <aside class='l_side'>
        
        <section class='m_widget about'>           
    <style>
        .image{
            box-sizing: border-box;
width: 250px;
height: 250px;
font-size: 22px;
padding-top: 205px;
overflow: hidden;
background: no-repeat center top / 100% 100%;
background-image: linear-gradient(to top, #FFFFFF, transparent), url("<?php $this->options->logoUrl() ?>'");
border-radius: 12px 12px 0 0;
        }
</style>
<div class="image avatar waves-image"><div class='header'><i class="fa fa-user" aria-hidden="true"></i>  <?php if ($this->options->yourname): ?><?php $this->options->yourname(); ?><?php else : ?><?php $this->options->title() ?><?php endif; ?>  </div></div>
      <div class='content'>
      <div class='desc'><?php $this->options->description() ?></div>
      </div>
      </section>

      <section class='m_widget about'>
      <?php if($this->user->hasLogin()): ?>
      <div class='header'><i class="fa fa-address-card"></i>
      欢迎，<?php $this->user->screenName(); ?>
      </div>
      <div class='content'>
          <ul class="entry">
              <li><a class="flat-box" target="_blank" href="<?php $this->options->adminUrl(); ?>">
                  <div class='name'><i class="fa-solid fa-align-justify"></i>&nbsp;&nbsp;<?php _e('进入后台'); ?></div>
              </a></li>
              <li><a class="flat-box" href="<?php $this->options->logoutUrl(); ?>">
                  <div class='name'><i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;&nbsp;<?php _e('退出'); ?></div>
              </a></li>
          </ul>
      </div>
      <?php else: ?>
      <div class='header'><i class="fa fa-address-card"></i>
      游客，请登录
      </div>
      <div class='content'>
          <ul class="entry">
              <li><a class="flat-box" href="<?php $this->options->adminUrl('login.php'); ?>">
                  <div class='name'><i class="fa-solid fa-arrow-right-to-bracket"></i>&nbsp;&nbsp;<?php _e('登录'); ?></div>
              </a></li>
              <li><a class="flat-box" href="<?php $this->options->adminUrl('register.php'); ?>">
                  <div class='name'><i class="fa-solid fa-chevron-right"></i>&nbsp;&nbsp;<?php _e('注册'); ?></div>
              </a></li>
          </ul>
      </div>
      <?php endif; ?>
      </section>

      <?php if (!empty($this->options->sidebarBlock) && in_array('ShowSocialLink', $this->options->sidebarBlock)): ?>
        <section class='m_widget links'>
      <div class='header'><i class="fa fa-link" aria-hidden="true"></i>社交链接</div>
      <div class='content'>
          <ul class="entry">
          <?php if ($this->options->social): ?>
                <?php foreach (json_decode($this->options->social) as $socialinks): ?>
                    <li><a class="flat-box" target="_blank" href="<?= $socialinks->url; ?>">
                  <div class='name'><i class="<?= $socialinks->slug; ?>" aria-hidden="true"></i>&nbsp;&nbsp;<?= $socialinks->name; ?></div>
              </a></li>
                <?php endforeach; ?>
            <?php endif;?>
              <li><a class="flat-box" target="_blank" href="<?php $this->options->feedUrl(); ?>">
                  <div class='name'><i class="fa-solid fa-square-rss" aria-hidden="true"></i>&nbsp;&nbsp;文章 RSS</div>
              </a></li>
              <li><a class="flat-box" target="_blank" href="<?php $this->options->commentsFeedUrl(); ?>">
                  <div class='name'><i class="fa-solid fa-square-rss" aria-hidden="true"></i>&nbsp;&nbsp;评论 RSS</div>
              </a></li>
          
          </ul>
      </div>
      </section>
      <?php endif; ?>

      <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
        <section class='m_widget categories'>
      <div class='header'><i class="fa fa-list" aria-hidden="true"></i>分类</div>
      <div class='content'>
      <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=entry'); ?>
          
          
          
      </div>
      </section>
      <?php endif; ?>

      <?php if (!empty($this->options->sidebarBlock) && in_array('ShowTags', $this->options->sidebarBlock)): ?>
      <?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=mid&ignoreZeroCount=1&desc=0&limit=30')->to($tags); ?>
<?php if($tags->have()): ?>
      <div class="m_widget tagcloud">
          <div class="header"><i class="fa fa-tags" aria-hidden="true"></i>标签云</div>
          <div class='content'>
          <?php while ($tags->next()): ?>
              <a href="<?php $tags->permalink(); ?>" title="<?php $tags->count(); ?> 个话题" style="font-size: 17px; color: #404040"><?php $tags->name(); ?></a>
              <?php endwhile; ?>
          </div>
      </div>
      <?php else: ?>
      <div class="m_widget tagcloud">
          <div class="header"><i class="fa fa-tags" aria-hidden="true"></i>尚无标签</div>
      </div>
      <?php endif; ?>
      <?php endif; ?>

      <?php if (!empty($this->options->sidebarBlock) && in_array('ShowWeather', $this->options->sidebarBlock)): ?>
        <section class='m_widget weather'>
      <div class='header'><i class="fa fa-cloud" aria-hidden="true"></i>天气</div>
      <div class='content'>
      <div id="weather"></div>
      <script src="https://cdn.staticaly.com/gh/StarWEB890/TuChuang@master/weather.js"></script>
      </div>
      </section>
      <?php endif; ?>
      <?php if ($this->options->musicid): ?>
        <link rel="stylesheet" href="https://unpkg.com/aplayer@1.10.1/dist/APlayer.min.css">
      <style>
          .aplayer .aplayer-lrc p {
              
              font-size: 12px;
              font-weight: 700;
              line-height: 16px !important;
          }
          .aplayer .aplayer-lrc p.aplayer-lrc-current {
              
              font-size: 15px;
              color: #42b983;
          }
          
          .aplayer.aplayer-fixed.aplayer-narrow .aplayer-body {
              left: -66px !important;
          }
          .aplayer.aplayer-fixed.aplayer-narrow .aplayer-body:hover {
              left: 0px !important;
          }
          
      </style>
      <div class="">
          <div class="row">
              <meting-js class="col l8 offset-l2 m10 offset-m1 s12"
                         server="<?php $this->options->musicserver(); ?>"
                         type="<?php $this->options->musictype(); ?>"
                         id="<?php $this->options->musicid(); ?>"
                         fixed='true'
                         autoplay='false'
                         theme='#42b983'
                         loop='all'
                         order='random'
                         preload='auto'
                         volume='0.7'
                         list-folded='true'
              >
              </meting-js>
          </div>
      </div>
      
      <script src="https://unpkg.com/aplayer@1.10.1/dist/APlayer.min.js"></script>
      <script src="https://unpkg.com/meting/dist/Meting.min.js"></script>
      <?php endif; ?>
      
            </aside>
          </div>
        </div>