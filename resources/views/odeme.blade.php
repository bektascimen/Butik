@extends('layouts.master')
@section('content')

    <style>
        .cargo {
            width: 70%;
            height: 10%;
            left: 0;
            top: 0;
        }
    </style>
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./index.html"><i class="fa fa-home"></i> Anasayfa</a>
                        <a href="./shop.html">Sepet</a>
                        <span>Ödeme</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="checkout-section spad">
        <div class="container">
            <form action="{{ route('odemeyap') }}" method="post" class="checkout-form">
                <div class="row">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="col-lg-6">
                        <h4>Teslimat ve Fatura Bilgileri</h4>
                        <div class="mevcutadres">
                            <div class="form-group">
                                <label for="fatura_adresi">Fatura adresi</label>
                                <select class="adt2 form-control" name="fatura_adresi">
                                    @foreach($adresler as $adres)
                                        <option @if($adres->varsayilan)selected="selected"@endif value="{{ $adres->id }}">
                                            {{ $adres->adres_baslik }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="teslimat_adres">Teslimat adresi</label>
                                <select class="adt2 form-control" name="teslimat_adresi">
                                    @foreach($adresler as $adres)
                                        <option @if($adres->varsayilan)selected="selected"@endif value="{{ $adres->id }}">
                                            {{ $adres->adres_baslik }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="kargo">
                            <div class="col-lg-12">
                                <div class="place-order">
                                    <h4>Kargo Seçenekleri</h4>
                                    <div class="order-total">
                                        <div class="payment-check">
                                            @if(Cart::getTotal()<100)
                                            <div class="pc-item">
                                                <label for="pc-check">
                                                    Yurtİçi Kargo(5.00 TL)
                                                    <input type="checkbox" id="kargo" name="kargo" value="0" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <br><br>
                                                <p><span>Tahmini Teslimat Süresi: </span>5 iş günü</p>
                                            </div>
                                            @endif
                                            @if(Cart::getTotal()>=100)
                                            <div class="pc-item">
                                                <label for="pc-check">
                                                    Yurtİçi Kargo(Ücretsiz)
                                                    <input type="checkbox" id="kargo" name="kargo" value="1" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <br><br>
                                                <p><span>Tahmini Teslimat Süresi: </span>5 iş günü</p>
                                            </div>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="place-order">
                            <h4>Siparişiniz</h4>
                            <div class="order-total">
                                <ul class="order-table">
                                    <li>Ürün <span>Toplam</span></li>
                                    @foreach(Cart::getContent() as $urunCartItem)
                                    <li class="fw-normal">{{$urunCartItem->name}} <span>{{$urunCartItem->price * $urunCartItem->quantity}} ₺</span></li>
                                    @endforeach
                                    <li class="total-price">Toplam Tutar <span>{{Cart::getTotal()}} ₺</span></li>
                                </ul>
                                <div class="order-btn">
                                    {{csrf_field()}}
                                    <button type="submit" class="site-btn place-btn" data-toggle="tooltip" data-placement="top" title="Sil" onclick="return confirm('Siparişinizi tamamlamak istiyor musunuz?')">Ödeme Yap</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

    @endsection
