@extends('seba')

@section('content')
 <div class="row">
     <div class="col-md-8 col-md-offset-2 col-xs-12" >
      <div class="list" id="pag_list"> 
        <a href="{{ action('HomeController@index')}}">首頁</a> &gt; 諮詢服務 &gt; 產品問答
        <p>
      </div>
     </div>   
 </div>

  <div class="row">
    <div class="col-md-8 col-md-offset-2 col-xs-12">
     <img src="{{ asset('images\product_line.jpg') }}" class="img-responsive">
     <img src="{{ asset('images\ask\ask1.jpg') }}" class="img-responsive hidden-xs">
     <img src="{{ asset('images\ask\askp1.jpg') }}" class="img-responsive hidden-xs">
    </div>

    <div class="col-md-12 col-xs-12 " style="margin-bottom:20px"> </div>
    <div class="col-md-8 col-md-offset-2 col-xs-12" style="margin-top:10px">
      <img src="{{ asset('images\ask\askt1.jpg') }}" class="img-responsive" style="margin-bottom:10px">  
      <p class="newstext"> 
      	人體皮膚有一層天然的微酸性保護膜，簡稱酸膜。這層酸膜能維持皮膚的生態平衡，皮膚藉由酸膜與生態菌來創造可抵禦病原菌的環境。但一般人長期以來都習慣用鹼性清潔產品來清洗，不僅會破壞皮表的酸膜，使皮膚變得乾燥，且容易受刺激及感染。因此，施巴堅持一系列pH5.5的產品來清洗及保養肌膚，加強皮膚的酸膜，以確保皮膚健康。
      </p>
      <img src="{{ asset('images\ask\askt2.jpg') }}" class="img-responsive" style="margin-bottom:10px">  
      <p class="newstext"> 
        雖然施巴5.5產品多由女性朋友購買，但並不表示只有女性適用，它是屬於全家大小皆適宜的產品；針對十歲以下的嬰幼兒，施巴同樣也有一組適用的產品，以呵護寶寶的脆弱肌膚。
      </p>
      <img src="{{ asset('images\ask\askt3.jpg') }}" class="img-responsive" style="margin-bottom:10px">  
      <p class="newstext"> 
        我們的產品是百分之百德國原裝進口的產品，外盒包裝上有中文字樣是因為外盒的設計是在台灣完成，完稿後再交付德國印刷使用。
      </p>
      <img src="{{ asset('images\ask\askt4.jpg') }}" class="img-responsive" style="margin-bottom:10px">  
      <p class="newstext"> 
        不是。施巴5.5的產品之所以多由醫師、藥師推薦使用，是因為我們的產品對問題皮膚有很好的輔助治療效果，與處方藥搭配使用能有效縮短治療的時間，所以醫師、藥師對我們的產品有很高的評價，並進一步推薦病患使用。
      </p>
      <img src="{{ asset('images\ask\askt5.jpg') }}" class="img-responsive" style="margin-bottom:10px">  
      <p class="newstext"> 
        施巴5.5所有產品都由德國施巴大藥廠一群專業的研發人員與皮膚醫學專家，依據最新的醫學理論為基礎所研發，產品上市前都經過耐受性及效果測試。擁有30多年的研發經驗，180餘篇臨床報告來證明對問題皮膚的輔助療效。每二、三年依需要更新配方，每年都有二、三種新產品上市，不同的膚質都有適用的產品，使用後還能鞏固皮膚天然的保護功能。
      </p>
      <img src="{{ asset('images\ask\askt6.jpg') }}" class="img-responsive" style="margin-bottom:10px">  
      <p class="newstext"> 
        洗臉，只要一顆珍珠粒大小的量，先搓揉起泡後使用，搓揉時間長些，泡沬會較多而且柔細；洗澡，只要十塊錢硬幣大小的量即可，壓於浴棉上搓揉起泡使用。（可依自己習慣酌量增減）
      </p>
      <img src="{{ asset('images\ask\askt7.jpg') }}" class="img-responsive" style="margin-bottom:10px">  
      <p class="newstext"> 
        我們潔膚皂的成分是屬於高度水溶性的產品，遇到水其成分容易溶解。【潔膚皂的成分是屬於高度水溶性的燕麥粉（有消炎收斂保濕作用），我們可把潔膚皂形容成麵團，遇水即溶】所以使用時，只需要將雙手打濕，擦抹潔膚皂搓揉起泡後使用。切記潔膚皂不可置於水龍頭下沖，潔膚皂不用時請保持乾燥，放至通風處。
      </p>
      <img src="{{ asset('images\ask\askt9.jpg') }}" class="img-responsive" style="margin-bottom:10px">  
      <p class="newstext"> 
        施巴嬰兒防曬乳為專為嬰幼兒設計的配方，六個月以上的寳寳即可使用。
        使用方式為：出門接觸陽光前30分鐘左右就要先塗抹，避開眼週塗抹臉部及全身肌膚，有露出的部位都要足量塗抹，也不要忽略脖子、後背等小地方；並每隔兩個小時再補充一次，才能達到最的防護效果喔！
      </p>
      <img src="{{ asset('images\ask\askt10.jpg') }}" class="img-responsive" style="margin-bottom:10px">  
      <p class="newstext"> 
        不會！因為泡泡露的成份為純天然植物配方，泡澡時已經過大量稀釋，所以不會對BABY造成傷害。

    </div>
    
      
    
 </div>

@stop