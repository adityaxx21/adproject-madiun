<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>


<div class="container-sm">
    <h1 class="text-center">Form Bukti Penerimaan Surat (BPS)</h1>

    <form>
        <div class="form-group row">
            <label for="input0" class="col-sm-2 col-form-label">Nomor Pelayanan</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="input0">
            </div>
        </div>
        <div class="form-group row">
            <label for="input1" class="col-sm-2 col-form-label">Tanggal Pelayanan</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="input1">
            </div>
        </div>
        <div class="form-group row">
            <label for="input2" class="col-sm-2 col-form-label">Tgl. Selesai (Perkiraan)</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="input2">
            </div>
        </div>
        <div class="form-group row">
            <label for="input3" class="col-sm-2 col-form-label">Jenis Pelayanan</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="input3">
            </div>
        </div>
        <div class="form-group row">
            <label for="input4" class="col-sm-2 col-form-label">NOP</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="input4">
            </div>
        </div>
        <div class="form-group row">
            <label for="input5" class="col-sm-2 col-form-label">Nama Pemohon</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="input5">
            </div>
        </div>
        <div class="form-group row">
            <label for="input6" class="col-sm-2 col-form-label">NOP</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="input6">
            </div>
        </div>
        <div class="form-group row">
            <label for="input7" class="col-sm-2 col-form-label">Nama Pemohon</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="input7">
            </div>
        </div>
        <div class="form-group row">
            <label for="input8" class="col-sm-2 col-form-label">Alamat Pemohon</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="input8">
            </div>
        </div>
        <div class="form-group row">
            <label for="input9" class="col-sm-2 col-form-label">Letak Objek Pajak</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="input9">
            </div>
        </div>
        <div class="form-group row">
            <label for="input10" class="col-sm-2 col-form-label">Kelurahan</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="input10">
            </div>
        </div>
        <div class="form-group row">
            <label for="input11" class="col-sm-2 col-form-label">Kecamatan</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="input11">
            </div>
        </div>
        <div class="form-group row">
            <label for="input12" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="input12">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">
                <label for="input13" class="col-form-label">Dokumen Dilampirkan</label>
            </div>
            <div class="col-sm-9">
                <?php $use = ['Pengajuan Permohonan', 'Surat Kuasa', 'Fotokopi KTP', 'Asli/Fotokopi *) SPPT', 'Asli/Fotokopi *) STPD', 'Asli/Fotokopi *) SKPD', 'Fotokopi IMB', ' Fotokopi Sertifikat Tanah', 'Fotokopi Ak. Jual Beli/Hibah', 'Asli/Fotokopi *) Tanda 
Bukti Pembayaran', 'Fotokopi SK Pengurangan', 'Fotokopi SK Keberatan', 'Fotokopi SKKPP', 'Lain-Lain'] ?>
                <?php for ($i = 0; $i < 14; $i++) : ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox<?= $i ?>" value="<?= $use[$i] ?>">
                        <label class="form-check-label" for="inlineCheckbox<?= $i ?>"><?= $use[$i] ?></label>
                    </div>
                <?php endfor ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="input14" class="col-sm-2 col-form-label">Catatan</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="input14">
            </div>
        </div>
        <div class="form-group row">
            <label for="input15" class="col-sm-2 col-form-label">NOP</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="input15">
            </div>
        </div>
        <div class="form-group row">
            <label for="input16" class="col-sm-2 col-form-label">Nomor Pelayanan</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="input16">
            </div>
        </div>
        <div class="form-group row">
            <label for="input17" class="col-sm-2 col-form-label">Tanggal Pelayanan</label>
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
            <label for="input19" class="col-sm-2 col-form-label">Petugas Penerima Berkas</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="input19">
            </div>
        </div>
        <div class="form-group row">
            <label for="input20" class="col-sm-2 col-form-label">Urusan</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="input20">
            </div>
        </div>
        <div class="form-group row">
            <label for="input20" class="col-sm-2 col-form-label">Urusan</label>
            <div class="col-sm-2 jpa">
                <input type="tel" class="form-control" maxlength="1">
            </div>
            <div class="col-sm-2 jpa">
                <input type="tel" class="form-control" maxlength="1">
            </div>
            <div class="col-sm-2 jpa">
                <input type="tel" class="form-control" maxlength="1">
            </div>
            <div class="col-sm-2 jpa">
                <input type="tel" class="form-control" maxlength="1">
            </div>
            <div class="col-sm-2 jpa">
                <input type="tel" class="form-control" maxlength="1">
            </div>

        </div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script type="text/javascript" src="dist/js/jquery-pincode-autotab.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".jpa input").jqueryPincodeAutotab();
            });
        </script>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Proses</button>
            </div>
        </div>
    </form>
</div>
<?= $this->endsection() ?>