<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 align="center">Form ubah data buku</h2>
            <form action="/buku/update/<?= $buku['id']; ?>" method="POST">
                <?= $csrf_field; ?>
                <input type="hidden" name="slug" id="<?= $buku['slug']; ?>">
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= $buku['judul']; ?>" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?> id=" judul" name="judul">
                        <div class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= $buku['penulis']; ?>" class="form-control" id="penulis" name="penulis">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= $buku['penerbit']; ?>" class="form-control" id="penerbit" name="penerbit">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="sampul" class="col-sm-2 col-form-label">sampul</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= $buku['sampul']; ?>" class="form-control" id="sampul" name="sampul">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ubah</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>