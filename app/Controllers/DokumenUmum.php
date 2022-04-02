<?php

namespace App\Controllers;

class DokumenUmum extends BaseController
{
    public function menu1()
    {
        return view('dokumen_umum/bukti-penerimaan-surat');
    }
    public function menu2()
    {
        return view('dokumen_umum/surat-permohonan');
    }
    public function menu3()
    {
        return view('dokumen_umum/lembar-pengawasan-arus-dokumen');
    }
    public function menu4()
    {
        return view('dokumen_umum/surat-tugas-penelitian-lapangan');
    }
    public function menu5()
    {
        return view('dokumen_umum/surat-pemberitahuan-penelitian-lapangan');
    }
    public function menu6()
    {
        return view('dokumen_umum/laporan-hasil-penelitian');
    }
}
