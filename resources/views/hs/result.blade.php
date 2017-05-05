@extends('hs.layouts')

@section('content')
    @if($quantity<4)
        <div class="page page5">
            <div class="logo">
                <img src="{{asset('img/p2/ptBg.png')}}"/>
            </div>
            <div class="content">
                @if($quantity==0)
                    <p class="fs">恭喜你答对了<span>{{$quantity}}</span>题</p>
                @else
                    <p class="fs">恭喜你答对了<span>{{$quantity}}</span>题</p>
                @endif
                <p class="aten">您有一份来自京东惠氏店铺的好礼，等待点击领取！</p>
                <a href="http://coupon.m.jd.com/coupons/show.action?key=01be87ffecc74045848d7cd299eb292a&roleId=6405081&to=sale.jd.com/m/act/sbtJUVC3NlgfI.html">
                    <img src="{{asset('img/get.png')}}" alt="">
                </a>
                <!--<img src="img/result.png"/>-->
            </div>
        </div>
    @elseif($quantity==4)
        <div class="page page2">
            <div class="logo">
                <img src="{{asset('img/p2/ptBg.png')}}"/>
            </div>
            <div class="popup popup2">
                <div class="content">
                    <div class="contentBg">
                        <img src="{{asset('img/error/datiBg.png')}}"/>
                    </div>
                    <div class="con">
                        <img src="{{asset('img/win/bq.png')}}"/>

                    </div>
                    <p class="p2">恭喜你答对了<span>4</span>题</p>
                    <p class="p3">还获得了抽奖机会</p>
                    <!--<p>很遗憾，正确的答案是<span>B</span></p>-->
                    <div class="bomBg">
                        <a href="{{url('hs/draw')}}">
                            <img src="{{asset('img/beginBtm.png')}}"/>
                        </a>
                    </div>
                    <div class="cancelBtm">
                        <img src="{{asset('img/error/cancel.png')}}"/>
                    </div>
                </div>
            </div>
        </div>
    @endif


@endsection

@section('script')
    <script type="application/javascript">
        $('.popup2 .cancelBtm').click(function () {

            $('.popup2').css('display', 'none')

        })
    </script>
@endsection