@extends('seba')

@section('content')
<div class="row">
  <div class="col-md-9 col-md-offset-1 col-xs-12" >
    <div class="list" id="pag_list"> 
      <a href="{{ action('HomeController@index')}}">首頁</a> &gt; 關於我們 &gt; 醫學皮膚護理
      <p>
    </div>
  </div>   
</div>

<div class="row">
    <div class="col-md-8 col-md-offset-1 col-xs-12">
     <img src="{{ asset('images\product_line.jpg') }}" class="img-responsive">
     <img src="{{ asset('images\abt3.jpg') }}" class="img-responsive hidden-xs" style="margin-bottom:20px">
    </div>

     <div class="col-md-3 col-md-offset-1 col-xs-6">
      <img src="{{ asset('images\ab3p1.jpg') }}" class="img-responsive" style="margin-top:10px">
     </div>
     <div class="col-md-3 col-xs-12">
      <img src="{{ asset('images\ab3t1.jpg') }}" class="img-responsive">
       <p class="newstext">
         皮膚是人體最大的器官，正常皮膚的表面有一層微酸性的保護膜，由汗液、皮脂腺的分泌物與老廢的角質細胞混合而成，酸鹼值介於pH4.5~pH6.0之間，能鞏固皮膚的屏障功能，幫助表皮角質層的油脂維持結構，減少水分散失、避免外界環境刺激。
       </p>
     </div>
    <div class="col-md-12 col-xs-12" style="margin-bottom:20px"> </div>
    <div class="col-md-6 col-md-offset-1 col-xs-12" style="margin-top:10px">
     <img src="{{ asset('images\ab3t2.jpg') }}" style="margin-bottom:10px">
      <p class="newstext">
         德國施巴全系列為pH5.5、不含皂鹼的潔護膚產品，經由科學研發、醫學測試、符合皮膚需求的產品，能溫和呵護肌膚，不會破壞天然酸膜的功能，是最適合用來呵護全家人肌膚的潔護膚產品。
      </p> 
    </div>
    <div class="col-md-12 col-xs-12 hidden-xs" style="margin-bottom:30px"> </div>

</div>

@stop