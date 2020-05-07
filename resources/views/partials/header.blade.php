<style>
    .dropbtn {
        background-color: #fff;
        color: black;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .x{
        background-color: #fff;
        color: black;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        right: 0;
        background-color: #f9f9f9;
        min-width: 190px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {background-color: #f1f1f1;}
    .dropdown:hover .dropdown-content {display: block;}
    .dropdown:hover .dropbtn {background-color: #e7ab3c;}
</style>
<header>
<!-- Header Section Begin -->
<div class="header-top">
    <div class="container">
        <div class="ht-right">
            @if(!auth()->user())
            <a href="#" class="login-trigger login-panel" data-target="#login" data-toggle="modal"><i class="fa fa-user"></i>Giriş Yap</a>
            <a href="{{ route('kullanici.kayitol') }}" class="login-panel"><i class="fa fa-user-circle"></i>Üye Ol&nbsp&nbsp&nbsp&nbsp </a>

                <div id="login" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <div class="modal-content">
                        <div class="modal-body">
                            <button data-dismiss="modal" class="close">&times;</button>

                            <form action="{{route('kullanici.oturumac')}}" method="post">
                                {{ csrf_field() }}
                                <h5 align="center">Üye Girişi</h5><br>
                                <input id="email" type="email" name="email" class="username form-control" placeholder="E-Mail"/>
                                <br>
                                <input id="sifre" type="password" name="sifre" class="password form-control" placeholder="Şifre"/>
                                <br>
                                <button class="primary-btn" style="width: 135px;">GİRİŞ Yap</button>
                            </form>

                        </div>
                    </div>
                </div>
                </div>
            @endif
            @if(auth()->user())
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()" class="login-panel"><i class="fa fa-sign-out"></i> Çıkış</a>
                    <form id="logout-form" action="{{route('kullanici.oturumukapat')}}" method="post" style="display: none;">
                        {{csrf_field()}}
                    </form>
                    <div class="dropdown" style="float:right;">
                        <button class="dropbtn">Hesabım</button>
                        <div class="dropdown-content">
                            <a href="{{route('kisiselbilgilerim')}}"><i class="fa fa-user"></i>  Kullanıcı Bilgilerim</a>
                            <a href="{{route('adresbilgilerim')}}"><i class="fa fa-location-arrow"></i> Adres Bilgilerim</a>
                            <a href="{{route('begenilen-urunler')}}"><i class="fa fa-heart"></i> Beğenilen Ürünler</a>
                            <a href="{{route('siparisler')}}"><i class="fa fa-suitcase"></i> Siparişlerim</a>
                        </div>
                    </div>
                    <div style="float: right">
                        <a href="#" class="x" type="submit"><i class="fa fa-truck"></i> Siparişim Nerede?</a>
                    </div>
            @endif
        </div>
    </div>
</div>
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="{{route('anasayfa')}}">
                            <img src="./img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="advanced-search">
                        <div class="input-group">
                            <form action="{{ route('urun_ara') }}" method="post">
                                {{ csrf_field() }}
                                <input class="input search-input" name="aranan" value="{{old('aranan')}}" type="text" placeholder="Ne aramıştınız?">
                                <button type="button"><i class="ti-search"></i></button>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-right col-md-3">
                    <ul class="nav-right">
                        <li class="heart-icon">
                            <a href="{{route('begenilen-urunler')}}">
                                <i class="icon_heart_alt"></i>
                            </a>
                        </li>
                        <li class="cart-icon">
                            <a href="{{route('sepet')}}">
                                <i class="icon_bag_alt"></i>
                                <span>{{Cart::getTotalQuantity()}}</span>
                            </a>
                        </li>
                        <li class="cart-price">{{Cart::getTotal()}} ₺ </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-item">
        <div class="container">
            <nav class="nav-menu mobile-menu">
                @include("menu.item", ["items" => $menuKategoriler, "child" => 0])
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
</header>
<!-- Header End -->
