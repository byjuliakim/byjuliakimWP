$(function(){
	$('span').on('click', function(){
		$(this).find('input').focus().css({
			'background': '#4A89DC',
			'width':'100%',
		});
	});

	$('span').focusout(function(){
		$(this).find('input').css({
			'background': 'transparent',
			'width':'0%',
		});
	});
	$('span').on('click', function(){
		$(this).find('textarea').focus().css({
			'background': '#7b808b',
			'width':'100%',
		});
	});

	$('span').focusout(function(){
		$(this).find('textarea').css({
			'background': 'transparent',
			'width':'0%',
		});
	});

	console.log("It's working");

});