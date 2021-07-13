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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/sb-admin-2.css" rel="stylesheet">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/dashboard.css">
    <link href="<?php echo base_url(); ?>assets/bootstrap/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <?php $this->load->view('leader/sidebar') ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php $this->load->view('leader/header', array('nama' => $nama)) ?>

                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800" style="font-weight:700">Tambah Notulensi</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>
                </div>

                <!-- detail tugas -->
                <div class="container-fluid">
                    <div class="card shadow h-100 py-3 px-3 text-dark">
                        <form method="post" action="<?php echo base_url().'index.php/leaderCtl/masukkanNotulensi';?>">
                            <div class="row">
                                <div class="col-md-3 inputTitle py-2">
                                    <strong>Nama</strong>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" disabled="disabled" value="<?php echo htmlentities($nama) ?>" class="inputTugas py-3 px-2">
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-3 inputTitle py-2">
                                    <strong>Subject</strong>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="subjects" placeholder="Masukkan Subject" class="inputTugas py-3 px-2">
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-3 inputTitle py-2">
                                    <strong>Tanggal</strong>
                                </div>
                                <div class="col-md-9">
                                    <input type="date" name="dates" placeholder="Masukkan Tanggal" class="inputTugas py-3 px-2">
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-12 inputTitle py-2">
                                    <strong>Detail</strong>
                                </div>
                                <div class="col-md-12">
                                    <textarea name="deskripsi" id="" cols="30" rows="10" class="inputTugas py-3 px-2"></textarea>
                                    <!-- <input type="date" placeholder="Masukkan Tanggal" class="inputTugas py-3 px-2"> -->
                                </div>
                            </div>
                            <input class="btn btn-primary" type="submit" value="Submit">
                        </form>
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
                "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
                "iDisplayLength": 5
            });
        });
        function checkAll(bx) {
            var cbs = document.getElementsByTagName('input');
            for(var i=0; i < cbs.length; i++) {
                if(cbs[i].type == 'checkbox') {
                cbs[i].checked = bx.checked;
                }
            }
        }
    </script>
</body>

</html>