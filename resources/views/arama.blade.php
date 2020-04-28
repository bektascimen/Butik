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
            .inner-header .advanced-search .input-group button {
                right: -14px;
            }
            .product-item .pi-pic ul li button {
                padding: 16px 12px 12px 11px;
            }
            .nav-item .nav-menu li button {
                padding: 16px 45px 15px;
            }
        }
    </style>
    <div class="container">
        <div class="products bg-content">
            <div class="row">
                @if(count($urunler)==0)
                    <div class="col-md-12 text-center">
                        Bir ürün bulunamadı.
                    </div>
                @endif
                @foreach($urunler as $urun)
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="/uploads/urunler/{{$urun->detay->urun_resmi}}" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active">
                                        <form action="{{route('sepet.ekle')}}" method="post">
                                            <input type="hidden" value="{{$urun->id}}" name="id">
                                            <input type="hidden" value="1" name="quantity">
                                            @csrf
                                            <button style="float: left" type="submit" value="Sepete Ekle"><i class="icon_bag_alt"></i></button>
                                        </form>
                                    </li>

                                    <li class="quick-view"><a href="{{ route('urun', $urun -> slug) }}">+ ÜRÜNÜ GÖR</a></li>

                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Coat</div>
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
            {{ $urunler -> appends(['aranan' => old('aranan')]) -> links() }}
        </div>
    </div>
@endsection
