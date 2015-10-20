@extends('seba')

@section('content')
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-xs-12">
            <div class="list" id="pag_list"> 
                <a href="{{ action('HomeController@index')}}">首頁</a> &gt; 影音專區
                <p>
            </div>
        </div>   
    </div>
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-xs-12">
            <img src="{{ asset('images\product_line.jpg') }}" class="img-responsive">
            <img src="{{ asset('images\video\video1.jpg') }}" class="img-responsive hidden-xs">
        </div>    
        <div class="col-md-8 col-md-offset-2 col-xs-12">
            <?php
                $num1 = 0;
                $num2 = 0;
                $num3 = 0;
                $num4 = 0;
            ?>

            <div class="row">
                @foreach($videos as $store)
                   <!-- <div class="col-md-4 col-sm-6 col-xs-6" style="text-align:center"> -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" align="center">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <a href="{{ $store->url }}">            
                                <img src="{{ asset('images/video/'.$store->pname) }}" width="150" height="100"  border-width:"9px">
                            </a>
                        </div>    
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <a href="{{ $store->url }}">            
                                {{ $store->title }}
                            </a>
                            <p>
                        </div>    
                    </div>
                    <?php
                        $num1 = $num1 + 1  ;         
                        $num2 = $num2 + 1   ;        
                        $num3 = $num3 + 1   ;        
                        $num4 = $num4 + 1   ;        
                        if($num1==1){
                            $num1 = 0 ;
                    ?>
                    <div class="clearfix visible-xs-block"></div>
                    <?php 
                        }
                        if($num2==2){
                            $num2 = 0 ;
                    ?>  
                    <div class="clearfix visible-sm-block"></div>
                    <?php 
                        }
                        if($num3==3){
                            $num3 = 0 ;
                    ?>  
                    <div class="clearfix visible-md-block"></div>
                    <?php 
                        }
                        if($num4==4){
                            $num4 = 0 ;
                    ?>  
                    <div class="clearfix visible-lg-block"></div>
                    <?php 
                        }
                    ?>
                @endforeach
            </div>
        </div> 
    </div> 
    <br>
    <br>
    <br>
 


@stop