@extends('layouts.master')
@section('content')

    <style>
        .cargo {
            width: 70%;
            height: 10%;
            left: 0;
            top: 0;
        }
        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }

        /* Style the close button */
        .topright {
            float: right;
            cursor: pointer;
            font-size: 28px;
        }

        .topright:hover {color: red;}
    </style>
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="/"><i class="fa fa-home"></i> Anasayfa</a>
                        <a href="/sepet">Sepet</a>
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
                        <div class="odeme">
                            <div class="col-lg-15" style="padding-top: 40px;">
                                <div class="place-order">
                                    <h4>Ödeme Seçenekleri</h4>
                                    <div class="order-total">

                                        <ul class="nav nav-tabs">
                                            <li class="active" style="padding-right: 25px;"><a data-toggle="tab" href="#kk">Kredi Kartı İle Ödeme</a></li>
                                            <li><a data-toggle="tab" href="#ko">Kapıda Ödeme</a></li>
                                        </ul>

                                        <div class="tab-content" style="padding-top: 20px;">
                                            <div id="kk" class="tab-pane fade in active">
                                                <form class="my-form">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1">
                                                          <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
                                                            </span>
                                                            <input type="text" class="form-control" placeholder="Kart Numaranız" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon" id="basic-addon1">
                                                              <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                                                </span>
                                                            <input type="text" class="form-control" placeholder="Kartınızın Üzerindeki İsim" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <!-- Expiry -->
                                                    <div class="row clearfix">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <select name="Month" class="form-control">
                                                                        <option value="january">Ocak</option>
                                                                        <option value="february">Subat</option>
                                                                        <option value="march">Mart</option>
                                                                        <option value="april">Nisan</option>
                                                                        <option value="may">Mayıs</option>
                                                                        <option value="june">Haziran</option>
                                                                        <option value="july">Temmuz</option>
                                                                        <option value="august">Ağustos</option>
                                                                        <option value="september">Eylül</option>
                                                                        <option value="october">Ekim</option>
                                                                        <option value="november">Kasım</option>
                                                                        <option value="december">Aralık</option>
                                                                    </select>
                                                                </div>
                                                                <!-- /input-group -->
                                                            </div>
                                                        </div>
                                                        <!-- /.col-lg-6 -->
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <select name="year" class="form-control">
                                                                        <option value="2013">2021</option>
                                                                        <option value="2014">2022</option>
                                                                        <option value="2015">2023</option>
                                                                        <option value="2015">2024</option>
                                                                        <option value="2015">2025</option>
                                                                        <option value="2015">2026</option>
                                                                    </select>
                                                                </div>
                                                                <!-- /input-group -->
                                                            </div>
                                                        </div>
                                                        <!-- /.col-lg-6 -->
                                                    </div>
                                                    <!-- /.row -->

                                                    <!-- CCV -->
                                                    <div class="row clearfix">
                                                        <!-- /.col-lg-6 -->
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" placeholder="Güvenlik Numaranız" aria-describedby="basic-addon1">
                                                                </div>
                                                                <!-- /input-group -->
                                                            </div>
                                                        </div>
                                                        <!-- /.col-lg-6 -->
                                                    </div>
                                                    <!-- /.row -->

                                                    <div class="order-btn">
                                                        {{csrf_field()}}
                                                        <button type="submit" class="site-btn place-btn" data-toggle="tooltip" data-placement="top" title="Sil" onclick="return confirm('Siparişinizi tamamlamak istiyor musunuz?')">Ödeme Yap(@if(Cart::getTotal() < 100)
                                                                {{Cart::getTotal() + 5}}₺ )
                                                            @else
                                                                {{Cart::getTotal()}}₺ )
                                                            @endif</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div id="ko" class="tab-pane fade">
                                                <div class="payment-check">
                                                    <div class="pc-item">
                                                        <label for="KapıdaOde">
                                                            Kapıda Ödeyin(
                                                            @if(Cart::getTotal() < 100)
                                                                {{Cart::getTotal() + 5}}₺ )
                                                            @else
                                                                {{Cart::getTotal()}}₺ )
                                                            @endif
                                                            <input type="checkbox" name="odeme" id="KapıdaOde" value="Kapıda Ödeme">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <div class="order-btn" style="padding-top: 20px;">
                                                            {{csrf_field()}}
                                                            <button type="submit" class="site-btn place-btn" data-toggle="tooltip" data-placement="top" title="Sil" onclick="return confirm('Siparişinizi tamamlamak istiyor musunuz?')">Ödeme Yap </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                        @if(Cart::getTotal()<100)
                                            <li class="fw-normal">Kargo<span>5₺</span></li>
                                        @endif
                                        <li class="total-price">Toplam Tutar <span>@if(Cart::getTotal() < 100)
                                                    {{Cart::getTotal() + 5}} ₺
                                                @else
                                                    {{Cart::getTotal()}} ₺
                                                @endif</span></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
            </form>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

    @endsection
