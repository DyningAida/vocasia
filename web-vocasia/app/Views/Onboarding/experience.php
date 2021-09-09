<?= $this->extend('layout/onboarding/template'); ?>

<?= $this->section('content-left'); ?>
<h2>Lorem ipsum dolor sit amet consectetur adipisicing</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quia commodi sapiente, cumque, impedit incidunt maxime in esse praesentium unde placeat vel quibusdam dolor natus aliquid dolorem suscipit nesciunt illo a blanditiis illum qui! Aut quo assumenda aliquid sint maiores itaque, enim obcaecati ipsum reiciendis totam est tempore culpa porro.</p>
<img src="/img/3d-flame-302.png" alt="" width="402px" height="302px">
<?= $this->endSection(); ?>

<?= $this->section('quest'); ?>
<h2>Pilih pengalaman</h2>
<p>Apakah kamu memiliki pengalaman mengajar, atau ini adalah pertama kalinya?
</p>
<?= $this->endSection(); ?>


<?= $this->section('form-quest'); ?>
<input type="radio" name="experience" id="informal">
<label for="informal">Mengajar informal</label><br>
<input type="radio" name="experience" id="formal">
<label for="formal">Mengajar formal</label><br>
<input type="radio" name="experience" id="prof_online">
<label for="prof_online">Profesional-Online</label><br>
<input type="radio" name="experience" id="lainnya">
<label for="lainnya">Lainnya</label>
<a href="<?= base_url('/onboarding/video_content'); ?>" class="mt-4 w3-right btn btn-danger">Lanjut</a>
<?= $this->endSection(); ?>