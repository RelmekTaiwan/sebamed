@extends('seba')

@section('content')
<div class="row">
  <div class="col-md-9 col-md-offset-1 col-xs-12" >
    <div class="list" id="pag_list"> 
      <a href="{{ action('HomeController@index')}}">首頁</a> &gt; 關於我們 &gt; 總代理商
      <p>
    </div>
  </div>   
</div>

<div class="row">
    <div class="col-md-8 col-md-offset-1 col-xs-12">
     <img src="{{ asset('images\product_line.jpg') }}" class="img-responsive">
     <img src="{{ asset('images\abt5.jpg') }}" class="img-responsive hidden-xs" style="margin-bottom:20px">
    </div>

     <div class="col-md-10 col-md-offset-2 col-xs-6 hidden-xs">
      <img src="{{ asset('images\ab5p1.jpg') }}" style="margin-top:10px" >
     </div>

     <div class="col-md-12 col-xs-12 hidden-md hidden-lg hidden-sm" style="margin-top:25px"></div>

     <div class="col-md-3 col-md-offset-2 col-xs-6 hidden-md hidden-lg hidden-sm">
      <img src="{{ asset('images\ab5p1.jpg') }}" style="margin-bottom:50px " width='200%' >
     </div>

     <div class="col-md-12 col-xs-12 hidden-xs" style="margin-bottom:100px"> </div>

</div>    

@stop