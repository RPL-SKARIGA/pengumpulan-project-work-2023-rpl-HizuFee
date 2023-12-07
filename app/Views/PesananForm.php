<!-- ... (previous HTML code) ... -->

<section class="section">
    <div class="section-header">
        <h1>Form Pesanan</h1>
    </div>

    <div class="section-body">
        <form action="<?= site_url('admin/simpan_pesanan') ?>" method="post">
            <input type="hidden" name="id_kasir" value="<?= $id_kasir ?>">
            <div class="form-group">
                <label for="id_jasa">Jasa</label>
                <select name="id_jasa" class="form-control" required>
                    <option value="" selected disabled>Select Jasa</option>
                    <?php foreach ($jasas as $jasa) : ?>
                        <option value="<?= $jasa->id_jasa ?>"><?= $jasa->nama_jasa ?></option>
                    <?php endforeach; ?>
                    <option value="0">Custom</option>
                </select>
            </div>
            <div class="form-group" id="customJasa" style="display: none;">
                <label for="custom_jasa">Custom Jasa</label>
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
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="text" name="tanggal" class="form-control" value="<?= date('Y-m-d') ?>" readonly>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= site_url('list_jasa') ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Show/hide custom Jasa input based on the selection
        const jasaSelect = document.querySelector('select[name="id_jasa"]');
        const customJasaInput = document.getElementById('customJasa');

        jasaSelect.addEventListener('change', function() {
            const selectedJasa = this.value;
            customJasaInput.style.display = selectedJasa === '0' ? 'block' : 'none';
        });
    });
</script>

<?= $this->endSection(); ?>