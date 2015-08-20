@extends('seba')

@section('content')
  <div class="row">
     <div class="col-md-9 col-md-offset-1 col-xs-12" >
      <div class="list" id="pag_list"> 
        <a href="{{ action('HomeController@index')}}">首頁</a> &gt; 產品櫥窗 &gt; <a href="{{ action('FunctionalityController@index')}}">依功能區分</a>&gt;  產品
        <p>
      </div>
   </div>   
  </div>
  <div class="row">
    <div class="col-md-8 col-md-offset-1 col-xs-12">
<!-- <div id="contectright"> -->
      <img src="{{ asset('images\product_line.jpg') }}" class="img-responsive">
      <img src="{{ asset('images\title1.jpg') }}" class="img-responsive hidden-xs">
<!--   <img src="http://www.sebamed.com.tw//images/bg.jpg" width="718" height="40" align="center" title1>-->
    
<!--{{ $title }}

 @foreach($products as $product)
    <a href="{{ action('ProductController@show', [$product->id]) }}">
        <img src="{{ asset('images/products/small/'.$product->image1) }}">
    </a>
    {!! $product->name !!}
 @endforeach

    -->
 
  
       <!-- Trigger the modal with a button -->
      @foreach($products as $key => $product)
        <!--
         <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal_<?=$key;?>">
         <img src="{{ asset('images/products/small/'.$product->image1) }}">
         {!! $product->name !!}
         </button>
        -->
        <div class="col-md-4 col-sm-6 col-xs-6" style="text-align:center" >
         <a href="" data-toggle="modal" data-target="#myModal_<?=$key;?>">
         <img src="{{ asset('images/products/small/'.$product->image1) }}" align="center" ></a>
         <br>
         <div class="pdtx">
          <a href="" data-toggle="modal" data-target="#myModal_<?=$key;?>">{!! $product->name !!}</a>
         </div>
        </div>
    

        <!-- Modal -->
        <div class="modal fade" id="myModal_<?=$key;?>" role="dialog">
        <div class="modal-dialog">
         <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">產品櫥窗</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6 col-xs-12" style="text-align:center" >
             <img src="{{ asset('images/products/big/'.$product->image2 ) }}" >
            </div>
            <div class="col-md-6 col-xs-12" >
               <div class="t3"><p>{{ $product->name }}</p></div>
               <p>{{ $product->name_en }}</p>
               <p>{!! $product->description !!}</p>
               <p>規格:{{ $product->specification }}</p>
               <p>價格:{{ $product->price }}</p>
            </div>
          </div>
         </div>

         <div class="modal-footer">  
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
        </div>
        </div>
        </div>
      @endforeach
     </div>

  </div>  

@stop

<!--
@foreach($products as $product)
    <a href="{{ action('ProductController@show', [$product->id]) }}">
        <img src="{{ asset('images/products/small/'.$product->image1) }}">
    </a>
    {!! $product->name !!}
@endforeach
-->