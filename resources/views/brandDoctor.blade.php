@extends('seba')

@section('content')
 <div class="row">
     <div class="col-md-9 col-md-offset-1 col-xs-12" >
      <div class="list" id="pag_list"> 
        <a href="{{ action('HomeController@index')}}">首頁</a> &gt; 關於我們 &gt; 海茲默爾醫師
        <p>
      </div>
     </div>   
 </div>

  <div class="row">
    <div class="col-md-8 col-md-offset-1 col-xs-12">
     <img src="{{ asset('images\product_line.jpg') }}" class="img-responsive">
     <img src="{{ asset('images\abt2.jpg') }}" class="img-responsive hidden-xs">
    </div>

    <div class="col-md-3 col-md-offset-1 col-xs-6">
      <img src="{{ asset('images\ab2p1.jpg') }}" class="img-responsive">
    </div>
    <div class="col-md-3 col-xs-12">
      <img src="{{ asset('images\ab2t1.jpg') }}" class="img-responsive">
       <p class="newstext">
         由德國波昂大學皮膚科的海茲默爾醫師在1952 年時的革命性創舉及之後50年代後期艾根教授領導的研究團隊所結合起來的經驗結晶。
       </p>
      <img src="{{ asset('images\ab2t2.jpg') }}" class="img-responsive">
       <p class="newstext">
          德國波昂大學-海茲默爾醫師應用acidic syndets於濕疹患者
       </p> 
      <img src="{{ asset('images\ab2t3.jpg') }}" class="img-responsive">
       <p class="newstext">
          海茲默爾醫師成立Sebamat GmbH公司，開始生產pH5.5潔膚皂
       </p> 
      <img src="{{ asset('images\ab2t4.jpg') }}" class="img-responsive">
       <p class="newstext">
          開始宣傳施巴5.5產品的醫學皮膚護理理念，直至今日，成為醫學皮膚護理的第一品牌
       </p>
      <img src="{{ asset('images\ab2t5.jpg') }}" class="img-responsive">
       <p class="newstext">
          開始拓展海外業務的施巴5.5，目前行銷全世界70餘國，更陸續榮獲各種獎項等殊榮
       </p> 
    </div>
    <div class="col-md-12 col-xs-12 " style="margin-bottom:20px"> </div>
    <div class="col-md-7 col-md-offset-1 col-xs-12" style="margin-top:10px">
      <img src="{{ asset('images\ab2t6.jpg') }}" class="img-responsive" style="margin-bottom:10px">  
      <p class="newstextq"> 
      	Q：您什麼時候開始認為Tenside的耐受性比肥皂更好呢？
      </p>
      <p class="newstext">	
      	Dr. Maurer：我很幸運發現到Marchionin教授在1928年的研究結果─皮膚本身具有一層酸性保護膜。這讓我更清楚地了解到問題皮膚不應該在使用鹼性肥皂來清潔，後來這個想法又獲得美國研究結果的支持，餘是1952年我嘗試讓波昂大學附屬皮膚科的濕疹患者用這種微酸性潔膚劑清洗，結果獲得很大的鼓舞。
      </p>
      <br>
      <p class="newstextq"> 
        Q：為什麼pH5.5對皮膚清潔來說是必須的？
      </p>
      <p class="newstext">  
        Dr. Maurer：pH5.5就是健康肌膚的酸鹼值，可以保護肌膚免受到外界刺激，並可以維護皮膚的天然生理及生態功能。
      </p>
      <br>
      <p class="newstextq"> 
        Q：目前施巴5.5不僅是醫學皮膚護理的第一品牌，並以行銷70餘國，未來您的目標是什麼呢？
      </p>
      <p class="newstext">  
        Dr. Maurer：我們的首要工作是創導健康皮膚之道，向消費者傳達醫學皮膚護理知識，並提倡pH5.5保養新觀念，讓消費者了解美麗肌膚不再只是外表看起來純淨無瑕，而是由內而外的健康與美麗。
      </p>	

    </div>
    
      
    
 </div>

@stop