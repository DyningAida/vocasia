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
<div class="round-number">
    <div class="round-1">
        <img src="/img/check.png" width="25px" height="25px">
        <p>Informasi Pribadi</p>
    </div>
</div>
<img src="/img/icon1.png" alt="" width="402px" height="302px">
<?= $this->endSection(); ?>

<?= $this->section('quest'); ?>
<div class="success w3-display-container" style="margin-top: 150px;">
    <h2 style="text-align: center; font-weight: 1000;font-family: 'Roboto', sans-serif;">Selamat Anda telah terdaftar <br> sebagai pengajar di Vocasia.id</h2>
    <p style="text-align: center; font-family: 'Roboto', sans-serif;">Lorem, ipsum dolor sit amet consectetur adipisicing elit.<br> Modi corrupti dignissimos eos perspiciatis quibusdam neque libero officiis, saepe eum voluptates.
    </p>
    <a href=" <?= base_url('/instructor/dashboard/'); ?>" class="btn btn-danger w3-display-middle" style="  text-align: center;margin-top:100px">Selesai</a>
</div>
<?= $this->endSection(); ?>