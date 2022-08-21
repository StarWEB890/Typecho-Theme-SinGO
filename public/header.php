<?php $this->need('public/head.php'); ?>

  <header class="l_header">
	<div class='wrapper'>
		<div class="nav-main container container--flex">
			<a class="logo flat-box" href='/' >
            <?php $this->options->title() ?>
			</a>
			<div class='menu'>
				<ul class='h-list'>
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
						<li>
							<a class='flat-box nav btn btn-primary btn-ghost btn-shine' href='<?php $pages->permalink(); ?>' title="<?php $pages->title(); ?>">
							<i class="<?php $pages->fields->headericon(); ?>" aria-hidden="true"></i>&nbsp;
                            <?php $pages->title(); ?>
							</a>
						</li>
                        <?php endwhile; ?>
				</ul>
			</div>
			
				<div class="m_search">
					<form name="searchform" class="form u-search-form">
						<input type="text" class="input u-search-input" placeholder="要搜什么？" />
						<span class="icon icon-search"></span>
					</form>
				</div>
			
			<ul class='switcher h-list'>
				
					<li class='s-search'><a href='javascript:void(0)'><span class="icon icon-search flat-box"></span></a></li>
				
				<li class='s-menu'><a href='javascript:void(0)'><span class="icon icon-menu flat-box"></span></a></li>
			</ul>
		</div>
		
		<div class='nav-sub container container--flex'>
			<ul class='switcher h-list'>
				<li class='s-comment'><a href='javascript:void(0)'><span class="icon icon-chat_bubble_outline flat-box"></span></a></li>
				<li class='s-top'><a href='javascript:void(0)'><span class="icon icon-arrow_upward flat-box"></span></a></li>
				<li class='s-toc'><a href='javascript:void(0)'><span class="icon icon-format_list_numbered flat-box"></span></a></li>
			</ul>
		</div>
	</div>
</header>
<aside class="menu-phone">
	<nav>
    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
			<a href="/" class="nav-<?php $pages->permalink(); ?> nav" title="<?php $pages->title(); ?>">
            <?php $pages->title(); ?>
			</a>
            <?php endwhile; ?>
	</nav>
</aside>