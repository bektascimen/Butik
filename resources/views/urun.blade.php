@extends('layouts.master')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Detail</span>
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
                                    <div class="pt active" data-imgbigurl="img/product-single/product-1.jpg"><img
                                            src="../img/product-single/product-1.jpg" alt=""></div>
                                    <div class="pt" data-imgbigurl="img/product-single/product-2.jpg"><img
                                            src="../img/product-single/product-2.jpg" alt=""></div>
                                    <div class="pt" data-imgbigurl="img/product-single/product-3.jpg"><img
                                            src="../img/product-single/product-3.jpg" alt=""></div>
                                    <div class="pt" data-imgbigurl="img/product-single/product-3.jpg"><img
                                            src="../img/product-single/product-3.jpg" alt=""></div>
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
                                        <button style="float: left" type="submit" class="heart-icon"><i class="icon_heart_alt"></i></button>
                                    </form>

                                </div>
                                <div class="pd-desc">
                                    <h4>{{ $urun->indirimli_fiyat ?: $urun->fiyat }}₺</h4>
                                </div>
                                <div class="pd-color">
                                    <h6>Color</h6>
                                    <div class="pd-color-choose">
                                        @foreach($urunRenkFiltre as $key => $urunRenk)
                                            <div>
                                                <input type="checkbox" class="renk" value="{{$key}}">
                                                <label for="renk">{{$key}}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="pd-size-choose">
                                    @foreach($urunBedenFiltre as $key => $value)
                                        <div class="sc-item">
                                            <label for="size-{{$key}}">{{$key}}</label>
                                            <input type="checkbox" class="beden" id="size-{{$key}}" name="size{{$key}}"
                                                   value="{{$key}}">
                                        </div>
                                    @endforeach
                                </div>
                                <div class="quantity">
                                    <form action="{{route('sepet.ekle')}}" method="post">
                                        <input type="hidden" name="id" value="{{$urun->id}}">
                                        {{ csrf_field() }}
                                        <div class="pro-qty">
                                            <input class="input" type="number" name="quantity" min="0">
                                        </div>
                                        <button type="submit" value="Sepete Ekle" class="primary-btn pd-cart">Sepete Ekle</button>
                                    </form>
                                </div>
                                <ul class="pd-tags">
                                    <li><span>Kategori</span>:
                                        @foreach($urun->kategoriler as $kategori)
                                            {{$kategori->kategori_adi}}
                                        @endforeach
                                    </li>
                                </ul>
                                <div class="pd-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span>(5)</span>
                                </div>
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
