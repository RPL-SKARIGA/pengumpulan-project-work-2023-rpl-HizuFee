<?= $this->extend('layout/default'); ?>

<?= $this->section('tittle'); ?>
<title>Data Kasir &mdash; Laundry</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <h1>Kasir</h1>
        <div class="section-header-button">
            <a href="<?= site_url('admin/addkasir') ?>" class="btn btn-primary">Tambah Kasir</a>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Data Kasir</h4>
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

                        <?php foreach ($kasir as $key => $value) : ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $value->username_kasir ?></td>
                                <td></td>
                                <td>
                                    <a href="<?= site_url('admin/editkasir/' .  $value->id_kasir) ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                    <form action="<?= site_url('admin/deletekasir/' . $value->id_kasir) ?>" method="post" class="d-inline">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger btn-sm delete-kasir" data-id="<?= $value->id_kasir ?>"><i class="fas fa-trash"></i></button>
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
        // SweetAlert2 untuk konfirmasi penghapusan kasir
        document.querySelectorAll('.delete-kasir').forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                const id_kasir = button.getAttribute('data-id');

                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: 'Data kasir akan dihapus!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, hapus!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Redirect ke fungsi delete sesuai dengan ID kasir
                        window.location.href = '<?= site_url('admin/deletekasir/') ?>' + id_kasir;
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