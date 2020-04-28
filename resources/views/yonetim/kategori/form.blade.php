@extends('yonetim.layouts.master')
@section('title','Kategori Yönetimi')
@section('content')
    <h1 class="page-header">Kategori Yönetimi</h1>

    <form action="{{route('yonetim.kategori.kaydet',@$entry->id)}}" method="post">
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

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="parent_id">Üst Kategori Adı</label>
                        <select name="parent_id" id="parent_id" class="form-control">
                            <option value="0">Ana Kategori</option>
                            @foreach($kategoriler as $kategori)
                            <option value="{{$kategori->id}}">{{$kategori->kategori_adi}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="kategori_adi">Kategori Adı</label>
                        <input type="text" class="form-control" id="kategori_adi" name="kategori_adi" placeholder="Kategori Adı" value="{{ old('kategori_adi', $entry->kategori_adi) }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="hidden" name="original_slug" value="{{old('slug', $entry->slug)}}">
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" value="{{old('slug', $entry->slug)}}">
                    </div>
                </div>
            </div>
    </form>

@endsection
