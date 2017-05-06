var clientHeight = $(window).height() ;

var clientWidth = $(window).width();
//
//
$('.popup').css('height',clientHeight);

//$('.all').css('width',clientWidth*8/10);
//console.log(123);

//$('.popup img').eq(1).click(function(){
//	
//	$('.popup').css('display','none');
//	
////	console.log(123);
//	
//})
count();
function count(){
	
	var num = 30;
	var timer = setInterval(function(){
		num--;
		$('.page2 .container .count span').html(num);
		
		if(num<=0){
			window.location.href = 'http://www.dtdream.com/';
			clearInterval(timer);
		}
	},1000)
	
	$('.page2 .container .return').click(function(){
		window.location.href = 'http://www.dtdream.com/';
	})
}
