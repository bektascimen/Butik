@extends('layouts.master')
@section('content')

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Anasayfa</a>
                        <span>Adres Kayıt</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Adres Kayıt</h2>
                        <form action="{{ route('adres.kaydet') }}" method="post">
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
                                <label for="username">Adres Başlığı: *</label>
                                <input type="text" id="adres_baslik" name="adres_baslik" value="{{old('adres_baslik')}}">
                            </div>
                            <div class="group-input">
                                <label for="pass">Ad *</label>
                                <input type="text" id="ad" name="ad" value="{{old('ad')}}">
                            </div>
                            <div class="group-input">
                                <label for="pass">Soyad *</label>
                                <input type="text" id="soyad" name="soyad" value="{{old('soyad')}}">
                            </div>
                            <div class="group-input">
                                <label for="pass">Cadde, mahalle, apartman adı *</label>
                                <input type="text" id="satir1" name="satir1" value="{{old('satir1')}}">
                            </div>
                            <div class="group-input">
                                <label for="con-pass">Apartman no, daire no *</label>
                                <input type="text" id="satir2" name="satir2" value="{{old('satir2')}}">
                            </div>
                            <div class="group-input">
                                <label for="pass">Telefon *</label>
                                <input type="text" id="telefon" name="telefon" value="{{old('telefon')}}">
                            </div>
                            <div class="group-input">
                                <label for="il">İl</label><br>
                                <html>
                                <select name="il_id" id="il_id">
                                    <option value="0">Lütfen Bir İl Seçiniz</option>
                                </select>
                                <select name="ilce_id" id="ilce_id" disabled="disabled">
                                    <option value="0">Lütfen Önce bir İl seçiniz</option>
                                </select>
                                </html>
                            </div>
                            <div>
                                <input id="varsayilan" type="checkbox" name="varsayilan" value="1" {{old('varsayilan') ? 'checked' : null}}> Varsayılan adres olarak ayarla
                            </div>
                            <br>
                            <button type="submit" class="site-btn register-btn">Kayıt Et</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->

@endsection
