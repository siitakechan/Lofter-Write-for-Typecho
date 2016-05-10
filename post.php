<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

	<div class="g-mn">
		<div class="g-box f-cb">
			<div class="m-posts">

				<div class="m-post">
					<div class="cont">
						<div class="text f-cb">
							<h2><?php $this->title() ?></h2>
							<p>
								<?php $this->category(','); ?>
								<a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a>
								<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time>
							</p>
							<?php $this->content(); ?>
							<p itemprop="keywords" class="tags"><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p>
						</div>
						<ul class="post-near">
							<li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
							<li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
						</ul>
					</div>
				</div>

			</div>
			
			<div class="f-cb" id="comments">
				<?php $this->need('comments.php'); ?>
			</div>
		</div>
	</div>

<?php $this->need('footer.php'); ?>
