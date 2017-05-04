<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title>惠氏</title>
		<meta name="description" content="惠氏">
		<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1, maximum-scale=1,user-scalable=no">
		<meta name="format-detection" content="telephone=no" />
		<meta http-equiv="X-UA-Compatible" content="chrome=1" />
		<link rel="stylesheet" href="css/common.css" />
		<link rel="stylesheet" href="css/index.css" />
		<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="js/awardRotate.js"></script>
		<script src="js/z.js" type="text/javascript" charset="utf-8"></script>
	</head>

	<body>
		<div class="page page1" id="page1">
			<div class="logo">
				<img src="img/begin/beginLogo.png" />
			</div>
			<div class="content">
				<div class="contentBg">
					<img src="img/begin/beginIn.png" />
				</div>
				<div class="btm">
					<img src="img/begin/beginBtm.png" />
				</div>
			</div>
		</div>
		<div class="page page2 hidden">
			<div class="logo">
				<img src="img/p2/ptBg.png" />
			</div>
			<div class="content">
				<div class="contentBg">
					<img src="img/p2/popupBg.png" />
				</div>
				<div class="subjectAll">
					<div class="subject subject1 hidden">
						<div class="title">
							你知道惠氏S-26智慧发现的大脑神经元网络化的关键要素是什么吗？
						</div>
						<p>A.DHA</p>
						<p>B.神经鞘磷脂</p>
						<p>C.乳蛋白</p>
					</div>
					<div class="subject subject2 hidden">
						<div class="title">
							你知道惠氏铂臻独特的生产工艺是什么吗？
						</div>
						<p>A.巴氏杀菌</p>
						<p>B.DHA胶囊包裹技术</p>
						<p>C.喷雾干燥</p>
					</div>
					<div class="subject subject3 hidden">
						<div class="title">
							你知道2016年瑞士在全球创新指数榜上排名第几？
						</div>
						<p>A.第一</p>
						<p>B.第二</p>
						<p>C.第三</p>
					</div>
					<div class="subject subject4 hidden">
						<div class="title">
							你知道惠氏铂臻集萃了瑞士的哪两大优势？
						</div>
						<p>A.自然+智慧</p>
						<p>B.创新+科技</p>
						<p>C.自然+科技</p>
					</div>
					<div class="subject subject5 hidden">
						<div class="title">
							你知道惠氏铂臻的奶源来自阿尔卑斯海拔多少米的牧场吗？
						</div>
						<p>A.500米</p>
						<p>B.800米</p>
						<p>C.1800米</p>
					</div>
					<div class="subject subject6 hidden">
						<div class="title">
							你知道惠氏铂臻的主要奶源地到工厂的距离吗？
						</div>
						<p>A.不足50KM</p>
						<p>B.不足90KM</p>
						<p>C.不足60KM</p>
					</div>
					<div class="subject subject7 hidden">
						<div class="title">
							你知道以下哪些是来自瑞士智造？
						</div>
						<p>A.惠氏S-26金装旗舰版</p>
						<p>B.惠氏S-26铂臻</p>
						<p>C.惠氏S-26艾智萌</p>
					</div>
					<div class="subject subject8 ">
						<div class="title">
							你知道惠氏铂臻的在瑞士的科研中心是哪一家吗？
						</div>
						<p>A.洛桑科研中心</p>
						<p>B.国家科研能力中心</p>
						<p>C.瑞士科学中心</p>
					</div>

				</div>

			</div>
			<div class="popup hidden">
				<div class="content">
					<div class="contentBg">
						<img src="img/error/datiBg.png" />
					</div>
					<div class="con">
						<img src="img/cancel.png" />

					</div>
					<p class="p1">很遗憾，正确的答案是<span>B</span></p>
					<div class="bomBg">
						<img src="img/win/f2.png" />
					</div>
					<div class="cancelBtm">
						<img src="img/error/cancel.png" />
					</div>

				</div>
			</div>
			<div class="popup popup2 hidden">
				<div class="content">
					<div class="contentBg">
						<img src="img/error/datiBg.png" />
					</div>
					<div class="con">
						<img src="img/win/bq.png" />

					</div>
					<p class="p2">恭喜你答对了<span>4</span>题</p>
					<p class="p3">还获得了抽奖机会</p>
					<!--<p>很遗憾，正确的答案是<span>B</span></p>-->
					<div class="bomBg">
						<img src="img/beginBt m.png" />
					</div>
					<div class="cancelBtm">
						<img src="img/error/cancel.png" />
					</div>

				</div>
			</div>
			<div class="popup popup3">
				<div class="content">
					<div class="contentBg">
						<img src="img/error/datiBg.png" />
					</div>
					<div class="con">
						<img src="img/cancel.png" />

					</div>
					<p class="p1">很遗憾!</p>
					<p class="p4">你离瑞士还有三道题的距离继续努力</p>
					<!--<div class="bomBg">
						<img src="img/win/f2.png"/>
					</div>-->
					<div class="cancelBtm">
						<img src="img/error/cancel.png" />
					</div>

				</div>
			</div>
		</div>
		<div class="page3">
			<img src="images/1.png" id="shan-img" style="display:none;" />
			<img src="images/2.png" id="sorry-img" style="display:none;" />
			<div class="banner">
				<div class="turnplate" style="background-image:url(img/turnplate-bg.png);background-size:100% 100%;">
					<canvas class="item" id="wheelcanvas" width="422px" height="422px"></canvas>
					<img class="pointer" src="img/turnplate-pointer.png" />
				</div>
			</div>

		</div>

	</body>

</html>