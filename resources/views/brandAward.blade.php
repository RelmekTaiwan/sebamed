@extends('seba')

@section('content')
<div class="row">
  <div class="col-md-9 col-md-offset-1 col-xs-12" >
    <div class="list hidden-xs" id="pag_list"> 
      <a href="{{ action('HomeController@index')}}">首頁</a> &gt; 關於我們 &gt; 得獎事蹟
      <p>
    </div>
  </div>   
</div>

  <div class="row">
    <div class="col-md-8 col-md-offset-1 col-xs-12">
     <img src="{{ asset('images\product_line.jpg') }}" class="img-responsive hidden-xs">
     <img src="{{ asset('images\abt4.jpg') }}" class="img-responsive ">
    </div>
    
      <div class="col-md-11 col-md-offset-1 col-xs-12">
        <img src="{{ asset('images\ab4p1.jpg') }}" class="img-responsive">
      </div>
     
      <div class="col-md-11 col-md-offset-1 col-xs-12">
        <img src="{{ asset('images\ab4p2.jpg') }}" class="img-responsive">
      </div>

      <div class="col-md-12 col-xs-12 hidden-xs" style="margin-bottom:20px"> </div>

  </div>

@stop