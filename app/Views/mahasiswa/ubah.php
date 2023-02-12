<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <h1 class="my-5">Ubah Data</h1>
    <form action="/mahasiswa/update/<?= $mahasiswa['id']; ?>" method="post">
        <?= csrf_field(); ?>
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" required id="nama" name="nama" value="<?= $mahasiswa['nama']; ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" required id="nim" name="nim" value="<?= $mahasiswa['nim']; ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" required id="fakultas" name="fakultas" value="<?= $mahasiswa['fakultas']; ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" required id="jurusan" name="jurusan" value="<?= $mahasiswa['jurusan']; ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" required id="alamat" name="alamat" value="<?= $mahasiswa['alamat']; ?>">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Ubah</button>
    </form>
</div>

<?= $this->endSection(); ?>