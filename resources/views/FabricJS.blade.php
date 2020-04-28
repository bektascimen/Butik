@extends('layouts.master')
@section('content')

    <canvas id="s" height="0" width="1500"></canvas>
    <canvas id="b" width="800" height="1500"></canvas>

    <script>

        var canvas = new fabric.Canvas("s");

        fabric.Image.fromURL('https://sc02.alicdn.com/kf/HTB19dFKyVzqK1RjSZFvq6AB7VXaf/202758648/HTB19dFKyVzqK1RjSZFvq6AB7VXaf.jpg', function (img) {
            canvas.add(img);
        });

    </script>

    <script>

        var canvas = new fabric.Canvas("b");

        fabric.Image.fromURL('https://i.dlpng.com/static/png/1336854-woman-in-dress-png-black-and-white-download-dress-png-1350_1694_preview.png', function (img) {
            canvas.add(img);
        });

    </script>

@endsection
