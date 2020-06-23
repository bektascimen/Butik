<?php

namespace App\Http\Controllers\Yonetim;

use App\Http\Controllers\Controller;
use App\Models\Adresler;
use App\Models\Siparis;
use App\Models\Urun;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SiparisController extends Controller
{
    public function index()
    {
        if (request()->filled('aranan'))
        {
            request()->flash();
            $aranan = request('aranan');
            $list = Siparis::with('sepet.kullanici')
                ->where('ad','like', "%$aranan%")
                ->orWhere('id', $aranan)
                ->orderByDesc('id')
                ->paginate(50);
        } else{
            $list = Siparis::with('sepet.kullanici')
                ->orderByDesc('id')
                ->paginate(20);
        }

        return view('yonetim.siparis.index', compact('list'));
    }

    public function form($id=0)
    {
        if ($id>0)
        {
            $entry = Siparis::with('sepet.sepet_urunler.urun')
                ->find($id);
        }
        return view('yonetim.siparis.form', compact('entry'));
    }

    public function kaydet($id=0)
    {
        $this->validate(request(),[
            'durum' => 'required',
        ]);

        $data = request()->only('ad', 'telefon', 'satir1', 'durum', 'st_no', 'odeme_yontemi');

        if ($id>0)
        {
            $entry = Siparis::where('id', $id)->firstOrFail();
            $entry->update($data);
        }

        return redirect()
            ->route('yonetim.siparis.duzenle', $entry->id)
            ->with('mesaj', 'Güncellendi')
            ->with('mesaj_tur', 'success');
    }

    public function sil($id)
    {
        $urun = Siparis::destroy($id);

        return redirect()
            ->route('yonetim.siparis')
            ->with('mesaj', 'Kayıt Silindi')
            ->with('mesaj_tur', 'success');
    }
}
