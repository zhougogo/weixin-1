@extends('hs.layouts')

@section('content')
    <div class="page page2">
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

                        <div id="id{{$loop->index}}" class="subject @if(!$loop->first) hidden @endif">
                            <span id="fontNum"></span>
                            <div class="title">
                                {{$question->title}}
                            </div>
                            <p onclick="clickSelect('a','{{$question->answer}}',{{$loop->index}})">
                                A.{{$question->a}}</p>
                            <p onclick="clickSelect('b','{{$question->answer}}',{{$loop->index}})">
                                B.{{$question->b}}</p>
                            <p onclick="clickSelect('c','{{$question->answer}}',{{$loop->index}})">
                                C.{{$question->c}}</p>
                        </div>
                    
                @endforeach

            </div>

        </div>
        <div class="popup hidden popup1 errPopup">
            <div class="content">
                <div class="contentBg">
                    <img src="{{asset('img/error/datiBg.png')}}"/>
                </div>
                <div class="con">
                    <img src="{{asset('img/cancel.png')}}"/>
                </div>
                <p class="p1">很遗憾，正确的答案是<span id="answer">B</span></p>
                <div class="bomBg">
                    <a href="http://coupon.m.jd.com/coupons/show.action?key=01be87ffecc74045848d7cd299eb292a&roleId=6405081&to=sale.jd.com/m/act/sbtJUVC3NlgfI.html">
                        <img src="{{asset('img/win/f2.png')}}"/>
                    </a>
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
    	
        var i = 0;
        function clickSelect(num, answer, index) {
            if (num == answer) {
                i++;
                if (index == 3) {
                    window.location.href = '{{url('hs/result')}}' + '/' + i;
                }
                document.getElementById('id' + index).className = 'subject hidden';
                document.getElementById('id' + (index + 1)).className = 'subject';


            } else {
                if (index == 3) {
                    window.location.href = '{{url('hs/result')}}' + '/' + i;
                }
//                弹出模态框
                document.getElementsByClassName('errPopup')[0].style.display = 'block';

                document.getElementById("answer").innerHTML = answer;
                document.getElementById('id' + index).className = 'subject hidden';
                document.getElementById('id' + (index + 1)).className = 'subject';
            }
            document.getElementById('fontNum').html(index+1);
        }
        $('.subject p').click(function () {

            $(this).addClass('yesClick').siblings().removeClass('yesClick');

        })
        
        $('.popup1 .cancelBtm').click(function () {

            $('.popup1').css('display','none');

        })
    </script>
@endsection