<?= $this->extend('layout/default'); ?>

<?= $this->section('tittle'); ?>
<title>Tambah Kasir &mdash; Laundry</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('kasir') ?>" class="btn btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Register Kasir</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Kasir</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="/admin/save_kasir" method="post" autocomplete="off">
                    <div class="form-group">
                        <label>Nama Kasir</label>
                        <input type="text" name="username_kasir" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Password Kasir</label>
                        <div class="input-group">
                            <input type="password" id="password_kasir" name="password_kasir" class="form-control" required autofocus>
                            <div class="input-group-append">
                                <button type="button" id="togglePasswordKasir" class="btn btn-outline-secondary">
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
        $("#togglePasswordKasir").click(function() {
            var passwordField = $("#password_kasir");
            var passwordFieldType = passwordField.attr('type');
            if (passwordFieldType === 'password') {
                passwordField.attr('type', 'text');
                $("#togglePasswordKasir i").removeClass('fas fa-eye').addClass('fas fa-eye-slash');
            } else {
                passwordField.attr('type', 'password');
                $("#togglePasswordKasir i").removeClass('fas fa-eye-slash').addClass('fas fa-eye');
            }
        });
    });
</script>

<?= $this->endSection() ?>