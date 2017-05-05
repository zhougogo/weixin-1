@extends('hs.layouts')

@section('content')
    @if($quantity<4)
        <div class="page page5">
            <div class="logo">
                <img src="{{asset('img/p2/ptBg.png')}}"/>
            </div>
            <div class="content">
                <p class="fs">恭喜你答对了<span>{{$quantity}}</span>题</p>
                <p class="aten">更多购买好礼请关注惠氏S-26京东旗舰店</p>
                <a href="">
                    <img src="{{asset('img/jd.png')}}"/>
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

@endsection