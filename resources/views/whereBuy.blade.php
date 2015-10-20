@extends('seba')

@section('content')


    @if ($type == 'official')

    @elseif($type == 'onlineshop')
        
        <div class="row">
            <div class="col-md-9 col-md-offset-2 col-xs-12" >
                <div class="list" id="pag_list"> 
                    <a href="{{ action('HomeController@index')}}">首頁</a> &gt; 網路商店
                    <p>
                </div>
            </div>   
        </div>
        
        <div class="row">
            <div class="col-md-9 col-md-offset-2 col-xs-12">
                <img src="{{ asset('images\product_line.jpg') }}" class="img-responsive">
                <img src="{{ asset('images\wherebuy\wheret2.jpg') }}" class="img-responsive hidden-xs">
                <div class="row">    
                    <!-- <div class="col-md-3 col-md-offset-1 col-xs-12">-->
                    <div class="col-md-6 col-xs-12">
                        <a href="http://buy.yahoo.com.tw/?sub=163">
                            <img src="{{ asset('images\wherebuy\wherebuy2ov.jpg') }}" class="img-responsive">
                        </a>    
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <a href="http://www.pcstore.com.tw/sebamed/">
                            <img src="{{ asset('images\wherebuy\wherebuy3ov.jpg') }}" class="img-responsive">
                        </a>    
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <a href="http://www.momoshop.com.tw/category/DgrpCategory.jsp?d_code=1118600029">
                            <img src="{{ asset('images\wherebuy\wherebuy4ov.jpg') }}" class="img-responsive">
                        </a>    
                    </div>
                        <div class="col-md-6 col-xs-12">
                        <a href="http://shopping.pchome.com.tw/?mod=area&amp;func=style_show&amp;RG_NO=DDBF&amp;BB=care "> 
                            <img src="{{ asset('images\wherebuy\wherebuy5ov.jpg') }}" class="img-responsive">
                        </a>    
                    </div>
                </div>    
            </div> 
        </div> 
        <br>
        <br>
        <br>
    @elseif($type == 'drugstore')
        
        <div class="row">
            <div class="col-md-9 col-md-offset-2 col-xs-12" >
                <div class="list" id="pag_list"> 
                    <a href="{{ action('HomeController@index')}}">首頁</a> &gt; 連鎖藥妝
                    <p>
                </div>
            </div>   
        </div> 

        <div class="row">
            <div class="col-md-9 col-md-offset-2 col-xs-12">
                <img src="{{ asset('images\product_line.jpg') }}" class="img-responsive">
                <img src="{{ asset('images\wherebuy\wheret4.jpg') }}" class="img-responsive hidden-xs">
                <div class="row">    
                    <!-- <div class="col-md-3 col-md-offset-1 col-xs-12">-->
                    <div class="col-md-6 col-xs-12">
                        <a href="http://www.cosmed.com.tw/default-map.asp">
                            <img src="{{ asset('images\wherebuy\buy4ot1.jpg') }}" class="img-responsive">
                        </a>    
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <a href="http://ec.poya.com.tw/POYA/action/branch.do?myAction%3dbranchHome%26serMill%3d1212647074995&amp;myAction=branchHome">
                            <img src="{{ asset('images\wherebuy\buy4ot2.jpg') }}" class="img-responsive">
                        </a>   
                    </div>
                </div>
                <br>    
                <div class="row">    
                    <div class="col-md-6 col-xs-12">
                        <a href="http://www.norbelbaby.com.tw/TinTin/work.jsp">
                            <img src="{{ asset('images\wherebuy\buy4ot3.jpg') }}" class="img-responsive">
                        </a>    
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <a href="http://www.watsons.com.tw/Index.aspx">
                            <img src="{{ asset('images\wherebuy\buy4ot4.jpg') }}" class="img-responsive">
                        </a>    
                    </div>
                </div>
                <br>    
                <div class="row">    
                    <div class="col-md-6 col-xs-12">
                        <a href="http://www.mhtefc.com.tw/">
                            <img src="{{ asset('images\wherebuy\buy4ot5.jpg') }}" class="img-responsive">
                        </a>    
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <a href="http://www.acetop1.com.tw/Aand1/(X(1)S(do14a345o2l1lg45xhur1d3m))/default.aspx?AspxAutoDetectCookieSupport=1">
                            <img src="{{ asset('images\wherebuy\buy4ot6.jpg') }}" class="img-responsive">
                        </a>    
                    </div>
                </div>
                <br>    
                <div class="row">    
                    <div class="col-md-6 col-xs-12">
                        <a href="http://www.4-season.com.tw/php-nuke/index.php">
                            <img src="{{ asset('images\wherebuy\buy4ot7.jpg') }}" class="img-responsive">
                        </a>    
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <a href="http://www.mcm.com.tw/YDSys/mcm/mcm.php?P_IM=Shops&amp;P_SWidth=800&amp;P_SesID=a662634e9949f1845aebbefdfb2e1657">
                            <img src="{{ asset('images\wherebuy\buy4ot8.jpg') }}" class="img-responsive">
                        </a>    
                    </div>
                </div>
                <br>    
                <div class="row">    
                    <div class="col-md-6 col-xs-12">
                        <a href="http://www.medfirst.com.tw/">
                            <img src="{{ asset('images\wherebuy\buy4ot9.jpg') }}" class="img-responsive">
                        </a>    
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <a href="http://www.yourchance.com.tw/">
                            <img src="{{ asset('images\wherebuy\buy4ot10.jpg') }}" class="img-responsive">
                        </a>    
                    </div>
                </div>
                <br>    
                <div class="row">    
                   <div class="col-md-6 col-xs-12">
                        <a href="http://woodpeckers.com.tw/modules/xdirectory/">
                            <img src="{{ asset('images\wherebuy\buy4ot11.jpg') }}" class="img-responsive">
                        </a>    
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <a href="http://www.family.com.tw/marketing/inquiry.aspx">
                            <img src="{{ asset('images\wherebuy\buy4ot12.jpg') }}" class="img-responsive">
                        </a>    
                    </div>
                </div>
                <br>    
                <div class="row">    
                    <div class="col-md-6 col-xs-12">
                        <a href="http://www.mecome.com.tw/">
                            <img src="{{ asset('images\wherebuy\buy4ot13.jpg') }}" class="img-responsive">
                        </a>    
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <a href="http://www.j-mart.com.tw/">
                            <img src="{{ asset('images\wherebuy\buy4ot14.jpg') }}" class="img-responsive">
                        </a>    
                    </div>
                </div>
                <br>    
                <div class="row">    
                    <div class="col-md-6 col-xs-12">
                        <a href="http://www.infant.com.tw/">
                            <img src="{{ asset('images\wherebuy\buy4ot15.jpg') }}" class="img-responsive">
                        </a>    
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <a href="http://erx.com.tw/ALL.htm">
                            <img src="{{ asset('images\wherebuy\buy4ot16.jpg') }}" class="img-responsive">
                        </a>    
                    </div>
                </div>
                <br>    
                <div class="row">    
                    <div class="col-md-6 col-xs-12">
                    <a href="http://www.wellcare.com.tw/wellindex/index.htm">
                            <img src="{{ asset('images\wherebuy\buy4ot17.jpg') }}" class="img-responsive">
                        </a>    
                    </div>
                </div>    
            </div> 
        </div> 
        <br>
        <br>
        <br>

    @else
       <div class="row">
            <div class="col-md-9 col-md-offset-2 col-xs-12" >
                <div class="list" id="pag_list"> 
                    <a href="{{ action('HomeController@index')}}">首頁</a> &gt; 百貨櫃點 
                    <p>
                </div>
            </div>   
        </div>
        <div class="row">
            <div class="col-md-9 col-md-offset-2 col-xs-12">
                <img src="{{ asset('images\product_line.jpg') }}" class="img-responsive">
                <img src="{{ asset('images\wherebuy\wbdp1.jpg') }}" class="img-responsive">

                <?php $last_seq = NULL; ?>

                    @foreach($deptstores as $store)
                        @if ($store->sequence != $last_seq)
                            <br>                        
                         <!-- <table><tr>                        -->
                            <div class="row">
                                <div class="col-xs-12"> 
                                <!-- <tr></tr> -->
                                    <!-- <td><div class="circle-with-arror" class="title">&gt;</div></td> -->
                                
                                    <div class="title">{{ $store->area }}</div>   
                                </div>
                            </div>   
                          <!-- </tr></table>     -->
                        @endif
                        <div class="row">
                            <div class="col-md-8" >
                            <!-- <div class="row"> -->
                                <div class="col-dm-6  col-xs-6" align="left">
                                    <!-- <div class="circle"></div> -->
                                    <div>{{$store->address}}</div>
                                </div> 
                                <div class="col-dm-6  col-xs-6" style="align:left" >
                                    <div class="div-img"><img src="http://www.sebamed.com.tw/images/dpth.jpg">{{$store->phone_num }}</div>
                                </div> 
                            <!-- </div> -->
                            </div>    
                        </div>

                        <?php $last_seq = $store->sequence; ?>
                    @endforeach
<!--                 <table>
                    @foreach($deptstores as $store)
                        <tr>
                            @if ($store->sequence != $last_seq)
                                <td><div class="circle-with-arror">&gt;</div>
                                </td>
                                <td class="title">
                                    {{ $store->area }}
                                </td>    
                            @endif
                        </tr>
                        <tr>    
                            <td><div class="circle"></div></td>
                            <td width="330px">
                                {{ $store->address}}
                            </td>
                            <td>
                                <div class="div-img"><img src="http://www.sebamed.com.tw/images/dpth.jpg"></div>
                            </td>
                            <td>    
                                {{ $store->phone_num }}
                            </td>
                        </tr>
                        <?php $last_seq = $store->sequence; ?>
                    @endforeach
                </table> -->

            </div>
        </div>
@endif


@stop