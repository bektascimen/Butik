<div class="row">
    @if(count($urunler)==0)
        <div class="col-md-12">Bu kategoride henüz ürün bulunmamaktadır.</div>
    @endif
    @foreach($urunler as $urun)
        @if($urun['status']==1)
        <div class="col-lg-4 col-sm-6">
            <div class="product-item">
                <div class="pi-pic">
                    <img src="/uploads/urunler/{{$urun->detay->urun_resmi}}" alt="">
                    <div class="icon">
                        <i class="icon_heart_alt"></i>
                    </div>

                    <ul>
                       <li class="quick-view"><a href="{{ route('urun', $urun->slug) }}">+ ÜRÜNÜ GÖR</a></li>
                    </ul>
                </div>
                <div class="pi-text">
                    @foreach($urun->kategoriler as $kategori)
                        <div class="catagory-name">{{$kategori->kategori_adi}}</div>
                    @endforeach
                    <a href="{{ route('urun', $urun->slug) }}">
                        <h5>{{ $urun-> urun_adi }}</h5>
                    </a>
                    <div class="product-price">
                        {{ $urun->fiyat }}₺
                    </div>
                </div>
            </div>
        </div>
    @endif
    @endforeach
</div>
