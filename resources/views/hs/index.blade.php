@extends('hs.layouts')

@section('content')
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
        <!--<div class="popup popup2 hidden">
            <div class="content">
                <div class="contentBg">
                    <img src="{{asset('img/error/datiBg.png')}}"/>
                </div>
                <div class="con">
                    <img src="{{asset('img/win/bq.png')}}"/>

                </div>
                <p class="p2">恭喜你答对了<span>4</span>题</p>
                <p class="p3">还获得了抽奖机会</p>

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
				<div class="cancelBtm">
                    <img src="{{asset('img/error/cancel.png')}}"/>
                </div>

            </div>
        </div>-->
    </div>

@endsection

@section('script')
    <script type="application/javascript">

    </script>
@endsection