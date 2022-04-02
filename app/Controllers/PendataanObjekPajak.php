<?php

namespace App\Controllers;

class PendataanObjekPajak extends BaseController
{
    public function menu1()
    {
        return view('pendataan_objek_pajak/berita-acara-penyampaian-surat-pemberitahuan-objek-pajak-(SPOP)');
    }
    public function menu2()
    {
        return view('pendataan_objek_pajak/daftar-hasil-pemeriksaan-DHR');
    }
    public function menu3()
    {
        return view('pendataan_objek_pajak/daftar-hasil-rekaman-(DHR)');
    }
    public function menu4()
    {
        return view('pendataan_objek_pajak/daftar-penjagaan-penyampaian-dan-pengembalian-SPOP');
    }
    public function menu5()
    {
        return view('pendataan_objek_pajak/daftar-rekapitulasi-pengembalian-SPOP');
    }
    public function menu6()
    {
        return view('pendataan_objek_pajak/daftar-sementara-subjek-pajak-dan-objek-pajak');
    }
    public function menu7()
    {
        return view('pendataan_objek_pajak/lampiran-surat-pemberitahuan-objek-pajak-(LSPOP)-non-standar');
    }
    public function menu8()
    {
        return view('pendataan_objek_pajak/lampiran-surat-pemberitahuan-objek-pajak-(LSPOP)-standar');
    }
    public function menu9()
    {
        return view('pendataan_objek_pajak/stiker-NOP');
    }
    public function menu10()
    {
        return view('pendataan_objek_pajak/surat-pemberitahuan-objek-pajak-(SPOP)');
    }
    public function menu11()
    {
        return view('pendataan_objek_pajak/tanda-terima-pengembalian-surat-pemberitahuan-objek-pajak-(SPOP)');
    }
    public function menu12()
    {
        return view('pendataan_objek_pajak/tanda-terima-penyampaian-surat-pemberitahuan-objek-pajak-(SPOP)');
    }
    
}
