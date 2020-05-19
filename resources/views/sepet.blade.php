@extends('layouts.master')
@section('content')


    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="/"><i class="fa fa-home"></i> Anasayfa</a>
                        <a href="/sepet">Sepet</a>
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
                                <th class="p-name text-center">Ürün İsmİ</th>
                                <th>Renk</th>
                                <th>Beden</th>
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
                                <td class="cart-pic first-row"><img src="/uploads/urunler/{{$urunCartItem->attributes->urun_resmi}}" alt="" style="height: 200px;"></td>
                                <td class="cart-title first-row text-center">
                                    <a href="{{ route('urun', Str::slug($urunCartItem->name)) }}">{{ $urunCartItem->name }}</a>
                                </td>
                                <td class="cart-title text-center" style="padding-top: 30px;"> {{ $urunCartItem->attributes->renk }}</td>
                                <td class="cart-title text-center" style="padding-top: 30px;"> {{ $urunCartItem->attributes->beden}}</td>
                                <td class="p-price first-row">{{ $urunCartItem->price }} ₺</td>
                                <td class="qty text-center" style="padding-top: 30px;">
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
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
@endsection
