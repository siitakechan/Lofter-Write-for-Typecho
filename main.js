//自定义JS
//滚动条美化
$('body').niceScroll({
	cursorcolor: "#aaa",// 光标颜色
	cursoropacitymax: 1, //改变不透明度非常光标处于活动状态（scrollabar“可见”状态），范围从1到0
	touchbehavior: false, //使光标拖动滚动像在台式电脑触摸设备
	cursorwidth: "5px", //像素光标的宽度
	cursorborder: "0", // 	游标边框css定义
	cursorborderradius: "5px",//以像素为光标边界半径
	autohidemode: true //是否隐藏滚动条
});
//代码高亮
hljs.initHighlightingOnLoad();
//本来自己包装了API，结果最后还是偷了哞菇酱的JS
setTimeout("getkoto()",1000);
function getkoto(){
	var loader = document.createElement('script');
	loader.setAttribute('src', 'http://api.hitokoto.us/rand?encode=jsc&fun=echokoto');
	document.getElementById("hitokoto").appendChild(loader);
	setTimeout("getkoto()",10000);
}
function echokoto(result){
	var hc = eval(result);
	document.getElementById("hitokoto").innerHTML = hc.hitokoto;
}