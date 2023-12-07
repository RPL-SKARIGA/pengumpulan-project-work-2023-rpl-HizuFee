<title>List Jasa &mdash; Laundry</title>
<?= $this->extend('layout/defaultsir') ?>
<?= $this->section('tittle'); ?>
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>

<section class="section">
    <div class="section-header">
        <h1>List Jasa</h1>
        <div class="section-header-button">
            <?php if (!empty($jasas)) : ?>
                <?php $firstJasa = reset($jasas); ?>
                <a href="<?= site_url('admin/add_custom_pesanan/' . $firstJasa->id_jasa) ?>" class="btn btn-primary">Pesanan Custom</a>
            <?php endif; ?>
        </div>
    </div>
    <div class="row">

        <?php foreach ($jasas as $jasa) : ?>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 card-link">
                <a href="<?= site_url('pesanan/form/' . $jasa->id_jasa) ?>">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-dark">
                            <i class="fas fa-th-list"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4><?= $jasa->nama_jasa ?></h4>
                            </div>
                            <div class="card-body">
                                <B>
                                    <h5>Rp <?= number_format($jasa->harga, 0, ',', '.') ?></h5>
                                </B>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>

    </div>
    <style>
        .card-link {
            display: block;
            position: relative;
            transition: transform 0.2s ease;
        }

        .card-link:hover {
            transform: scale(1.05);
            /* Mengubah skala kartu saat mouse hover */
        }
    </style>
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

<?= $this->endSection(); ?>