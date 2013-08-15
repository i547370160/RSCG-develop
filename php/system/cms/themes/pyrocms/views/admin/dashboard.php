<!-- Add an extra div to allow the elements within it to be sortable! -->
<div id="sortable">

	<!-- Dashboard Widgets -->
	{{ widgets:area slug="dashboard" }}
	
	<!-- Begin Quick Links -->
	<?php if ($theme_options->pyrocms_quick_links == 'yes') : ?>
	<div class="one_full">
		
		<section class="draggable title">
            <h4><?php echo lang('cp:admin_quick_links'); ?></h4>
			<a class="tooltip-s toggle" title="切换"></a>
		</section>
		
		<section id="quick_links" class="item <?php echo isset($rss_items) ?>">
			<div class="content">
				<ul>
					<?php if((array_key_exists('pages', $this->permissions) OR $this->current_user->group == 'admin') AND module_enabled('pages')): ?>
					<li>
						<a class="tooltip-s" title="管理页面" href="<?php echo site_url('admin/pages') ?>"><?php echo Asset::img('icons/pages.png', '管理页面') ?></a>
					</li>
					<?php endif ?>
					
					<?php if((array_key_exists('files', $this->permissions) OR $this->current_user->group == 'admin') AND module_enabled('files')): ?>
					<li>
						<a class="tooltip-s" title="管理档案" href="<?php echo site_url('admin/files') ?>"><?php echo Asset::img('icons/files.png', '管理档案') ?></a>
					</li>
					<?php endif ?>
				</ul>
			</div>
		</section>

	</div>	
	<?php endif ?>
	<!-- End Quick Links -->
	<script type="text/javascript">
		(function ($) {

			$('#remove_installer_directory').on('click', function (e) {
				e.preventDefault();
				var $parent = $(this).parent();
				$.get(SITE_URL + 'admin/remove_installer_directory', function (data) {
					$parent.removeClass('warning').addClass(data.status).html(data.message);
				});
			});
		})(jQuery);
	</script>
</div>
<!-- End sortable div -->
