$(document)
	.on('mouseenter mouseleave', '.gnb', menuopen)
	.on('scroll', gnbstyle);

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