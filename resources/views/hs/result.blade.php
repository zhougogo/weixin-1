@extends('hs.layouts')

@section('content')
	    <div class="page page5 hidden">
            <div class="logo">
                <img src="{{asset('img/p2/ptBg.png')}}"/>
            </div>
            <div class="content">
                <p class="fs">恭喜你答对了<span>3</span>题</p>
                <p class="aten">更多购买好礼请关注惠氏S-26京东旗舰店</p>
                <a href="">
                    <img src="asset('img/jd.png')}}"/>
                </a>
                <!--<img src="img/result.png"/>-->
            </div>
        </div>
		<div class="page page2 hidden">
			<div class="logo">
				<img src="img/p2/ptBg.png" />
			</div>
			<div class="popup hidden errPopup">
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
@endsection

@section('script')

@endsection