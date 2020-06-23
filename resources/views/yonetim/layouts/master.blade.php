<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="UTF-8">
    <title>@yield('title',config('app.name')." | Yönetim")</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap2-toggle.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="{{asset("js/admin-app.js")}}"></script>
<script>
    $(document).ready(function () {
        $('.table').DataTable();
        $(".ProductStatus").change(function () {
            var id = $(this).attr('rel');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': '{{csrf_token()}}'
                },
                type: 'post',
                url: '/yonetim/urun/statu-guncelle',
                data: {status: $(this).prop("checked") == true, id: id, token : '{{csrf_token()}}'},
                success: function (data) {
                    $("#message_success").show();
                    setTimeout(function () {
                        $("#message_success").fadeOut('slow');
                    }, 2000);
                }, error: function () {
                    alert("Error");
                }
            });
        });
    });
</script>
@yield('footer')
</body>
</html>
