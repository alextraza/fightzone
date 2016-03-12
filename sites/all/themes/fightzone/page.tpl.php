<?php
global $base_path; global $base_root; 
$style_link = $base_root . $base_path . $directory;
?>
<div class="preloader">
</div>

<!-- HEADER -->
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-5">

				<div class="logo">
					<?php if ($logo): ?>
					<a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
					<?php endif; ?>
				</div>
				<?php if ($site_name || $site_slogan): ?>
				<div class="clearfix">
                        <?php if ($site_name): ?>
                        <span id="site-name"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><?php print str_replace(' ', '<br>', $site_name); ?></a></span>
                        <?php endif; ?>
                        <?php if ($site_slogan): ?>
                    <span id="slogan"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><?php print $site_slogan; ?></a></span>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                </div>

			<div class="col-md-7">
				<div class="top-banner">
				<?php print render($page['top_banner']); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="search">
					<?php print render($page['top_search']); ?>
				</div>
				
			</div>
		</div>
	</div>
</header>

<!-- MAIN -->

<div class="container">
	<div id="content">
		<div class="row">
			<div class="col-md-5 sidebar">
				<aside>
<h1 class="side-title">Панель навигации</h1>
					<?php print render($page['sidebar']); ?>
					<div class="banners">
						<?php print render($page['sidebar_banners']); ?>
					</div>
				</aside>
			</div>



			<div class="col-md-7">
				<div class="main">
					<?php print $breadcrumb; ?>
					<?php if ($page['highlighted']): ?>
					<div id="highlighted">
						<?php print (render['highlighted']); ?>
					</div>
					<?php endif; ?>
					<?php if ($messages): ?>
            		<div id="console" class="clearfix">
            			<?php print $messages; ?>
            		</div>
            		<?php endif; ?>

					<?php if ($action_links): ?>
            			<ul class="action-links">
            				<?php print render($action_links); ?>
            			</ul>
            		<?php endif; ?>
					<?php if ($tabs): ?>
						<?php print render($tabs); ?>
					<?php endif; ?>
<?php //if ($node->type != 'video'): ?>
<div class="title">
	<h1>
		<?php echo $title; ?>
	</h1>
</div>
<?php //endif; ?>
					<?php print render($page['content']); ?>
				</div>
			</div>
		</div>
	</div>

</div>



<!-- FOOTER -->
<footer>
<div class="container">
	<div class="row">
		<div class="col-md-3">
				<div class="logo">
					<?php if ($logo): ?>
					<a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
					<?php endif; ?>
				</div>
                        <span class="site-name"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><?php print str_replace(' ', '<br>', $site_name); ?></a></span>

		</div>
		<div class="col-md-7">
			<?php print render($page['footer_banner']) ?>
		</div>
		<div class="col-md-2"></div>
	</div>
			<?php print render($page['footer_stats']) ?>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<?php print render($page['copyright']) ?>
		</div>
	</div>
</div>
</footer>
