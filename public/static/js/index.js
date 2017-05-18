/*图片轮换*/
var _index = 0;
var timePlay = null;
$("#Adv .ImgList").eq(0).show().siblings("div").hide();

$("ul.button li").hover(function() {
	clearInterval(timePlay);
	_index = $(this).index();
	$(this).addClass("hover").siblings().removeClass("hover");
	$("#Adv .ImgList").eq(_index).fadeIn().siblings("div").fadeOut();
}, function() {
	autoPlay();
});

//自动轮播
//构建自动轮播的函数
function autoPlay() {
	timePlay = setInterval(function() {
		_index++;
		if(_index < 4) {
			if(_index == 3) {
				_index = -1;
			} //变成-1 
			$("ul.button li").eq(_index).addClass("hover").siblings().removeClass("hover");
			$("#Adv .ImgList").eq(_index).fadeIn().siblings("div").fadeOut();

		} else {
			_index = -1; /*设置序列号为-1,跳到播放第一张图片*/
		}
	}, 2000);
};
autoPlay();

window.onload = function() {
	function playauto() {
		var _width = $(window).width();
		var _height = $(window).height();
		var width_ = $('#login').width();
		var height_ = $('#login').height();
		$("#loginModal").css({
			left: _width / 2 - width_/2,
			top: _height / 2 - height_/2
		})
	}
	$(".but").click(function() {
		$("#bg").show();
		$("#loginModal").show();
        playauto();
	});
	$(".close").click(function() {
		$("#bg").hide();
		$("#loginModal").hide();
	})
};