@extends('layouts.master')
@section('content')
    @include('partials.alert')
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Anasayfa</a>
                        <span>Kayıt Ol</span>
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
                    <div class="register-form">
                        <h2>Kayıt Ol</h2>
                        <form method="POST" action="{{ route('kullanici.kayitol') }}">
                            {{ csrf_field() }}

                            <div class="group-input" {{ $errors->has('ad') ? 'has-error': '' }}>
                                <label for="username">Adınız *</label>
                                <input id="ad" type="text" name="ad" value="{{ old('ad') }}" required autofocus>
                                @if($errors->has('ad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ad') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="group-input">
                                <label for="pass">Soyadınız *</label>
                                <input id="soyad" type="text" class="input" name="soyad" value="{{ old('soyad') }}" required>
                            </div>

                            <div class="group-input">
                                <label for="con-pass">E-Mail Adresiniz *</label>
                                <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required>
                            </div>

                            <div class="group-input">
                                <label for="con-pass">Şifreniz *</label>
                                <input id="sifre" type="password" class="input" name="password" required>
                            </div>

                            <div class="group-input">
                                <label for="con-pass">Şifreniz Tekrar*</label>
                                <input id="sifre-tekrari" type="password" class="input" name="password_confirmation" required>
                            </div>

                            <button type="submit" class="site-btn register-btn">Kayıt Ol</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->
@endsection
