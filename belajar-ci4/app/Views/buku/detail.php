<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2><?= $buku['judul']; ?></h2>
                    <p>Penulis : <?= $buku['penulis']; ?></p>
                    <p>Penerbit : <?= $buku['penerbit']; ?></p>
                    <a href="/buku/edit/<?= $buku['slug']; ?>" class="btn btn-warning">Edit</a>
                    <form action="/buku/<?= $buku['id']; ?>" method="POST" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                    </form>
                    <br>
                    <a href="/buku">Kembali ke halaman sebelumnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>