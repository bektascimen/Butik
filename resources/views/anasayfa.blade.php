@extends('layouts.master')
@section('content')
    <style>
        ul li.w-icon.active button {
            background: #e7ab3c;
            color: #ffffff;
            font-size: 16px;
            font-weight: 700;
            display: block;
            text-decoration: none;

        }

        @media only screen and (min-width: 1200px) and (max-width: 1920px) {
            .product-item .pi-pic ul li button {
                padding: 16px 12px 12px 11px;
            }

            .nav-item .nav-menu li button {
                padding: 16px 45px 15px;
            }
        }
    </style>
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <img src="../img/gif.gif" alt="">
        <div class="hero-items owl-carousel">
            @foreach($urunlerSlider as $index => $urun)
                <div class="single-hero-items set-bg" data-setbg="/uploads/slider/{{$urun->detay->slider_resmi}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <span>Hırka</span>
                                <h1>Hafta Sonu İndirimi</h1>
                                <p>Bu hafta sonuna özel indirimli ürünlere göz at</p>
                                <a href="{{route('urun', $urun -> slug)}}" class="primary-btn">Alışverişe başla</a>
                            </div>
                        </div>
                        <div class="off-card">
                            <h2>İNDİRİM <span>50%</span></h2>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- Hero Section End -->
    <br><br><br><br>
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="single-banner" style="width: 100%;">
                    <div class="inner-text">
                        <p>
                            <a href="kategori/yeni-gelen">
                                <img alt="new-season.png" src="../img/new-season.png"/>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row" style="padding-left: 150px;">
                <div class="col-lg-4">
                    <div style="width: 100%;">
                        <div style="width: 100%;">
                            <a href="kategori/tayt">
                                <img src="../img/tayt2.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div style="width: 100%;">
                        <div style="width: 100%;">
                            <a href="kategori/elbise">
                                <img src="../img/elbise2.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div style="width: 100%;">
                        <a href="kategori/etek">
                            <img src="../img/etek2.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="img/products/women-large.jpg">
                        <h2>İndirimli Ürünler</h2>
                        <a href="#">Daha fazla keşfet</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="product-slider owl-carousel">
                        @foreach($urunlerIndirimli as $urun)
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="/uploads/urunler/{{$urun->detay->urun_resmi}}" alt="">
                                    <div class="icon">
                                        <form action="{{route('begenilen-urunler.ekle')}}" method="post">
                                            <input type="hidden" value="{{$urun->id}}" name="urun_id">
                                            @csrf
                                            <button style="float: left;" type="submit" class="main-btn icon-btn"><i
                                                    class="icon_heart_alt"></i></button>
                                        </form>
                                    </div>
                                    <ul>
                                        <li class="quick-view"><a href="{{ route('urun', $urun -> slug) }}">+ ÜRÜNÜ GÖR</a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    @foreach($urun->kategoriler as $kategori)
                                        <div class="catagory-name">{{$kategori->kategori_adi}}</div>
                                    @endforeach
                                    <a href="{{ route('urun', $urun -> slug) }}">
                                        <h5>{{ $urun -> urun_adi }}</h5>
                                    </a>
                                    <div class="product-price">
                                        {{$urun -> indirimli_fiyat }}₺
                                        <del> {{$urun -> fiyat }}₺</del>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->



    <!-- Man Banner Section Begin -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="product-slider owl-carousel">
                        @foreach($urunlerCokSatan as $urun)
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="/uploads/urunler/{{$urun->detay->urun_resmi}}" alt="">
                                    <div class="icon">
                                        <form action="{{route('begenilen-urunler.ekle')}}" method="post">
                                            <input type="hidden" value="{{$urun->id}}" name="urun_id">
                                            @csrf
                                            <button style="float: left;" type="submit" class="main-btn icon-btn"><i
                                                    class="icon_heart_alt"></i></button>
                                        </form>
                                    </div>
                                    <ul>
                                        <li class="quick-view"><a href="{{ route('urun', $urun -> slug) }}">+ ÜRÜNÜ GÖR</a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    @foreach($urun->kategoriler as $kategori)
                                        <div class="catagory-name">{{$kategori->kategori_adi}}</div>
                                    @endforeach
                                    <a href="{{ route('urun', $urun -> slug) }}">
                                        <h5>{{ $urun -> urun_adi }}</h5>
                                    </a>
                                    <div class="product-price">
                                        {{$urun -> fiyat }}₺
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large" data-setbg="img/products/women-large.jpg">
                        <h2>Fırsat Ürünleri</h2>
                        <a href="#">Daha çok keşfet</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Man Banner Section End -->

    <!-- Instagram Section Begin -->
    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="img/i1.png">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="https://www.instagram.com/komsu.butik/">Komşu & Tokyo Butik</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/i2.png">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="https://www.instagram.com/komsu.butik/">Komşu & Tokyo Butik</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/i3.png">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="https://www.instagram.com/komsu.butik/">Komşu & Tokyo Butik</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/i4.png">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="https://www.instagram.com/komsu.butik/">Komşu & Tokyo Butik</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/i5.png">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="https://www.instagram.com/komsu.butik/">Komşu & Tokyo Butik</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/i6.png">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="https://www.instagram.com/komsu.butik/">Komşu & Tokyo Butik</a></h5>
            </div>
        </div>
    </div>
    <!-- Instagram Section End -->

    <br><br><br><br>
@endsection
