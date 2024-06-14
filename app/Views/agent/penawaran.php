<?= $this->extend('layout/index.php') ?>

<?= $this->section('content') ?>

<!-- buat isi codingdisini -->


<div class="title-wrapper pt-30">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="title">
                <h2>Form Penawaran Calon Nasabah</h2>
            </div>
        </div>
    </div>
    <!-- end row -->
</div>
<!-- ========== title-wrapper end ========== -->

<!-- ========== form-elements-wrapper start ========== -->
<div class="form-elements-wrapper">
    <form method="post" action="<?= base_url('agent/tambahdata'); ?>">
        <div class="row">

            <div class="col-lg-6">
                <!-- input style start -->
                <div class="card-style mb-30">
                    <h6 class="mb-25">Data Nasabah</h6>
                    <div class="input-style-2">
                        <input type="text" id="fullname" name="fullname" placeholder="Full Name" />
                    </div>
                    <div class="input-style-2">
                        <input type="text" id="kendaraan" name="kendaraan" placeholder="Pertanggungan / Kendaraan" />
                    </div>
                    <div class="input-style-2">
                        <input type="text" id="harga_pertanggungan" name="harga_pertanggungan" placeholder="Harga Pertanggungan" />
                    </div>
                </div>
                <div class="card-style">
                    <h6 class="mb-25">Periode Pertanggungan</h6>
                    <div class="input-style-1">
                        <label>Dari</label>
                        <input name="dari" id="dari" type="date" />
                    </div>
                    <div class="input-style-1">
                        <label>Sampai</label>
                        <input name="sampai" id="sampai" type="date" />
                    </div>
                </div>

            </div>
            <!-- end col -->
            <div class="col-lg-6">
                <div class="card-style mb-30">
                    <h6 class="mb-25">Jenis Pertanggungan</h6>
                    <!-- end select -->
                    <div class="select-style-2">
                        <div class="select-position">
                            <select>
                                <option value="">PILIH SALAH SATU</option>
                                <option value="">Comprehensive</option>
                                <option value="">Total Loss Only</option>
                            </select>
                        </div>
                    </div>
                    <!-- end select -->
                </div>

                <div class="card-style mb-30">
                    <h6 class="mb-25">Resiko Pertanggungan</h6>
                    <div class="form-check checkbox-style mb-20">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox-1" />
                        <label class="form-check-label" for="checkbox-1">
                            Banjir</label>
                    </div>
                    <div class="form-check checkbox-style mb-20">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox-1" />
                        <label class="form-check-label" for="checkbox-1">
                            Banjir</label>
                    </div>
                    <div class="form-check checkbox-style mb-20">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox-1" />
                        <label class="form-check-label" for="checkbox-1">
                            Banjir</label>
                    </div>
                    <div class="form-check checkbox-style mb-30">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox-1" />
                        <label class="form-check-label" for="checkbox-1">
                            Banjir</label>
                    </div>
                </div>

                <div class="mt-80">
                    <button type="submit" class="main-btn primary-btn btn-hover w-100 text-center">
                        Simpan Data
                    </button>
                </div>
            </div>
            <!-- end col -->
        </div>
    </form>
    <!-- end row -->
</div>
<!-- ========== form-elements-wrapper end ========== -->


<?= $this->endSection() ?>