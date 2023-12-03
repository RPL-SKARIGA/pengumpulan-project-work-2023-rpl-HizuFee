    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

        <?= $this->renderSection('tittle'); ?>

        <!-- General CSS Files -->
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">

        <!-- CSS Libraries -->

        <!-- Template CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/style.css">
        <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/components.css">
    </head>

    <body>
        <div id="app">
            <div class="main-wrapper">
                <div class="navbar-bg" style="background-color:#353839;"></div>
                <nav class="navbar navbar-expand-lg main-navbar">
                    <form class="form-inline mr-auto">
                        <ul class="navbar-nav mr-3">
                            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                        </ul>

                    </form>
                    <ul class="navbar-nav navbar-right">
                        <!--
                        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
    -->
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Messages
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-message">
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-avatar">
                                        <img alt="image" src="<?= base_url() ?>/template/assets/img/avatar/avatar-1.png" class="rounded-circle">
                                        <div class="is-online"></div>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Kusnaedi</b>
                                        <p>Hello, Bro!</p>
                                        <div class="time">10 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-avatar">
                                        <img alt="image" src="<?= base_url() ?>/template/assets/img/avatar/avatar-2.png" class="rounded-circle">
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Dedik Sugiharto</b>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                        <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-avatar">
                                        <img alt="image" src="<?= base_url() ?>/template/assets/img/avatar/avatar-3.png" class="rounded-circle">
                                        <div class="is-online"></div>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Agung Ardiansyah</b>
                                        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-avatar">
                                        <img alt="image" src="<?= base_url() ?>/template/assets/img/avatar/avatar-4.png" class="rounded-circle">
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Ardian Rahardiansyah</b>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                                        <div class="time">16 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-avatar">
                                        <img alt="image" src="<?= base_url() ?>/template/assets/img/avatar/avatar-5.png" class="rounded-circle">
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Alfa Zulkarnain</b>
                                        <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                        <div class="time">Yesterday</div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                        </li>


                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <img alt="image" src="<?= base_url() ?>/template/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                                <div class="d-sm-none d-lg-inline-block">Hi, <?= userLogin()->username ?></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-title">Logged in 5 min ago</div>

                                </a>
                                <form action="logout" method="post">
                                    <div class="dropdown-item has-icon text-center text-danger">
                                        <button type="submit" class="btn btn-danger btn-block d-flex justify-content-center align-items-center">
                                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </li>


                    </ul>
                </nav>
                <div class="main-sidebar">
                    <aside id="sidebar-wrapper">
                        <div class="sidebar-brand">
                            <a href="">Admin</a>
                        </div>
                        <div class="sidebar-brand sidebar-brand-sm">
                            <a href="index.html">Ad</a>
                        </div>
                        <ul class="sidebar-menu">
                            <?= $this->include('layout/menu'); ?>
                        </ul>

                        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                            <a href="register" class="btn btn-primary btn-lg btn-block btn-icon-split">
                                <i class="fas fa-rocket"></i> Create Admin
                            </a>
                        </div>
                    </aside>
                </div>

                <!-- Main Content -->
                <div class="main-content">
                    <?= $this->renderSection('content'); ?>
                </div>
                <footer class="main-footer">
                    <div class="footer-left">
                        Copyright &copy; 2023 <div class="bullet"></div> Developed By <a href="https://www.instagram.com/hiuze.fee/">SandyTriananda</a>
                    </div>
                    <div class="footer-right">

                    </div>
                </footer>
            </div>
        </div>

        <!-- General JS Scripts -->
        <script src="<?= base_url() ?>/template/node_modules/jquery/dist/jquery.min.js"></script>
        <script src="<?= base_url() ?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
        <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script> -->
        <script src="<?= base_url() ?>/template/assets/js/stisla.js"></script>

        <!-- JS Libraies -->

        <!-- Template JS File -->
        <script src="<?= base_url() ?>/template/assets/js/scripts.js"></script>
        <script src="<?= base_url() ?>/template/assets/js/custom.js"></script>

        <!-- Page Specific JS File -->
    </body>

    </html>