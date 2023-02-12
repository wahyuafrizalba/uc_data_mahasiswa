<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <h1 class="mb-3 mt-5">Data Mahasiswa</h1>
    <div class="table-responsive">
        <a style="display: block;" href="/mahasiswa/tambah" class="btn btn-primary float-end">Tambah Data</a>
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Mahasiswa</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($mahasiswa as $m) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $m['nama']; ?></td>
                        <td><?= $m['nim']; ?></td>
                        <td><?= $m['fakultas']; ?></td>
                        <td><?= $m['jurusan']; ?></td>
                        <td><?= $m['alamat']; ?></td>
                        <td>
                            <a href="/mahasiswa/ubah/<?= $m['id']; ?>" class="btn btn-warning">Ubah</a>
                            <form action="/mahasiswa/hapus/<?= $m['id']; ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button onclick="return confirm('Anda yakin?')" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<?= $this->endSection(); ?>