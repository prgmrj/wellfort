$(document)
	.on('mouseenter mouseleave', '.gnb', menuopen)
	.on('scroll', gnbstyle)
	.on('click', '.dim', closedim)
	.on('click', '.mmenu', opendim)
	.on('click', '.mdp1', opendp2)
	.on('click', '.mdp2._back', todp1);

function menuopen(e){
	if (e.type == 'mouseenter')
		$('header').addClass('_opened');
	else
		$('header').removeClass('_opened');
}

function gnbstyle(){
	if ($(document).scrollTop() > 40)
		$('header').addClass('_scrolled');
	else
		$('header').removeClass('_scrolled');
}

function closedim(){	
	$('.mdepth').removeClass('_active');
	$('.dim').removeClass('_active');
	$('body').css('overflow', 'auto');
	
	setTimeout(function(){
		$('.mdepth').removeClass('_left');
		$('.mdepth2').removeClass('_left');
		$('.mdepth').css('display', 'none');
		$('.mdepth2').css('display', 'none');
		$('.dim').css('display', 'none');
		$('.i').removeClass('_active');
	},1);
}

function opendim(){
	$('.mdepth').css('display', 'block');
	$('.mdepth2').css('display', 'block');
	$('.dim').css('display', 'block');
	$('body').css('overflow', 'hidden');
	setTimeout(function(){
		$('.mdepth').addClass('_active');
		$('.dim').addClass('_active');
	},1);
}

function initdim(){
	$('.mdepth').css('display', 'none');
	$('.mdepth2').css('display', 'none');
	$('.dim').css('display', 'none');
}

function opendp2(){
	$('.i').removeClass('_active');
	$('.i').eq($(this).index()).addClass('_active');
	$('.mdepth').addClass('_left');
	$('.mdepth2').addClass('_left');
}

function todp1(){
	$('.mdepth').removeClass('_left');
	$('.mdepth2').removeClass('_left');
}

$(function(){
	initdim();
});