$(function(){
	// init();
	if (window.matchMedia("(max-width: 640px)").matches) {
	  	var init = function(){
	  		$('.box').find('.label').addClass('labelToggle');
	  		$('.box').find('.boxbox').css('display', 'block');
	  		$('html, body').animate({
	  		        scrollTop: $('.profile .label').offset().top - 15
	  		    }, 800);
	  	};
	  	$('.blink').css('display','none')
	  	setTimeout(init, 1000);
	} else {
		// var init = function(){
		// 	$('.profile').find('.label').addClass('labelToggle');
		// 	$('.profile').find('.boxbox').css('display', 'block');
		// 	$('html, body').animate({
		// 	        scrollTop: $('.profile .label').offset().top - 15
		// 	    }, 800);
		// };
		$('.labelBox').hover(
			function(){
				if($(this).find('.label').hasClass('labelToggle')){
					$(this).find($('.blink')).css('display','none')
				} else {
					$(this).find($('.blink')).css({
						'animation':'blinker 1s linear infinite',
						'display' : 'block'
					});
					$(this).find($('.fa-arrow-left')).css('animation', 'left .8s linear infinite')
				}
			},
			function(){
				$('.blink').css('animation','none')
			}
		)

		//setTimeout(init, 2000);
	};


	//sexy formsssss
	$('.wpcf7-form span').on('click',function(){
		$(this).find('input, textarea').focus().css({
			'background': '#4A89DC',
			'width':'100%',
		});
	});
	$('.wpcf7-form input, .wpcf7-form textarea').on('focus',function(){
		$(this).css({
			'background': '#4A89DC',
			'width':'100%',
		});
	});
	$('.wpcf7-form span').focusout(function(){
		$(this).find('input, textarea').each(function(){
		    var text_value=$(this).val();
		    if(text_value=='')
		      {
			       $(this).css({
			       	'background': 'transparent',
			       	'width':'0%',
			       });
		       } else{
		       		$(this).css({
		       			'background': '#4A89DC',
		       			'width':'100%',
		       		});
		       }
		});
	});
	//sliding tags
	$('.label').on('click',function(){
		$(this).next().toggleClass('.noShow');
		$(this).toggleClass('labelToggle');
		$(this).toggleClass('.after','before');
		var self = this;
		$(this).parent().next().slideToggle(800);
		$('html, body').animate({
			scrollTop: $(self).offset().top - 15
			}, 800
		);
	});	

	$('.close').on('click',function(){
		var self = $(this).parent().prev().find('.label');
		// $(this).parent().prev().find('.label')
		$(self).toggleClass('labelToggle');
		// $(this).parent().prev().find('.label').toggleClass('.after','before');
		$(this).parent().slideToggle(800);
		$('html, body').animate({
	        scrollTop: $(self).offset().top - 15
	    }, 800);
	});	

	//twirl hover for social
	$('.socialTop li, .social li').hover(function(){
		$(this).find('a').css({
			'transform': 'rotateY(360deg)',
			'transition':'0.5s',
		})
	}, function(){
		$(this).find('a').css({
			'transform': 'rotateY(0deg)',
			'transition':'0s',
		});
	});

	//twirl hover for skills
	$('.eachSkill').hover(function(){
		$(this).find('i').css({
			'transform': 'rotateY(360deg)',
			'transition':'0.5s',
		})
	}, function(){
		$(this).find('i').css({
			'transform': 'rotateY(0deg)',
			'transition':'0s',
		});
	});
	console.log("It's working");
});

