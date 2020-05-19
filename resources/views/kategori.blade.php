@extends('layouts.master')
@section('content')

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Anasayfa</a>
                        <span>{{$kategori->kategori_adi}}</span>
                        <input type="hidden" name="kategori_id" id="kategori_id" value="{{$kategori->id}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                    <div class="filter-widget">
                        <h4 class="fw-title">{{ $kategori->kategori_adi }}</h4>
                        <ul class="filter-catagories">
                            @foreach($solKategoriler as $item)
                                <li>
                                    <a href="{{ route('kategori', $item->slug) }}">
                                        {{ $item->kategori_adi }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Ücret</h4>
                        <div class="filter-range-wrap">
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount" value="{{$urunMinFiyat}}">
                                    <input type="text" id="maxamount" value="{{$urunMaxFiyat}}">

                                </div>
                            </div>
                            <div
                                class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                data-min="{{$urunMinFiyat}}" data-max="{{$urunMaxFiyat}}">
                                <div id="price_range"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="1" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                        </div>
                    </div>
                    @foreach($urunFiltre as $key => $filtre)
                        <div class="filter-widget">
                            <h4 class="fw-title">{{ $filtre->ozellik_adi }}</h4>
                            <div class="fw-color-choose">
                                @foreach($filtre->degerler as $key => $deger)
                                    <div>
                                        <input id="filtre-{{$deger->id}}" type="checkbox" class="filtre"
                                               value="{{$deger->id}}">
                                        <label for="filtre-{{$deger->id}}">{{$deger->deger}}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                    <a href="#" id="productFilterBtn" class="btn btn-warning">Filtrele</a>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                            </div>
                        </div>
                    </div>
                    <div class="product-list" id="filter_data">
                        @include("urun-liste", ["urunler" => $urunler])
                    </div>
                    {{ $urunler->links() }}
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->
@endsection
