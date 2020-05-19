@extends('layouts.master')
@section('content')
    <style>
        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            -o-appearance: none;
            -ms-appearance: none;
            appearance: none;
            display: block;
            margin: 30px 0;
            padding: 10px 50px 10px 10px;
            background: url("{{asset('img/select.png')}}") no-repeat 95% center;
            background-color: #222222;
            color: #ffffff;
            border-radius: 4px;
            border: 2px solid #ffffff;
            width: 280px;
        }
    </style>
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="/"><i class="fa fa-home"></i> Anasayfa</a>
                        <span>{{$urun->urun_adi}}</span>
                        <input type="hidden" name="kategori_id" id="kategori_id" value="{{$urun->id}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-pic-zoom">
                                <img class="product-big-img" src="/uploads/urunler/{{$urun->detay->urun_resmi}}" alt="">
                            </div>
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">
                                    <div class="pt active"
                                         data-imgbigurl="/uploads/urunler/{{$urun->detay->urun_resmi}}"><img
                                            src="/uploads/urunler/{{$urun->detay->urun_resmi}}" alt=""></div>
                                    <div class="pt active"
                                         data-imgbigurl="/uploads/urunler/{{$urun->detay->urun_resmi2}}"><img
                                            src="/uploads/urunler/{{$urun->detay->urun_resmi2}}" alt=""></div>
                                    <div class="pt" data-imgbigurl="/uploads/urunler/{{$urun->detay->urun_resmi3}}"><img
                                            src="/uploads/urunler/{{$urun->detay->urun_resmi3}}" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details">
                                <div class="pd-title">
                                    <h3>{{ $urun->urun_adi }}</h3>

                                    <form action="{{route('begenilen-urunler.ekle')}}" method="post">
                                        <input type="hidden" value="{{$urun->id}}" name="urun_id">
                                        @csrf
                                        <button style="float: left" type="submit" class="heart-icon"><i
                                                class="icon_heart_alt"></i></button>
                                    </form>

                                </div>
                                <div class="pd-desc">
                                    <h4>{{ $urun->indirimli_fiyat ?: $urun->fiyat }}₺</h4>
                                </div>
                                <div class="quantity">
                                    <form action="{{route('sepet.ekle')}}" method="post">
                                        <input type="hidden" name="id" value="{{$urun->id}}">
                                        {{ csrf_field() }}

                                        <div class="pd-color">
                                            <div class="pd-color-choose">
                                                @foreach($ozellikler as $key => $ozellik)
                                                    <div class="filter-widget">
                                                        <h4 class="fw-title">{{ $ozellik->ozellik_adi }}</h4>
                                                        <div class="fw-color-choose">
                                                            <div>
                                                                <select id="filtre-{{$ozellik->id}}" class="filtre">
                                                                    @foreach($ozellik->degerler()->whereIn('id', $urunOzellikleri)->get() as $key => $deger)
                                                                        <option
                                                                            value="{{$deger->id}}">{{$deger->deger}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="pro-qty">
                                            <input class="input" type="number" name="quantity" min="0">
                                        </div>
                                        <button type="submit" value="Sepete Ekle" class="primary-btn pd-cart">Sepete
                                            Ekle
                                        </button>
                                    </form>
                                </div>
                                <ul class="pd-tags">
                                    <li><span>Ürün Kodu</span>:
                                        {{$urun->urun_kodu}}
                                    </li>
                                    <li><span>Kategori</span>:
                                        @foreach($urun->kategoriler as $kategori)
                                            {{$kategori->kategori_adi}}
                                        @endforeach
                                    </li>
                                    <li><span>İşletme</span>:
                                        {{$urun->isletmeAdi->isletme_adi}}
                                    </li>
                                </ul>
                                <div class="pd-desc">
                                    <p>{{ $urun->aciklama }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->
@endsection
