$(document).ready(function() {
			
	//Модальное окно формы
	$("a[rel=fform]").fancybox({
		'transitionIn'		: 'elastic',
		'transitionOut'		: 'none',
		'titlePosition' 	: 'over',
		'imageScale'        : 'false',
		'centerOnScroll'    : 'true',
	});
	//Модальное окно формы

	$("a[rel=group]").fancybox({
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'titlePosition' 	: 'over',
		'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
			return '<span id="fancybox-title-over">Работа № ' + (currentIndex + 1) + '</span>';
		}
	});

	$("#various1").fancybox({
		'titlePosition'		: 'inside',
		'transitionIn'		: 'none',
		'transitionOut'		: 'none'
	});

	$("#various2").fancybox();

	$("#various3").fancybox({
		'width'				: '75%',
		'height'			: '75%',
		'autoScale'			: false,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'type'				: 'iframe'
	});

	$("#various4").fancybox({
		'padding'			: 0,
		'autoScale'			: false,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none'
	});
});