@extends('hs.layouts')

@section('content')
    <div class="page page1 hidden" id="page1 ">
        <div class="logo">
            <img src="{{asset('img/begin/beginLogo.png') }}"/>
        </div>
        <div class="content">
            <div class="contentBg">
                <img src="{{asset('img/begin/beginIn.png')}}"/>
            </div>
            <div class="btm">
                <img src="{{asset('img/begin/beginBtm.png')}}"/>
            </div>
        </div>
    </div>
    <div class="page page2 hidden">
        <div class="logo">
            <img src="{{asset('img/p2/ptBg.png')}}"/>
        </div>
        <div class="content">
            <!--<div class="contentBg">
                <img src="img/p2/popupBg.png" />
            </div>-->
            <div class="subjectAll">
                {{--随机选取4道题--}}
                @foreach($questions as $question)
                    <div class="subject subject{{$loop->index}} hidden">
                        <div class="title">
                            {{$question->titile}}
                        </div>
                        <p>A.{{$question->a}}</p>
                        <p>B.{{$question->b}}</p>
                        <p>C.{{$question->c}}</p>
                        <p class="hidden">正确答案:{{$question->answer}}</p>
                    </div>
                @endforeach

            </div>

        </div>
        <div class="popup hidden">
            <div class="content">
                <div class="contentBg">
                    <img src="{{asset('img/error/datiBg.png')}}"/>
                </div>
                <div class="con">
                    <img src="{{asset('img/cancel.png')}}"/>
                </div>
                <p class="p1">很遗憾，正确的答案是<span>B</span></p>
                <div class="bomBg">
                    <img src="{{asset('img/win/f2.png')}}"/>
                </div>
                <div class="cancelBtm">
                    <img src="{{asset('img/error/cancel.png')}}"/>
                </div>

            </div>
        </div>
        <div class="popup popup2 hidden">
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
                    <img src="{{asset('img/beginBt m.png')}}"/>
                </div>
                <div class="cancelBtm">
                    <img src="{{asset('img/error/cancel.png')}}"/>
                </div>

            </div>
        </div>
        <div class="popup popup3 hidden">
            <div class="content">
                <div class="contentBg">
                    <img src="{{asset('img/error/datiBg.png')}}"/>
                </div>
                <div class="con">
                    <img src="{{asset('img/cancel.png')}}"/>

                </div>
                <p class="p1">很遗憾!</p>
                <p class="p4">你离瑞士还有三道题的距离继续努力</p>
                <!--<div class="bomBg">
                    <img src="img/win/f2.png"/>
                </div>-->
                <div class="cancelBtm">
                    <img src="{{asset('img/error/cancel.png')}}"/>
                </div>

            </div>
        </div>
    </div>
    <div class="page3 page ">
        <div class="content">
            <div class="logo">
                <img src="{{asset('img/p2/ptBg.png')}}"/>
            </div>
            <div class="banner">
                <div class="turnplate" style="background-image:url(img/turnplate-bg.png);background-size:100% 100%;">
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