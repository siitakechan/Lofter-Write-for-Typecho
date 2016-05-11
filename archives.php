<?php
/**
 * 全部文章归档
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
							<h3>分类列表</h3>
							<?php date_default_timezone_set('Asia/Shanghai'); $this->widget('Widget_Metas_Category_List')->parse('<li><a href="{permalink}" title="{description}">{name}</a> ({count}) --> {description}</li>'); ?>
							<?php
								$this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
								$year=0; $mon=0; $i=0; $j=0;
								$all = array();
								$output = '';
								while($archives->next()):
									$year_tmp = date('Y',$archives->created);
									$mon_tmp = date('n',$archives->created);

									$y=$year; $m=$mon;
									if ($year != $year_tmp) {
										$year = $year_tmp;
										$all[$year] = array();
									}

									if ($mon != $mon_tmp) {
										$mon = $mon_tmp;
										array_push($all[$year], $mon);
										$output .= "<br><h3>$year 年 $mon 月</h3>";
									}
									$output .= '<div>['.date('m-d',$archives->created).'] <a href="'.$archives->permalink .'">'.$archives->title .'</a><!--('. $archives->commentsNum.')--></div>';
								endwhile;
								echo $output;
							?>
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