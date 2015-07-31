@extends('seba')

@section('content')
  <div class="col-md-9 col-md-offset-1 col-xs-12" >
    <div class="list" id="pag_list"> 
        <a href="{{ action('HomeController@index')}}">首頁</a> &gt; <a href="{{ action('NewsController@index')}}">最新消息</a>&gt;  {!! $news->title !!}
        <p>
      </div>
   </div>   
  </div>

    <div class="row">
      <div class="col-md-11 col-md-offset-1 col-xs-12" >
        <img src="{{ asset('images\product_line.jpg') }}" class="img-responsive">
      	<a> <img  src="{{ asset('images\news\title_4.jpg') }}" class="img-responsive"></a>
          <a><div class="col-md-11 col-md-offset-1 col-xs-12" style="font-weight:bold">
           </div></a>
            <div class="col-md-10 col-md-offset-1 col-xs-12">{!! $news->content !!}
            </div>
            <!--  <div class="col-md-12 col-md-offset-2 col-xs-12">
              	<img class="img-responsive"> {!! $news->content !!}
              </div>
            -->
      </div>
    
    </div>
    
@stop