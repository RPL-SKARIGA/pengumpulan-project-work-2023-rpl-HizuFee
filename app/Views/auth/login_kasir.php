<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page Kasir</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .login-container {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .login-container h2 {
            text-align: center;
        }
    </style>
    <title>Login Kasir</title>
</head>

<body>

    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="login-container">
            <h2>Login Kasir</h2>
            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
            <?php endif; ?>
            <form action="/login_kasir/auth" method="post">
                <div class="mb-3">
                    <input type="text" name="username_kasir" class="form-control" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password_kasir" class="form-control" placeholder="Password" required>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary" id="swal-8">Login</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>