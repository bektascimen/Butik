@extends('yonetim.layouts.master')
@section('title','Ürün Yönetimi')
@section('content')
    <h1 class="page-header">Ürün Yönetimi</h1>

    <h3 class="sub-header">Ürün Listesi</h3>
        <div class="well">
        <div class="btn-group pull-right">
            <a href="{{route('yonetim.urun.yeni')}}" class="btn btn-primary">Yeni</a>
        </div>
            <form action="{{route('yonetim.urun')}}" method="post" class="form-inline">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="aranan">Ara</label>
                    <input type="text" class="form-control form-control-sm" name="aranan" id="aranan" placeholder="Ürün Ara..." value="{{old('aranan')}}">
                </div>
                <button type="submit" class="btn btn-primary">Ara</button>
                <a href="{{route('yonetim.urun')}}" class="btn btn-primary">Temizle</a>
            </form>
        </div>

    @include('partials.alert')
    @if(Session::has('flash_message_error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">$times;</span>
            </button>
            <strong>{{session('flash_message_error')}}</strong>
        </div>
    @endif
    @if(Session::has('flash_message_success'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">$times;</span>
            </button>
            <strong>{{session('flash_message_success')}}</strong>
        </div>
    @endif
    <div id="message_success" style="display: none;" class="alert alert-success">Ürün Satışa Açık</div>
    <div id="message_error" style="display: none;" class="alert alert-danger">Ürün Satışa Kapalı</div>

    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Resim</th>
                <th>Ürün Adı</th>
                <th>Slug</th>
                <th>Fiyat</th>
                <th>Statü</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @if(count($list)==0)
                <tr>
                    <td colspan="7" class="text-center">Kayıt Bulunamadı!</td>
                </tr>
            @endif
            @foreach($list as $entry)
            <tr>
                <td>{{ $entry->id }}</td>
                <td>
                    <img src="{{ asset('uploads/urunler/' . $entry->detay->urun_resmi) }}" style="width: 120px;">
                </td>
                <td>{{$entry->urun_adi}}</td>
                <td>{{ $entry->slug }}</td>
                <td>{{ $entry->fiyat }}</td>
                <td>
                    <input type="checkbox" class="ProductStatus btn btn-success" rel="{{ $entry->id }}"
                           data-toggle="toggle" data-on="On"
                           data-of="Off" data-onstyle="success"
                           data-offstyle="danger"
                    @if($entry['status'] == "1") checked @endif>
                    <div id="myElem" style="display: none;" class="alert alert-success">Statü Kapalı</div>
                </td>
                <td style="width: 100px">
                    <a href="{{route('yonetim.urun.nitelikekle', $entry->id)}}" class="btn btn-xs btn-info" data-toggle="tooltip" data-placement="top" title="Nitelik Ekle">
                        <span class="fa fa-plus"></span>
                    </a>
                    <a href="{{route('yonetim.urun.duzenle', $entry->id)}}" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Düzenle">
                        <span class="fa fa-pencil"></span>
                    </a>
                    <a href="{{route('yonetim.urun.sil', $entry->id)}}" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Sil" onclick="return confirm('Emin misiniz?')">
                        <span class="fa fa-trash"></span>
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
