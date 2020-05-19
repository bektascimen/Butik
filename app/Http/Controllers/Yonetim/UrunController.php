<?php

namespace App\Http\Controllers\Yonetim;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Urun;
use App\Models\UrunDetay;
use App\Models\UrunNitelik;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UrunController extends Controller
{
    public function index()
    {
        if (request()->filled('aranan')) {
            request()->flash();
            $aranan = request('aranan');
            $list = Urun::where('urun_adi', 'like', "%$aranan%")
                ->orWhere('aciklama', 'like', "%$aranan%")
                ->orderBy('id')
                ->paginate(50);
        } else {
            $list = Urun::orderBy('id')->paginate(20);
        }

        return view('yonetim.urun.index', compact('list'));
    }

    public function form($id = 0)
    {
        $entry = new Urun;
        $urun_kategoriler = [];
        if ($id > 0) {
            $entry = Urun::find($id);
            $urun_kategoriler = $entry->kategoriler()->pluck('kategori_id')->all();

        }

        $kategoriler = Kategori::all();

        return view('yonetim.urun.form', compact('entry', 'kategoriler', 'urun_kategoriler'));
    }

    public function kaydet($id = 0)
    {
        $data = request()->only('urun_adi', 'slug', 'aciklama', 'fiyat', 'indirimli_fiyat', 'isletme_id');
        if (!request()->filled('slug')) {
            $data['slug'] = Str::slug(request('urun_adi'));
            request()->merge(['slug' => $data['slug']]);
        }

        $this->validate(request(), [
            'urun_adi' => 'required',
            'fiyat' => 'required',
            'slug' => (request('original_slug') != request('slug') ? 'unique:urun,slug' : '')
        ]);

        $data_detay = request()->only('gosterSlider', 'gosterGununFirsati', 'gosterOneCikan', 'gosterCokSatan', 'gosterIndirimli');

        $kategoriler = request('kategoriler');

        if ($id > 0) {
            $entry = Urun::where('id', $id)->firstOrFail();
            $entry->update($data);
            $entry->detay()->update($data_detay);
            $entry->kategoriler()->sync($kategoriler);
        } else {
            $entry = Urun::create($data);
            $entry->detay()->create($data_detay);
            $entry->kategoriler()->attach($kategoriler);
        }

        if (request()->hasFile('urun_resmi')) {
            $this->validate(request(), [
                'urun_resmi' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
            ]);

            $urun_resmi = request()->file('urun_resmi');
            $urun_resmi = request()->urun_resmi;

            $dosyaadi = $entry->id . "-" . time() . "." . $urun_resmi->extension();

            if ($urun_resmi->isValid()) {
                $urun_resmi->move('uploads/urunler', $dosyaadi);

                UrunDetay::updateOrCreate(
                    ['urun_id' => $entry->id],
                    ['urun_resmi' => $dosyaadi]
                );
            }
        }
        if (request()->hasFile('urun_resmi2')) {
            $this->validate(request(), [
                'urun_resmi2' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
            ]);

            $urun_resmi2 = request()->file('urun_resmi2');
            $urun_resmi2 = request()->urun_resmi2;

            $dosyaadi = $entry->id . "-" . time() . "." . $urun_resmi2->extension();
            //$dosyaadi = $urun_resmi->getClientOriginalName();
            //$dosyaadi = $urun_resmi->hashName();

            if ($urun_resmi2->isValid()) {
                $urun_resmi2->move('uploads/slider', $dosyaadi);

                UrunDetay::updateOrCreate(
                    ['urun_id' => $entry->id],
                    ['urun_resmi2' => $dosyaadi]
                );
            }
        }
        if (request()->hasFile('urun_resmi3')) {
            $this->validate(request(), [
                'urun_resmi3' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
            ]);

            $urun_resmi3 = request()->file('urun_resmi3');
            $urun_resmi3 = request()->urun_resmi3;

            $dosyaadi = $entry->id . "-" . time() . "." . $urun_resmi3->extension();
            //$dosyaadi = $urun_resmi->getClientOriginalName();
            //$dosyaadi = $urun_resmi->hashName();

            if ($urun_resmi3->isValid()) {
                $urun_resmi3->move('uploads/slider', $dosyaadi);

                UrunDetay::updateOrCreate(
                    ['urun_id' => $entry->id],
                    ['urun_resmi3' => $dosyaadi]
                );
            }
        }
        if (request()->hasFile('slider_resmi')) {
            $this->validate(request(), [
                'slider_resmi' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
            ]);

            $slider_resmi = request()->file('slider_resmi');
            $slider_resmi = request()->slider_resmi;

            $dosyaadi = $entry->id . "-" . time() . "." . $slider_resmi->extension();
            //$dosyaadi = $urun_resmi->getClientOriginalName();
            //$dosyaadi = $urun_resmi->hashName();

            if ($slider_resmi->isValid()) {
                $slider_resmi->move('uploads/slider', $dosyaadi);

                UrunDetay::updateOrCreate(
                    ['urun_id' => $entry->id],
                    ['slider_resmi' => $dosyaadi]
                );
            }
        }

        return redirect()
            ->route('yonetim.urun.duzenle', $entry->id)
            ->with('mesaj', ($id > 0 ? 'Güncellendi' : 'Kaydedildi'))
            ->with('mesaj_tur', 'success');
    }

    public function sil($id)
    {
        $urun = Urun::find($id);
        $urun->kategoriler()->detach();
        $urun->delete();

        return redirect()
            ->route('yonetim.urun')
            ->with('mesaj', 'Kayıt Silindi')
            ->with('mesaj_tur', 'success');
    }

    public function nitelikekle(Request $request, $id = null)
    {
        $urunNitelik = Urun::where(['id' => $id])->first();
        $urunNitelikListele = UrunNitelik::get();

        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo "<pre>";print_r($data);die;
            foreach ($data['urun_kodu'] as $key => $val) {
                if (!empty($val)) {
                    $attrCountUrunKodu = UrunNitelik::where('urun_kodu', $val);
                    if ($attrCountUrunKodu->count()) {
                        return redirect(route('yonetim.urun.nitelikekle', ["id" => $id]))
                            ->with('mesaj', 'Hata. Ürün kodu mevcut')
                            ->with('mesaj_tur', 'error');
                    }
                    $attrCountBeden = UrunNitelik::where([
                        'urun_id' => $id,
                        'beden' => $data['beden'][$key]
                    ])->get();
                    if ($attrCountBeden->count()) {
                        return redirect(route('yonetim.urun.nitelikekle', ["id" => $id]))->with('mesaj', '' . $data['beden'][$key] . 'Beden zaten var.')->with('mesaj_tur', 'error');
                    }
                    $nitelik = new UrunNitelik;
                    $nitelik->urun_id = $id;
                    $nitelik->urun_kodu = $val;
                    $nitelik->beden = $data['beden'][$key];
                    $nitelik->fiyat = $data['fiyat'][$key];
                    $nitelik->stok = $data['stok'][$key];
                    $nitelik->save();
                }
                return redirect(route('yonetim.urun.nitelikekle', ["id" => $id]))->with('mesaj', 'Nitelik Eklendi')->with('mesaj_tur', 'success');
            }
        }

        return view('yonetim.urun.nitelikekle', compact('urunNitelik', 'urunNitelikListele'));
    }

    public function statuGuncelle(Request $request, $id=null)
    {
        $data = $request->all();
        Urun::where('id', $data['id'])->update(['status'=>$data['status']]);
    }
}
