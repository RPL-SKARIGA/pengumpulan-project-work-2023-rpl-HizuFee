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
                <h4>List Pesanan</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md">
                    <thead>
                        <tr>
                            <th>Nama Kasir</th>
                            <th>Nama Pelanggan</th>
                            <th>Status</th>
                            <th>Harga</th>
                            <th>Tanggal</th>
                            <th>Alamat</th>
                            <th>Nama Jasa</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pesanan as $row) : ?>
                            <tr>
                                <td><?= $row['nama_kasir']; ?></td>
                                <td><?= $row['nama_pelanggan']; ?></td>
                                <td><?= $row['status']; ?></td>
                                <td><?= $row['jumlah']; ?></td>
                                <td><?= $row['tanggal']; ?></td>
                                <td><?= $row['alamat']; ?></td>
                                <td><?= $row['nama_jasa']; ?></td>
                                <td>
                                    <a href="<?= site_url('edit_pesanan/' . $row['id_pesanan']); ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                    <form action="<?= site_url('admin/delete_pesanan/' . $row['id_pesanan']); ?>" method="post" class="d-inline">
                                        <input type="hidden" name="csrf_test_name" value="<?= csrf_hash(); ?>">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger btn-sm delete-pesanan" data-id="<?= $row['id_pesanan']; ?>"><i class="fas fa-trash"></i></button>
                                    </form>
                                    <!-- Add the print button here -->
                                    <a href="<?= site_url('print_nota/' . $row['id_pesanan']); ?>" class="btn btn-info btn-sm" target="_blank"><i class="fas fa-print"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>