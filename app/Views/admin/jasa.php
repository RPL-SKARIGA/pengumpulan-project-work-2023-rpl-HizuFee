<?= $this->extend('layout/default'); ?>

<?= $this->section('tittle'); ?>
<title>Data Kasir &mdash; Laundry</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <h1>Jasa</h1>
        <div class="section-header-button">
            <a href="<?= site_url('admin/addjasa') ?>" class="btn btn-primary">Tambah Jasa</a>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Data Jasa</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>-</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($jasa as $key => $value) : ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $value->nama_jasa ?></td>
                                <td></td>
                                <td>
                                    <a href="<?= site_url('admin/edit_jasa/' .  $value->id_jasa) ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                    <form action="<?= site_url('admin/deletejasa/' . $value->id_jasa) ?>" method="post" class="d-inline">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger btn-sm delete-jasa" data-id="<?= $value->id_jasa ?>"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- Include SweetAlert2 script -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // SweetAlert2 untuk konfirmasi penghapusan
        document.querySelectorAll('.delete-jasa').forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                const id_jasa = button.getAttribute('data-id');

                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: 'Data jasa akan dihapus!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, hapus!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Redirect ke fungsi delete sesuai dengan ID jasa
                        window.location.href = '<?= site_url('admin/deletejasa/') ?>' + id_jasa;
                    }
                });
            });
        });

        // SweetAlert2 untuk notifikasi sukses
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