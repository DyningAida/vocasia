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
<div class="round-number">
    <div class="round-1">
        <img src="/img/check.png" width="25px" height="25px">
        <p>Peserta</p>
    </div>
</div>
<div class="round-number" style="color: #cd2228;">
    <div class="round-2" style="color: #cd2228;border: 3px solid #cd2228;">4</div>
    <p style="color: #cd2228;">Informasi Pribadi</p>
</div>
<img src="/img/3d-flame-287.png" alt="" width="402px" height="302px">
<?= $this->endSection(); ?>

<?= $this->section('quest'); ?>
<h2>Informasi Pribadi</h2>
<p>Tambahkan detail tentang informasi diri kamu</p>
<?= $this->endSection(); ?>

<?= $this->section('form-quest'); ?>

<h3>Data Pribadi</h3>
<div class="mt-3">
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
<h3>Rekening Bank</h3>
<div class="mt-3">
    <label for="nama_bank" class="form-label">Nama Bank</label>
    <input type="text" class="form-control" id="nama_bank">
    <br>
    <label for="no_rek" class="form-label">Nomor Rekening</label>
    <input type="text" class="form-control" id="no_rek">
    <br>
    <label for="atas_nama_rekening" class="form-label">Atas Nama Rekening</label>
    <input type="text" class="form-control" id="atas_nama_rekening">
</div>
<h3>Social Media</h3>
<div class="mt-3">
    <label for="nama_bank" class="form-label">Facebook</label>
    <input type="text" class="form-control" id="nama_bank">
    <br>
    <label for="no_rek" class="form-label">Instagram</label>
    <input type="text" class="form-control" id="no_rek">
    <br>
    <label for="atas_nama_rekening" class="form-label">Twitter</label>
    <input type="text" class="form-control" id="atas_nama_rekening">
    <br>
    <label for="atas_nama_rekening" class="form-label">Portofolio URL</label>
    <input type="text" class="form-control" id="atas_nama_rekening">
    <br>
    <label for="atas_nama_rekening" class="form-label">Website Pribadi</label>
    <input type="text" class="form-control" id="atas_nama_rekening">
</div>
<a href="<?= base_url('/onboarding/participant'); ?>" class="mt-4 w3-left" style="color: gray; font-family: 'Roboto', sans-serif; text-decoration:none">Tahap Sebelumnya</a>
<a href="<?= base_url('/onboarding/success'); ?>" class="mt-4 w3-right btn btn-danger mb-5">Lanjut</a>
<?= $this->endSection(); ?>