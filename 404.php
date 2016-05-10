<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

	<div class="g-mn">
		<div class="g-box f-cb">
			<div class="m-posts">
			
				<div class="m-post">
					<div class="cont">
						<div class="text f-cb">
							<h2>404 - <?php _e('页面没找到'); ?></h2>                        
							<p><?php _e('你想查看的页面已被转移或删除了, 要不要搜索看看: '); ?></p>
						</div>
					</div>
					<form method="post">
						<p><input type="text" name="s" class="u-ipt" autofocus /></p>
						<p><button type="submit" class="u-btn u-btn-c4"><?php _e('搜索'); ?></button></p>
					</form>
				</div>
				
			</div>
			
		</div>
	</div>

<?php $this->need('footer.php'); ?>
