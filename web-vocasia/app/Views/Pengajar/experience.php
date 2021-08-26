<?= $this->extend('layout/template'); ?>

<?= $this->section('content-left'); ?>
<h2>Lorem ipsum dolor sit amet consectetur adipisicing</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quia commodi sapiente, cumque, impedit incidunt maxime in esse praesentium unde placeat vel quibusdam dolor natus aliquid dolorem suscipit nesciunt illo a blanditiis illum qui! Aut quo assumenda aliquid sint maiores itaque, enim obcaecati ipsum reiciendis totam est tempore culpa porro.</p>
<img src="/img/icon1.png" alt="" width="402px" height="302px">
<?= $this->endSection(); ?>

<?= $this->section('quest'); ?>
<h2>Pilih pengalaman</h2>
<p>Apakah kamu memiliki pengalaman mengajar, atau ini adalah pertama kalinya?
</p>
<?= $this->endSection(); ?>


<?= $this->section('form-quest'); ?>
<input type="radio" name="size" id="satu">
<label for="satu">Mengajar informal</label><br>
<input type="radio" name="size" id="dua">
<label for="dua">Mengajar formal</label><br>
<input type="radio" name="size" id="tiga">
<label for="tiga">Profesional-Online</label><br>
<input type="radio" name="size" id="empat">
<label for="empat">Lainnya</label>
<a href="<?= base_url('/pengajar/video_content'); ?>" class="mt-4 w3-right btn btn-danger">Lanjut</a>
<?= $this->endSection(); ?>