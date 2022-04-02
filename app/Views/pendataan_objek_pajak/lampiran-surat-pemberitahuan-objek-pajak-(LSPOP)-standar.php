<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>


<div>
    <h1 class="text-center">Lampiran Surat Pemberitahuan Objek Pajak (LSPOP) Standar</h1>

    <form>
        <div class="form-group row">
            <label for="input1" class="col-sm-2 col-form-label">No. Formulir</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input1" disabled>
            </div>

        </div>

        <div class="form-group row">
            <label for="input2" class="col-sm-2 col-form-label">JENIS TRANSAKSI</label>
            <div class="col-sm-10">
                <?php $use = ['Perekaman Data', 'Pemutakhiran Data', 'Penghapusan Data', ' Penilaian Individual'] ?>
                <?php for ($i = 0; $i < 4; $i++) : ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOop1" id="inlineRadios<?= $i ?>" value="<?= $use[$i] ?>">
                        <label class="form-check-label" for="inlineRadios<?= $i ?>"><?= $use[$i] ?></label>
                    </div>
                <?php endfor ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="input3" class="col-sm-2 col-form-label">NOP</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input3">
            </div>
        </div>
        <div class="form-group row">
            <label for="input4" class="col-sm-2 col-form-label">JUMLAH BANGUNAN</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input4">
            </div>
        </div>
        <div class="form-group row">
            <label for="input5" class="col-sm-2 col-form-label">BANGUNAN KE</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input5">
            </div>
        </div>


        <div class="form-group row">
            <label for="input2" class="col-sm-2 col-form-label">JENIS TRANSAKSI</label>
            <div class="col-sm-10">
                <?php $use = ['Perumahan', 'Perkantoran', 'Pabrik', 'Toko/Apotik/Ruko', 'RS/Klinik', 'Olahraga/Rekreasi', 'Hotel/Resto/Wisma', 'Bengkel/Gudang', ' Ged. Pemerintah', 'Lain-lain', 'Bang. tidak kena pajak', 'Bang. Parkir', 'Apartemen/Kondominium', 'Pompa Bensin (kanopi)', 'Tangki Minyak', ' Gedung Pertemuan'] ?>
                <?php for ($i = 0; $i < 16; $i++) : ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="JenisBangunan" id="inlineRadiosJenisBangunan<?= $i ?>" value="<?= $use[$i] ?>">
                        <label class="form-check-label" for="inlineRadiosJenisBangunan<?= $i ?>"><?= $use[$i] ?></label>
                    </div>
                <?php endfor ?>
            </div>
        </div>

        <div class="form-group row">
            <label for="input6" class="col-sm-2 col-form-label">LUAS BANGUNAN</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input6">
            </div>
        </div>
        <div class="form-group row">
            <label for="input7" class="col-sm-2 col-form-label">JUMLAH LANTAI</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input7">
            </div>
        </div>
        <div class="form-group row">
            <label for="input8" class="col-sm-2 col-form-label">TAHUN DIBANGUN</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input8">
            </div>
        </div>
        <div class="form-group row">
            <label for="input9" class="col-sm-2 col-form-label">TAHUN DIRENOVASI</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input9">
            </div>
        </div>
        <div class="form-group row">
            <label for="input9" class="col-sm-2 col-form-label">DAYA LISTRIK TERPASANG/WATT</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input9">
            </div>
        </div>
        <div class="form-group row">
            <label for="input9" class="col-sm-2 col-form-label">KONDISI PADA UMUMNYA</label>
            <div class="col-sm-10">
                <?php $use = ['Sangat Baik', 'Baik', 'Sedang', 'Jelek'] ?>
                <?php for ($i = 0; $i < 4; $i++) : ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioKondisi" id="inlineRadioKondisi<?= $i ?>" value="<?= $use[$i] ?>">
                        <label class="form-check-label" for="inlineRadioKondisi<?= $i ?>"><?= $use[$i] ?></label>
                    </div>
                <?php endfor ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="input9" class="col-sm-2 col-form-label">KONTRUKSI</label>
            <div class="col-sm-10">
                <?php $use = ['Baja', 'Beton', 'Batu Bata', 'Kayu'] ?>
                <?php for ($i = 0; $i < 4; $i++) : ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioKontruksi" id="inlineRadioKontruksi<?= $i ?>" value="<?= $use[$i] ?>">
                        <label class="form-check-label" for="inlineRadioKontruksi<?= $i ?>"><?= $use[$i] ?></label>
                    </div>
                <?php endfor ?>
            </div>
        </div>

        <div class="form-group row">
            <label for="input10" class="col-sm-2 col-form-label">ATAP</label>
            <div class="col-sm-10">
                <?php $use = ['Decrabon/Beton/Gtg. Glazur', 'Gtg. Beton/Alumunium', 'Gtg. Biasa/Sirap', 'Abses', 'Seng'] ?>
                <?php for ($i = 0; $i < 5; $i++) : ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioAtap" id="inlineRadioAtap<?= $i ?>" value="<?= $use[$i] ?>">
                        <label class="form-check-label" for="inlineRadioAtap<?= $i ?>"><?= $use[$i] ?></label>
                    </div>
                <?php endfor ?>
            </div>
        </div>

        <div class="form-group row">
            <label for="input10" class="col-sm-2 col-form-label">DINDING</label>
            <div class="col-sm-10">
                <?php $use = ['Kaca/Alumunium', 'Beton', 'Batu Bata/Conblok', 'Kayu', 'Seng', 'Tidak Ada'] ?>
                <?php for ($i = 0; $i < 6; $i++) : ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioDinding" id="inlineRadioDinding<?= $i ?>" value="<?= $use[$i] ?>">
                        <label class="form-check-label" for="inlineRadioDinding<?= $i ?>"><?= $use[$i] ?></label>
                    </div>
                <?php endfor ?>
            </div>
        </div>

        <div class="form-group row">
            <label for="input10" class="col-sm-2 col-form-label">LANTAI</label>
            <div class="col-sm-10">
                <?php $use = ['Marmer', 'Keramik', 'Teraso', 'Ubin PC/Papan', 'Semen'] ?>
                <?php for ($i = 0; $i < 5; $i++) : ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioLantai" id="inlineRadioLantai<?= $i ?>" value="<?= $use[$i] ?>">
                        <label class="form-check-label" for="inlineRadioLantai<?= $i ?>"><?= $use[$i] ?></label>
                    </div>
                <?php endfor ?>
            </div>
        </div>

        <div class="form-group row">
            <label for="input10" class="col-sm-2 col-form-label">LANGIT - LANGIT</label>
            <div class="col-sm-10">
                <?php $use = ['Akustik/Jati', 'Triplek/Asbes/Bambu', 'Tidak Ada'] ?>
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioLangitLangit" id="inlineRadioLangitLangit<?= $i ?>" value="<?= $use[$i] ?>">
                        <label class="form-check-label" for="inlineRadioLangitLangit<?= $i ?>"><?= $use[$i] ?></label>
                    </div>
                <?php endfor ?>
            </div>
        </div>




        <div class="form-group row">
            <label for="input11" class="col-sm-2 col-form-label">JUMLAH AC</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input11">
            </div>
        </div>
        <div class="form-group row">
            <label for="input11" class="col-sm-2 col-form-label">AC CENTRAL</label>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioAC" id="inlineRadioAC1" value="Iya">
                    <label class="form-check-label" for="inlineRadioAC1">Iya</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioAC" id="inlineRadioAC2" value="Tidak">
                    <label class="form-check-label" for="inlineRadioAC2">Tidak</label>
                </div>
            </div>
        </div>


        <div class="form-group row">
            <label for="input11" class="col-sm-2 col-form-label">KOLAM RENANG</label>
            <div class="col-sm-4">
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioKolam" id="inlineRadioKolam1" value=" Diplester">
                        <label class="form-check-label" for="inlineRadioKolam1"> Diplester</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioKolam" id="inlineRadioKolam2" value="Dgn. Pelapis">
                        <label class="form-check-label" for="inlineRadioKolam2">Dgn. Pelapis</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="input11">
            </div>
        </div>

        <div class="form-group row">
            <label for="input11" class="col-sm-2 col-form-label"> LUAS PERKERASAN HALAMAN (M2)</label>
            <div class="col-sm-10">
                <div class="form-group row">
                    <label for="input11" class="col-sm-3 col-form-label"> Ringan</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="input11">
                    </div>
                    <label for="input11" class="col-sm-3 col-form-label">Berat</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="input11">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input11" class="col-sm-3 col-form-label"> Sedang</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="input11">
                    </div>
                    <label for="input11" class="col-sm-3 col-form-label"> Dengan Penutup Lantai</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="input11">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="input11" class="col-sm-2 col-form-label">JUMLAH LAPANGAN TENIS</label>
            <div class="col-sm-10">
                <div class="form-group row">
                    <label for="input11" class="col-sm-6 col-form-label"> Dengan Lampu</label>
                    <label for="input11" class="col-sm-6 col-form-label">Tanpa Lampu</label>
                </div>
                <div class="form-group row">
                    <label for="input11" class="col-sm-3 col-form-label"> Beton</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="input11">
                    </div>
                    <label for="input11" class="col-sm-3 col-form-label">Beton</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="input11">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input11" class="col-sm-3 col-form-label">Aspal</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="input11">
                    </div>
                    <label for="input11" class="col-sm-3 col-form-label">Aspal</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="input11">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input11" class="col-sm-3 col-form-label">T.N/Rumput</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="input11">
                    </div>
                    <label for="input11" class="col-sm-3 col-form-label">T.N/Rumput</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="input11">
                    </div>
                </div>


            </div>

        </div>

        <div class="form-group row">
            <label for="input11" class="col-sm-2 col-form-label">JUMLAH LIFT</label>
            <div class="col-sm-10">
                <div class="form-group row">
                    <label for="input11" class="col-sm-4 col-form-label"> Penumpang</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="input11">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input11" class="col-sm-4 col-form-label"> Kapsul</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="input11">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input11" class="col-sm-4 col-form-label"> Barang</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="input11">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="input11" class="col-sm-2 col-form-label">JUMLAH TANGGA BERJALAN</label>
            <div class="col-sm-10">
                <div class="form-group row">
                    <label for="input11" class="col-sm-4 col-form-label"> Lbr < 0,80 M</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="input11">
                            </div>
                </div>
                <div class="form-group row">
                    <label for="input11" class="col-sm-4 col-form-label"> Lbr > 0,80 M</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="input11">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="input8" class="col-sm-2 col-form-label">PANJANG PAGAR</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input8">
            </div>
        </div>

        <div class="form-group row">
            <label for="input11" class="col-sm-2 col-form-label">BAHAN PAGAR</label>
            <div class="col-sm-4">
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioPagar" id="inlineRadioPagar1" value="Baja/Besi">
                        <label class="form-check-label" for="inlineRadioPagar1"> Baja/Besi</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioPagar" id="inlineRadioPagar2" value="Bata/Batako">
                        <label class="form-check-label" for="inlineRadioPagar2">Bata/Batako</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="input11">
            </div>
        </div>

        <div class="form-group row">
            <label for="input11" class="col-sm-2 col-form-label">PEMADAM KEBAKARAN</label>
            <div class="col-sm-10">
                <div class="form-group row">
                    <label for="input11" class="col-sm-3 col-form-label">Hydrant</label>
                    <div class="col-sm-3">
                        <input class="form-check-input" type="radio" name="inlineRadioPemkar1" id="inlineRadioPemkar1" value="Ada">
                        <label class="form-check-label" for="inlineRadioPemkar1">Ada</label>
                    </div>
                    <div class="col-sm-3">
                        <input class="form-check-input" type="radio" name="inlineRadioPemkar1" id="inlineRadioPemkar2" value="Tidak">
                        <label class="form-check-label" for="inlineRadioPemkar2">Tidak</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input11" class="col-sm-3 col-form-label">Sprinkler</label>
                    <div class="col-sm-3">
                        <input class="form-check-input" type="radio" name="inlineRadioPemkar2" id="inlineRadioPemkar3" value="Ada">
                        <label class="form-check-label" for="inlineRadioPemkar3">Ada</label>
                    </div>
                    <div class="col-sm-3">
                        <input class="form-check-input" type="radio" name="inlineRadioPemkar2" id="inlineRadioPemkar4" value="Tidak">
                        <label class="form-check-label" for="inlineRadioPemkar4">Tidak</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input11" class="col-sm-3 col-form-label">Fire AI.</label>
                    <div class="col-sm-3">
                        <input class="form-check-input" type="radio" name="inlineRadioPemkar3" id="inlineRadioPemkar5" value="Ada">
                        <label class="form-check-label" for="inlineRadioPemkar5">Ada</label>
                    </div>
                    <div class="col-sm-3">
                        <input class="form-check-input" type="radio" name="inlineRadioPemkar3" id="inlineRadioPemkar6" value="Tidak">
                        <label class="form-check-label" for="inlineRadioPemkar6">Tidak</label>
                    </div>
                </div>

            </div>
        </div>

        <div class="form-group row">
            <label for="input11" class="col-sm-2 col-form-label">JML. SALURAN PESAWAT PABX</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input11">
            </div>
        </div>

        <div class="form-group row">
            <label for="input11" class="col-sm-2 col-form-label">KEDALAMAN SUMUR ARTESIS</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input11">
            </div>
        </div>
        <hr>
        <h3 class="text-center"> DATA TAMBAHAN UNTUK JPB </h3>
        <hr>
        <div class="form-group row">
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckboxDataTambahan1" value="Ya">
                    <label class="form-check-label" for="inlineCheckboxDataTambahan1">PABRIK/BENGKEL/GUDANG/PERTANIAN (JPB=3/8)</label>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="form-group row">
                    <label for="input11" class="col-sm-3 col-form-label">TINGGI KOLOM (M2)</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="input11">
                    </div>
                    <label for="input11" class="col-sm-3 col-form-label"> DAYA DUKUNG LANTAI (KG/M2)</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="input11">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input11" class="col-sm-3 col-form-label">LEBAR BENTANG (M)</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="input11">
                    </div>
                    <label for="input11" class="col-sm-3 col-form-label">KELILING DINDING (M)</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="input11">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="input11" class="col-sm-3 col-form-label"> LUAS MEZZANINE (M2)</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="input11">
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckboxDataTambahan2" value="Ya">
                    <label class="form-check-label" for="inlineCheckboxDataTambahan2">PERKANTORAN SWASTA / GEDUNG PEMERINTAH (JPB=2/9)</label>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="form-group row">
                    <label for="input11" class="col-sm-3 col-form-label"> KELAS BANGUNAN</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan" id="inlineBangunan1" value="1">
                        <label class="form-check-label" for="inlineBangunan1">Kelas 1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan" id="inlineBangunan2" value="2">
                        <label class="form-check-label" for="inlineBangunan2">Kelas 2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan" id="inlineBangunan3" value="3">
                        <label class="form-check-label" for="inlineBangunan3">Kelas 3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan" id="inlineBangunan4" value="4">
                        <label class="form-check-label" for="inlineBangunan4">Kelas 4</label>
                    </div>
                </div>

            </div>

        </div>
        <hr>
        <div class="form-group row">
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckboxDataTambahan3" value="Ya">
                    <label class="form-check-label" for="inlineCheckboxDataTambahan3">RUMAH SAKIT / KLINIK (JPB=5)</label>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="form-group row">
                    <label for="input11" class="col-sm-3 col-form-label"> KELAS BANGUNAN</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan1" id="inlineBangunan5" value="1">
                        <label class="form-check-label" for="inlineBangunan5">Kelas 1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan1" id="inlineBangunan6" value="2">
                        <label class="form-check-label" for="inlineBangunan6">Kelas 2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan1" id="inlineBangunan7" value="3">
                        <label class="form-check-label" for="inlineBangunan7">Kelas 3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan1" id="inlineBangunan8" value="4">
                        <label class="form-check-label" for="inlineBangunan8">Kelas 4</label>
                    </div>
                </div>

            </div>
            <div class="col-sm-10">
                <div class="form-group row">
                    <label for="input11" class="col-sm-3 col-form-label"> LUAS KMR DGN AC SENTRAL</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="input11">
                    </div>
                    <label for="input11" class="col-sm-3 col-form-label"> LUAS RUANG LAIN DGN. AC SENTRAL</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="input11">
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckboxDataTambahan4" value="Ya">
                    <label class="form-check-label" for="inlineCheckboxDataTambahan4">OLAHRAGA/REKREASI (JPB=6)</label>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="form-group row">
                    <label for="input11" class="col-sm-3 col-form-label"> KELAS BANGUNAN</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan2" id="inlineBangunan9" value="1">
                        <label class="form-check-label" for="inlineBangunan9">Kelas 1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan2" id="inlineBangunan10" value="2">
                        <label class="form-check-label" for="inlineBangunan10">Kelas 2</label>
                    </div>
                </div>

            </div>
        </div>
        <hr>

        <div class="form-group row">
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckboxDataTambahan6" value="Ya">
                    <label class="form-check-label" for="inlineCheckboxDataTambahan6">HOTEL/WISMA (JPB=7)</label>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="form-group row">
                    <label for="input11" class="col-sm-3 col-form-label"> JENIS HOTEL</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan4" id="inlineBangunan14" value="1">
                        <label class="form-check-label" for="inlineBangunan14">Non-Resort</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan4" id="inlineBangunan15" value="2">
                        <label class="form-check-label" for="inlineBangunan15">Resort</label>
                    </div>

                </div>

            </div>
            <div class="col-sm-10">
                <div class="form-group row">
                    <label for="input11" class="col-sm-3 col-form-label"> JML. BINTANG</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan5" id="inlineBangunan16" value="5">
                        <label class="form-check-label" for="inlineBangunan16"> Bintang 5</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan5" id="inlineBangunan17" value="4">
                        <label class="form-check-label" for="inlineBangunan17"> Bintang 4</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan5" id="inlineBangunan18" value="3">
                        <label class="form-check-label" for="inlineBangunan18">Bintang 3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan5" id="inlineBangunan19" value="2">
                        <label class="form-check-label" for="inlineBangunan19">Bintang 1-2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan5" id="inlineBangunan20" value="1">
                        <label class="form-check-label" for="inlineBangunan20">Non Bintang</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="form-group row">
                    <label for="input11" class="col-sm-2 col-form-label"> JUMLAH KAMAR</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="input11">
                    </div>
                    <label for="input11" class="col-sm-2 col-form-label"> LUAS KMR. DGN. AC SENTRAL</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="input11">
                    </div>
                    <label for="input11" class="col-sm-2 col-form-label"> LUAS RUANG LAIN DGN. AC SENTRAL</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="input11">
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckboxDataTambahan7" value="Ya">
                    <label class="form-check-label" for="inlineCheckboxDataTambahan7">BANGUNAN PARKIR (JPB=12)</label>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="form-group row">
                    <label for="input11" class="col-sm-3 col-form-label">TIPE BANGUNAN</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan6" id="inlineBangunan21" value="4">
                        <label class="form-check-label" for="inlineBangunan21">Kelas 4</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan6" id="inlineBangunan22" value="3">
                        <label class="form-check-label" for="inlineBangunan22">Kelas 3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan6" id="inlineBangunan23" value="2">
                        <label class="form-check-label" for="inlineBangunan23">Kelas 2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan6" id="inlineBangunan24" value="1">
                        <label class="form-check-label" for="inlineBangunan24">Kelas 1</label>
                    </div>
                </div>
            </div>

        </div>
        <hr>
        <div class="form-group row">
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckboxDataTambahan8" value="Ya">
                    <label class="form-check-label" for="inlineCheckboxDataTambahan8">APARTEMEN (JPB=13)</label>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="form-group row">
                    <label for="input11" class="col-sm-3 col-form-label"> JENIS HOTEL</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan7" id="inlineBangunan25" value="1">
                        <label class="form-check-label" for="inlineBangunan25">Non-Resort</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan7" id="inlineBangunan26" value="2">
                        <label class="form-check-label" for="inlineBangunan26">Resort</label>
                    </div>

                </div>

            </div>
            <div class="col-sm-10">
                <div class="form-group row">
                    <label for="input11" class="col-sm-3 col-form-label"> JML. BINTANG</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan8" id="inlineBangunan27" value="5">
                        <label class="form-check-label" for="inlineBangunan27"> Bintang 5</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan8" id="inlineBangunan28" value="4">
                        <label class="form-check-label" for="inlineBangunan28"> Bintang 4</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan8" id="inlineBangunan29" value="3">
                        <label class="form-check-label" for="inlineBangunan29">Bintang 3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan8" id="inlineBangunan30" value="2">
                        <label class="form-check-label" for="inlineBangunan30">Bintang 1-2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan8" id="inlineBangunan31" value="1">
                        <label class="form-check-label" for="inlineBangunan31">Non Bintang</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="form-group row">
                    <label for="input11" class="col-sm-2 col-form-label"> JUMLAH KAMAR</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="input11">
                    </div>
                    <label for="input11" class="col-sm-2 col-form-label"> LUAS KMR. DGN. AC SENTRAL</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="input11">
                    </div>
                    <label for="input11" class="col-sm-2 col-form-label"> LUAS RUANG LAIN DGN. AC SENTRAL</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="input11">
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckboxDataTambahan9" value="Ya">
                    <label class="form-check-label" for="inlineCheckboxDataTambahan9">TANGKI MINYAK (JPB=15)</label>
                </div>
            </div>

            <div class="col-sm-10">
                <div class="form-group row">
                    <label for="input11" class="col-sm-3 col-form-label"> LUAS KMR DGN AC SENTRAL</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="input11">
                    </div>
                    <label for="input11" class="col-sm-3 col-form-label"> LUAS RUANG LAIN DGN. AC SENTRAL</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="input11">
                    </div>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="form-group row">
                    <label for="input11" class="col-sm-3 col-form-label"> KELAS BANGUNAN</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan1" id="inlineBangunan32" value="1">
                        <label class="form-check-label" for="inlineBangunan32">Kelas 1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan1" id="inlineBangunan33" value="2">
                        <label class="form-check-label" for="inlineBangunan33">Kelas 2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan1" id="inlineBangunan34" value="3">
                        <label class="form-check-label" for="inlineBangunan34">Kelas 3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineBangunan1" id="inlineBangunan35" value="4">
                        <label class="form-check-label" for="inlineBangunan35">Kelas 4</label>
                    </div>
                </div>

            </div>
        </div>
        <hr>
        <div class="form-group row">
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckboxDataTambahan10" value="Ya">
                    <label class="form-check-label" for="inlineCheckboxDataTambahan10">GEDUNG SEKOLAH (JPB=16)</label>
                </div>
            </div>

            <div class="col-sm-10">
                <div class="form-group row">
                    <label for="input11" class="col-sm-3 col-form-label"> LUAS KMR DGN AC SENTRAL</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="input11">
                    </div>
                    <label for="input11" class="col-sm-3 col-form-label"> LUAS RUANG LAIN DGN. AC SENTRAL</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="input11">
                    </div>
                </div>
            </div>
        </div>


        <div class="form-group row">
            <label for="input6" class="col-sm-2 col-form-label">NILAI SISTEM</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="input6">
            </div>
        </div>

        <div class="form-group row">
            <label for="input6" class="col-sm-2 col-form-label">NILAI INDIVIDUAL</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="input6">
            </div>
        </div>
        <div class="form-group row">
            <label for="input6" class="col-sm-12 col-form-label">PETUGAS PENDATA</label>
            <label for="input6" class="col-sm-2 col-form-label">TGL. KUNJUNGAN KEMBALI</label>
            <div class="col-sm-8">
                <input type="DATE" class="form-control" id="input6">
            </div>
        </div>
        <DIV class="form-group row">
            <label for="input6" class="col-sm-2 col-form-label">TGL. PENDATAAN</label>
            <div class="col-sm-8">
                <input type="DATE" class="form-control" id="input6">
            </div>
        </div>
        <div class="form-group row">
            <label for="input6" class="col-sm-2 col-form-label">TANDA TANGAN</label>
            <div class="col-sm-8">
                <input type="file" class="form-control" id="input6">
            </div>
        </div>
        <div class="form-group row">
            <label for="input6" class="col-sm-2 col-form-label">NAMA JELAS</label>
            <div class="col-sm-8">
                <input type="texy" class="form-control" id="input6">
            </div>
        </div>
        <div class="form-group row">
            <label for="input6" class="col-sm-2 col-form-label">NIP</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="input6">
            </div>
        </div>








        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Proses</button>
            </div>
        </div>
    </form>
</div>

<?= $this->endsection() ?>