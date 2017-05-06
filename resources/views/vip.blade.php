<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" href="{{asset('css2/index.css')}}" />
	</head>
	<body>
		<div class="all page1">
			<div class="header">
				<img src="{{asset('img2/header.jpg')"/>
			</div>
			<div class="con">
				<form action="{{url('/vip/create')}}" method="post">
					{{ csrf_field() }}
					<p>请您填写以下参会信息！</p>
					<div class="font">
						<span>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名:</span>
						<input type="text" name="name" id="name"/>
						
					</div>
					<div class="font">
						<span>单&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;位:</span>
						<input type="text" name="company" id="company"/>
					</div>				
					<div class="font">
						<span>职&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;务:</span>
						<input type="text" name="job" id="job"/>
					</div>				<div>
						<span>手机号码:</span>
						<input type="text" name="phone" id="phone"/>
					</div>				
					<div class="font">
						<span>邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱:</span>
						<input type="text" name="email" id="email"/>
					</div>
					<div class="">
						<span>所属省份:</span>
						<select name="province" id="province">
							<option value="">选择省份</option>
							<option value="北京市">北京市</option>
							<option value="天津市">天津市</option>
							<option value="上海市">上海市</option>
							<option value="重庆市">重庆市</option>
							<option value="河北省">河北省</option>
							<option value="河南省">河南省</option>
							<option value="云南省">云南省</option>
							<option value="辽宁省">辽宁省</option>
							<option value="黑龙江省">黑龙江省</option>
							<option value="湖南省">湖南省</option>
							<option value="安徽省">安徽省</option>
							<option value="山东省">山东省</option>
							<option value="新疆维吾尔">新疆维吾尔</option>
							<option value="江苏省">江苏省</option>
							<option value="浙江省">浙江省</option>
							<option value="江西省">江西省</option>
							<option value="湖北省">湖北省</option>
							<option value="广西壮族">广西壮族</option>
							<option value="甘肃省">甘肃省</option>
							<option value="山西省">山西省</option>
							<option value="内蒙古">内蒙古</option>
							<option value="陕西省">陕西省</option>
							<option value="吉林省">吉林省</option>
							<option value="福建省">福建省</option>
							<option value="贵州省">贵州省</option>
							<option value="广东省">广东省</option>
							<option value="青海省">青海省</option>
							<option value="西藏">西藏</option>
							<option value="四川省">四川省</option>
							<option value="宁夏回族">宁夏回族</option>
							<option value="海南省">海南省</option>
							<option value="台湾省">台湾省</option>
							<option value="香港特别行政区">香港特别行政区</option>
							<option value="澳门特别行政区">澳门特别行政区</option>
						</select>
					</div>
					<div>
						<span>所属行业:</span>
						<select name="trade" id="trade">
							<option value="">选择行业</option>
							<option value="政务">政务</option>
							<option value="企业">企业</option>
							<option value="公安">公安</option>
							<option value="教育">教育</option>
							<option value="交通">交通</option>
							<option value="医疗">医疗</option>
							<option value="其他">其他</option>
						</select>
					</div>
					<div>
						<span>所属身份:</span>
						<select name="identity" id="identity">
							<option value="">选择身份</option>
							<option value="ISV">ISV</option>
							<option value="集成商">集成商</option>
							<option value="渠道商">渠道商</option>
							<option value="客户">客户</option>
							<option value="媒体">媒体</option>
							<option value="其他">其他</option>
						</select>
					</div>
					<div  class="submit">
						<label for="submitBtm"><img src="{{asset('img2/submit.png')}}"/></label>
						<input id="submitBtm" type="submit" value="提交"/>
					</div>
				</form>
				<div class="erweima">
					<img src="{{asset('img2/erweima.png')" alt="">
				</div>
			</div>
			<div class="footer">
				<img src="{{asset('img2/footer.jpg')" alt="">
			</div>
			<!--<div class="popup">
				<div class="content">
					<img src="img2/closeTop.png"/>
					<img src="img2/close.png"/>
				</div>
			</div>-->
		</div>
		
	</body>
	<script src="{{asset('js2/jquery-1.10.2.js')}}" type="text/javascript" charset="utf-8"></script>
	<script src="{{asset('js2/index.js')}}" type="text/javascript" charset="utf-8"></script>
</html>
