<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-5">Contact Us</h1>
            <?php $i = 1 ?>
            <?php foreach ($alamat as $a) : ?>
                <hr>
                <p>Alamat <?= $i++; ?></p>
                <table>
                    <tr>
                        <td>Tipe</td>
                        <td>:</td>
                        <td><?= $a['tipe']; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?= $a['alamat']; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?= $a['email']; ?></td>
                    </tr>
                    <tr>
                        <td>Nomor Telepon</td>
                        <td>:</td>
                        <td><?= $a['no_telp']; ?></td>
                    </tr>
                </table>
                <hr>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>