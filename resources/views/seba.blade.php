<html>
	<head>

		<title>施巴官網</title>
    
		  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="{{ asset('js/jquery.min.js')}}"></script>
      <script src="{{ asset('js/bootstrap.min.js')}}"></script>
      <link href="{{ asset('/css/bootstrap-theme.min.css') }}" rel="stylesheet">
      <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('/css/seba.css') }}" rel="stylesheet">
  </head>
 
	<body>
  <div class="container-fluid">      
  <!-- header -->
    <div class="row">
      <div class="col-md-6 hidden-xs">
        <a href="{{ action('HomeController@index')}}"><img src="http://www.sebamed.com.tw//images/logo.jpg"  width="125" height="85" border="0" align="left"/></a>        
      </div>  
      <div class="col-md-6 hidden-xs" align="right">
        <a href="http://www.sebamed.de"><img src="http://www.sebamed.com.tw//images/toplk1.jpg" name="Image17" width="33" height="40" border="0" id="Image17" width="33" /></a>
        <a href="http://www.facebook.com/sebamedtw"><img src="http://www.sebamed.com.tw//images/toplk2.jpg" name="Image18" width="33" height="40" border="0" id="Image18" width="37" /></a>
        <iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 38px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 24px;" tabindex="0" vspace="0" width="100%" id="I0_1434351900375" name="I0_1434351900375" src="https://apis.google.com/se/0/_/+1/fastbutton?usegapi=1&amp;annotation=none&amp;hl=zh-TW&amp;origin=http%3A%2F%2Fwww.sebamed.com.tw&amp;url=http%3A%2F%2Fwww.sebamed.com.tw%2F&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.zh_TW.84iMcNh0Yic.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Ft%3Dzcms%2Frs%3DAGLTcCPiVk5hLzu-VYl8GYK0br6NsqTnSg#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1434351900375&amp;parent=http%3A%2F%2Fwww.sebamed.com.tw&amp;pfname=&amp;rpctoken=15019064" data-gapiattached="true" title="+1">
        </iframe>   
       </div>
    </div>

    <div class="row">
      <div class="col-xs-12 hidden-md hidden-sm hidden-lg" style="margin-bottom:20px">
      </div>
    </div>

  <!-- header end -->
   
   <nav class="navbar navbar-default">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
     <div class="navbar-header" >
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <div class="col-md-12 hidden-md hidden-sm hidden-lg">
        <a href="{{ action('HomeController@index')}}">
          <img class="navbar-brand" src="{{ asset('images/logo.jpg') }}" width="70px" height="120px" style="width:75px height:54px">
        </a>
       </div>
       <div class="col-md-12 hidden-xs">
        <a class="navbar-brand" href="{{ action('NewsController@index')}}">最新消息</a>
       </div>
      
      <!--<a class="navbar-brand" href="{{ action('NewsController@index')}}">最新消息</a>-->
     </div>

    <!-- Collect the nav links, forms, and other content for toggling //aria-haspopup="true"// -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a class="dropdown-toggle hidden-sm hidden-md hidden-lg" href="{{ action('NewsController@index')}}">最新消息</a></li>
        <li><a href="http://www.sebamed.com.tw/index.php/home/video">影音專區</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">產品櫥窗 <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ action('SeriesController@index')}}">依系列區分</a></li>
            <li><a href="{{ action('FunctionalityController@index')}}">依功能區分</a></li>
          </ul>
        </li>
      
        <li class="dropdown">
          <a href="#" class="dropdown-toggle hidden-sm" data-toggle="dropdown" role="button" aria-expanded="false">關於我們 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ action('BrandController@index')}}">品牌故事</a></li>
            <li><a href="{{ action('BrandController@doctor')}}">海茲默爾醫師</a></li>
            <li><a href="{{ action('BrandController@skincare')}}">醫學皮膚護理</a></li>
            <li><a href="{{ action('BrandController@award')}}">得獎事蹟</a></li>
            <li><a href="{{ action('BrandController@agent')}}">總代理商</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle hidden-sm" data-toggle="dropdown" role="button" aria-expanded="false">諮詢服務 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="https://store.sebamed.com.tw/products_list_mix.php?style_id=1&kind_id=16">索取樣品</a></li>
            <li><a href="http://www.sebamed.com.tw/index.php/home/ask">產品問答</a></li>
            <li><a href="http://www.sebamed.com.tw/index.php/home/ask/2">聯絡我們</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">購買地點 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="https://store.sebamed.com.tw/">官方購物</a></li>
            <li><a href="http://www.sebamed.com.tw/index.php/home/wherebuy/2">網路商店</a></li>
            <li><a href="http://www.sebamed.com.tw/index.php/home/wherebuy/3">百貨櫃點</a></li>
            <li><a href="http://www.sebamed.com.tw/index.php/home/wherebuy/4">連鎖藥妝</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">相關討論 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="https://www.facebook.com/sebamedtw">官方粉絲團</a></li>
          </ul>
        </li> 
        </ul>      
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <li><a href="https://store.sebamed.com.tw/">官方購物</a></li>
          <li><a href="{{ action('HomeController@index')}}">回首頁</a></li>
        </li>
      </ul>
    </div><!-- /.navbar-collapse //-->
   </div><!-- /.container-fluid -->
  </nav>

@yield('content')
		
<div class="row">
  <div id="footer">
    <div class="footer2">
      <img src="{{ asset('images\index_49.jpg') }}">   
        Copyright © 2011 Sebamed.com.,Ltd.All Rights Reserved.
   
       <br>進口商：利百美興業股份有限公司　　 地址：807高雄市九如二路366號11F之1　　 客服電話： 0800-000-755 　　肌膚諮詢專線： 0800-755-755  
    </div> 
  </div>
 </div>
  
		@yield('footer')

</div>
	</body>
</html>






