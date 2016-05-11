简介
----

![Typecho 单栏自适应主题 Lofter Write for Typecho v1.0](http://img.sucx.cn/di/877S/Lofter-Write-for-Typecho-v1.jpg)

又做(fang)了一款主题，这次决定分享粗来，嗯！

主题名为“Lofter Write for Typecho v1.0”，因为仿自 Lofter 主题“写”，然后简单做了一点优化什么的。

 - 添加页面动效，啾～
 - 纯 CSS 适配移动端优化阅读体验
 - 副标题引入“一言”API
 - 浏览器标签标题添加可变动画
 - 美化滚动条
 - 添加 archives(归档) & links(友链) 页面模板
 - 使用多说替换了原生评论
 - 优化代码高亮显示

Q&A
----

 - 问：如何使用 archives(归档) 页面模板？
   答：后台创建页面->自定义模板->选择“全部文章归档”，正文留空填好标题发布即可

 - 问：如何使用 links(链接) 页面模板？
   答：后台创建页面->自定义模板->选择“友情链接”，填好标题正文填写以下JSON格式发布即可

```Json
{
	"小伙伴 ( *・ω・)": [
		{
			"title": "菇主页", 
			"url": "siitake.cn", 
			"desc": "可爱的蓝孩纸", 
			"logo": "http://siitake.cn/usr/themes/mouto/img/favicon.png"
		}, 
		{
			"title": "菇微博", 
			"url": "weibo.com/600120933", 
			"desc": "普通的香菇并没有成精", 
			"logo": "http://tp3.sinaimg.cn/3170193090/180/5755928494/1"
		}
	], 
	"Wo o(^▽^)o": [
		{
			"title": "菇游戏", 
			"url": "steamcommunity.com/id/whchina", 
			"desc": "吃土菇并不能买的起", 
			"logo": "http://ww4.sinaimg.cn/thumb180/3ca38969jw1ecauxw4t3sj20500500sl.jpg"
		}
	]
}
```

 - 问：如何启用多说评论框？
   答：主题默认关闭评论，找到主题的`comments.php`文件，按照如下方式将“false”修改为您的多说 shortname 即可

```Php
$duoshuoId = false; //开启评论请填写多说 shortname，如：$duoshuoId = 'duoshuo';
```

 - 问：我想自定 CSS 或 JS 怎么办？
   答：推荐不要修改css/和js/等文件夹中的内容，香菇为您在主题目录预留了 style.css 和 main.js 文件以便修改。

其他
----

演示地址：http://siitake.cn/

下载地址：https://github.com/siitakechan/Lofter-Write-for-Typecho
