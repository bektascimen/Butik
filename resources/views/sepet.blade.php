@extends('layouts.master')
@section('content')


    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./home.html"><i class="fa fa-home"></i> Anasayfa</a>
                        <a href="./shop.html">Sepet</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @if(!auth()->user())
                        <div class="jumbotron jumbotron-fluid">
                            <div class="container">
                                <p class="lead">Giriş yapmadan sipariş veremezsiniz.</p>
                            </div>
                        </div>
                    @endif
                    @include('partials.alert')
                    <div class="cart-table">
                        @if(count(Cart::getContent())>0)
                        <table>
                            <thead>
                            <tr>
                                <th>Resim</th>
                                <th class="p-name">Ürün İsmİ</th>
                                <th>Tutar</th>
                                <th>Adet</th>
                                <th>Toplam Tutar</th>
                                <th>
                                        <form target="_parent" action="{{route('sepet.bosalt')}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                        </form>
                                </th>
                            </tr>
                            </thead>
                            @foreach(Cart::getContent() as $urunCartItem)
                            <tbody>
                            <tr>
                                <td class="cart-pic first-row"><img src="/uploads/sepetUrunler/{{$urunCartItem->urun_resmi}}" alt=""></td>
                                <td class="cart-title first-row">
                                    <a href="{{ route('urun', Str::slug($urunCartItem->name)) }}">{{ $urunCartItem->name }}</a>
                                </td>
                                <td class="p-price first-row">{{ $urunCartItem->price }} ₺</td>

                                <td class="qty text-center">
                                    <a href="#" class="btn btn-xs btn-default urun-adet-azalt" data-id="{{$urunCartItem->id}}" data-adet="{{$urunCartItem->quantity-1}}">-</a>
                                    <span>{{$urunCartItem->quantity}}</span>
                                    <a href="#" class="btn btn-xs btn-default urun-adet-artir" data-id="{{$urunCartItem->id}}" data-adet="{{$urunCartItem->quantity+1}}">+</a>
                                </td>


                                <td class="total-price first-row">{{$urunCartItem->getPriceSum()}} ₺</td>
                                <td class="close-td first-row">
                                    <form action="{{route('sepet.kaldir', $urunCartItem->id)}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="main-btn icon-btn" value="Sepetten Kaldır"><i class="ti-close"></i></button>
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="cart-total">Toplam Tutar <span>{{Cart::getTotal()}} ₺</span></li>
                                </ul>
                                @if(Cart::getTotal()>=20)
                                    <div>
                                        <a href="{{route('odeme')}}" class="proceed-btn">Ödeme Adımına Geç</a>
                                    </div>
                                @endif
                                @if(Cart::getTotal()<20)
                                    <div>
                                        <a href="{{route('odeme')}}" class="proceed-btn" onclick="return false;">Ödeme Adımına Geç</a>
                                    </div>
                                @endif
                                @else
                                    <p>Sepetinizde herhangi bir ürün bulunmuyor</p>
                                @endif

                            </div>
                        </div>
                    </div>
                        <hr>

                        <div class="bottom-banner">
                            <a title="Ödeme Yöntemleri">
                                <picture>
                                    <source media="(max-width: 766px)" srcset="../img/troy.jpg">
                                    <source media="(min-width: 767px)" srcset="../img/troy.jpg">
                                    <img src="../img/troy.jpg" style="width:auto;">
                                </picture>
                            </a>
                        </div>

                        <section class="fixed-term">
                            <div class="container">
                                <header>
                                    <h2>Taksit Seçenekleri</h2>
                                    <p class="installmentsAccordion">Taksit Seçenekleri<span></span></p>
                                </header>
                                <div class="installmentsWrapper">
                                    <section class="basketInstallmentContainer">
                                        <div class="cell">
                                            <div class="table">
                                                <figure><img src="../img/img-new-bonus-logo.png" alt=""/></figure>
                                                <div class="head">
                                                    <div class="term">Taksit</div>
                                                    <div class="monthly">Aylık</div>
                                                    <div class="total">Tutar</div>
                                                </div>
                                                <div class="cell-row">
                                                    <div class="term">Peşin</div>
                                                    <div class="monthly">{{Cart::getTotal()}} TL</div>
                                                    <div class="total">{{Cart::getTotal()}} TL</div>
                                                </div>
                                                <div class="cell-row">
                                                    <div class="term">2</div>
                                                    <div class="monthly">{{Cart::getTotal()/2}} TL</div>
                                                    <div class="total">{{Cart::getTotal()}} TL</div>
                                                </div>
                                                <div class="cell-row">
                                                    <div class="term">3</div>
                                                    <div class="monthly">{{Cart::getTotal()/3}} TL</div>
                                                    <div class="total">{{Cart::getTotal()}} TL</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cell">
                                            <div class="table">
                                                <figure><img src="../img/img-new-world-logo.png" alt=""/></figure>
                                                <div class="head">
                                                    <div class="term">Taksit</div>
                                                    <div class="monthly">Aylık</div>
                                                    <div class="total">Tutar</div>
                                                </div>
                                                <div class="cell-row">
                                                    <div class="term">Peşin</div>
                                                    <div class="monthly">{{Cart::getTotal()}} TL</div>
                                                    <div class="total">{{Cart::getTotal()}} TL</div>
                                                </div>
                                                <div class="cell-row">
                                                    <div class="term">2</div>
                                                    <div class="monthly">{{Cart::getTotal()/2}} TL</div>
                                                    <div class="total">{{Cart::getTotal()}} TL</div>
                                                </div>
                                                <div class="cell-row">
                                                    <div class="term">3</div>
                                                    <div class="monthly">{{Cart::getTotal()/3}} TL</div>
                                                    <div class="total">{{Cart::getTotal()}} TL</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cell">
                                            <div class="table">
                                                <figure><img src="../img/img-new-maksimum-logo.png" alt=""/></figure>
                                                <div class="head">
                                                    <div class="term">Taksit</div>
                                                    <div class="monthly">Aylık</div>
                                                    <div class="total">Tutar</div>
                                                </div>
                                                <div class="cell-row">
                                                    <div class="term">Peşin</div>
                                                    <div class="monthly">{{Cart::getTotal()}} TL</div>
                                                    <div class="total">{{Cart::getTotal()}} TL</div>
                                                </div>
                                                <div class="cell-row">
                                                    <div class="term">2</div>
                                                    <div class="monthly">{{Cart::getTotal()/2}} TL</div>
                                                    <div class="total">{{Cart::getTotal()}} TL</div>
                                                </div>
                                                <div class="cell-row">
                                                    <div class="term">3</div>
                                                    <div class="monthly">{{Cart::getTotal()/3}} TL</div>
                                                    <div class="total">{{Cart::getTotal()}} TL</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cell">
                                            <div class="table">
                                                <figure><img src="../img/cardfinans-logo.png" alt=""/></figure>
                                                <div class="head">
                                                    <div class="term">Taksit</div>
                                                    <div class="monthly">Aylık</div>
                                                    <div class="total">Tutar</div>
                                                </div>
                                                <div class="cell-row">
                                                    <div class="term">Peşin</div>
                                                    <div class="monthly">{{Cart::getTotal()}} TL</div>
                                                    <div class="total">{{Cart::getTotal()}} TL</div>
                                                </div>
                                                <div class="cell-row">
                                                    <div class="term">2</div>
                                                    <div class="monthly">{{Cart::getTotal()/2}} TL</div>
                                                    <div class="total">{{Cart::getTotal()}} TL</div>
                                                </div>
                                                <div class="cell-row">
                                                    <div class="term">3</div>
                                                    <div class="monthly">{{Cart::getTotal()/3}} TL</div>
                                                    <div class="total">{{Cart::getTotal()}} TL</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cell">
                                            <div class="table">
                                                <figure><img src="../img/img-new-acess-logo.png" alt=""/></figure>
                                                <div class="head">
                                                    <div class="term">Taksit</div>
                                                    <div class="monthly">Aylık</div>
                                                    <div class="total">Tutar</div>
                                                </div>
                                                <div class="cell-row">
                                                    <div class="term">Peşin</div>
                                                    <div class="monthly">{{Cart::getTotal()}} TL</div>
                                                    <div class="total">{{Cart::getTotal()}} TL</div>
                                                </div>
                                                <div class="cell-row">
                                                    <div class="term">2</div>
                                                    <div class="monthly">{{Cart::getTotal()/2}} TL</div>
                                                    <div class="total">{{Cart::getTotal()}} TL</div>
                                                </div>
                                                <div class="cell-row">
                                                    <div class="term">3</div>
                                                    <div class="monthly">{{Cart::getTotal()/3}} TL</div>
                                                    <div class="total">{{Cart::getTotal()}} TL</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cell">
                                            <div class="table">
                                                <figure><img src="../img/img-new-advance-logo.png" alt=""/></figure>
                                                <div class="head">
                                                    <div class="term">Taksit</div>
                                                    <div class="monthly">Aylık</div>
                                                    <div class="total">Tutar</div>
                                                </div>
                                                <div class="cell-row">
                                                    <div class="term">Peşin</div>
                                                    <div class="monthly">{{Cart::getTotal()}} TL</div>
                                                    <div class="total">{{Cart::getTotal()}} TL</div>
                                                </div>
                                                <div class="cell-row">
                                                    <div class="term">2</div>
                                                    <div class="monthly">{{Cart::getTotal()/2}} TL</div>
                                                    <div class="total">{{Cart::getTotal()}} TL</div>
                                                </div>
                                                <div class="cell-row">
                                                    <div class="term">3</div>
                                                    <div class="monthly">{{Cart::getTotal()/3}} TL</div>
                                                    <div class="total">{{Cart::getTotal()}} TL</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cell">
                                            <div class="table">
                                                <figure><img src="../img/paraflogo.png" alt=""/></figure>
                                                <div class="head">
                                                    <div class="term">Taksit</div>
                                                    <div class="monthly">Aylık</div>
                                                    <div class="total">Tutar</div>
                                                </div>
                                                <div class="cell-row">
                                                    <div class="term">Peşin</div>
                                                    <div class="monthly">{{Cart::getTotal()}} TL</div>
                                                    <div class="total">{{Cart::getTotal()}} TL</div>
                                                </div>
                                                <div class="cell-row">
                                                    <div class="term">2</div>
                                                    <div class="monthly">{{Cart::getTotal()/2}} TL</div>
                                                    <div class="total">{{Cart::getTotal()}} TL</div>
                                                </div>
                                                <div class="cell-row">
                                                    <div class="term">3</div>
                                                    <div class="monthly">{{Cart::getTotal()/3}} TL</div>
                                                    <div class="total">{{Cart::getTotal()}} TL</div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                </section>
    <!-- Shopping Cart Section End -->
@endsection
