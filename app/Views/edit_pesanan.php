<?= $this->extend('layout/defaultsir'); ?>

<?= $this->section('tittle'); ?>
<title>Edit Pesanan &mdash; Laundry</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('list_pesanan') ?>" class="btn btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Edit Pesanan</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit</h4>
            </div>
            <div class="card-body col-md-6">
                <?php if (is_array($row)) : ?>
                    <form action="<?= site_url('admin/update_pesanan/' . $row['id_pesanan']) ?>" method="post" autocomplete="off">
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group">
                            <label>Nama Kasir</label>
                            <input type="text" name="nama_kasir" class="form-control" required autofocus value="<?= $row['nama_kasir'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Nama Pelanggan</label>
                            <input type="text" name="nama_pelanggan" class="form-control" required value="<?= $row['nama_pelanggan'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" name="status" class="form-control" required value="<?= $row['status'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" required><?= $row['alamat'] ?></textarea>
                        </div>
                        <!-- Add other form fields here -->
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                <?php else : ?>
                    <p>Error: Invalid data for editing.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        <?php if (session()->getFlashdata('success')) : ?>
            Swal.fire({
                icon: 'success',
                title: '<?= session()->getFlashdata('success') ?>',
                showConfirmButton: false,
                timer: 1500
            });
        <?php endif; ?>
    });
</script>
<?= $this->endSection() ?>