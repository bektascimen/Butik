@extends('yonetim.layouts.master')
@section('title','Ürün Yönetimi')
@section('content')
    <style>
        .box{
            position: relative;
            display: block;
            width: 200px;
            height: 40px;
            line-height: 1.5;
        }
        .box select{
            outline: none;
            box-shadow: none;
            border: none;
            background-color: #3c8dc5;
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0 0 0 14px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .box option{
            background-color: #7a8186;
            font-size: 15px;
        }
        .box option:checked{
            background-color: #103550;
            color: #fff;
        }
        .box:after {
            content: '\25BC';
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            padding: 10px 12px;
            color: #388ac5;
            pointer-events: none;
            -webkit-transition: .25s all ease;
            -o-transition: .25s all ease;
            transition: .25s all ease;
        }
        .box:hover:after{
            color: #fff;
        }
    </style>
    <h1 class="page-header">Ürün Yönetimi</h1>

    <form action="{{route('yonetim.urun.kaydet', $entry->id)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="pull-right">
            <button type="submit" class="btn btn-primary">
                {{@$entry->id > 0 ? "Güncelle" : "Kaydet"}}
            </button>
        </div>
        <h3 class="sub-header">
            Ürün {{@$entry->id > 0 ? "Düzenle" : "Ekle"}}
        </h3>

        @include('partials.error')
        @include('partials.alert')

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="urun_adi">Ürün Kodu</label>
                        <input type="text" class="form-control" id="urun_kodu" name="urun_kodu" placeholder="Ürün Kodu" value="{{ old('urun_kodu', $entry->urun_kodu) }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="urun_adi">Ürün Adı</label>
                        <input type="text" class="form-control" id="urun_adi" name="urun_adi" placeholder="Ürün Adı" value="{{ old('urun_adi', $entry->urun_adi) }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="renk">Ürün Rengi</label>
                        <input type="text" class="form-control" id="renk" name="renk" placeholder="Ürün Rengi" value="{{ old('renk', $entry->renk) }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="hidden" name="original_slug" value="{{old('slug', $entry->slug)}}">
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" value="{{old('slug', $entry->slug)}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="aciklama">Açıklama</label>
                        <textarea class="form-control" id="aciklama" name="aciklama" placeholder="Açıklama">{{ old('aciklama', $entry->aciklama) }}</textarea>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="fiyat">Fiyatı</label>
                    <input type="text" class="form-control" id="fiyat" name="fiyat" placeholder="Fiyat" value="{{ old('fiyat', $entry->fiyat) }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="box">
                    <label for="isletme">İşletme</label><br>
                    <select name="isletme_id" id="isletme">
                        <option value="1" selected>Kom-Şu</option>
                        <option value="2">Tokyo</option>
                    </select>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="box">
                        <label for="status">Ürün Statüsü</label><br>
                        <select name="status" id="status">
                            <option value="1" selected>Satışa Açık</option>
                            <option value="0">Satışa Kapalı</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="indirimli_fiyat">İndirimli Fiyatı</label>
                    <input type="text" class="form-control" id="indirimli_fiyat" name="indirimli_fiyat" placeholder="İndirimli Fiyat" value="{{ old('indirimli_fiyat', $entry->indirimli_fiyat) }}">
                </div>
            </div>
        </div>
        <div class="checkbox">
            <label>
                <input type="hidden" name="gosterSlider" value="0">
                <input type="checkbox" name="gosterSlider" value="1" {{ old('gosterSlider', $entry->detay->gosterSlider) ? 'checked' : ''}}>Slider Ürünlere Ekle
            </label>
            <label>
                <input type="hidden" name="gosterOneCikan" value="0">
                <input type="checkbox" name="gosterOneCikan" value="1" {{ old('gosterOneCikan', $entry->detay->gosterOneCikan) ? 'checked' : ''}}>Öne Çıkan Ürünlere Ekle
            </label>
            <label>
                <input type="hidden" name="gosterCokSatan" value="0">
            <input type="checkbox" name="gosterCokSatan" value="1" {{ old('gosterCokSatan', $entry->detay->gosterCokSatan) ? 'checked' : ''}}>Çok Satan Ürünlere Ekle
            </label>
            <label>
                <input type="hidden" name="gosterIndirimli" value="0">
                <input type="checkbox" name="gosterIndirimli" value="1" {{ old('gosterIndirimli', $entry->detay->gosterIndirimli) ? 'checked' : ''}}>İndirimli Ürünlere Ekle
            </label>
            <label>
                <input type="hidden" name="gosterGununFirsati" value="0">
                <input type="checkbox" name="gosterGununFirsati" value="1" {{ old('gosterGununFirsati', $entry->detay->gosterGununFirsati) ? 'checked' : ''}}>Günün Fırsatı Ürününe Ekle
            </label>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="kategoriler">Kategoriler</label>
                    <select name="kategoriler[]" class="form-control" id="kategoriler" multiple>
                        @foreach($kategoriler as $kategori)
                            <option value="{{$kategori->id}}" {{collect(old('kategoriler', $urun_kategoriler))->contains($kategori->id) ? 'selected' : '' }}>{{$kategori->kategori_adi}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            @if($entry->detay->urun_resmi!=null)
                <img src="/uploads/urunler/{{$entry->detay->urun_resmi}}" style="height: 100px; margin-right: 20px;" class="thumbnail pull-left">
            @endif
            <label for="urun_resmi">Ürün Resmi</label>
            <input type="file" id="urun_resmi" name="urun_resmi">
        </div>
        <br><br><br>
        <div class="form-group">
            @if($entry->detay->urun_resmi2!=null)
                <img src="/uploads/urunler/{{$entry->detay->urun_resmi2}}" style="height: 100px; margin-right: 20px;" class="thumbnail pull-left">
            @endif
            <label for="urun_resmi2">Ürün Resmi 2</label>
            <input type="file" id="urun_resmi2" name="urun_resmi2">
        </div>
        <br><br><br>
        <div class="form-group">
            @if($entry->detay->urun_resmi3!=null)
                <img src="/uploads/urunler/{{$entry->detay->urun_resmi3}}" style="height: 100px; margin-right: 20px;" class="thumbnail pull-left">
            @endif
            <label for="urun_resmi3">Ürün Resmi 3</label>
            <input type="file" id="urun_resmi3" name="urun_resmi3">
        </div>
        <br><br><br>
        <div class="form-group">
            @if($entry->detay->slider_resmi!=null)
                <img src="/uploads/slider/{{$entry->detay->slider_resmi}}" style="height: 100px; margin-right: 20px;" class="thumbnail pull-left">
            @endif
            <label for="slider_resmi">Slider Resmi</label>
            <input type="file" id="slider_resmi" name="slider_resmi">
        </div>

    </form>
@endsection

@section('head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endsection

@section('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $(function () {
            $('#kategoriler').select2({
                placeholder: 'Lütfen Kategori Seçiniz.'
            });
        });
    </script>
@endsection
