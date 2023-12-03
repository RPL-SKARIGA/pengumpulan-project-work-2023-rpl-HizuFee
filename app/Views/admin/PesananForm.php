<title>Kasir &mdash; Laundry</title>
<?= $this->extend('layout/defaultsir') ?>
<?= $this->section('tittle'); ?>

<?= $this->endSection(); ?>
<?= $this->section('content'); ?>

<section class="section">
    <div class="section-header">
        <h1>Form Pesanan</h1>
    </div>

    <div class="section-body">
        <form action="<?= site_url('admin/simpan_pesanan') ?>" method="post">
            <input type="hidden" name="id_jasa" value="<?= $jasa->id_jasa ?>">
            <input type="hidden" name="id_kasir" value="<?= $id_kasir ?>">
            <div class="form-group">
                <div class="form-group">
                    <label for="nama_pelanggan">Nama Pelanggan</label>
                    <input type="text" name="nama_pelanggan" class="form-control" required>
                </div>
                <label for="alamat">Alamat Pelanggan</label>
                <input type="text" name="alamat" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="no_hp">Nomor HP</label>
                <input type="text" name="no_hp" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah (kg)</label>
                <input type="number" name="jumlah" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="text" name="tanggal" class="form-control" value="<?= date('Y-m-d') ?>" readonly>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= site_url('list_jasa') ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

</section>

<?= $this->endSection(); ?>