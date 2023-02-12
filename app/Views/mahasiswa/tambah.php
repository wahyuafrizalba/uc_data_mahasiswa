<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <h1 class="my-5">Tambah Data</h1>
    <form action="/mahasiswa/simpan" method="post">
        <?= csrf_field(); ?>
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" required id="nama" name="nama">
            </div>
        </div>
        <div class="row mb-3">
            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" required id="nim" name="nim">
            </div>
        </div>
        <div class="row mb-3">
            <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" required id="fakultas" name="fakultas">
            </div>
        </div>
        <div class="row mb-3">
            <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" required id="jurusan" name="jurusan">
            </div>
        </div>
        <div class="row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" required id="alamat" name="alamat">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>

<?= $this->endSection(); ?>