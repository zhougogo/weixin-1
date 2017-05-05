@extends('hs.layouts')

@section('content')
    <div class="page3 page">
        <div class="content">
            <div class="logo">
                <img src="{{asset('img/p2/ptBg.png')}}"/>
            </div>
            <div class="banner">
                <div class="turnplate" style="background-image:url({{asset('img/turnplate-bg.png')}});background-size:100% 100%;">
                    <canvas class="item" id="wheelcanvas" width="422px" height="422px"></canvas>
                    <img class="pointer" src="{{asset('img/turnplate-pointer.png')}}"/>
                </div>
            </div>
            <div class="btm beginBtm">
                <img src="{{asset('img/beginBtm.png')}}"/>
            </div>
        </div>

        <div class="popup hidden">
            <div class="container">
                <div class="num">
                    <div class="numBg">
                        <img src="{{asset('img/cBg.png')}}"/>
                    </div>
                    <p>中奖码</p>
                    <span>12345</span>
                </div>
                <p class="shong">恭喜你抽中了<span>未知</span>奖品</p>
                <p class="getNum">请凭此号码去工作人员处领取奖品。</p>
                <div class="cancel">
                    <img src="{{asset('img/error/cancel.png')}}"/>
                </div>


            </div>
        </div>



    </div>
@endsection

@section('script')

@endsection