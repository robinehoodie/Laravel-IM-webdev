@extends('Content/layout')

@section('css')
    <link href="{{asset('css/progress.css')}}" rel="stylesheet">
@endsection

@section('body')
</center>
                <div id="progress">
                    <p style="font-size: 84px; line-height:100px; margin-top: 30px;margin-bottom: 0px;">PROGRESS</p>
                    <p style="font-size: 18px; line-height:25px; margin-top: 10px;margin-bottom: 0px;">Track how your deliveries are going. From start <br>
                    to finish, and how they're doing fulltime.</p>
                  </div>
 <center>
                 
                      <button id= "button" onclick="HideShow()">CHECK </button>
                      <button id="button1" onclick="HideShowAdd()" style="">SORT </button>
@endsection
