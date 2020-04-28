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
                                <select name="il_id" id="il_id">
                                        <option value="0" selected>İl Seçiniz</option>
                                        <option value="1">Adana</option>
                                        <option value="2">Adıyaman</option>
                                        <option value="3">Afyonkarahisar</option>
                                        <option value="4">Ağrı</option>
                                        <option value="5">Amasya</option>
                                        <option value="6">Ankara</option>
                                        <option value="7">Antalya</option>
                                        <option value="8">Artvin</option>
                                        <option value="9">Aydın</option>
                                        <option value="10">Balıkesir</option>
                                        <option value="11">Bilecik</option>
                                        <option value="12">Bingöl</option>
                                        <option value="13">Bitlis</option>
                                        <option value="14">Bolu</option>
                                        <option value="15">Burdur</option>
                                        <option value="16">Bursa</option>
                                        <option value="17">Çanakkale</option>
                                        <option value="18">Çankırı</option>
                                        <option value="19">Çorum</option>
                                        <option value="20">Denizli</option>
                                        <option value="21">Diyarbakır</option>
                                        <option value="22">Edirne</option>
                                        <option value="23">Elazığ</option>
                                        <option value="24">Erzincan</option>
                                        <option value="25">Erzurum</option>
                                        <option value="26">Eskişehir</option>
                                        <option value="27">Gaziantep</option>
                                        <option value="28">Giresun</option>
                                        <option value="29">Gümüşhane</option>
                                        <option value="30">Hakkâri</option>
                                        <option value="31">Hatay</option>
                                        <option value="32">Isparta</option>
                                        <option value="33">Mersin</option>
                                        <option value="34">İstanbul</option>
                                        <option value="35">İzmir</option>
                                        <option value="36">Kars</option>
                                        <option value="37">Kastamonu</option>
                                        <option value="38">Kayseri</option>
                                        <option value="39">Kırklareli</option>
                                        <option value="40">Kırşehir</option>
                                        <option value="41">Kocaeli</option>
                                        <option value="42">Konya</option>
                                        <option value="43">Kütahya</option>
                                        <option value="44">Malatya</option>
                                        <option value="45">Manisa</option>
                                        <option value="46">Kahramanmaraş</option>
                                        <option value="47">Mardin</option>
                                        <option value="48">Muğla</option>
                                        <option value="49">Muş</option>
                                        <option value="50">Nevşehir</option>
                                        <option value="51">Niğde</option>
                                        <option value="52">Ordu</option>
                                        <option value="53">Rize</option>
                                        <option value="54">Sakarya</option>
                                        <option value="55">Samsun</option>
                                        <option value="56">Siirt</option>
                                        <option value="57">Sinop</option>
                                        <option value="58">Sivas</option>
                                        <option value="59">Tekirdağ</option>
                                        <option value="60">Tokat</option>
                                        <option value="61">Trabzon</option>
                                        <option value="62">Tunceli</option>
                                        <option value="63">Şanlıurfa</option>
                                        <option value="64">Uşak</option>
                                        <option value="65">Van</option>
                                        <option value="66">Yozgat</option>
                                        <option value="67">Zonguldak</option>
                                        <option value="68">Aksaray</option>
                                        <option value="69">Bayburt</option>
                                        <option value="70">Karaman</option>
                                        <option value="71">Kırıkkale</option>
                                        <option value="72">Batman</option>
                                        <option value="73">Şırnak</option>
                                        <option value="74">Bartın</option>
                                        <option value="75">Ardahan</option>
                                        <option value="76">Iğdır</option>
                                        <option value="77">Yalova</option>
                                        <option value="78">Karabük</option>
                                        <option value="79">Kilis</option>
                                        <option value="80">Osmaniye</option>
                                        <option value="81">Düzce</option>
                                </select>
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
