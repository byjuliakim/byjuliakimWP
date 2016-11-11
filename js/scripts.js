$(function(){
	//sexy formsssss
	$('span').on('click',function(){
		$(this).find('input, textarea').focus().css({
			'background': '#4A89DC',
			'width':'100%',
		});
	});
	$('input, textarea').on('focus',function(){
		$(this).css({
			'background': '#4A89DC',
			'width':'100%',
		});
	});
	$('span').focusout(function(){
		$(this).find('input, textarea').each(function(){
		    var text_value=$(this).val();
		    if(text_value=='')
		      {
			       $(this).css({
			       	'background': 'transparent',
			       	'width':'1%',
			       });
		       } else{
		       		$(this).css({
		       			'background': '#4A89DC',
		       			'width':'100%',
		       		});
		       }
		  });
	});

	// $('span').on('click', function(){
	// 	$(this).find('textarea').focus().css({
	// 		'background': '#4A89DC',
	// 		'width':'100%',
	// 	});
	// });

	// $('span').focusout(function(){
	// 	$(this).find('textarea').css({
	// 		'background': 'transparent',
	// 		'width':'0%',
	// 	});
	// });
	// if ($('.label').css('left') === '0px'){
	// 	$('.label').on('click',function(){
	// 		$(this).css({
	// 			'left': '100%',
	// 			'transform': 'translateX(-100%)',
	// 		});
	// 	});	
	// } 
	// else{
		$('.label').on('click',function(){
			$(this).toggleClass('labelToggle');
			$(this).toggleClass('.after','before');
			$(this).parent().next().slideToggle('show');
			$('html, body').animate({
			        scrollTop: $(this).offset().top - 15
			    }, 2000);
		});	
	// }
	// if ($('.label').css('left') !== '0px'){
	// 	$('.label').on('click',function(){
	// 		$(this).css({
	// 			'left': '0px',
	// 			'transform': 'translateX(-100%)',
	// 		});
	// 	});	
	// } 
	// $('.label').on('click',function(){
	// 	$(this).animate({"right": '0'})
	// });



	console.log("It's working");

});

function drawing() {
	var c = document.getElementById('star');
	var ctx = c.getContext('2d');
	var xMax = c.width = window.screen.availWidth;
	var yMax = c.height = window.screen.availHeight;

	var hmTimes = Math.round(xMax + yMax);	
	
	for(var i=0; i<=hmTimes; i++) {
	  var randomX = Math.floor((Math.random()*xMax)+1);
	  var randomY = Math.floor((Math.random()*yMax)+1);
	  var randomSize = Math.floor((Math.random()*2)+1);
	  var randomOpacityOne = Math.floor((Math.random()*9)+1);
	  var randomOpacityTwo = Math.floor((Math.random()*9)+1);
	  var randomHue = Math.floor((Math.random()*360)+1);
    if(randomSize>1) {
      ctx.shadowBlur = Math.floor((Math.random()*15)+5);
      ctx.shadowColor = "white";
	  }
    ctx.fillStyle = "hsla("+randomHue+", 30%, 80%, ."+randomOpacityOne+randomOpacityTwo+")";
	  ctx.fillRect(randomX, randomY, randomSize, randomSize);
	}
  
}
drawing();