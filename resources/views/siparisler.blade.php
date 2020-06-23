@extends('layouts.master')
@section('content')

    <style>

        .rating-container {
            margin-top: 30px;
            font-size: 32pt;
        }

        .simple-rating i {
            color: #f5ba00;
            display: inline-block;
            padding: 1px 2px;
            cursor: pointer;
        }

        body { font-family:Montserrat, sans-serif; margin:0; }

        body a {
            outline: none !important;
        }
        button:focus { outline:0 !important;}


        a { color:#444444; text-decoration:none; }
        a:hover { color:#666666; text-decoration:none; }



        .header_uye { background-color:#f0f0f0; border-bottom:1px solid #dddddd; margin:0; opacity:0.8; filter: alpha(opacity=80); }
        .header_uye_sol {  }
        .header_uye_sol a { color:#444444;  }
        .header_uye_sag {   }
        .header_uye_sag a { color:#444444;  }

        .footer_link { max-width:100%; border-top:3px solid #e5e5e5; margin-top:15px; background-color:#f0f0f0; opacity:0.8; filter: alpha(opacity=80); }

        .header_uye_sol ul, .header_uye_sag ul { padding:0; margin:0; list-style: none; }
        .header_uye_sol ul li, .header_uye_sag ul li { float:left; padding:10px; }
        .header_uye_sol ul li ul, .header_uye_sag ul li ul { display: none;}


        #sayfa_ust { margin:0 5px 0 5px; }
        #sayfa_ust .logo { overflow:hidden; text-align:center; }

        #sayfa_ust .arama { position: relative; margin: 0; padding: 0; float: right; clear: both; z-index: 999; }
        #sayfa_ust .arama input { border-top-left-radius: 4px; border-bottom-left-radius: 4px; }

        .Header_Ust_Menu { margin: 0 0 15px 0; padding: 5px 0; }


        #banner_tamboy { max-width: 100% !important; padding: 0 !important; margin: 0 !important; }
        #banner_loading { min-height: 50px; background: url('/Themes/Default/Styles/Slider/assets/loading.gif') 50% 50% #eeeeee no-repeat; }


        #sayfa_ust .sepetim_grafik {
            position: relative;
            margin: 0;
            padding: 0;
            float: right;
            clear: both;
            z-index: 1000;
        }
        #sayfa_ust .sepetim_grafik_kutu {
            cursor: pointer;
        }
        #sayfa_ust .sepetim_grafik_ikon {
            float: left;
            height: 2.8em;
            line-height: 2.8em;
            padding: 0 8px;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }
        #sayfa_ust .sepetim_grafik_yazi {
            float: left;
            height: 2.8em;
            line-height: 2.8em;
            padding: 0 8px;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
            background-color:#ffffff;
        }
        #sayfa_ust #sepetim_grafik_adet {
            font-weight: bold;
        }
        #sayfa_ust .sepetim_grafik_icerik {
            display: none;
            padding-top: 5px;
            position: absolute;
            right: 0;
            z-index: 1000;
        }
        #sayfa_ust .sepetim_grafik_icerik_kutu {
            width: 325px;
            background: #ffffff;
            border-radius: 4px;
            padding: 10px;
            box-shadow: 0 15px 10px -10px rgba(0, 0, 0, 0.2);
        }


        .sepetim_mobil {
            border: 1px solid #ffffff;
            text-align: center;
            font-size: 10px;
            height: 18px;
            right: 0;
            line-height: 1.5em;
            position: absolute;
            width: 18px;
            top: -7px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            border-radius: 50%;
        }


        #sayfa_ust .sepetim_metin {
            position: relative;
            margin: 0;
            padding: 0;
            float: right;
            clear: both;
            z-index: 600;
            font-size: 16px;
        }


        .mobil_fixUst {
            position: fixed;
            width: 100%;
            height:60px;
            z-index:999;
            left:0;
            top:0;
            padding:0 15px;
            background-color:#ffffff;
        }



        .menu_sabitle { position:fixed !important; top:0 !important; left:0 !important; right:0 !important; z-index:9999 !important; box-shadow: 0px 5px 20px #d9d9d9 !important; }



        .sayfa_alt_linkler { text-align:left; padding:15px 10px; color:#222222 !important; }
        .sayfa_alt_linkler a { color:#222222 !important; }
        .sayfa_alt_linkler li { margin-bottom:6px !important; }

        .sayfa_alt_linkler img { margin: 10px auto; }
        .sayfa_alt_linkler i { margin-right:7px !important; }

        .sayfa_alt_firma { padding:20px; text-align:center; }

        input[type=file] { width:100%; padding:3px; margin:0; border:1px solid #d9d9d9; background-color:#ffffff; line-height:1em; }


        #sayfa_orta {  }




        #Sepet_Div_Detay { background-color:#ffffff; padding:15px; border:1px solid #dddddd; border-radius:4px; margin:0 5px 15px 5px; }

        #Sepet_Div_Detay .Baslik { font-size:1.3em !important; font-weight:bold; border-bottom:1px dashed #dddddd; padding-bottom:10px; margin-bottom:5px; }

        #Sepet_Div_Detay .Satirlar { padding:5px 0 !important; border-bottom:1px dashed #dddddd; }

        #Sepet_Div_Detay .Foto { text-align:center; padding:5px 10px !important; }

        #Sepet_Div_Detay .Foto img { max-height:80px !important; margin:0 auto !important; }

        #Sepet_Div_Detay .Urun { text-align:left; padding:15px 10px 10px 0 !important; }

        #Sepet_Div_Detay .Urun_Sil { padding:2px 8px 2px 0 !important; margin-top:15px; color:#999999 !important; border-bottom:1px dashed #dddddd; font-size:0.90em !important; display:inline-block;}

        #Sepet_Div_Detay .Miktar { text-align:center; padding:15px 5px 10px 5px !important; }

        #Sepet_Div_Detay .Miktar button { background-color:#f5f5f5 !important; }

        #Sepet_Div_Detay .Miktar_Eksilt { color:#999999 !important; font-size:0.85em !important; }

        #Sepet_Div_Detay .Miktar_Artir { color:#999999 !important; font-size:0.85em !important; }

        #Sepet_Div_Detay .Miktar_Yaz { color:#666666 !important; padding-top:5px !important; }

        #Sepet_Div_Detay .Miktar_Giris { text-align:center; }

        #Sepet_Div_Detay .Fiyat { font-size:1.2em !important; text-align:right; padding:15px 5px 10px 5px !important; }

        #Sepet_Div_Detay .Fiyat_Eski { font-size:0.9em !important; text-decoration:line-through; color:#ff0000; }



        #Sepet_Div_Ozet { background-color:#ffffff; padding:15px; border:1px solid #dddddd; border-radius:4px; margin:0 5px 15px 5px; z-index:99999 !important; }

        #Sepet_Div_Ozet .Baslik { font-size:1.3em !important; font-weight:bold; border-bottom:1px dashed #dddddd; padding-bottom:10px; margin-bottom:10px; }

        #Sepet_Div_Ozet .Fiyatlar { margin-bottom:10px; }

        #Sepet_Div_Ozet .Etiket { padding:0 0 10px 0 !important; }

        #Sepet_Div_Ozet .Fiyat { padding:0 0 10px 0 !important; text-align:right; }

        #Sepet_Div_Ozet .Etiket_2 { padding:10px 0 !important; border-top:1px dashed #dddddd !important; }

        #Sepet_Div_Ozet .Fiyat_2 { padding:10px 0 !important; border-top:1px dashed #dddddd !important; text-align:right; font-weight:bold; font-size:1.3em !important; }

        #Sepet_Div_Ozet .Cek_Secimi { padding-bottom:15px; }

        #Sepet_Div_Ozet .Cek_Ekle { margin-bottom:15px; padding-bottom:10px; border-bottom:1px dashed #dddddd; }

        #Sepet_Div_Ozet .Cek_Kaldir_Baslik { padding-bottom:10px; padding-top:10px; border-top:1px dashed #dddddd; text-align:center; }

        #Sepet_Div_Ozet .Cek_Kaldir_Buton { padding-bottom:15px; }






        #Siparis_Div_Detay { background-color:#ffffff; padding:15px; border:1px solid #dddddd; border-radius:4px; margin:0 5px 15px 5px; }

        #Siparis_Div_Detay .Adres_Kutu { padding:10px; margin-bottom:15px; }

        #Siparis_Div_Detay .Adres_Baslik { font-size:1.2em !important; font-weight:bold !important; border-bottom:1px dashed #dddddd; }

        #Siparis_Div_Detay .Notlar { border-top:1px dashed #dddddd; padding: 20px 10px 0 10px !important; }

        #Siparis_Div_Detay .Baslik { font-size:1.3em !important; font-weight:bold; border-bottom:1px dashed #dddddd; padding-bottom:10px; margin-bottom:10px; }

        #Siparis_Div_Detay .Urun_Baslik { background:#f5f5f5 !important; color:#666666 !important; border-bottom:1px solid #cccccc; padding:5px 10px !important; }

        #Siparis_Div_Detay .Urun_Satir { padding:5px 10px !important; border-bottom:1px dashed #dddddd !important; }

        #Siparis_Div_Detay .Odeme_Baslik { padding:5px 10px !important; border-bottom:1px dashed #dddddd !important; }

        #Siparis_Div_Detay .Odeme_Satir { padding:5px 10px !important; border-bottom:1px dashed #dddddd !important; }



        #Siparis_Div_Ozet { background-color:#ffffff; padding:15px; border:1px solid #dddddd; border-radius:4px; margin:0 5px 15px 5px; z-index:99999 !important; }

        #Siparis_Div_Ozet .Baslik { font-size:1.3em !important; font-weight:bold; border-bottom:1px dashed #dddddd; padding-bottom:10px; margin-bottom:10px; }

        #Siparis_Div_Ozet .Fiyatlar { margin-bottom:10px; }

        #Siparis_Div_Ozet .Etiket { padding:0 0 10px 0 !important; }

        #Siparis_Div_Ozet .Fiyat { padding:0 0 10px 0 !important; text-align:right; }

        #Siparis_Div_Ozet .Etiket_2 { padding:10px 0 !important; border-top:1px dashed #dddddd !important; }

        #Siparis_Div_Ozet .Fiyat_2 { padding:10px 0 !important; border-top:1px dashed #dddddd !important; text-align:right; font-weight:bold; font-size:1.3em !important; }




        .Siparis_Adim_Kutu { background-color:#ffffff; padding:5px; border:1px solid #dddddd; border-radius:10px; margin:0 5px 10px 5px; }

        .Siparis_Adim { font-size:1.1em !important; padding:10px 0; text-align:center; background-color:#f2f2f2; border:5px solid #ffffff; border-radius:10px; background-clip: padding-box; }

        .Siparis_Adim_Sonraki { font-size:1.1em !important; padding:10px 0; text-align:center; background-color:#ffffff; border:5px solid #ffffff; border-radius:6px; opacity:0.5; }




        .Siparis_Satirlar { padding:10px 0 !important; border-bottom:1px solid #dddddd; line-height:2.5em; cursor:pointer; }

        .Siparis_Satirlar img { margin:auto 0 !important; display:inline !important; }

        .Siparis_Satirlar i { font-size:0.8em !important; line-height:1em !important; font-style:normal; color:#888888; text-align:right; }








        .urun_detay { background:#FFFFFF !important; border:1px solid #dddddd; border-radius:4px; margin:0 5px 5px 5px; padding:0 !important; }

        .urun_detay .kategori_link { padding:10px 15px; border-bottom:1px dashed #dddddd; background:#F9F9F9; }

        .urun_detay .baslik_mobil { padding:10px; border-bottom:1px dashed #dddddd; margin:0; text-align:center; }

        .urun_detay .baslik_mobil h2 { font-size:1.4em !important; font-weight:bold; padding:0; margin:0; line-height:1.5em; }

        .urun_detay .yeni_urun { border:1px solid #666666; display:inline-block; border-radius:4px; vertical-align:top !important; font-weight:normal; font-size:0.75em !important; padding:2px 4px; text-align:center; background-color:#ffffff; color:#666666; margin-left:5px; }

        .urun_detay .foto { padding:5px !important;  background-color:#ffffff; border-right:1px dashed #dddddd; }

        .urun_detay .u_foto_buyuk_mobil { padding:0; border-bottom:1px dashed #dddddd; }

        .urun_detay .u_foto_buyuk_mobil img { margin:0 auto; }

        .urun_detay .u_foto_buyuk { padding:5px; min-height:480px; cursor: pointer; }

        .urun_detay .u_foto_buyuk img { margin:0 auto; }

        .urun_detay .u_foto_kucuk { border:1px dashed #dddddd; border-radius:4px; padding:3px; margin:0; }

        .urun_detay .u_foto_kucuk img { margin:0 auto; }

        .urun_detay .fiyat_sepet { padding:10px !important; }

        .urun_detay .baslik { padding:10px 15px 0 15px; margin-bottom:5px; }

        .urun_detay .baslik h1 { font-size:1.7em !important; font-weight:bold; padding:0; margin:0; line-height:1.5em; display:inline !important; }

        .urun_detay .baslik_mobil h1 { font-size:1.25em !important; font-weight:bold; padding:0; margin:0; line-height:1.5em; display:inline !important; }

        .urun_detay .fiyatlar { font-size:1.2em !important; padding:5px !important; }

        .urun_detay .kampanya_tarih { text-align:left; margin:15px 0; font-size:0.9em !important; }

        .urun_detay .kampanya_adet { text-align:left; padding-bottom:5px; font-size:1.2em !important; border-bottom:1px dashed #dddddd; }

        .urun_detay .kampanya_sure { background:#ffffff; border:1px solid #dddddd; text-align:center; font-size:1.4em !important; font-weight:bold; border-radius:4px; padding:0; margin:5px 0 0 0; }

        .urun_detay .kampanya_sure .metin { background:#444444; color:#ffffff; font-size:0.6em !important; font-weight:normal; padding:1px 2px; }

        .urun_detay .gri_alert { border: 1px dashed #dddddd; background:#f5f5f5; margin:15px 0; padding:10px 15px !important; }

        .urun_detay .Miktar { text-align:center; padding:5px !important; }

        .urun_detay .Miktar button { background-color:#f2f2f2 !important; }

        .urun_detay .Miktar_Eksilt { color:#999999 !important; font-size:0.85em !important; }

        .urun_detay .Miktar_Artir { color:#999999 !important; font-size:0.85em !important; }

        .urun_detay .Miktar_Yaz { font-size:0.8em !important; vertical-align:top !important; padding-top:2px !important; }

        .urun_detay .tel_siparis { font-size:2.6em !important; background:#ffffff !important; color:#444444 !important; }


        .urun_detay .Alisveris_Puan { margin-left:15px; font-size:0.5em !important; font-weight:normal !important; border-bottom:1px dashed #dddddd; }


        .urun_detay .fiyatlar .Nitelik { border-top:1px dashed #dddddd; margin-top:20px; padding:20px 0; }
        .urun_detay .fiyatlar .Nitelik_Tur { background:#f9f9f9; font-size:0.8em !important; line-height:1em !important; border:1px solid #dddddd; border-radius:4px; padding:5px; text-align:left; margin:0 5px; }
        .urun_detay .fiyatlar .Nitelik_Ikon { float:left; position:relative; font-size:1em !important; text-align:left; margin:0 10px; }
        .urun_detay .fiyatlar .Sosyal_Paylas { font-size:0.9em !important; text-align:right; }
        .urun_detay .fiyatlar .Sosyal_Paylas_Mobil { font-size:0.9em !important; text-align:center; margin-top:15px; }


        .urun_detay .fiyatlar .Liste_Link { border-top:1px dashed #dddddd; padding:20px 0; font-size:0.9em !important; }
        .urun_detay .fiyatlar .Liste_Link a {  }
        .urun_detay .fiyatlar .Liste_Link i { margin-right:5px; color:#666666 !important; }



        .urun_detay .fiyatlar .etiket { color:#666666; text-align:right; padding:6px 15px 6px 0 !important; }
        .urun_detay .fiyatlar .fiyat { color:#333333; padding:6px 0 !important; }
        .urun_detay .fiyatlar .fiyat a { color:#333333; border-bottom:1px solid #cccccc; }
        .urun_detay .fiyatlar .fiyat span { color:#666666; font-size:12px; }
        .urun_detay .fiyatlar .fiyat input[type=radio] { padding:0; margin:0 10px 0 0; }
        .urun_detay .fiyatlar .fiyat input[type=checkbox] { padding:0; margin:0 10px 0 0; }
        .urun_detay .fiyatlar .fiyat input[type=file] { width:100%; padding:3px; margin:0; border:1px solid #d9d9d9; background-color:#ffffff; line-height:1em; }
        .urun_detay .fiyatlar .fiyat label { padding:0; margin:0 0 0 10px; }
        .urun_detay .fiyatlar .fiyat label span { color:#ff0000; font-size:14px; font-weight:normal; }

        .urun_detay .fiyatlar .indirim_kutu { width:50px; float:right; background-color:#ff0000; padding:5px; text-align:center; border-radius:4px; color:#ffffff; }
        .urun_detay .fiyatlar .indirim_oran { font-size:0.85em; line-height:1.4em; }
        .urun_detay .fiyatlar .indirim_oran .ind_oran { font-size:1.1em; font-weight:bold; margin-top:3px; }
        .urun_detay .fiyatlar .indirim_yazi { font-size:0.8em; line-height:1.4em; }
        .urun_detay .fiyatlar .indirim_yazi .ind_yazi { font-size:0.75em; margin-top:-4px; }

        .urun_detay .fiyatlar .indirimsiz_fiyat { font-size:16px; color:#ee0000; text-decoration:line-through; }
        .urun_detay .fiyatlar .indirimli_fiyat { font-size:22px; font-weight:bold; color:#000000; }
        .urun_detay .fiyatlar .indirimli_etiket { padding-top:5px; color:#666666; }

        .urun_detay .sepet {  }



        .urun_detay .toptan_baslik { border-bottom:1px solid #dddddd; background:#F5F5F5; padding:4px 0; font-weight:bold; margin-top:10px; }
        .urun_detay .toptan_satir { border-bottom:1px solid #dddddd; padding:4px 0; }


        .urun_detay_ozellik_ad { padding:5px 10px; background:#F5F5F5; margin-top:3px; }
        .urun_detay_ozellik_deger { padding:5px 10px; margin-top:3px; }



        .urun_tablar { margin:5px; padding:0; border:1px solid #dddddd; border-radius:4px; background-color:#ffffff; }
        .urun_tablar #tabs { margin:15px 10px; border:none !important; }
        .urun_tablar ul { background:none !important; border:none !important; }
        .urun_tablar img { max-width: 100%; height: auto; }
        .urun_tablar .thumb_foto { border:1px solid #ddd; border-radius:4px; padding:10px; }
        .urun_tablar .odeme_sec_kutu { padding:5px 0; border-bottom:1px solid #eee;  }
        .urun_tablar .odeme_sec_sol { font-weight:bold; }
        .urun_tablar .odeme_sec_sag {  }
        .urun_tablar .odeme_sec_sag i { font-style:normal; font-size:12px; }
        .urun_tablar .odeme_sec_kart_baslik { border:1px solid #ddd; border-radius:4px; background-color:#eee; text-align:center; padding:10px; }
        .urun_tablar .odeme_sec_kart_kutu { border-radius:4px; }
        .urun_tablar .odeme_sec_kart_liste { text-align:center; padding:5px; border-bottom:1px solid #ddd; }

        .admin_tablar { margin:15px 5px; padding:0; border:1px solid #dddddd; border-radius:4px; background-color:#ffffff; }
        .admin_tablar #tabs { margin:0; border:none !important; }
        .admin_tablar ul { background:none !important; border:none !important; }

        .admin_urun_tablar { margin:0; padding:0; border:1px solid #dddddd; border-radius:4px; background-color:#ffffff; }
        .admin_urun_tablar #tabsUrun { margin:0; border:none !important; }
        .admin_urun_tablar ul { background:none !important; border:none !important; }

        .admin_uye_tablar { margin:0; padding:0; border:1px solid #dddddd; border-radius:4px; background-color:#ffffff; }
        .admin_uye_tablar #tabsUye { margin:0; border:none !important; }
        .admin_uye_tablar ul { background:none !important; border:none !important; }

        .admin_kategori_tablar { margin:0; padding:0; border:1px solid #dddddd; border-radius:4px; background-color:#ffffff; }
        .admin_kategori_tablar #tabsKategori { margin:0; border:none !important; }
        .admin_kategori_tablar ul { background:none !important; border:none !important; }


        .urun_yorum { padding:10px; border-bottom:1px dashed #999; background-color:#fff; }
        .urun_yorum_g { padding:10px 0; color:#666; background-color:#fff; }


        .indirim_count { background:#fff; border:1px solid #ccc; border-radius:4px; padding:2px 5px; }


        .sptSilBtn { display:block; margin-top:5px; }
        .sptUrunSatir { padding:5px 0 !important; border-bottom:1px solid #dddddd; }
        .sptKutu { background-color:#ffffff; padding:15px; border:1px solid #dddddd; border-radius:4px; margin:0 5px 15px 5px; }
        .chgMiktar { text-align:center; }
        .sptUrunSatir_Miktar { margin-top:15px; }
        .sptUrunSatir_Fiyat { margin-top:15px; font-size:16px; }
        .sptUrunSatir_Baslik { margin-top:15px; }
        .sptUrunSatir_Foto img { margin:0 auto !important; }



        .sptAlt_Satir_Sol { font-size:16px; padding:5px !important; color:#999999; }
        .sptAlt_Satir_Sag { font-size:16px; padding:5px !important; }





        .siparis_tablar { margin:10px 5px; border:none !important; }
        .siparis_tablar ul { background:none !important; border-top:none; border-left:none; border-right:none; }

        .taksit_tablo .odeme_sec_kutu { padding:5px 0; border-bottom:1px solid #eee;  }
        .taksit_tablo .odeme_sec_sol { font-weight:bold; }
        .taksit_tablo .odeme_sec_sag {  }
        .taksit_tablo .odeme_sec_sag i { font-style:normal; font-size:12px; }
        .taksit_tablo .odeme_sec_kart_baslik { border:1px solid #ddd; border-radius:4px; background-color:#eee; text-align:center; padding:10px; }
        .taksit_tablo .odeme_sec_kart_kutu { border-radius:4px; }
        .taksit_tablo .odeme_sec_kart_liste { text-align:center; padding:5px; border-bottom:1px solid #ddd; cursor:pointer; }

        .taksit_tablo_2 .odeme_sec_kutu { padding:5px 0; border-bottom:1px solid #eee;  }
        .taksit_tablo_2 .odeme_sec_sol { font-weight:bold; }
        .taksit_tablo_2 .odeme_sec_sag {  }
        .taksit_tablo_2 .odeme_sec_sag i { font-style:normal; font-size:12px; }
        .taksit_tablo_2 .odeme_sec_kart_baslik { border:1px solid #ddd; border-radius:4px; background-color:#eee; text-align:center; padding:10px; }
        .taksit_tablo_2 .odeme_sec_kart_kutu { border-radius:4px; }
        .taksit_tablo_2 .odeme_sec_kart_liste { text-align:center; padding:5px; border-bottom:1px solid #ddd; cursor:pointer; }

        .toplu_sms_kutu { background-color:#ffffff; border:1px solid #dddddd; border-radius:4px; padding:10px; }

        .sayfa_detay { margin:0 5px 5px 5px; background-color:#ffffff; border:1px solid #dddddd; border-radius:4px; padding:10px; }
        .sayfa_detay img { max-width: 100%; height: auto; }
        .sayfa_detay_baslik { padding:10px 5px; text-align:center; border-radius:4px; margin-bottom:10px; }

        .sayfa_detay_baslik h1 { font-size:1.1em !important; font-weight:normal; padding:0; margin:0; line-height:1.5em; display:inline !important; }


        .hesabim_kutu { padding:15px 0; margin:10px 0; border:1px solid #dddddd; border-radius:4px; text-align:center; }
        .hesabim_kutu i { margin-bottom:10px;}


        .yonetim_ana_kutu { padding:15px 0; margin:0 0 20px 0; border:1px solid #dddddd; border-radius:4px; text-align:center; }
        .yonetim_ana_kutu i { margin-bottom:10px;}

        .yon_foto_liste { margin-bottom:20px; }
        .yon_foto_liste img { margin:0 auto; border:1px solid #dddddd; padding:5px; border-radius:4px; }


        .yukari_buton {
            right: 35px;
            display: none;
            position: fixed;
            z-index: 99999;
            cursor: pointer;
        }

        .yukari_buton_tasarim {
            width: 50px;
            max-width: 50px;
            height: 50px;
            max-height: 50px;
            padding: 11px 16px;
            border-radius: 50px;
        }


        .form_cizgi { margin:1px 0 2px 0; border-bottom:1px dashed #dfdfdf; height:3px; line-height:3px; }


        .satirsec { background:#fdfea5; }
        .satir_renk { background-color:#f2f2f2; }



        .mobil_sagsol {  }
        .mobil_pad_sol_5 { }

        .br_rd_4 { border-radius:4px !important; }


        .opa_3 { opacity:0.3 !important; }
        .opa_4 { opacity:0.4 !important; }
        .opa_5 { opacity:0.5 !important; }


        .p_a_0 { padding: 0 !important; }
        .p_a_5 { padding: 5px !important; }
        .p_a_10 { padding: 10px !important; }
        .p_a_15 { padding: 15px !important; }
        .p_a_20 { padding: 20px !important; }

        .p_t_0 { padding-top: 0 !important; }
        .p_t_3 { padding-top: 3px !important; }
        .p_t_5 { padding-top: 5px !important; }
        .p_t_10 { padding-top: 10px !important; }
        .p_t_15 { padding-top: 15px !important; }
        .p_t_20 { padding-top: 20px !important; }

        .p_r_0 { padding-right: 0 !important; }
        .p_r_2 { padding-right: 2px !important; }
        .p_r_5 { padding-right: 5px !important; }
        .p_r_10 { padding-right: 10px !important; }
        .p_r_15 { padding-right: 15px !important; }
        .p_r_20 { padding-right: 20px !important; }
        .p_r_30 { padding-right: 30px !important; }

        .p_b_0 { padding-bottom: 0 !important; }
        .p_b_5 { padding-bottom: 5px !important; }
        .p_b_10 { padding-bottom: 10px !important; }
        .p_b_15 { padding-bottom: 15px !important; }
        .p_b_20 { padding-bottom: 20px !important; }

        .p_l_0 { padding-left: 0 !important; }
        .p_l_2 { padding-left: 2px !important; }
        .p_l_5 { padding-left: 5px !important; }
        .p_l_10 { padding-left: 10px !important; }
        .p_l_15 { padding-left: 15px !important; }
        .p_l_20 { padding-left: 20px !important; }

        .p_tb_0 { padding-top: 0 !important; padding-bottom: 0 !important; }
        .p_tb_5 { padding-top: 5px !important; padding-bottom: 5px !important; }
        .p_tb_10 { padding-top: 10px !important; padding-bottom: 10px !important; }
        .p_tb_15 { padding-top: 15px !important; padding-bottom: 15px !important; }
        .p_tb_20 { padding-top: 20px !important; padding-bottom: 20px !important; }

        .p_lr_0 { padding-left: 0 !important; padding-right: 0 !important; }
        .p_lr_2 { padding-left: 2px !important; padding-right: 2px !important; }
        .p_lr_5 { padding-left: 5px !important; padding-right: 5px !important; }
        .p_lr_10 { padding-left: 10px !important; padding-right: 10px !important; }
        .p_lr_15 { padding-left: 15px !important; padding-right: 15px !important; }
        .p_lr_20 { padding-left: 20px !important; padding-right: 20px !important; }



        .p_0_7_0_10 { padding: 0 7px 0 10px !important; }



        .m_a_0 { margin: 0 !important; }
        .m_a_5 { margin: 5px !important; }
        .m_a_10 { margin: 10px !important; }
        .m_a_15 { margin: 15px !important; }
        .m_a_20 { margin: 20px !important; }

        .m_t_0 { margin-top: 0 !important; }
        .m_t_5 { margin-top: 5px !important; }
        .m_t_10 { margin-top: 10px !important; }
        .m_t_15 { margin-top: 15px !important; }
        .m_t_20 { margin-top: 20px !important; }
        .m_t_25 { margin-top: 25px !important; }
        .m_t_30 { margin-top: 30px !important; }
        .m_t_35 { margin-top: 35px !important; }
        .m_t_40 { margin-top: 40px !important; }

        .m_r_0 { margin-right: 0 !important; }
        .m_r_5 { margin-right: 5px !important; }
        .m_r_7 { margin-right: 7px !important; }
        .m_r_10 { margin-right: 10px !important; }
        .m_r_12 { margin-right: 12px !important; }
        .m_r_15 { margin-right: 15px !important; }
        .m_r_20 { margin-right: 20px !important; }
        .m_r_25 { margin-right: 25px !important; }
        .m_r_30 { margin-right: 30px !important; }
        .m_r_35 { margin-right: 35px !important; }
        .m_r_40 { margin-right: 40px !important; }

        .m_b_0 { margin-bottom: 0 !important; }
        .m_b_5 { margin-bottom: 5px !important; }
        .m_b_10 { margin-bottom: 10px !important; }
        .m_b_15 { margin-bottom: 15px !important; }
        .m_b_20 { margin-bottom: 20px !important; }
        .m_b_25 { margin-bottom: 25px !important; }
        .m_b_30 { margin-bottom: 30px !important; }

        .m_l_0 { margin-left: 0 !important; }
        .m_l_5 { margin-left: 5px !important; }
        .m_l_7 { margin-left: 7px !important; }
        .m_l_10 { margin-left: 10px !important; }
        .m_l_15 { margin-left: 15px !important; }
        .m_l_20 { margin-left: 20px !important; }
        .m_l_40 { margin-left: 40px !important; }
        .m_l_80 { margin-left: 80px !important; }

        .m_tb_0 { margin-top: 0 !important; margin-bottom: 0 !important; }
        .m_tb_5 { margin-top: 5px !important; margin-bottom: 5px !important; }
        .m_tb_10 { margin-top: 10px !important; margin-bottom: 10px !important; }
        .m_tb_15 { margin-top: 15px !important; margin-bottom: 15px !important; }
        .m_tb_20 { margin-top: 20px !important; margin-bottom: 20px !important; }
        .m_tb_25 { margin-top: 25px !important; margin-bottom: 25px !important; }
        .m_tb_30 { margin-top: 30px !important; margin-bottom: 30px !important; }
        .m_tb_35 { margin-top: 35px !important; margin-bottom: 35px !important; }
        .m_tb_40 { margin-top: 40px !important; margin-bottom: 40px !important; }

        .m_lr_0 { margin-left: 0 !important; margin-right: 0 !important; }
        .m_lr_5 { margin-left: 5px !important; margin-right: 5px !important; }
        .m_lr_10 { margin-left: 10px !important; margin-right: 10px !important; }
        .m_lr_15 { margin-left: 15px !important; margin-right: 15px !important; }
        .m_lr_20 { margin-left: 20px !important; margin-right: 20px !important; }




        .h350 { height:350px; }
        .hm350 { min-height:350px; }
        .hm375 { min-height:375px; }






        .rSiyah_0 { color:#000000 !important; }
        .rSiyah_3 { color:#333333 !important; }
        .rSiyah_6 { color:#666666 !important; }
        .rSiyah_9 { color:#999999 !important; }
        .rSiyah_c { color:#cccccc !important; }
        .rSiyah_f { color:#ffffff !important; }

        .rKirmizi { color:#ff0000 !important; }


        .bgSiyah_0 { background-color:#000000 !important; }
        .bgSiyah_3 { background-color:#333333 !important; }
        .bgSiyah_6 { background-color:#666666 !important; }
        .bgSiyah_9 { background-color:#999999 !important; }
        .bgSiyah_c { background-color:#cccccc !important; }
        .bgSiyah_d { background-color:#dddddd !important; }
        .bgSiyah_e { background-color:#eeeeee !important; }
        .bgSiyah_f { background-color:#ffffff !important; }


        .f_kalin { font-weight:bold !important; }
        .f_normal { font-weight:normal !important; }


        .font_0_50 { font-size:0.5em !important; }
        .font_0_60 { font-size:0.60em !important; }
        .font_0_65 { font-size:0.65em !important; }
        .font_0_75 { font-size:0.75em !important; }
        .font_0_90 { font-size:0.9em !important; }
        .font_1 { font-size:1em !important; }
        .font_1_25 { font-size:1.25em !important; }
        .font_1_50 { font-size:1.50em !important; }
        .font_2 { font-size:2em !important; }


        .f_8 { font-size:8px !important; }
        .f_10 { font-size:10px !important; }
        .f_11 { font-size:11px !important; }
        .f_12 { font-size:12px !important; }
        .f_14 { font-size:14px !important; }
        .f_16 { font-size:16px !important; }
        .f_18 { font-size:18px !important; }
        .f_20 { font-size:20px !important; }
        .f_22 { font-size:22px !important; }
        .f_24 { font-size:24px !important; }
        .f_30 { font-size:30px !important; }





        .kat_filitre a { display:block; padding:2px 0; clear:both; }
        .kat_filitre i { font-style:normal; }




























        .modul_ust { border-radius: 4px; margin-bottom: 4px; text-align:center; padding:8px 0; overflow: hidden; }
        .modul_orta { border-radius: 4px; margin-bottom: 20px; text-align:left; padding:0; overflow: hidden; border:1px solid #cccccc; background-color:#ffffff; }

        .modul_ust_slayt { border-radius: 4px; margin-bottom: 4px; padding:8px;  overflow: hidden; border:1px solid #cccccc; background-color:#eeeeee; }
        .modul_orta_reklam { margin-bottom: 20px; text-align:left; padding:0; overflow: hidden; }
        .modul_orta_reklam img { max-width: 100%; height: auto; }



        #acilisreklam img { max-width: 100%; height: auto; }


        .sol { text-align:left !important; }
        .ortala { text-align:center !important; }
        .sag { text-align:right !important; }
        .sola { float:left !important; }
        .saga { float:right !important; }










        .noborder { border:0; }
        .cr_p { cursor:pointer; }
        .cr_d { cursor:default; }

        .gizle { overflow:hidden; }

        .va_bottom { vertical-align:bottom; }

        .dSil { clear:both; }


        .ico_yrd { cursor:pointer; color:#68e805; }






        .d_block { display:block;}
        .d_inline { display:inline;}
        .d_inline_block { display:inline-block;}









        /* SANAL KLAVYE */

        .jqfnumkeypad { position:absolute; display:none; width:115px; padding:1px; font-family:Montserrat, sans-serif; font-size:14px; font-weight:normal; color:#646464; background:#ffffff; border:1px solid #d6d6d6; z-index: 2000; }
        .jqfnumkeypad .jqfnumkeypad_keypad { display:block; padding:4px; background:#e6e6e6; }
        .jqfnumkeypad .jqfnumkeypad_digit { cursor:pointer; width:33%; padding:5px 0; font-size:14px; text-align:center; color:#424242; border-bottom:1px solid #c8c8c8; border-right:1px solid #c8c8c8; border-top:1px solid #f0f0f0; border-left:1px solid #f0f0f0; }
        .jqfnumkeypad .jqfnumkeypad_clear { cursor:pointer; padding:5px 0; font-size:14px; text-align:center; color:#424242; border-bottom:1px solid #c8c8c8; border-right:1px solid #c8c8c8; border-top:1px solid #f0f0f0; border-left:1px solid #f0f0f0; }







        /* FORM ELEMANLARI */

        .form_sol { text-align:right; padding:5px; float:left; display:inline-block; font-weight:normal; vertical-align:middle; height:30px; line-height:30px; }
        .form_sag { padding:5px; float:left; display:inline-block; vertical-align:middle; height:30px; line-height:30px; }
        .form_sag i { font-size:14px; }
        .form_satir { clear:both; padding:3px; }
        select { vertical-align:middle; }
        input { vertical-align:middle; }
        form { padding:0; margin:0; }
        table { border:0; margin:0; padding:0; border-collapse:collapse; }
        td {padding:0; margin:0; }
        tr { vertical-align:top; }
        img { border:0; vertical-align:middle; }


        /* UYARI PENCERELERİ */

        .error { padding:25px 15px 25px 75px; background:url('/Css/Tasarim/Modul/ico_hata.png') no-repeat top left; color:#cd0a0a; font-weight:normal; }
        .success { padding:25px 15px 25px 75px; background:url('/Css/Tasarim/Modul/ico_tamam.png') no-repeat top left; color:#4f8a10; font-weight:normal; }







        /* TABLO */

        .tb_bs { font-size:0; }
        .tb_bsa { font-size:14px; float:left; padding:10px 5px; margin:0; font-weight:normal; text-align:center; display:inline-block; vertical-align:middle; }

        .tb_st { font-size:0; clear:both; padding:0; margin:0; overflow:hidden; }
        .tb_sta { font-size:14px; display:inline-block; padding:5px; margin:0; vertical-align:middle; }
        .tb_sta i { font-size:14px; font-style:normal; }







        /* YÖNETİM KULLANIM BAR */

        .progress-container { border:1px solid #ccc; width:100px; margin:2px 5px 2px 0; padding:1px; float:left; background:white; }
        .progress-container > div { background-color:#ace97c; height:12px; }













        /* ÇERÇEVE */

        .cerceve { border:1px solid #ccc; }
        .cerceve_sag { border-right:1px solid #ccc; }
        .cerceve_sol { border-left:1px solid #ccc; }



        /* ÜRÜN FOTO ÇERÇEVE */

        .r_t { background:#fff; padding:2px; border:1px solid #eee; }
        .r_k { background:#fff; padding:4px; border:1px solid #eee; }
        .r_o { background:#fff; padding:5px; border:1px solid #eee; }



        /* ÇİZGİLER */

        .cizgi { margin:1px 0 2px 0; border-bottom:1px solid #dfdfdf; height:3px; line-height:3px; }
        .kesik_cizgi { margin:1px 0 2px 0; border-bottom:1px dashed #dfdfdf; height:3px; line-height:3px; }
        .cizik { text-decoration:line-through; color:#ff0000; }



        /* KATEGORİ FİLİTRE */

        .kat_filitre { padding:5px 0 8px 0; }
        .kat_filitre i { color:#999; padding-bottom: 10px; }



        /* KATEGORİ MENÜ */

        .katmenu_aktif { text-decoration:none; padding:5px 3px; display:block; margin-bottom:1px; }
        .katmenu_normal { text-decoration:none; padding:5px 3px; display:block; margin-bottom:1px; }
        .katmenu_aktif:hover,.katmenu_normal:hover { text-decoration:none; margin-bottom:1px; }



        /* YORUMLAR */




        /* FORM ELEMANLARI */

        .form_sol { color:#444; }
        .form_sag i { color:#444; }
        .form_input { border:1px solid #ccc; color:#444; padding:4px; }
        .form_input_error { border:1px solid #be3e16; background-color:#ffe4e4; padding:4px; }
        .field-validation-error { display:block; color:#be3e16; font-weight:normal; }
        .validation-summary-errors { color:#be3e16; font-weight:normal; }
        .validation-summary-errors ul { list-style:none; padding:0; margin:0 }



        /* SEÇİLİ SATIR RENGİ */




        /* NİTELİK BAYRAKLARI */




        /* TABLO */

        .tb_st { border-bottom:1px dashed #ddd; }
        .tb_sta i { font-family:Montserrat, sans-serif; color:#666; }



        .urunliste_kutu { border-radius:4px; padding:0; margin-bottom:20px; border:1px solid #cccccc; background-color:#ffffff; overflow:hidden; }
        .urunliste_yeni { border:1px solid #666666; border-radius:2px; line-height:1.1; z-index:100; font-size:12px; padding:2px 4px; text-align:center; background-color:#ffffff; color:#666666; left:10px; top:20px; position:absolute; }
        .urunliste_pay { border-bottom:1px solid #cccccc; padding:10px 0 5px 0; margin-left:-2px; margin-bottom:-2px; }
        .urunliste { border-left:1px solid #cccccc; padding:15px 15px 5px 15px; overflow: hidden; background-color:#ffffff; }
        .urunliste_foto { margin-bottom:10px; overflow: hidden; }
        .urunliste_foto img { margin: 0 auto; text-align:center; }
        .urunliste_img_boy_dikey { max-width: 150% !important; margin:0 -25% !important; height:auto !important; }
        .urunliste_img_boy_yatay { margin:-25% auto !important; }
        .urunliste_marka { max-height:1.43em; min-height:1.43em; margin-bottom:5px; overflow:hidden; color:#999999; }
        .urunliste_baslik { max-height:2.85em; min-height:2.85em; margin-bottom:10px; overflow:hidden; }
        .urunliste_fiyatlar { padding:5px 0 0 5px; }

        .urunliste_indirim_kutu { background-color:#ff0000; padding:0 3px; text-align:center; border-radius:2px; color:#ffffff; }
        .urunliste_indirim_oran { font-size:18px; line-height:1em; }
        .urunliste_indirim_oran .ind_oran { font-size:14px; margin-top:3px; }
        .urunliste_indirim_yazi { font-size:14px; line-height:1.4em; }
        .urunliste_indirim_yazi .ind_yazi { font-size:10px; margin-top:-4px; }

        .urunliste_fiyat { max-height:1.4em; line-height:1.4em; overflow:hidden; color:#ee0000; font-size:14px; text-decoration: line-through; }
        .urunliste_indirimsiz { max-height:1.4em; line-height:1.4em; color:#ffffff; font-size:14px; }
        .urunliste_indirimli { max-height:1.4em; line-height:1.4em; overflow:hidden; color:#000000; font-size:18px; }
        .urunliste_indirimli_yazi { color:#666666; font-size:11px; }


        .urunliste_nitelik { height:60px; margin-top:10px; padding:10px; font-size:12px; color:#666666; }
        .urunliste_kargo { max-height:1.5em; overflow:hidden; margin-bottom:5px; }
        .urunliste_puan { max-height:1.5em; overflow:hidden; color:#f4d000; }

        .urunliste_sepet { height:60px; margin-top:10px; padding:10px 0px; font-size:12px; color:#666666; text-align:center; }
        .urunliste_varyant { height:60px; margin-top:10px; padding:10px; font-size:12px; color:#666666; }





        .urunliste_kutu_liste { border-radius:4px; padding:0; margin-bottom:20px; border:1px solid #dddddd; background-color:#ffffff; overflow:hidden; }
        .urunliste_yeni_liste { border:1px solid #666666; border-radius:2px; line-height:1.1; z-index:100; font-size:12px; padding:2px 4px; text-align:center; background-color:#ffffff; color:#666666; left:10px; top:20px; position:absolute; }
        .urunliste_pay_liste { border-bottom:1px solid #dddddd; padding:20px 0; margin-left:-2px; margin-bottom:-2px; }
        .urunliste_liste { border-left:1px solid #dddddd; text-align:left; padding:15px 15px 5px 15px; overflow: hidden; background-color:#ffffff; }
        .urunliste_foto_liste { margin-bottom:10px; overflow: hidden; }
        .urunliste_foto_liste img { margin: 0 auto; text-align:center; }
        .urunliste_img_boy_dikey_liste { max-width: 150% !important; margin:0 -25% !important; height:auto !important; }
        .urunliste_img_boy_yatay_liste { margin:-25% auto !important; }
        .urunliste_marka_liste { max-height:1.43em; margin-bottom:5px; overflow:hidden; color:#999999; }
        .urunliste_baslik_liste { max-height:2.85em; min-height:2.85em; margin-bottom:10px; overflow:hidden; }
        .urunliste_fiyatlar_liste { padding:5px 0 0 5px; max-width:150px; }

        .urunliste_indirim_kutu_liste { background-color:#ff0000; padding:0 3px; text-align:center; border-radius:2px; color:#ffffff; }
        .urunliste_indirim_oran_liste { font-size:18px; line-height:1em; }
        .urunliste_indirim_oran_liste .ind_oran { font-size:14px; margin-top:3px; }
        .urunliste_indirim_yazi_liste { font-size:14px; line-height:1.4em; }
        .urunliste_indirim_yazi_liste .ind_yazi { font-size:10px; margin-top:-4px; }

        .urunliste_fiyat_liste { max-height:1.4em; line-height:1.4em; overflow:hidden; color:#ee0000; font-size:14px; text-decoration: line-through; }
        .urunliste_indirimsiz_liste { max-height:1.4em; line-height:1.4em; color:#ffffff; font-size:14px; }
        .urunliste_indirimli_liste { max-height:1.4em; line-height:1.4em; overflow:hidden; color:#000000; font-size:18px; }
        .urunliste_indirimli_yazi_liste { color:#666666; font-size:11px; }


        .urunliste_nitelik_liste { height:60px; margin-top:10px; padding:10px; font-size:12px; color:#666666; }
        .urunliste_kargo_liste { max-height:1.5em; overflow:hidden; margin-bottom:5px; }
        .urunliste_puan_liste { max-height:1.5em; overflow:hidden; color:#f4d000; }

        .urunliste_sepet_liste { height:60px; margin-top:10px; padding:10px; font-size:12px; color:#666666; }
        .urunliste_varyant_liste { height:60px; margin-top:10px; padding:10px; font-size:12px; color:#666666; }





        .urun_yeni_detay { position:absolute; left:326px; top:-24px; background:url('../Images/yeni_buyuk.png') no-repeat left top; width:74px; height:74px; }
        .urun_indirim_detay { position:absolute; left:220px; top:7px; background:url('../Images/indirim_new.png') no-repeat left top; width:41px; height:49px; text-align:center; color:#fff; font-weight:normal; font-size:14px; font-family:Montserrat, sans-serif; padding-top:3px; }




        .urun_slayt_anasayfa { text-align:center; margin:0; padding:15px 15px 5px 15px; }
        .urun_slayt_anasayfa_foto { margin-bottom:10px; padding:0 20px; }
        .urun_slayt_anasayfa_baslik { max-height:2.85em; min-height:2.85em; margin-bottom:10px; overflow:hidden; }
        .urun_slayt_anasayfa_fiyat { color:#ee0000; text-decoration:line-through; font-size:14px; }
        .urun_slayt_anasayfa_indirimsiz { color:#ffffff; font-size:14px; }
        .urun_slayt_anasayfa_indirimli { line-height:1em; margin-top:5px; color:#000000; font-size:18px; }
        .urun_slayt_anasayfa_indirimli span { color:#666666; font-size:11px; }



        .urunmodul1 { text-align:center; margin:0; padding:15px 15px 5px 15px; }
        .urunmodul1_foto { margin-bottom:10px; }
        .urunmodul1_baslik { max-height:2.85em; min-height:2.85em; margin-bottom:10px; overflow:hidden; }
        .urunmodul1_fiyat { color:#ee0000; text-decoration:line-through; font-size:14px; }
        .urunmodul1_indirimli { line-height:1em; margin-top:5px; color:#000000; font-size:18px; }
        .urunmodul1_indirimli span { color:#666666; font-size:11px; }



        .urunmodul2 { text-align:left; margin-bottom:5px; padding:15px 10px; }
        .urunmodul2_baslik { max-height:2.85em; margin-bottom:5px; padding:0 0 0 5px; overflow:hidden; font-size:13px; }
        .urunmodul2_foto { text-align:center; border:1px solid #dddddd; padding:4px; -moz-border-radius:4px; -webkit-border-radius:4px; -khtml-border-radius:4px; border-radius:4px; }
        .urunmodul2_foto img { margin:0 auto; }
        .urunmodul2_fiyatlar { padding:0 0 0 5px; }
        .urunmodul2_fiyat { color:#ee0000; text-decoration:line-through; font-size:12px; }
        .urunmodul2_indirimli { line-height:1em; margin-top:5px; color:#000000; font-size:14px; }
        .urunmodul2_indirimli span { color:#666666; font-size:11px; }
        .urunmodul2_cizgi { margin:1px 10px 2px 10px; border-bottom:1px dashed #dfdfdf; height:3px; line-height:3px; }


        .urunmodul3 { text-align:left; margin-bottom:5px; padding:15px 10px; }
        .urunmodul3_baslik { max-height:2.85em; margin-bottom:5px; padding:0 0 0 5px; overflow:hidden; font-size:13px; }
        .urunmodul3_foto { margin:0; text-align:center; }
        .urunmodul3_fiyatlar { padding:0 0 0 5px; }
        .urunmodul3_fiyat { color:#ee0000; text-decoration:line-through; font-size:12px; }
        .urunmodul3_indirimli { line-height:1em; margin-top:5px; color:#000000; font-size:14px; }
        .urunmodul3_indirimli span { color:#666666; font-size:11px; }
        .urunmodul3_cizgi { margin:1px 10px 2px 10px; border-bottom:1px dashed #dfdfdf; height:3px; line-height:3px; }



        .blogdetay_cizgi { border-top:1px dashed #dfdfdf; margin:30px 0; }
        .blogdetay_foto { border:1px solid #dddddd; padding:4px; border-radius:4px; }
        .blogdetay_baslik { font-size:1.8em; margin-top:5px; }
        .blogdetay_baslik h1 { font-size:1.1em !important; font-weight:normal; padding:0; margin:0; line-height:1.5em; display:inline !important; }
        .blogdetay_tarih { padding-top:10px; color:#666666; }
        .blogdetay_kisametin { padding-top:25px; line-height:1.6em; color:#555555; }
        .blogdetay_link { padding-top:25px; line-height:1.6em; text-align:right; }


        .blogmodul { text-align:left; margin-bottom:5px; padding:15px 10px; }
        .blogmodul_baslik { max-height:4.275em; margin-top:0px; padding:0 0 0 5px; overflow:hidden; font-size:13px; }
        .blogmodul_foto { text-align:center; border:1px solid #dddddd; padding:4px; -moz-border-radius:4px; -webkit-border-radius:4px; -khtml-border-radius:4px; border-radius:4px; }
        .blogmodul_foto img { margin:0 auto; }
        .blogmodul_cizgi { margin:1px 10px 2px 10px; border-bottom:1px dashed #dfdfdf; height:3px; line-height:3px; }
        .blogmodul_tarih { padding:0 0 0 5px; color:#888888; font-size:13px; }



        .sepete_ekle_popup { }
        .sepete_ekle_popup_foto { border-radius:4px; border:1px solid #dddddd; padding:4px; margin:3px 0; }
        .sepete_ekle_popup_baslik { padding:2px 10px; margin:3px 0; }
        .sepete_ekle_popup_cizgi { margin:7px 0 8px 0; border-bottom:1px dashed #dddddd; height:3px; line-height:3px; }



        .fat-sablon {  }

        .fat-alan-kutu { position:absolute !important; background-color: #eaeaea; border:1px solid #666666; cursor:move; opacity: 0.7; }
        .fat-alan-kutu span { padding:5px; line-height:1.1em; }
        .fat-alan-kutu i { cursor:pointer; position:absolute; right:5px; top:5px; color:#aaa; font-size:11px !important; }

        .fat-alan-ekle { display:block; font-size:13px; padding:4px 5px; border:1px solid #e2e2e2; color:#333333; background-color:#fafafa; margin: 3px 0; }

        fieldset.fat-fieldset {
            display:block;
            border: 1px solid #f2f2f2;
            padding: 7px 5px;
            margin-bottom:15px;
        }

        legend.fat-legend {
            width: auto;
            border: 0px;
            padding:0;
            margin:0;
            font-size:14px;
            font-weight:bold;
            padding-left: 5px;
            padding-right: 5px;
        }


        #varyant_kutu { border-top:1px dashed #dddddd; border-bottom:1px dashed #dddddd;  padding:10px 0; }

        .urun_varyant {
            margin:0 0 0 5px!important;
            float:left;
        }

        .urun_varyant label {
            float:left;
            background-color:#ffffff;
            margin:0 8px 8px 0;
            border-radius:4px;
            overflow:auto;
        }

        .urun_varyant select
        {
            cursor:pointer;
        }

        .urun_varyant label span {
            font-size:0.9em !important;
            text-align:center;
            padding:4px 8px;
            display:block;
            cursor:pointer;
            font-weight:normal !important;
        }

        .urun_varyant label img {
            text-align: center;
            cursor:pointer;
            font-weight:normal !important;
        }

        .urun_varyant .no-span {
            cursor: not-allowed;
            font-weight:normal !important;
        }

        .urun_varyant .no-label {
            opacity:0.4 !important;
            filter: alpha(opacity=40);
        }

        .urun_varyant label input {
            position:absolute;
            left:-20000px;
        }

        .urun_varyant input:checked + span {

        }

        .urun_varyant input:checked + img {

        }

    </style>

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="/"><i class="fa fa-home"></i> Anasayfa</a>
                        <span>Siparişler</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                @include('partials.alert')
                <div class="col-lg-12">
                    <div class="contact-title">
                        <h4>Siparişlerim</h4>
                    </div>
                    @if(count($siparisler)==0)
                        <p>Henüz siparişiniz bulunmuyor.</p>
                    @else
                        <div class="container-fluid" style="margin-top:15px !important;">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div id="sayfa_orta">
                                        <div class="sayfa_detay p_a_15">
                                            <form method="post" action="">
                                                <table class="table table-hover table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>&nbsp;</th>
                                                        <th class="hidden-xs">SİPARİŞ TARİHİ</th>
                                                        <th>SİPARİŞ NO</th>
                                                        <th class="hidden-xs">ÖDEME TÜRÜ</th>
                                                        <th class="hidden-xs">SİPARİŞ DURUMU</th>
                                                        <th class="text-right">SİPARİŞ TOPLAMI</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($siparisler as $siparis)
                                                    <tr>
                                                        <td><a href="{{route('siparis', $siparis->id)}}" class="primary-btn btn-xs"><i class="fa fa-edit"></i> Detay</a></td>
                                                        <td class="hidden-xs">{{$siparis->olusturma_tarihi}}</td>
                                                        <td class="f_kalin">#S-{{$siparis->id}}</td>
                                                        <td class="hidden-xs">{{$siparis->odeme_yontemi}}</td>
                                                        <td class="hidden-xs"><span class="label label-success">{{$siparis->durum}}</span></td>
                                                        <td class="f_kalin text-right">{{$siparis->siparis_tutari}} TL</td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                                <script>
                                                    $(function () {

                                                    });
                                                </script>
                                            </form>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
    </section>
    <!-- Contact Section End -->

@endsection
