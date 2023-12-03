<?= $this->extend('layout/default'); ?>

<?= $this->section('tittle'); ?>
<title>Edit Admin &mdash; Laundry</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('admin') ?>" class="btn btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Edit Admin</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit</h4>
            </div>
            <div class="card-body col-md-6 ">
                <form action="<?= site_url('admin/update/' . $admin->id) ?>" method="post" autocomplete="off">
                    <input type="hidden" name="_method" value="put">
                    <div class="form-group">
                        <label>Nama Admin</label>
                        <input type="text" name="username" class="form-control" required autofocus value="<?= $admin->username ?>">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <div class="input-group">
                            <input type="password" id="password" name="password" class="form-control" autofocus>
                            <div class="input-group-append">
                                <button type="button" id="togglePassword" class="btn btn-outline-secondary">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
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

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // Toggle password visibility
        $("#togglePassword").click(function() {
            var passwordField = $("#password");
            var passwordFieldType = passwordField.attr('type');
            if (passwordFieldType === 'password') {
                passwordField.attr('type', 'text');
                $("#togglePassword i").removeClass('fas fa-eye').addClass('fas fa-eye-slash');
            } else {
                passwordField.attr('type', 'password');
                $("#togglePassword i").removeClass('fas fa-eye-slash').addClass('fas fa-eye');
            }
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // SweetAlert2 for notification
        <?php if ($flashdata) : ?>
            Swal.fire({
                icon: 'success',
                title: '<?= $flashdata ?>',
                showConfirmButton: false,
                timer: 1500
            });
        <?php endif; ?>
    });
</script>

<?= $this->endSection() ?>