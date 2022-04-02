<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>


<div>
    <h1 class="text-center">Surat Pemberitahuan Penelitian Lapangan</h1>

    <form>
        <div></div>
        <div class="form-group row">
            <label for="input0" class="col-sm-2 col-form-label">Kop Surat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input0">
            </div>
        </div>
        <div class="form-group row">
            <label for="input1" class="col-sm-2 col-form-label">Tanggal Surat</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="input1">
            </div>
        </div>
        <div class="form-group row">
            <label for="input2" class="col-sm-2 col-form-label">Nomor Surat Pemberitahuan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input2">
            </div>
        </div>
        <div class="form-group row">
            <label for="input3" class="col-sm-2 col-form-label">Nama dan Alamat Wajib Pajak atau Lurah Bersangkutan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input3">
            </div>
        </div>
        <div class="form-group row">
            <label for="input4" class="col-sm-2 col-form-label">Jenis Permohonan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input4">
            </div>
        </div>
        <div class="form-group row">
            <label for="input5" class="col-sm-2 col-form-label">Nomor Surat Permohonan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input5">
            </div>
        </div>
        <div class="form-group row">
            <label for="input6" class="col-sm-2 col-form-label">Tanggal Surat Permohonan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input6">
            </div>
        </div>
        <div class="form-group row">
            <label for="input7" class="col-sm-2 col-form-label">Nomor Objek Pajak (NOP)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input7" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label for="input8" class="col-sm-2 col-form-label">Tanggal Dimulainya Penelitian Lapangan</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="input8">
            </div>
        </div>
        <div class="form-group row">
            <label for="input9" class="col-sm-2 col-form-label">Tanggal Berakhirnya Penelitian Lapangan</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="input9">
            </div>
        </div>
        <div class="form-group row">
            <label for="input10" class="col-sm-2 col-form-label">Nama pejabat Kepala Dipenda</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input10">
            </div>
        </div>
        <div class="form-group row">
            <label for="input11" class="col-sm-2 col-form-label">NIP pejabat Kepala Dipenda</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input11">
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