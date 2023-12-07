<!-- app/Views/add_custom_pesanan.php -->

<?= $this->extend('layout/defaultsir') ?>
<?= $this->section('tittle'); ?>
<title>Pesanan Custom &mdash; Laundry</title>
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>

<section class="section">
    <div class="section-header">
        <h1>Pesanan Custom</h1>
    </div>

    <div class="section-body">
        <form action="<?= site_url('admin/simpan_pesanan') ?>" method="post">
            <input type="hidden" name="id_jasa" value="<?= isset($jasa->id_jasa) ? $jasa->id_jasa : '' ?>">

            <!-- Display the name of the jasa -->

            <!-- Input for custom jasa name -->
            <div class="form-group">
                <label for="custom_jasa">Custom Nama Jasa</label>
                <input type="text" name="custom_jasa" class="form-control">
            </div>

            <div class="form-group">
                <label for="nama_pelanggan">Nama Pelanggan</label>
                <input type="text" name="nama_pelanggan" class="form-control" required>
            </div>
            <label for="alamat">Alamat Pelanggan</label>
            <input type="text" name="alamat" class="form-control" required>
            <div class="form-group">
                <label for="no_hp">Nomor HP</label>
                <input type="text" name="no_hp" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah (kg)</label>
                <input type="number" name="jumlah" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= site_url('list_jasa') ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</section>

<?= $this->endSection(); ?>