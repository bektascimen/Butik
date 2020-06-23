@extends('layouts.master')
@section('content')
    <style>
        #addimg {
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        input {
            position: absolute;
            font-size: 50px;
            opacity: 0;
            right: 0;
            top: 0;
            cursor: pointer;
        }
    </style>
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Anasayfa</a>
                        <span>Ürün Deneme</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

<div class="container" style="padding-top: 20px;">
    <div class="row">
        <div class="col-md-12">
            <div class="file btn btn-sm btn-dark" id="addimg">
                Resim Ekle
                <input type="file" name="file" />
            </div>
            <div style="padding-top: 10px;">
                <p>Sizlerin seçmiş olduğu ürünleri bu sayfa üzerinde kendi fotoğrafınızı yükleyerek deneyebilirsiniz.</p>
            </div>
            <canvas id="s" height="700" width="1200"></canvas>
            <canvas id="c"></canvas>
        </div>
    </div>
</div>

@endsection
@section("scriptCodes")
    <script>
        // Initializing Fabric Canvas

        var canvas = new fabric.Canvas("c");
        canvas.setHeight(700);
        canvas.setWidth(1200);

        // New Photo to Canvas
        document.getElementById('addimg').onchange = function handleImage(e) {
            var reader = new FileReader();
            reader.onload = function(event) {
                var imgObj = new Image();
                imgObj.src = event.target.result;
                imgObj.onload = function() {
                    var image = new fabric.Image(imgObj);
                    image.set({
                        left: 10,
                        top: 10,
                    }).scale(0.2);
                    canvas.add(image);
                };
            };
            reader.readAsDataURL(e.target.files[0]);
        };
    </script>
    <script>

        var canvas = new fabric.Canvas("s");

        fabric.Image.fromURL('https://www.google.com/url?sa=i&url=https%3A%2F%2Fya-webdesign.com%2Fexplore%2Fwomen-dress-png%2F&psig=AOvVaw1cFZa3-LOANraDFq2TwhRB&ust=1591555154077000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCMCtipPr7ekCFQAAAAAdAAAAABAV', function (img) {
            canvas.add(img);
        });

    </script>
@append
