@extends('seba')

@section('content')

      
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1" ></li>
    <li data-target="#carousel-example-generic" data-slide-to="2" ></li>
    <li data-target="#carousel-example-generic" data-slide-to="3" ></li>
    <li data-target="#carousel-example-generic" data-slide-to="4" ></li>
    <li data-target="#carousel-example-generic" data-slide-to="5" ></li>
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    
    @foreach($banners as $key => $banner)
          <div class="item <?php if ($key==0) {echo 'active';} ?>">
         	<a href=" {{ $banner->url }}"><img src="{{ asset('images/banners/'.$banner->image) }}" width="100%"></a>
          
         </div>
    @endforeach  
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br/>
<div id="showcase" class="showcase hidden-lg hidden-md hidden-sm">
    @foreach($videos as $store)
     <div class="showcase-slide">
      <!-- Put the slide content in a div with the class .showcase-content. -->
      <div class="showcase-content">
       
        <?php
          $abc = "<iframe width=\"300\" height=\"200\" src=\"$store->url\"";

          $abc .= " frameborder=\"0\" allowfullscreen></iframe>";
          echo $abc;
        ?>
        
      </div>
    </div>
   @endforeach
  </div>

<br/>

  <div class="container"> 
    <div class="row">
     <div class="col-md-4 col-xs-12">
      <img src="http://www.sebamed.com.tw//images/index_35.jpg" width="85" height="18" align="left">
       <a href="{{ action('NewsController@index')}}">
        <img src="http://www.sebamed.com.tw//images/more.jpg" width="47" height="18" border="0" ></a>
         <!--20150720 try newslist-->
            <table class="table table-striped">
              <tbody>
                @foreach($news as $item)
                  <tr>
                    <td><a href="{{ action('NewsController@show', [$item->id]) }}">{{ $item->date }} {{ $item->title }}</a></td>
                  </tr>
                @endforeach
              </tbody>
            </table>
     </div>
     <!-- body img -->
       <div class="col-md-4 col-xs-6">
          <a href="http://www.onedroponly.com.tw/" >
          <img src="http://www.sebamed.com.tw//images/pic1.jpg" width="280" height="196" border="0" class="img-responsive"/></a>
       </div>
       <div class="col-md-4 col-xs-6">
          <a href="http://www.sebamed.com.tw/index.php/home/news_in/83" >
          <img src="http://www.sebamed.com.tw//images/2015wallpaperBanner.jpg" width="280" height="196" border="0" class="img-responsive"/></a>
       </div>
    </div> 
  </div>

@stop