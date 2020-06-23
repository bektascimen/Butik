@extends('layouts.master')
@section('content')

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Anasayfa</a>
                        <span>Beğenilen Ürünler</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <div class="container">
        <div class="products bg-content">
            <div class="row">
                <div class="col-md-10">
                    <div class="row">
                @foreach($begenilen_urunler as $begen)

                        <div class="col-md-3 col-sm-6 col-xs-6">
                             <div class="product-item">
                                 <div class="pi-pic">
                                        <img src="/uploads/urunler/{{$begen->urun->detay->urun_resmi}}" alt="">
                                    <div class="icon">
                                            <a href="{{route('begenilen-urunler.sil', ['id'=>$begen->id])}}" style="float: left"><i class="icon_minus_alt2"></i></a>
                                    </div>
                            <ul>
                                <li class="quick-view"><a href="{{ route('urun', $begen->urun->slug) }}">+ ÜRÜNÜ GÖR</a></li>
                            </ul>
                                 </div>
                            <div class="pi-text">
                                <a href="{{ route('urun', $begen->urun->slug) }}">
                                    <h5>{{$begen->urun->urun_adi}}</h5>
                                </a>
                                <div class="product-price">
                                    {{$begen->urun->fiyat}}₺
                                </div>
                            </div>
                            </div>
                        </div>
                @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
