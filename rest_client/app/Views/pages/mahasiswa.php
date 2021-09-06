<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col mt-4">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <a href="/mahasiswa/create" class="btn btn-primary mb-3">Entry Data</a>
            <?php $i = 0 ?>
            <?php foreach ($data as $d) : ?>
                <?php $i++; ?>
                <div class="card  text-center">
                    <h5 class="card-header">Data Mahasiswa <?= $i; ?></h5>
                    <div class="card-body">
                        <h5 class="card-title"><?= $d['nama_mahasiswa']; ?></h5>
                        <p class="card-text"><?= $d['NIM']; ?></p>
                        <a href="/mahasiswa/<?= $d['NIM']; ?>" class="btn btn-primary">Details</a>
                        <a href="/mahasiswa/edit/<?= $d['NIM']; ?>" class="btn btn-success">Edit</a>
                        <a href="/mahasiswa/delete/<?= $d['NIM']; ?>" class="btn btn-danger">Delete</a>
                    </div>
                </div>
                <br>
            <?php endforeach; ?>
        </div>
    </div>
    <?= $this->endSection(); ?>