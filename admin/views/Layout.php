<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin</title>
    <link href="../assets/admin/css/styles.css" rel="stylesheet" />
    <link href="../assets/admin/css/form.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <!-- load file ckeditor.js vao day de hien thi editor o text area -->
    <script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark sb-sidenav-menu ">
        <a class="navbar-brand" href="index.php">Phạm Hoài Nam</a>
        <div class="nav" >
            <a style="color: white;" class="nav-link" href="index.php?controller=KtraDki">
                Kiểm tra đăng kí
            </a>
            <a style="color: white;" class="nav-link" href="index.php?controller=login&action=logout">
                Đăng xuất
            </a>
        </div>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <br><br>
                    <!-- Main content -->
                    <section class="content" >
                        <?php echo $this->view; ?>
                    </section>
                    <!-- /.content -->
                </div>
            </main>
        </div>
    </div>
    </html>
