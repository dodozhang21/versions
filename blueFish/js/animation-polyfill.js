var IEPendulum = {
	$big: $('.balance-1'),
	$small: $('.balance-2'),
	init:function(){
		setTimeout(function(){
			IEPendulum.$big.animate({
				top: '-636px'
			},1000,function(){
				IEPendulum.startBigOne();
			});
			IEPendulum.$small.animate({
				top: '-342px'
			},600,function(){
				IEPendulum.startSmallOne();
			});
		},300);
	},
	startBigOne: function(){
		this.$big.rotate({
			duration:1500,
			animateTo:-7,
			easing: $.easing.easeInOutQuad,
			callback: function(){
				IEPendulum.rotateLeft(IEPendulum.$big, 3000);
			}
		});
	},
	startSmallOne: function(){
		this.$small.rotate({
			duration:1450,
			animateTo:-7,
			easing: $.easing.easeInOutQuad,
			callback: function(){
				IEPendulum.rotateLeft(IEPendulum.$small, 2900);
			}
		});
	},
	rotateLeft:function($el, duration){
		$el.rotate({
			duration:duration,
			animateTo:7,
			easing: $.easing.easeInOutQuad,
			callback: function(){
				IEPendulum.rotateRight($el, duration);
			}
		});
	},
	rotateRight:function($el, duration){
		$el.rotate({
			duration:duration,
			animateTo:-7,
			easing: $.easing.easeInOutQuad,
			callback: function(){
				IEPendulum.rotateLeft($el, duration);
			}
		});
	}
}
var NailCells = {
	init: function(){
		$('.cell-image').each(function(){
			$(this).hover(function(){
				$(this).rotate({animateTo:-10, duration:500});
			},function(){
				$(this).rotate({animateTo:0, duration:500});
			});
		});
	}
}

IEPendulum.init();
NailCells.init();