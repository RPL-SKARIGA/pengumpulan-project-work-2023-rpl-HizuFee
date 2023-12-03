<?= $this->extend('layout/defaultsir') ?>
<?= $this->section('tittle'); ?>
<title>Kasir &mdash; Laundry</title>
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>


<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>

    <div class="section-body">

        <div class="row">

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <a href="list_pesanan" class="card-link">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-th-list"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>List Pesanan</h4>
                            </div>
                            <div class="card-body">
                                -
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <a href="/list_jasa" class="card-link">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>....</h4>
                            </div>
                            <div class="card-body">
                                <B>
                                    <h5>Buat Pesanan</h5>
                                </B>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
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

    </div>
    <?= $this->endSection(); ?>