<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>


<div>
    <h1 class="text-center">Lembar Pengawasan Arus Dokumen (LPAD)</h1>

    <form>
        <div></div>
        <div class="form-group row">
            <label for="input0" class="col-sm-2 col-form-label">Jenis Pelayanan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input0">
            </div>
        </div>
        <div class="form-group row">
            <label for="input1" class="col-sm-2 col-form-label">Nomor Pelayanan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input1">
            </div>
        </div>
        <div class="form-group row">
            <label for="input2" class="col-sm-2 col-form-label">Tanggal Pelayanan</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="input2">
            </div>
        </div>
        <div class="form-group row">
            <label for="input3" class="col-sm-2 col-form-label">Tanggal Selesai (Perkiraan)</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="input3">
            </div>
        </div>
        <div class="form-group row">
            <label for="input4" class="col-sm-2 col-form-label">Nama Pemohon</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input4">
            </div>
        </div>
        <div class="form-group row">
            <label for="input5" class="col-sm-2 col-form-label">Alamat Pemohon</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input5">
            </div>
        </div>
        <div class="form-group row">
            <label for="input6" class="col-sm-2 col-form-label">NOP</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input6">
            </div>
        </div>
        <div class="form-group row">
            <label for="input7" class="col-sm-2 col-form-label">Alamat Objek Pajak</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input7">
            </div>
        </div>
        <hr>
        <h3 class="text-center">Input Tabel Pengawasan</h3>
        <div class="form-group row">
                <label for="input8" class="col-sm-2 col-form-label">Masukan Jumlah Tabel </label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="input8" name="input8">
                </div>
            </div>
        <?php for ($i = 0; $i < 1; $i++) : ?>
            <div class="form-group row">
                <label for="input8" class="col-sm-2 col-form-label">No. <?= $i + 1 ?></label>
            </div>
            <div class="form-group row">
                <label for="input8" class="col-sm-2 col-form-label">Unit Pemroses </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tableP<?= $i?>" name="tableP<?= $i?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="input8" class="col-sm-2 col-form-label">Tanggal Berkas Masuk</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tableP<?= $i+1?>" name="tableP<?= $i+1?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="input8" class="col-sm-2 col-form-label">Tanggal Selesai Pemrosesan</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tableP<?= $i+2?>" name="tableP<?= $i+2?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="input8" class="col-sm-2 col-form-label">Tanggal Berkas Keluar</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tableP<?= $i+3?>" name="tableP<?= $i+3?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="input8" class="col-sm-2 col-form-label">Tanda Tangan</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="tableP<?= $i+4?>" name="tableP<?= $i+4?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="input8" class="col-sm-2 col-form-label">Catatan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tableP<?= $i+5?>" name="tableP<?= $i+5?>">
                </div>
            </div>
        <?php endfor ?>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Proses</button>
            </div>
        </div>
    </form>
</div>
<?= $this->endsection() ?>