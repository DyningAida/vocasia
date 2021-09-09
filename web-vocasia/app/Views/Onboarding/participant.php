<?= $this->extend('layout/onboarding/template'); ?>

<?= $this->section('content-left'); ?>
<div class="round-number">
    <div class="round-1">
        <img src="/img/check.png" width="25px" height="25px">
        <p>Pengalaman</p>
    </div>
</div>
<div class="round-number">
    <div class="round-1">
        <img src="/img/check.png" width="25px" height="25px">
        <p>Konten Video</p>
    </div>
</div>
<div class="round-number" style="color: #cd2228;">
    <div class="round-2" style="color: #cd2228;border: 3px solid #cd2228;">3</div>
    <p style="color: #cd2228;">Peserta</p>
</div>
<div class="round-number">
    <div class="round-2">4</div>
    <p>Informasi pribadi</p>
</div>
<img src="/img/3d-flame-306.png" alt="" width="402px" height="302px">
<?= $this->endSection(); ?>

<?= $this->section('quest'); ?>
<h2>Punya audiens untuk kursusmu?</h2>
<p>Setelah kamu mengunggah konten kursusmu, saatnya untuk mempromosikan kursusmu.
</p>
<?= $this->endSection(); ?>


<?= $this->section('form-quest'); ?>
<input type="radio" name="participant" value="tidak_ada" id="tidak_ada">
<label for="tidak_ada">Tidak punya (0)</label><br>
<input type="radio" name="participant" value="sedikit" id="sedikit">
<label for="sedikit">Ada sedikit (1-50)</label><br>
<input type="radio" name="participant" value="lumayan" id="lumayan">
<label for="lumayan">Lumayan (51-200)</label><br>
<input type="radio" name="participant" value="banyak" id="banyak">
<label for="banyak">Banyak (Lebih dari 200)</label>
<a href="<?= base_url('/onboarding/video_content'); ?>" class="mt-4 w3-left" style="color: gray; font-family: 'Roboto', sans-serif; text-decoration:none">Tahap Sebelumnya</a>
<a href="<?= base_url('/onboarding/personal_information'); ?>" class="mt-4 w3-right btn btn-danger">Lanjut</a>
<?= $this->endSection(); ?>