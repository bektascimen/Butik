<ul @if($child)class="dropdown"@endif>
    @foreach($items as $item)
        <li>
            <a href="{{route("kategori", $item->slug)}}">
                <span>{{$item->kategori_adi}}</span>
            </a>
            @if($item->alt()->count())
                @include("menu.item", ['items' => $item->alt, 'child' => $item->alt()->count()])
            @endif
        </li>
    @endforeach
</ul>
