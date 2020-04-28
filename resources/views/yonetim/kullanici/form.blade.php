@extends('yonetim.layouts.master')
@section('title','Kullanıcı Yönetimi')
@section('content')
    <h1 class="page-header">Kullanıcı Yönetimi</h1>

    <form action="{{route('yonetim.kullanici.kaydet',@$entry->id)}}" method="post">
        {{csrf_field()}}

        <div class="pull-right">
            <button type="submit" class="btn btn-primary">
                {{@$entry->id > 0 ? "Güncelle" : "Kaydet"}}
            </button>
        </div>
        <h2 class="sub-header">
            Kullanıcı {{@$entry->id > 0 ? "Düzenle" : "Ekle"}}
        </h2>

        @include('partials.error')
        @include('partials.alert')

        <div class="checkbox">
            <label>
                <input type="checkbox" name="uye_durumu" id="uyedurumu" value="1" {{ old('uye_durumu', $entry->uye_durumu) ? 'checked' : ''}}>Üye Durumu
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="yonetici_mi" id="yonetici_mi" value="1" {{old('yonetici_mi',$entry->yonetici_mi) ? 'checked' : ''}}>Yönetici Yetkisi
            </label>
        </div>
    </form>

@endsection
