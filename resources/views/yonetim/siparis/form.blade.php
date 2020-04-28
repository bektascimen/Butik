@extends('yonetim.layouts.master')
@section('title','Sipariş Yönetimi')
@section('content')
    <h1 class="page-header">Sipariş Yönetimi</h1>

    <form action="{{route('yonetim.siparis.kaydet', $entry->id)}}" method="post">
        {{csrf_field()}}

        <div class="pull-right">
            <button type="submit" class="btn btn-primary">
                {{@$entry->id > 0 ? "Güncelle" : "Kaydet"}}
            </button>
        </div>
        <h3 class="sub-header">
            Sipariş {{@$entry->id > 0 ? "Düzenle" : "Ekle"}}
        </h3>

        @include('partials.error')
        @include('partials.alert')

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ad">Ad</label>
                        <input type="text" class="form-control" id="ad" name="ad" placeholder="Ad" value="{{ old('ad', $entry->ad) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="soyad">Soyad</label>
                        <input type="text" class="form-control" id="soyad" name="soyad" placeholder="Soyad" value="{{ old('soyad', $entry->soyad) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Telefon">Telefon</label>
                        <input type="text" class="form-control" id="Telefon" name="telefon" placeholder="telefon" value="{{ old('Telefon', $entry->telefon) }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="satir1">Adres</label>
                        <input class="form-control" id="adres" name="satir1" placeholder="Adres" value="{{ old('satir1', $entry->teslimat_adresi) }}">
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="durum">Durum</label>
                    <select name="durum" class="form-control" id="durum">
                        <option {{ old('durum', $entry->durum) == 'Siparişiniz Alındı' ? 'selected' : '' }}>Siparişiniz alındı</option>
                        <option {{ old('durum', $entry->durum) == 'Siparişiniz Hazırlanıyor' ? 'selected' : '' }}>Siparişiniz hazırlanıyor</option>
                        <option {{ old('durum', $entry->durum) == 'Siparişiniz Yola Çıktı' ? 'selected' : '' }}>Siparişiniz yola çıktı</option>
                        <option {{ old('durum', $entry->durum) == 'Siparişiniz Teslim Edildi' ? 'selected' : '' }}>Siparişiniz teslim edildi</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="odeme_yontemi">Ödeme Yöntemi</label>
                    <input type="text" class="form-control" id="odeme_yontemi" name="odeme_yontemi" placeholder="Ödeme Yöntemi" value="{{ old('odeme_yontemi', $entry->odeme_yontemi) }}" required>
                </div>
            </div>
        </div>
    </form>

    <h3 class="title">SİPARİŞ (SP-{{$entry->id}})</h3>
    <table class="shopping-cart-table table">
        <thead>
        <tr>
            <th></th>
            <th class="text-center">Ürün</th>
            <th class="text-center">Birim Fiyatı</th>
            <th class="text-center">Adet</th>
            <th class="text-center">Toplam Ücret</th>
            <th class="text-center">Durum</th>
        </tr>
        </thead>
        @foreach($entry->sepet->sepet_urunler as $sepet_urun)
            <tbody>
            <tr>
                <td class="text-center" style="width: 120px">
                    <a href="{{route('urun', $sepet_urun->urun->slug)}}">
                        <img src="/uploads/urunler/{{$sepet_urun->urun->detay->urun_resmi}}" style="width: 150px;">
                    </a>
                </td>
                <td class="text-center">
                    <a href="{{route('urun', $sepet_urun->urun->slug)}}">
                        {{$sepet_urun->urun->urun_adi}}
                    </a>
                </td>
                <td class="price text-center">{{ $sepet_urun->fiyat}}₺</td>
                <td class="text-center">{{ $sepet_urun->adet}}</td>
                <td class="price text-center">{{ $sepet_urun->fiyat * $sepet_urun->adet}}₺</td>
                <td class="text-center">{{ $sepet_urun->durum}}</td>
            </tr>
            </tbody>
        @endforeach
        <tr>
            <th class="text-center">Toplam Tutar:</th>
            <th>{{ $entry->siparis_tutari }}₺</th>
        </tr>
        <tr>
            <th class="text-center">Sipariş Durumu:</th>
            <th>{{$entry->durum}}</th>
        </tr>
    </table>

@endsection

