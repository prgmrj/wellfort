$(document).on('mouseenter mouseleave', '#gnb', menuopen);

function menuopen(e){
	if (e.type == 'mouseenter')
		$('header').addClass('_opened');
	else
		$('header').removeClass('_opened');
}