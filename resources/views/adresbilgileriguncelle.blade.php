@extends('layouts.master')
@section('content')

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Anasayfa</a>
                        <span>Adres Bilgileri Güncelle</span>
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
                    @include('partials.alert')
                    <div class="register-form">
                        <h2>Adres Bilgileri Güncelle</h2>
                        <form action="{{ route('adres.guncelle', ['id'=>$adresler->id]) }}" method="post">
                            {{csrf_field()}}
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="group-input">
                                <label for="username">Adres Başlık</label>
                                <input type="text" name="adres_baslik"
                                       value="{{$adresler->adres_baslik}}">
                            </div>
                            <div class="group-input">
                                <label for="username">Adres Başlık</label>
                                <input type="text" name="ad"
                                       value="{{$adresler->ad}}">
                            </div>
                            <div class="group-input">
                                <label for="username">Adres Başlık</label>
                                <input type="text" name="soyad"
                                       value="{{$adresler->soyad}}">
                            </div>
                            <div class="group-input">
                                <label for="username">Cadde, mahalle, apartman adı</label>
                                <input type="text" name="satir1"
                                       value="{{$adresler->satir1}}">
                            </div>
                            <div class="group-input">
                                <label for="username">Apartman no, daire no</label>
                                <input type="text" name="satir2"
                                       value="{{$adresler->satir2}}">
                            </div>
                            <div class="group-input">
                                <label for="pass">Telefon</label>
                                <input type="text" name="telefon" placeholder="Telefon"
                                       value="{{$adresler->telefon}}">
                            </div>
                            <div class="group-input">
                                <label for="il">İl</label><br>
                                <html>
                                <select name="il_id" id="il_id">
                                    <option value="{{$adresler->il_id}}"> {{$adresler->ilceAdi->il_adi}}  </option>
                                </select>
                                <select name="ilce_id" id="ilce_id" disabled="disabled">
                                    <option value="{{$adresler->ilce_id}}"> {{$adresler->ilceAdi->ilce_adi}}  </option>
                                </select>
                                </html>
                            </div>
                            <div>
                                <label for="varsayilan">
                                    <input id="varsayilan" type="checkbox" name="varsayilan" placeholder="Varsayılan"
                                           value="1" {{$adresler->varsayilan == 1 ? 'checked' : null }}>
                                    Varsayılan adres olarak ayarla
                                </label>
                            </div>
                            <div>
                            {{csrf_field()}}
                            <button type="submit" class="site-btn register-btn">Güncelle</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->

@endsection
