@extends('yonetim.layouts.master')
@section('title','Ürün Nitelik Ekle')
@section('content')
    <style>
        .box {
            position: relative;
            display: block;
            width: 200px;
            height: 40px;
            line-height: 1.5;
        }

        .box select {
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

        .box option {
            background-color: #7a8186;
            font-size: 15px;
        }

        .box option:checked {
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

        .box:hover:after {
            color: #fff;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    <h1 class="page-header">Ürün Nitelik Ekle</h1>

    <div class="show-product" style="padding-bottom: 10px;">
        <a href="{{route('yonetim.urun.duzenle', $urunNitelik->id)}}" class="btn btn-info"><i class="fa fa-eye"> Ürünü
                Gör</i></a>
    </div>

    <form action="{{route('yonetim.urun.nitelikekle', $urunNitelik->id)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="urun_id" value="{{$urunNitelik->id}}">

        @include('partials.error')
        @include('partials.alert')

        <table class="table table-striped">
            <tr>
                <th>Beden</th>
                <th>Stok</th>
                <th>İşlemler</th>
            </tr>
            @foreach($urunNitelikListele as $nitelik)
                <tr>
                    <td>{{nitelik($nitelik->ozellik_deger_id)->deger}}</td>
                    <td><input type="text" value="{{$nitelik->stok}}" class="align-content-center"></td>
                    <td></td>
                </tr>
            @endforeach
        </table>

        <div class="form-group" style="padding-top: 50px;">
            <div class="field_wrapper">
                @foreach($ozellikler as $key => $ozellik)
                    <div class="filter-widget">
                        <h4 class="fw-title">{{ $ozellik->ozellik_adi }}</h4>
                        <div class="fw-color-choose">
                            <div class="row">
                                <div class="col-md-3">
                                    <select class="form-control"
                                            id="filtre-{{$ozellik->id}}" name="nitelik[{{$key}}][]">
                                        @foreach($ozellik->degerler()->get() as $deger)
                                            <option
                                                value="{{$deger->id}}">{{$deger->deger}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="stok[{{$key}}][]" id="stok" placeholder="Stok" class="form-control"/>
                                    <a href="javascript:void(0);" class="add_button" title="Add Field">Ekle</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="add-button">
            <input type="submit" class="btn btn-success" value="Nitelik Ekle">
        </div>
    </form>
@endsection

@section('head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
@endsection

@section('footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.field_wrapper'); //Input field wrapper
            var fieldHTML = '<div style="display: flex;"><select class="form-control"\n' +
                '                                            id="filtre-{{$ozellik->id}}" name="nitelik[{{$key}}][]">\n' +
                '                                        @foreach($ozellik->degerler()->get() as $deger)\n' +
                '                                            <option\n' +
                '                                                value="{{$deger->id}}">{{$deger->deger}}</option>\n' +
                '                                        @endforeach\n' +
                '                                    </select><input type="text" name="stok[]" id="stok" placeholder="Stok" class="form-control" style="width: 200px; margin-right: 5px; margin-top: 5px;"/><a href="javascript:void(0);" class="remove_button">Kaldır</a></div>'; //New input field html
            var x = 1; //Initial field counter is 1

            //Once add button is clicked
            $(addButton).click(function () {
                //Check maximum number of input fields
                if (x < maxField) {
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); //Add field html
                }
            });

            //Once remove button is clicked
            $(wrapper).on('click', '.remove_button', function (e) {
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });
    </script>
@endsection
