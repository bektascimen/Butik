@extends('layouts.master')
@section('content')

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Anasayfa</a>
                        <span>Kişisel Bilgilerim</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>Bilgileriniz</h2>
                        <form action="{{ route('kisisel.bilgilerim', ['id'=>auth()->user()->id]) }}" method="post">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                                @include('partials.alert')


                            <div class="group-input">
                                <label for="username">Adınız</label>
                                <input type="text" name="ad" value="{{auth()->user()->ad}}">
                            </div>

                            <div class="group-input">
                                <label for="pass">Soyadınız</label>
                                <input type="text" name="soyad" value="{{auth()->user()->soyad}}">
                            </div>

                                <div class="group-input">
                                    <label for="username">Puanlarınız</label>
                                    <input type="text" name="puan" value="0 OrdanBiPuan, Çok Yakında!" disabled>
                                </div>

                                <div class="group-input">
                                    <label for="pass">E-Mail Adresiniz</label>
                                    <input type="text" type="email" name="email" value="{{auth()->user()->email}}" disabled>
                                </div>


                            <div class="group-input gi-check">
                            </div>
                                {{csrf_field()}}
                            <button type="submit" class="site-btn login-btn">Güncelle</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->

@endsection
