<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col" style="color: whitesmoke;">
            <h2 align="center">Entry Data Mahasiswa</h2>
            <form action="/mahasiswa/save" method="POST" style="color: whitesmoke;">
                <?= csrf_field() ?>
                <div class="row mb-3">
                    <label for="NIM" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= old('NIM'); ?>" class="form-control <?= ($validation->hasError('NIM')) ? 'is-invalid' : ''; ?> id=" NIM" name="NIM">
                        <div class="invalid-feedback">
                            <?= $validation->getError('NIM'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama_mahasiswa" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= old('nama_mahasiswa'); ?>" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= old('tanggal_lahir'); ?>" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="JK" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= old('JK'); ?>" class="form-control" id="JK" name="JK">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="no_telp" class="col-sm-2 col-form-label">No Telepon</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= old('no_telp'); ?>" class="form-control" id="no_telp" name="no_telp">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= old('alamat'); ?>" class="form-control" id="alamat" name="alamat">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kode_jurusan_mhs" class="col-sm-2 col-form-label">Kode Jurusan Mahasiswa</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?= old('kode_jurusan_mhs'); ?>" class="form-control" id="kode_jurusan_mhs" name="kode_jurusan_mhs">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
<?= $this->endSection(); ?>