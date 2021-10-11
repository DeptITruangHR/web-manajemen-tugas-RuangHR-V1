<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Dashboard</title>
    <link href="<?php echo base_url(); ?>assets/bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/dashboard.css">
    <link href="<?php echo base_url(); ?>assets/bootstrap/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <?php $this->load->view('hrd/sidebar') ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php $this->load->view('hrd/header', array('nama' => $nama)) ?>

                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800" style="font-weight:700">Notulensi</h1>
                    </div>
                </div>
                <div class="container-fluid mb-3">
                    <div>
                        <br>
                        <div class="row">
                            <div class="col-md-3 d-block">
                            <h2>Daftar Notulensi</h2>
                                <div class="card mb-4 p-3" style="background: #FAB252 !important;">
                                    <h3 class="card-title text-white">Title notulensi</h3>
                                    <div class="card-body">
                                        <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, omnis!</p>
                                    </div>
                                    <div class="card-footer d-flex justify-content-end text-dark" style="background: none !important; border: none">
                                        <p>10 agustus 2021</p>
                                    </div>
                                </div>
                                <div class="card mb-4 p-3" style="background: #FAB252 !important;">
                                    <h3 class="card-title text-white">Title notulensi</h3>
                                    <div class="card-body">
                                        <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, omnis!</p>
                                    </div>
                                    <div class="card-footer d-flex justify-content-end text-dark" style="background: none !important; border: none">
                                        <p>10 agustus 2021</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h2>Buat Notulensi</h2>
                                <div class="card">
                                    <div class="card-header" style="background-color: #FBCF7D !important;">
                                        <div class="row py-2">
                                            <div class="col-md-2 inputTitle py-2">
                                                <strong>Title</strong>
                                            </div>
                                            <div class="col-md-10">
                                                <input name="title" id="" class="inputTugas py-3 px-2" placeholder="type something ..."></input>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row py-2">
                                            <div class="col-md-2 inputTitle py-2">
                                                <strong>Isi</strong>
                                            </div>
                                            <div class="col-md-10">
                                                <textarea name="deskripsi" id="" cols="30" rows="10" class="inputTugas py-3 px-2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-4 d-flex justify-content-end">
                                    <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-sticky-note"></i> Notulensi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('leader/footer') ?>

        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <?php $this->load->view('leader/modal') ?>
    <script src="<?php echo base_url(); ?>assets/bootstrap/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/sb-admin-2.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "aLengthMenu": [
                    [5, 10, 25, -1],
                    [5, 10, 25, "All"]
                ],
                "iDisplayLength": 5
            });
        });

        function checkAll(bx) {
            var cbs = document.getElementsByTagName('input');
            for (var i = 0; i < cbs.length; i++) {
                if (cbs[i].type == 'checkbox') {
                    cbs[i].checked = bx.checked;
                }
            }
        }
    </script>
</body>

</html>