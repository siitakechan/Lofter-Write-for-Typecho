<?php
/**
 * 这是移植/修改自 Lofter《写》的一套皮肤
 * 
 * @package Lofter Write for Typecho
 * @author 香菇(siitake.cn)
 * @version 1.0
 * @link http://siitake.cn/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

	<div class="g-mn">
		<div class="g-box f-cb">
			<div class="m-posts">
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
			</div>
			
			<div class="m-page f-cb">
				<?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
			</div>
		</div>
	</div>

<?php //$this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>


