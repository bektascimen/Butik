@extends('yonetim.layouts.master')
@section('title','Anasayfa')
@section('content')
    <h1 class="page-header">Butik Yönetim Paneli</h1>

    <section class="row text-center placeholders">
        <div class="col-6 col-sm-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Bekleyen Siparişler</div>
                <div class="panel-body">
                    <h4>{{ $istatistikler['bekleyen_siparis'] }}</h4>
                    <p>Adet</p>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Teslim Edilen Siparişler</div>
                <div class="panel-body">
                    <h4>{{ $istatistikler['tamamlanan_siparis'] }}</h4>
                    <p>Adet</p>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Toplam Satış</div>
                <div class="panel-body">
                    <h4>{{ $istatistikler['toplam_satis'] }}₺</h4>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Toplam Kullanıcı</div>
                <div class="panel-body">
                    <h4>{{ $istatistikler['toplam_kullanici'] }}</h4>
                    <p>Kişi</p>
                </div>
            </div>
        </div>
    </section>
@endsection
