@extends('layouts.master')
@section('content')

    <style>

        .rating-container {
            margin-top: 30px;
            font-size: 32pt;
        }

        .simple-rating i {
            color: #f5ba00;
            display: inline-block;
            padding: 1px 2px;
            cursor: pointer;
        }

        .sptAlt_Satir_Sol { font-size:16px; padding:5px !important; color:#999999; }
        .sptAlt_Satir_Sag { font-size:16px; padding:5px !important; }

        .m_b_20 { margin-bottom: 20px !important; }

    </style>

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./index.html"><i class="fa fa-home"></i> Anasayfa</a>
                        <span>Sipariş</span>
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
                    <a href="{{route('siparisler')}}" class="primary-btn">
                        <i class="fa fa-undo"></i> SİPARİŞLERE DÖN
                    </a><br><br><br>
                    <div class="contact-title">
                        <h3>SİPARİŞ (SP-{{$siparis->id}})</h3>
                    </div>
                    <table class="shopping-cart-table table">
                        <thead>
                        <tr>
                            <th></th>
                            <th class="text-center">Ürün</th>
                            <th class="text-center">Renk</th>
                            <th class="text-center">Beden</th>
                            <th class="text-center">Birim Fiyatı</th>
                            <th class="text-center">Adet</th>
                            <th class="text-center">Toplam Ücret</th>
                            <th class="text-center">Ödeme Yöntemi</th>
                        </tr>
                        </thead>
                        @foreach($siparis->sepet->sepet_urunler as $sepet_urun)
                            <tbody>
                            <tr>
                                <td class="text-center" style="width: 120px">
                                    <a href="{{route('urun', $sepet_urun->urun->slug)}}">
                                        <img src="/uploads/urunler/{{$sepet_urun->urun->detay->urun_resmi}}" class="img-responsive" style="width: 150px;">
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="{{route('urun', $sepet_urun->urun->slug)}}">
                                        {{$sepet_urun->urun->urun_adi}}
                                    </a>
                                </td>
                                <td class="price text-center">{{ $sepet_urun->renk}}</td>
                                <td class="price text-center">{{ $sepet_urun->beden}}</td>
                                <td class="price text-center">{{ $sepet_urun->fiyat}}₺</td>
                                <td class="price text-center">{{ $sepet_urun->adet}}</td>
                                <td class="price text-center">{{ $sepet_urun->fiyat * $sepet_urun->adet}}₺</td>
                                <td class="text-center">{{ $siparis->odeme_yontemi}}</td>
                            </tr>
                            </tbody>
                        @endforeach
                        <tr>
                        </tr>
                    </table>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="m_b_20">
                                        <div class="col-md-2 col-sm-2 sptAlt_Satir_Sol">Toplam Tutar:</div>
                                        <div class="col-md-4 col-sm-4 sptAlt_Satir_Sag sol">{{ $siparis->siparis_tutari }}₺</div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="m_b_20">
                                        <div class="col-md-2 col-sm-2 sptAlt_Satir_Sol">Sipariş Durumu:</div>
                                        <div class="col-md-4 col-sm-4 sptAlt_Satir_Sag sol">{{ $siparis->durum }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
    </section>
    <!-- Contact Section End -->

@endsection
