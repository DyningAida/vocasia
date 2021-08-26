<?= $this->extend('layout/template'); ?>

<?= $this->section('content-left'); ?>
<div class="round-number">
    <div class="round-1">
        <img src="/img/check.png" width="25px" height="25px">
        <p>Pengalaman</p>
    </div>
</div>
<div class="round-number" style="color: #cd2228;">
    <div class="round-2" style="border: 3px solid #cd2228;color: #cd2228;">
        2
    </div>
    <p style="color: #cd2228;">Konten Video</p>
</div>
<div class="round-number">
    <div class="round-2">3</div>
    <p>Peserta</p>
</div>
<div class="round-number">
    <div class="round-2">4</div>
    <p>Informasi pribasi</p>
</div>
<img src="/img/icon1.png" alt="" width="402px" height="302px">
<?= $this->endSection(); ?>

<?= $this->section('quest'); ?>
<h2>Mahir bikin konten video?</h2>
<p>Untuk bikin konten video, kamu termasuk kategori yang mana?
</p>
<?= $this->endSection(); ?>


<?= $this->section('form-quest'); ?>
<input type="radio" name="size" id="satu">
<label for="satu">Masih Pemula</label><br>
<input type="radio" name="size" id="dua">
<label for="dua">Sudah Mahir</label><br>
<input type="radio" name="size" id="tiga">
<label for="tiga">Sudah punya video yang siap untuk diupload</label><br>
<a href="<?= base_url('/pengajar/participant'); ?>" class="mt-4 w3-right btn btn-danger">Lanjut</a>
<?= $this->endSection(); ?>