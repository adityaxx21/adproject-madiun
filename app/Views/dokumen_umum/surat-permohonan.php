<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>


<div>
    <h1 class="text-center">Surat Permohonan</h1>

    <form>
        <div class="form-group row">
            <label for="input0" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input0">
            </div>
        </div>
        <div class="form-group row">
            <label for="input1" class="col-sm-2 col-form-label">NPWP</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input1">
            </div>
        </div>
        <div class="form-group row">
            <label for="input2" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input2">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">
                <label for="input13" class="col-form-label">Desa/Kelurahan 1)</label>
            </div>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Desa">
                        <label class="form-check-label" for="inlineRadio1">Desa</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Kelurahan">
                        <label class="form-check-label" for="inlineRadio2">Kelurahan</label>
                    </div>
                    <div class="col col-lg-10" name="des_kel">
                        <input type="text" class="form-control" id="input3">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="input4" class="col-sm-2 col-form-label">Kecamatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input4">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">
                <label for="input13" class="col-form-label">Kabupaten/Kota 1) </label>
            </div>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio3" value="Desa">
                        <label class="form-check-label" for="inlineRadio3">Kabupaten</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio4" value="Kelurahan">
                        <label class="form-check-label" for="inlineRadio4">Kota</label>
                    </div>
                    <div class="col col-lg-10" name="kab_kot">
                        <input type="text" class="form-control" id="input3">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="input5" class="col-sm-2 col-form-label">Nomor Telepon</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input5">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">
                <label for="input13" class="col-form-label">Sebagai Wajib Pajak / kuasa Wajib Pajak 1), atas objek pajak:</label>
            </div>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio5" value="Sebagai Wajib Pajak">
                        <label class="form-check-label" for="inlineRadio5">Sebagai Wajib Pajak</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio6" value="kuasa Wajib Paja">
                        <label class="form-check-label" for="inlineRadio6">Kuasa Wajib Pajak</label>
                    </div>
                    <div class="col col-lg-10" name="des_kel">
                        <input type="text" class="form-control" id="input3">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="input6" class="col-sm-2 col-form-label">NOP</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input6">
            </div>
        </div>
        <div class="form-group row">
            <label for="input7" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input7">
            </div>
        </div>
        <div class="form-group row">
            <label for="input8" class="col-sm-2 col-form-label">Kelurahan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input8">
            </div>
        </div>
        <div class="form-group row">
            <label for="input9" class="col-sm-2 col-form-label">Kecamatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input9">
            </div>
        </div>
        <div class="form-group row">
            <label for="input10" class="col-sm-2 col-form-label">Kota</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input10">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">
                <label for="input13" class="col-form-label">dengan ini mengajukan </label>
            </div>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio7" value="pendaftaran baru">
                    <label class="form-check-label" for="inlineRadio7">pendaftaran baru</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input dua" type="radio" name="inlineRadioOptions3" id="inlineRadio8" value="pembetulan">
                    <label class="form-check-label dua" for="inlineRadio8">pembetulan</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio9" value="penundaan pengembalian SPOP ">
                    <label class="form-check-label" for="inlineRadio9">penundaan pengembalian SPOP </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input satu" type="radio" name="inlineRadioOptions3" id="inlineRadio10" value="Pengurangan PBB Perkotaan">
                    <label class="form-check-label satu" for="inlineRadio10">Pengurangan PBB Perkotaan</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input tiga" type="radio" name="inlineRadioOptions3" id="inlineRadio11" value="Pengurangan/penghapusan 1) sanksi administrasi">
                    <label class="form-check-label tiga" for="inlineRadio11">Pengurangan/penghapusan 1) sanksi administrasi</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio12" value="mutasi">
                    <label class="form-check-label" for="inlineRadio12">mutasi</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input dua" type="radio" name="inlineRadioOptions3" id="inlineRadio13" value="pembatalan">
                    <label class="form-check-label dua" for="inlineRadio13">pembatalan</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio14" value="penentuan kembali tgl jatuh tempo">
                    <label class="form-check-label" for="inlineRadio14">penentuan kembali tgl jatuh tempo</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input dua" type="radio" name="inlineRadioOptions3" id="inlineRadio15" value="keberatan">
                    <label class="form-check-label dua" for="inlineRadio15">keberatan</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio16" value="pengangsuran/penundaan 1) pembayaran">
                    <label class="form-check-label" for="inlineRadio16">pengangsuran/penundaan 1) pembayaran</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio17" value="penerbitan salinan">
                    <label class="form-check-label" for="inlineRadio17">penerbitan salinan</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio18" value="penerbitan SK NJOP">
                    <label class="form-check-label" for="inlineRadio18">penerbitan SK NJOP</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio19" value="pencabutan penetapan sebagai WP">
                    <label class="form-check-label" for="inlineRadio19">pencabutan penetapan sebagai WP</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio20" value="restitusi">
                    <label class="form-check-label" for="inlineRadio20">restitusi</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">
                <label for="input13" class="col-form-label">Jenis Permohonan </label>
            </div>
            <div class="col-sm-10">
                <?php $use = ['SKPD', 'STPD', 'Surat Keputusan'] ?>
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio<?= $i + 21 ?>" value="<?= $use[$i] ?>">
                        <label class="form-check-label" for="inlineRadio<?= $i + 21 ?>"><?= $use[$i] ?></label>
                    </div>
                <?php endfor ?>
            </div>
        </div>
        <div>
        </div>
        <script>
            $(document).ready(function() {
                // $(".satu").click(function() {
                //     $("#input19").prop("disabled", false);
                //     $("#input20").prop("disabled", false);
                //     $("#input21").prop("disabled", false);
                // });
                // $(".dua").click(function() {
                //     $("#input19").prop("disabled", false);
                //     $("#input20").prop("disabled", true);
                //     $("#input21").prop("disabled", false);
                // });
                // $(".tiga").click(function() {
                //     $("#input19").prop("disabled", true);
                //     $("#input20").prop("disabled", false);
                //     $("#input21").prop("disabled", true);
                // });
                $(".satu").click(function() {
                    alert("Wow");
                });
            });
        </script>


        <div class="form-group row">
            <label for="input14" class="col-sm-2 col-form-label">Nomor</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input14">
            </div>
        </div>
        <div class="form-group row">
            <label for="input15" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="input15">
            </div>
        </div>
        <div class="form-group row">
            <label for="input16" class="col-sm-2 col-form-label">Tahun Pajak</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input16">
            </div>
        </div>
        <div class="form-group row">
            <label for="input17" class="col-sm-2 col-form-label">Tanggal Jatuh Tempo </label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="input17">
            </div>
        </div>
        <div class="form-group row">
            <label for="input18" class="col-sm-2 col-form-label">Tgl. Selesai (Perkiraan)</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="input18">
            </div>
        </div>
        <div class="form-group row">
            <label for="input19" class="col-sm-2 col-form-label">Semula</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input19" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label for="input20" class="col-sm-2 col-form-label">Pengurangan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input20" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Menjadi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input21" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">NJOP Bumi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input22" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">NJOP Bangunan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input23" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">NJOP (1+2)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input24" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">NJOPTKP</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input25" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">NJOP untuk perhitungan PBB Perkotaan (3-4)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input26" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Tarif</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input27" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">PBB Perkotaan yang terutang (6x5)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input28" disabled>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">
                <label for="input13" class="col-form-label">Sebagai Wajib Pajak / kuasa Wajib Pajak 1), atas objek pajak:</label>
            </div>
            <div class="col-sm-10">

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions5" id="inlineRadio25" value="Sebagai Wajib Pajak">
                    <label class="form-check-label" for="inlineRadio25">Sebagai Wajib Pajak</label>
                </div>
                <div class="form-row">
                    <label for="inputPassword" class="col-sm-9 col-form-label">Mengangsur pembayaran PBB Perkotaan dengan masa angsuran:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="inputPassword">
                    </div>
                    <label for="inputPassword" class="col-sm-4 col-form-label">Dengan besarnya angsuran Rp</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword">
                    </div>

                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions5" id="inlineRadio26" value="kuasa Wajib Paja">
                    <label class="form-check-label" for="inlineRadio26">Kuasa Wajib Pajak</label>
                </div>
                <div class="form-row">
                    <label for="inputPassword" class="col-sm-8 col-form-label">Menunda pembayaran PBB Perkotaan sampai dengan tanggal</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword">
                    </div>
                </div>

            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">
                <label for="input13" class="col-form-label">Bersama ini dilampirkan</label>
            </div>
            <div class="col-sm-9">
                <?php $use = [ 'Surat Kuasa', 'Fotokopi KTP', 'Asli/Fotokopi *) SPPT', 'Asli/Fotokopi *) STPD', 'Asli/Fotokopi *) SKPD', 'Fotokopi IMB', ' Fotokopi Sertifikat Tanah', 'Fotokopi Ak. Jual Beli/Hibah', 'Asli/Fotokopi *) Tanda 
Bukti Pembayaran', 'Fotokopi SK Pengurangan', 'Fotokopi SK Keberatan', 'Fotokopi SKKPP', 'Lain-Lain'] ?>
                <?php for ($i = 0; $i < 13; $i++) : ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox<?= $i ?>" value="<?= $use[$i] ?>">
                        <label class="form-check-label" for="inlineCheckbox<?= $i ?>"><?= $use[$i] ?></label>
                    </div>
                <?php endfor ?>
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