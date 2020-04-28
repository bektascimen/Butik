<?php

namespace App\Http\Controllers\Yonetim;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    public function index()
    {
        if (request()->filled('aranan'))
        {
            request()->flash();
            $aranan = request('aranan');
            $list = Kategori::with('ust_kategori')->where('kategori_adi','like', "%$aranan%")
                ->orderBy('id')
                ->paginate(20);
        } else{
            $list = Kategori::with('ust_kategori')->orderBy('id')->paginate(20);
        }

        return view('yonetim.kategori.index', compact('list'));
    }

    public function form($id=0)
    {
        $entry = new Kategori;
        if ($id>0)
        {
            $entry = Kategori::find($id);
        }
        return view('yonetim.kategori.form', compact('entry'));
    }

    public function kaydet($id=0)
    {
        $data = request()->only('kategori_adi', 'slug', 'parent_id');
        if (!request()->filled('slug')){
            $data['slug'] = Str::slug(request('kategori_adi'));
            request()->merge(['slug' => $data['slug']]);
        }

        $this->validate(request(),[
            'kategori_adi'=>'required',
            'slug' => (request('original_slug') != request('slug') ? 'unique:kategori,slug' : '')
        ]);

        if ($id>0)
        {
            $entry = Kategori::where('id', $id)->firstOrFail();
            $entry->update($data);
        }
        else
        {
            $entry = Kategori::create($data);
        }

        return redirect()
            ->route('yonetim.kategori.duzenle', $entry->id)
            ->with('mesaj', ($id>0 ? 'Güncellendi' : 'Kaydedildi'))
            ->with('mesaj_tur', 'success');
    }

    public function sil($id)
    {
        $kategori = Kategori::find($id);
        //$kategori->urunler()->detach();
        $kategori->delete();

        return redirect()
            ->route('yonetim.kategori')
            ->with('mesaj', 'Kayıt Silindi')
            ->with('mesaj_tur', 'success');
    }
}
