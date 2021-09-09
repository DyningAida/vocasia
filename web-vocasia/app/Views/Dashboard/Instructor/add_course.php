<?= $this->extend('layout/dashboard/instructor/template'); ?>
<?= $this->section('content-right'); ?>
<!-- formulir add course -->
<div class="form_title">
    <p>Formulir penambahan kursus</p>
    <a href="/instructor/dashboard/course_none" class="btn">Kembali ke list kursus</a>
</div>
<div class="form_button">
    <a href="#" class="btn">Dasar</a>
    <a href="#" class="btn">Persyaratan</a>
    <a href="#" class="btn">Hasil</a>
    <a href="#" class="btn">Harga</a>
    <a href="#" class="btn">Media</a>
    <a href="#" class="btn">SEO</a>
</div>
<div class="add_course">
    <div class="form mt-3">
        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama_lengkap">
        <br>
        <label for="lokasi" class="form-label">Lokasi</label>
        <input type="text" class="form-control" id="lokasi">
        <br>
        <label for="nomor_ponsel" class="form-label">Nomor Ponsel</label>
        <input type="text" class="form-control" id="nomor_ponsel" placeholder="+62">
        <br>
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1">
        <br>
        <label for="biografi" class="form-label">Biografi</label>
        <input type="text-area" class="form-control" id="biografi">
        <br>
    </div>
</div>
<?= $this->endSection(); ?>