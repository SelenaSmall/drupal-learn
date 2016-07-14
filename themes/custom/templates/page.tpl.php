<div class="custom-header clearfix">
	<div class="logo-div">
		<?php if ($logo): ?>
			<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
				<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
			</a>
		<?php endif; ?>
	</div>
	<div class="custom-main-menu">
		<?php print render($page['main_menu']); ?>
	</div>
</div>

<div class="main-content-area">
	<div class="main-content">
		<div class="custom-content-container-div clearfix">
			<?php if ($messages): ?>
				<div id="messages">
					<div class="section clearfix">
						<?php print $messages; ?>
					</div>
				</div>
			<?php endif; ?>
			 
			<?php if ($breadcrumb): ?>
				<div id="breadcrumb"><?php print $breadcrumb; ?></div>
			<?php endif; ?>
			 
			<h1><?php print $title; ?></h1>
			 
			<?php print render($page['content']); ?>
		</div>
		<div class="custom-sidebar-right clearfix">
			<?php if ($page['sidebar-right']): ?>
			  <div id="sidebar-right" class="column sidebar"><div class="section">
			    <?php print render($page['sidebar-right']); ?>
			  </div></div> <!-- /.section, /#sidebar-right -->
			<?php endif; ?>	
		</div>
	</div>
</div>	

<div class="footer">
	<hr />
    <?php if ($page['footer']): ?>
    <div id="footer" class="clearfix">
      <?php print render($page['footer']); ?>
    </div> <!-- /#footer -->
  <?php endif; ?>
	<div class="footer-text">
		&copy; 2016 custom. All rights reserved.
	</div>
</div>