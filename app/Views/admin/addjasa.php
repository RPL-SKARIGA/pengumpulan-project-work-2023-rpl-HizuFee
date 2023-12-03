<?= $this->extend('layout/default'); ?>

<?= $this->section('tittle'); ?>
<title>Tambah Kasir &mdash; Laundry</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section class="section">
    <div class="section-header">

        <div class="section-header-back">
            <a href="<?= site_url('jasa') ?>" class="btn btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Tambah Jasa</h1>
    </div>

    <div class="section-body">

        <div class="card">


            <div class="card-header">
                <h4>
                    Detail Jasa
                </h4>
            </div>
            <div class="card-body col-md-6 ">
                <form action="/admin/addjasa" method="post" autocomplete="off">
                    <div class="form-group">
                        <label>Nama jasa</label>
                        <input type="text" name="nama_jasa" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>harga/kg</label>
                        <input type="number" class="form-control" name="harga" placeholder="Masukkan Harga" required autofocus>

                    </div>
                    <div>
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // SweetAlert2 untuk notifikasi setelah simpan data
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
</section>
<?= $this->endSection() ?>