<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>


<div>
    <h1 class="text-center">Surat Tugas Penelitian Lapangan</h1>

    <form>
        <div class="form-group row">
            <label for="input0" class="col-sm-2 col-form-label">Kop surat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input0">
            </div>
        </div>
        <div class="form-group row">
            <label for="input1" class="col-sm-2 col-form-label">Nomor Surat Tugas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input1">
            </div>
        </div>
        <div class="form-group row">
            <label for="input2" class="col-sm-2 col-form-label">Jenis Permohonan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input2">
            </div>
        </div>
        <div class="form-group row">
            <label for="input3" class="col-sm-2 col-form-label">Nama Petugas Peneliti Yang Ditunjuk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input3">
            </div>
        </div>
        <div class="form-group row">
            <label for="input4" class="col-sm-2 col-form-label">NIP Petugas Peneliti Yang Ditunjuk.</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input4">
            </div>
        </div>
        <div class="form-group row">
            <label for="input5" class="col-sm-2 col-form-label">Pangkat dan Golongan Petugas Peneliti Yang Ditunjuk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input5">
            </div>
        </div>
        <div class="form-group row">
            <label for="input6" class="col-sm-2 col-form-label">Jabatan Petugas Peneliti Yang Ditunjuk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input6">
            </div>
        </div>
        <div class="form-group row">
            <label for="input7" class="col-sm-2 col-form-label">Jenis Permohonan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input7">
            </div>
        </div>

        <div class="form-group row">
            <label for="input8" class="col-sm-2 col-form-label">Tahun Pajak Yang Diajukan Permohonan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input8">
            </div>
        </div>
        <div class="form-group row">
            <label for="input9" class="col-sm-2 col-form-label">Nomor Surat Permohonan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input9">
            </div>
        </div>
        <div class="form-group row">
            <label for="input10" class="col-sm-2 col-form-label">Tanggal Surat Permohonan</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="input10">
            </div>
        </div>
        <div class="form-group row">
            <label for="input11" class="col-sm-2 col-form-label">Nama Wajib Pajak atau Lurah Yang Bersangkutan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input11">
            </div>
        </div>
        <div class="form-group row">
            <label for="input12" class="col-sm-2 col-form-label">Alamat atau Nama Kelurahan dan Kecamatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input12">
            </div>
        </div>
        <div class="form-group row">
            <label for="input13" class="col-sm-2 col-form-label">Nomor Objek Pajak (NOP)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input13" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label for="input7" class="col-sm-2 col-form-label">Alamat Lokasi Objek Pajak</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input14">
            </div>
        </div>
        <div class="form-group row">
            <label for="input15" class="col-sm-2 col-form-label">Tanggal Mulai Tugas Penelitian</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="input15">
            </div>
        </div>
        <div class="form-group row">
            <label for="input16" class="col-sm-2 col-form-label">Tanggal Akhir Tugas Penelitian</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="input16">
            </div>
        </div>
        <div class="form-group row">
            <label for="input17" class="col-sm-2 col-form-label">Tanggal Diterbitkannya Surat Tugas</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="input17">
            </div>
        </div>
        <div class="form-group row">
            <label for="input18" class="col-sm-2 col-form-label">Nama Pejabat Kepala Dipenda</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input18">
            </div>
        </div>
        <div class="form-group row">
            <label for="input19" class="col-sm-2 col-form-label">NIP Pejabat Kepala Dipenda</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input19">
            </div>
        </div>
        <div class="form-group row">
            <label for="input7" class="col-sm-2 col-form-label">Jenis Permohonan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input7">
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