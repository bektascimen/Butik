@extends('yonetim.layouts.master')
@section('title','Kategori Yönetimi')
@section('content')
    <h1 class="page-header">Kategori Yönetimi</h1>

    <h3 class="sub-header">Kategori Listesi</h3>
        <div class="well">
        <div class="btn-group pull-right">
            <a href="{{route('yonetim.kategori.yeni')}}" class="btn btn-primary">Yeni</a>
        </div>
            <form action="{{route('yonetim.kategori')}}" method="post" class="form-inline">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="aranan">Ara</label>
                    <input type="text" class="form-control form-control-sm" name="aranan" id="aranan" placeholder="Kategori Ara..." value="{{old('aranan')}}">
                </div>
                <button type="submit" class="btn btn-primary">Ara</button>
                <a href="{{route('yonetim.kategori')}}" class="btn btn-primary">Temizle</a>
            </form>
        </div>

    @include('partials.alert')

    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Üst Kategori Adı</th>
                <th>Kategori Adı</th>
                <th>Slug</th>
                <th>Kayıt Tarihi</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $entry)
            <tr>
                <td>{{ $entry->id }}</td>
                <td>{{$entry->ust_kategori->kategori_adi}}</td>
                <td>{{ $entry->kategori_adi }}</td>
                <td>{{ $entry->slug }}</td>
                <td>{{ $entry->olusturma_tarihi }}</td>
                <td style="width: 100px">
                    <a href="{{route('yonetim.kategori.duzenle', $entry->id)}}" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Düzenle">
                        <span class="fa fa-pencil"></span>
                    </a>
                    <a href="{{route('yonetim.kategori.sil', $entry->id)}}" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Sil" onclick="return confirm('Emin misiniz?')">
                        <span class="fa fa-trash"></span>
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
