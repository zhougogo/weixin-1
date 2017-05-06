@extends('hs.layouts')

@section('content')
    <div class="page page1" id="page1 ">
        <div class="logo">
            <img src="{{asset('img/begin/beginLogo.png') }}"/>
        </div>
        <div class="content">
            <div class="contentBg">
                <img src="{{asset('img/begin/beginIn.png')}}"/>
            </div>
            <div class="btm">
                <a href="{{url('hs/question')}}">
                    <img src="{{asset('img/begin/beginBtm.png')}}"/>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection