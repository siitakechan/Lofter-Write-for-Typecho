<?php
/**
 * 友情链接
 *
 * @package custom
 * @author 香菇(siitake.cn)
 */
$this->need('header.php');?>

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
							<ul class="hp">
							<?php
								$links = json_decode ($this->text, true);
								foreach($links as $key => $value){
									echo '<li class="hr"><h2>'.$key.'</h2></li>';
									foreach($value as $val1){
										echo '<li><a href="//'.$val1['url'].'" target="_blank"><img src="'.$val1['logo'].'"><h3>'.$val1['title'].'</h3><p>'.$val1['desc'].'</p><span>'.$val1['url'].'</span></a> </li>';
									}
								}
							?>
							</ul>
						</div>

					</div>
				</div>

			</div>
			
			<div class="f-cb">
				<?php $this->need('comments.php'); ?>
			</div>
		</div>
	</div>

<?php $this->need('footer.php'); ?>