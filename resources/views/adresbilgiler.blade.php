@extends('layouts.master')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Anasayfa</a>
                        <span>Adres Bilgilerim</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                @include('partials.alert')
                <div class="col-lg-12">
                    <div class="contact-title">
                        <h4>Adres Bilgilerim</h4>
                    </div>
                    <div class="adresalan">
                        <div>
                            <a class="primary-btn" href="{{route('adreskayit')}}">
                                <i class="fa fa-plus"></i>&nbsp;Yenİ Adres Ekle
                            </a>
                        </div>
                        <br>
                        @foreach($adresler as $adres)
                            <div class="contact-widget">
                                <div class="cw-item">
                                    <div class="ci-icon">
                                        <i class="ti-location-arrow"></i>
                                    </div>
                                    <div class="ci-text">
                                        <span>Adres Başlığı:</span>
                                        <p>{{ $adres->adres_baslik }}</p>
                                    </div>
                                </div>
                                <div class="cw-item">
                                    <div class="ci-icon">
                                        <i class="ti-location-pin"></i>
                                    </div>
                                    <div class="ci-text">
                                        <span>Adres:</span>
                                        <p>{{ $adres->satir1 }} {{ $adres->satir2 }} - {{ $adres->ilceAdi->ilce_adi }}
                                            , {{ $adres->ilAdi->il_adi }}</p>
                                    </div>
                                </div>
                                <div class="cw-item">
                                    <div class="ci-icon">
                                        <i class="ti-user"></i>
                                    </div>
                                    <div class="ci-text">
                                        <span>Ad Soyad:</span>
                                        <p>{{$adres->ad}} {{$adres->soyad}}</p>
                                    </div>
                                </div>
                                <div class="cw-item">
                                    <div class="ci-icon">
                                        <i class="ti-mobile"></i>
                                    </div>
                                    <div class="ci-text">
                                        <span>Telefon:</span>
                                        <p>{{$adres->telefon}}</p>
                                    </div>
                                </div>
                                @if($adres->varsayilan)
                                    <div class="cw-item">
                                        <div class="ci-icon">
                                            <i class="ti-check"></i>
                                        </div>
                                        <div class="ci-text">
                                            <span>Durum:</span>
                                            <p>Varsayılan Adres</p>
                                        </div>
                                    </div>
                                @endif
                                <br>
                                <div>
                                    <a href="{{route('adres.sil', ['id'=>$adres->id])}}" class="primary-btn"
                                       style="height: 45px;">Adresİ Sİl</a>
                                    <a href="{{ route('adresguncelle', $adres->id) }}" class="primary-btn">&nbsp;SEÇİLİ
                                        ADRESİ GÜNCELLE</a>
                                </div>
                            </div><br>
                        @endforeach
                    </div>
                </div>
            </div>
    </section>
    <!-- Contact Section End -->
@endsection
