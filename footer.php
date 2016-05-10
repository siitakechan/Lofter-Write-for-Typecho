<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="g-ft">
		<div class="m-ft"><span title="Copyright">&copy;</span><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a><br>THEME BY <a href="http://siitake.cn/">SIITAKE</a><!--请尽量保留版权信息，谢谢！--></div>
	</div>
</div>
<script type="text/javascript" src="//cdn.bootcss.com/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery.nicescroll.js'); ?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('highlight/highlight.pack.js'); ?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('main.js'); ?>"></script>
<?php
$jokings = array(
	array("(⊙o⊙)天啦噜要炸辣！", "(/≧▽≦/)哼！原谅你好了！"),
	array("404 Not Found", "(/≧▽≦/)咦？又好啦！"),
	array("(●—●)喔哟，崩溃啦！", "(/≧▽≦/)哈！又好惹！"),
	array("(●\'◡\'●)躲好了哟！", "(/≧▽≦/)哎？找到惹！"),
	array("(⊙_⊙)怎么办！", "(/≧▽≦/)嘿！没事啦！")
	);
$i=array_rand($jokings);
?>
<script>
//JS来自 http://www.ouch.me/    WTF..(￢︿̫̿￢☆)
var OriginTitile = document.title;
var titleTime;
document.addEventListener('visibilitychange', function () {
    if (document.hidden) {
        $('[rel="shortcut icon"]').attr('href', "<?php $this->options->themeUrl('img/warning.ico'); ?>");
        document.title = '<?php echo $jokings[$i][0]; ?>';
        clearTimeout(titleTime);
    }
    else {
        $('[rel="shortcut icon"]').attr('href', "<?php $this->options->themeUrl('img/favicon.ico'); ?>");
        document.title = '<?php echo $jokings[$i][1]; ?>' + OriginTitile;
        titleTime = setTimeout(function () {
            document.title = OriginTitile;
        }, 2000);
    }
});
</script>
</body>
</html>