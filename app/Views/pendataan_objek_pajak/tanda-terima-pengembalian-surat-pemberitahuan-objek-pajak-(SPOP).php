<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>


<div>
    <h1 class="text-center">Tanda Terima Pengembalian Surat Pemberitahuan Objek Pajak (SPOP)</h1>

    <form>
        <div></div>
        <div class="form-group row">
            <label for="input0" class="col-sm-2 col-form-label">Nomor Laporan Hasil Penelitian</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input0">
            </div>
        </div>
        <div class="form-group row">
            <label for="input1" class="col-sm-2 col-form-label">Nama Petugas Peneliti</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input1">
            </div>
        </div>
        <div class="form-group row">
            <label for="input2" class="col-sm-2 col-form-label">NIP dan Jabatan atau Posisi Petugas Peneliti</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input2">
            </div>
        </div>
        <div class="form-group row">
            <label for="input3" class="col-sm-2 col-form-label">Nama Wajib Pajak yang Diteliti</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input3">
            </div>
        </div>
        <div class="form-group row">
            <label for="input4" class="col-sm-2 col-form-label">NPWP dari Wajib Pajak</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input4">
            </div>
        </div>
        <div class="form-group row">
            <label for="input5" class="col-sm-2 col-form-label">Alamat Wajib Pajak</label>
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
        <div class="form-group row">
            <label for="input8" class="col-sm-2 col-form-label">Uraian Tujuan Penelitian</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input8">
            </div>
        </div>
        <div class="form-group row">
            <label for="input9" class="col-sm-2 col-form-label">Uraian Hasil Penelitian</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input9">
            </div>
        </div>
        <div class="form-group row">
            <label for="input10" class="col-sm-2 col-form-label">Simpulan Berdasarkan Hasil Penelitian</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input10">
            </div>
        </div>
        <div class="form-group row">
            <label for="input11" class="col-sm-2 col-form-label">Usul dari Petugas Peneliti </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input11">
            </div>
        </div>
        <div class="form-group row">
            <label for="input12" class="col-sm-2 col-form-label">Tempat dan Tanggal Laporan Hasil Penelitian Dibuat</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="input12" placeholder="Tempat">
            </div>
            <div class="col-sm-8">
                <input type="date" class="form-control" id="input12-1" placeholder="Tanggal">
            </div>
        </div>
        <div class="form-group row">
            <label for="input12" class="col-sm-2 col-form-label">Nama dan NIP Kepala Seksi. </label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="input13" placeholder="Nama Kepala Seksi">
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="input13-1" placeholder="NIP Kepala Seksi">
            </div>
        </div>
        <div class="form-group row">
        <label for="input12" class="col-sm-2 col-form-label">Nama dan NIP Petugas Peneliti. </label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="input14" placeholder="Nama Petugas Peneliti">
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="input14-1"  placeholder="NIP Petugas Peneliti">
            </div>
        </div>
        <div class="form-group row">
        <label for="input12" class="col-sm-2 col-form-label">Nama dan NIP Kepala Bidang. </label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="input15" placeholder="Nama Kepala Bidang">
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="input15-1"  placeholder="NIP Kepala Bidangi">
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