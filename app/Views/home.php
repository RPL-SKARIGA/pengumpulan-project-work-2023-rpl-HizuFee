<?= $this->extend('layout/default') ?>
<?= $this->section('tittle'); ?>
<title>Admin &mdash; Laundry</title>
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>


<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>

    <div class="section-body">

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <a href="admin" class="card-link">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-dark">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Admin</h4>
                            </div>
                            <div class="card-body">
                                -
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <a href="jasa" class="card-link">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-th-list"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Jasa</h4>
                            </div>
                            <div class="card-body">
                                -
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <a href="kasir" class="card-link">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-cash-register"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Kasir</h4>
                            </div>
                            <div class="card-body">
                                -
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <a href="pesanan" class="card-link">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Pesanan</h4>
                            </div>
                            <div class="card-body">
                                -
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
</section>
<?= $this->endSection(); ?>