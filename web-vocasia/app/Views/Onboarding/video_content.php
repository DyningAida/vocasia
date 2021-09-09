<?= $this->extend('layout/onboarding/template'); ?>

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
<input type="radio" name="video_content" value="pemula" id="pemula">
<label for="pemula">Masih Pemula</label><br>
<input type="radio" name="video_content" value="mahir" id="mahir">
<label for="mahir">Sudah Mahir</label><br>
<input type="radio" name="video_content" id="sudah_ada" value="sudah_ada">
<label for="sudah_ada">Sudah punya video yang siap untuk diupload</label><br>
<a href="<?= base_url('/onboarding'); ?>" class="mt-4 w3-left" style="color: gray; font-family: 'Roboto', sans-serif; text-decoration:none">Tahap Sebelumnya</a>
<a href="<?= base_url('/onboarding/participant'); ?>" class="mt-4 w3-right btn btn-danger">Lanjut</a>
<?= $this->endSection(); ?>