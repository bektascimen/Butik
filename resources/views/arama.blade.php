@extends('layouts.master')
@section('content')

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Anasayfa</a>
                        <span>Arama</span>
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
                        @if(count($urunler)==0)
                            <div class="col-md-12 text-center">
                                Bir ürün bulunamadı.
                            </div>
                        @endif
                        @foreach($urunler as $urun)
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="/uploads/urunler/{{$urun->detay->urun_resmi}}" alt="">

                                        <ul>
                                            <li class="quick-view"><a href="{{ route('urun', $urun -> slug) }}">+ ÜRÜNÜ GÖR</a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <a href="{{ route('urun', $urun -> slug) }}">
                                            <h5>{{$urun -> urun_adi}}</h5>
                                        </a>
                                        <div class="product-price">
                                            {{$urun -> fiyat}}₺
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
