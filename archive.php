<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

	<div class="g-mn">
		<div class="g-box f-cb">
			<div class="m-posts">
				<div class="m-post" style="margin-bottom:36px;">
					<h2 style="font-size:18px;"><?php $this->archiveTitle(array(
						'category'  =>  _t('分类 %s 下的文章'),
						'search'    =>  _t('包含关键字 %s 的文章'),
						'tag'       =>  _t('标签 %s 下的文章'),
						'author'    =>  _t('%s 发布的文章')
					), '', ''); ?></h2>
				</div>
			<?php if ($this->have()): ?>
			<?php while($this->next()): ?>
				<div class="m-post">
					<div class="cont">
						<div class="text f-cb">
							<h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>                        
							<?php $this->content('- 阅读剩余部分 -'); ?>
						</div>
					</div>
					<div class="subinfo">
						<?php $this->category(','); ?>
						<a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a>
						<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time>
					</div>
				</div>
				<?php endwhile; ?>
				<?php else: ?>
					<article class="post">
						<h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
					</article>
				<?php endif; ?>
			</div>
			
			<div class="m-page f-cb">
				<?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
			</div>
		</div>
	</div>

<?php $this->need('footer.php'); ?>
