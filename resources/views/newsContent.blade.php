@extends('seba')

@section('content')
  <div class="col-md-9 col-md-offset-1 col-xs-12" >
    <div class="list" id="pag_list"> 
        <a href="{{ action('HomeController@index')}}">首頁</a> &gt; <a href="{{ action('NewsController@index')}}">最新消息</a>&gt;  {!! $news->title !!}
        <p>
   </div>   
  </div>

   <!--
    <div class="row">
      <div class="col-md-11 col-md-offset-1 col-xs-12" >
        <img src="{{ asset('images\product_line.jpg') }}" class="img-responsive">
      	<a> <img  src="{{ asset('images\news\title_4.jpg') }}" class="img-responsive"></a>
          <a><div class="col-md-11 col-md-offset-1 col-xs-12" style="font-weight:bold">
           </div></a>
            <div class="col-md-10 col-md-offset-1 col-xs-12">{!! $news->content !!}
            </div>
      </div>
    
    </div>
   -->

   <style>
    @media screen and (mix-width: 360px) and (max-width: 640px) {
        .shrink {
            width: 360px;
        }
    }
    @media screen and (min-width: 641px) and (max-width: 1300px) {
        .shrink {
            width: 500px;
        }
    }
   </style>
    <div class="row">
      <div class="col-md-11 col-md-offset-1 col-xs-12" >
        <img src="{{ asset('images\product_line.jpg') }}" class="img-responsive">
         <a> <img  src="{{ asset('images\news\title_4.jpg') }}" class="img-responsive hidden-xs"></a>
          <a><div class="col-md-11 col-md-offset-1 col-xs-12" style="font-weight:bold">
           </div></a>
            <div class="col-md-10 col-md-offset-1 col-xs-12">
                <?php
                    $pattern = '/<img[^<>]+>/';
                    $shrink = preg_replace_callback($pattern, function($matches) {
                        $matches[0] = '<div class="shrink">'.substr($matches[0], 0, -1);
                        $matches[0] .= " class='img-responsive'></div>";
                        return $matches[0];
                    }, $news->content);
                ?>
                {!! $shrink !!}
            </div>
            


      </div>
    
    </div>
@stop