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
                                            <a href="{{route('begenilen-urunler.sil', ['id'=>$begen->id])}}" style="float: left"><i class="icon_heart_alt"></i></a>
                                    </div>
                            <ul>
                                <li class="w-icon active">
                                    <form action="{{route('sepet.ekle')}}" method="post">
                                        <input type="hidden" value="{{$begen->urun->id}}" name="id">
                                        <input type="hidden" value="1" name="quantity">
                                        @csrf
                                        <button class="w-icon active" style="margin-left:auto; margin-right:auto; border: 0;" type="submit" value="Sepete Ekle"><i class="icon_bag_alt"></i></button>
                                    </form>
                                </li>

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
