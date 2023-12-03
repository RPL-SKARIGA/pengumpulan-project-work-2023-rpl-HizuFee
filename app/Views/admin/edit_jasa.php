<?= $this->extend('layout/default'); ?>

<?= $this->section('tittle'); ?>
<title>Edit Jasa &mdash; Laundry</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('jasa') ?>" class="btn btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Edit Jasa</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit</h4>
            </div>
            <div class="card-body col-md-6 ">
                <form action="<?= site_url('admin/updatejasa/' . $jasa->id_jasa) ?>" method="post" autocomplete="off">
                    <input type="hidden" name="_method" value="put">
                    <div class="form-group">
                        <label>Nama Jasa</label>
                        <input type="text" name="nama_jasa" class="form-control" required autofocus value="<?= $jasa->nama_jasa ?>">
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" name="harga" class="form-control" required autofocus value="<?= $jasa->harga ?>">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        // SweetAlert2 for notification
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