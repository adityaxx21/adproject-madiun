<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>


<div>
    <h1 class="text-center">Surat Pemberitahuan Objek Pajak (SPOP)</h1>


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
                <?php $use = ['Perekaman Data', 'Pemutakhiran Data', 'Penghapusan Data'] ?>
                <?php for ($i = 0; $i < 3; $i++) : ?>
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
            <label for="input4" class="col-sm-2 col-form-label">NOP BERSAMA</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input4">
            </div>
        </div>
        <div class="form-group row">
            <label for="input5" class="col-sm-2 col-form-label">NOP BERSAMA</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input5">
            </div>
        </div>
        <div class="form-group row">
            <label for="input6" class="col-sm-2 col-form-label">NO SPPT LAMA</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input6">
            </div>
        </div>
        <div class="form-group row">
            <label for="input7" class="col-sm-2 col-form-label">NAMA JALAN </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input7">
            </div>
        </div>
        <div class="form-group row">
            <label for="input8" class="col-sm-2 col-form-label">KELURAHAN/DESA</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input8">
            </div>
        </div>
        <div class="form-group row">
            <label for="input9" class="col-sm-2 col-form-label">RW/RT</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input9">
            </div>
        </div>
        <div class="form-group row">
            <label for="input10" class="col-sm-2 col-form-label">STATUS</label>
            <div class="col-sm-10">
                <?php $use = ['Pemilik', 'Penyewa', 'Pengelola', 'Pemakai', 'Sengketa'] ?>
                <?php for ($i = 0; $i < 5; $i++) : ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio<?= $i ?>" value="<?= $use[$i] ?>">
                        <label class="form-check-label" for="inlineRadio<?= $i ?>"><?= $use[$i] ?></label>
                    </div>
                <?php endfor ?>
            </div>
        </div>


        <div class="form-group row">
            <label for="input11" class="col-sm-2 col-form-label">PEKERJAAN</label>
            <div class="col-sm-10">
                <?php $use = ['PNS', 'TNI/Polri', 'Pensiunan', 'Badan', 'Lainya'] ?>
                <?php for ($i = 0; $i < 5; $i++) : ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio<?= $i + 6 ?>" value="<?= $use[$i] ?>">
                        <label class="form-check-label" for="inlineRadio<?= $i + 6 ?>"><?= $use[$i] ?></label>
                    </div>
                <?php endfor ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="input11" class="col-sm-2 col-form-label">NAMA SUBJEK PAJAK</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input11">
            </div>
        </div>
        <div class="form-group row">
            <label for="input11" class="col-sm-2 col-form-label">NAMA JALAN</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input11">
            </div>
        </div>
        <div class="form-group row">
            <label for="input11" class="col-sm-2 col-form-label">KELURAHAN/DESA</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input11">
            </div>
        </div>
        <div class="form-group row">
            <label for="input11" class="col-sm-2 col-form-label">RW/RT</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="input11" placeholder="RT">
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="input11" placeholder="RW">
            </div>
        </div>
        <div class="form-group row">
            <label for="input11" class="col-sm-2 col-form-label">KABUPATEN/KOTA & KODE POS </label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="input11" placeholder="KABUPATEN/KOTA">
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="input11" placeholder="KODE POS">
            </div>
        </div>
        <div class="form-group row">
            <label for="input11" class="col-sm-2 col-form-label">NOMOR KTP</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input11">
            </div>
        </div>
        <div class="form-group row">
            <label for="input11" class="col-sm-2 col-form-label">LUAS TANAH</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input11">
            </div>
        </div>
        <div class="form-group row">
            <label for="input11" class="col-sm-2 col-form-label">ZONA NILAI TANAH</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input11">
            </div>
        </div>
        <?php $use = ['Tanah + Bangunan', 'Kavling Siap Bangun', 'Tanah Kosong', 'Fasilitas Umum'] ?>
        <div class="form-group row">
            <label for="input11" class="col-sm-2 col-form-label">JENIS TANAH</label>
            <div class="col-sm-10">
                <?php for ($i = 0; $i < 4; $i++) : ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio<?= $i + 16 ?>" value="<?= $use[$i] ?>">
                        <label class="form-check-label" for="inlineRadio<?= $i + 16 ?>"><?= $use[$i] ?></label>
                    </div>
                <?php endfor ?>
            </div>
        </div>

        <div class="form-group row">
            <label for="input11" class="col-sm-2 col-form-label">JUMLAH BANGUNAN</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input11">
            </div>
        </div>
        <div class="form-group row">
            <label for="input11" class="col-sm-2 col-form-label">NAMA SUBJEK PAJAK/KUASANYA, TANGGAL, TANDA TANGAN</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="input11" placeholder="NAMA SUBJEK PAJAK">
            </div>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="input11" placeholder="TANGGAL">
            </div>
            <div class="col-sm-4">
                <input type="file" class="form-control" id="input11" placeholder="TANDA TANGAN">
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