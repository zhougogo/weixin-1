<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="{{asset('css2/index.css')}}" />
	</head>
	<body>
		<div class="all page2">
			<div class="header">
				<img src="{{asset('img2/header.jpg')}}"/>
			</div>
			<div class="content">

				<div class="left">
					<div class="hea">
						<img src="{{asset('img2/submitBg_03.png')" alt="">
					</div>
					<div class="container">
						<p class="count"><span>30</span>s后自动返回</p>
						<div class="return">
							<img src="{{asset('img2/returnBtm.png')"/>
						</div>
					</div>
				</div>
				<div class="right">
					<div class="erweima">
						<img src="{{asset('img2/erweima.png')" alt="">
					</div>
				</div>
				
			</div>

			<div class="footer">
				<img src="{{asset('img2/footer.jpg')" alt="">
			</div>

		</div>
	</body>
	<script src="{{asset('js2/jquery-1.10.2.js')}}" type="text/javascript" charset="utf-8"></script>
	<script src="{{asset('js2/index.js')}}" type="text/javascript" charset="utf-8"></script>
	<script>
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
	</script>
</html>
