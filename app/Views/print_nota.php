<?= $this->extend('layout/defaultsir') ?>
<?= $this->section('tittle'); ?>
<title>Data Pesanan &mdash; Laundry</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <h1>Data Pesanan</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Nota Pesanan</h4>
            </div>
            <div class="card-body">
                <h1>Nota Pesanan</h1>
                <p>ID Pesanan: <?= $pesanan['id_pesanan']; ?></p>
                <p>Nama Kasir: <?= $pesanan['nama_kasir']; ?></p>
                <p>Nama Pelanggan: <?= $pesanan['nama_pelanggan']; ?></p>
                <p>Status: <?= $pesanan['status']; ?></p>
                <p>Harga: <?= $pesanan['jumlah']; ?></p>
                <p>Tanggal Pesanan: <?= $pesanan['tanggal']; ?></p>
                <p>Alamat: <?= $pesanan['alamat']; ?></p>
                <p>Nama Jasa: <?= $pesanan['nama_jasa']; ?></p>

                <!-- Add other content for the nota -->
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>