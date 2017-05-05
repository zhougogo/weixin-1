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
                    <div id="id{{$loop->index}}" class="@if(!$loop->first) hidden @endif">
                    <div  class="subject ">
                        <div class="title">
                            {{$question->titile}}
                        </div>
                        <p onclick="clickSelect('a','{{$question->answer}}',{{$loop->index}})">A.{{$question->a}}</p>
                        <p onclick="clickSelect('b','{{$question->answer}}',{{$loop->index}})">B.{{$question->b}}</p>
                        <p onclick="clickSelect('c','{{$question->answer}}',{{$loop->index}})">C.{{$question->c}}</p>
                    </div></div>
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
                <p class="p1">很遗憾，正确的答案是<span id="answer">B</span></p>
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
        var i=0;
        function clickSelect(num,answer,index) {
            if (num==answer){
                document.getElementById('id'+index).className='hidden';
                document.getElementById('id'+index+1).className='';
                i++;
                if (index == 3){
                    window.location.href='{{url('hs/result')}}'+'/'+i;
                }
            }else {
                if (index == 3){
                    window.location.href='{{url('hs/result')}}'+'/'+i;
                }
//                弹出模态框
                document.getElementById("answer").innerHTML=answer;

            }
        }
    </script>
@endsection