<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <br>
            <a href="<?= base_url('/buku/create'); ?>" class="btn btn-primary mb-3">Tambah data buku</a>
            <h1 class="mt-2" style="text-align:center">Daftar Buku</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table text-center">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Sampul</th>
                    <th>Action</th>
                </tr>
                <?php $a = 1; ?>
                <?php foreach ($buku as $b) : ?>
                    <tr>
                        <td><?= $a++; ?></td>
                        <td><?= $b['judul']; ?></td>
                        <td><img src="/img/<?= $b['sampul']; ?>" alt="" width="100px"><img src="<?= $b['sampul']; ?>" alt="" width="100px"></td>
                        <td><a href="/buku/<?= $b['slug']; ?>" class="btn btn-success">Detail</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>