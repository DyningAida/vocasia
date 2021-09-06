<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col text-center mt-4">
                <div class="card">
                    <h5 class="card-header">Data Mahasiswa <?= $mahasiswa['NIM']; ?></h5>
                    <div class="card-body">
                        <h5 class="card-title"><?= $mahasiswa['nama_mahasiswa']; ?></h5>
                        <p class="card-text">NIM : <?= $mahasiswa['NIM']; ?></p>
                        <p class="card-text">Tanggal Lahir : <?= $mahasiswa['tanggal_lahir']; ?></p>
                        <p class="card-text">Alamat : <?= $mahasiswa['alamat']; ?></p>
                        <p class="card-text">Kode Jurusan : <?= $mahasiswa['kode_jurusan']; ?></p>
                        <p class="card-text">Nama Jurusan : <?= $mahasiswa['nama_jurusan']; ?></p>
                    </div>
                </div>
                <br>
                <a href="<?= base_url('/mahasiswa'); ?>" class="btn btn-primary">Back to previous</a>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>