<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="UTF-8">
    <title>@yield('title',config('app.name')." | Yönetim")</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="{{asset("css/admin.css")}}">
    @yield('head')
</head>

<body>

@include('yonetim.layouts.partials.navbar')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-2 sidebar collapse" id="sidebar">
@include('yonetim.layouts.partials.sidebar')
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-9 col-md-offset-3 col-lg-10 col-lg-offset-2 main">
            @yield('content')
        </div>
    </div>
</div>
<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src="{{asset("js/admin-app.js")}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap2-toggle.js"></script>
<script>
        $(document).ready(function () {
        $('#table_id').DataTable();
        $(".ProductStatus").change(function () {
            var id = $(this).attr('rel');
            if($(this).prop("checked")==true){
                $.ajax({
                   headers:{
                       'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content');
                   },
                   type: 'post',
                   url: '/yonetim/statu-guncelle',
                   data: {status:'1',id:id},
                    success:function (data) {
                        $("#message_success").show();
                        setTimeout(function () { $("#message_success").fadeOut('slow'); }, 2000);
                    },error:function () {
                        alert("Error");
                    }
                });

            }else{
                $.ajax({
                    headers:{
                        'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                    },
                    type: 'post',
                    url: '/yonetim/statu-guncelle',
                    data: {status:'0',id:id},
                    success:function (resp) {
                        $("#message_error").show();
                        setTimeout(function () { $("#message_error").fadeOut('slow'); }, 2000);
                    },error:function () {
                        alert("Error");
                    }
                });
            }
        });
    });
</script>
@yield('footer')
</body>
</html>
