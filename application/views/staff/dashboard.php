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
    <link href="<?php echo base_url(); ?>assets/bootstrap/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <?php $this->load->view('staff/sidebar') ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php $this->load->view('staff/header', array('nama' => $nama)) ?>

                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800" style="font-weight:700">Dashboard</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 mb-6">
                            <div class="card shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Quote For Today!</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">You Will never really fail until you stop trying</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 mb-6">
                            <div class="card shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                3 hari lagi</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rapat Internal departemen IT pukul 19.00 WIB</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid mb-3">
                    <div>
                        <br> 
                        <div class="row" style="color: #0E3854; font-weight: 700;">
                            <div class="table-responsive" style="padding: 20px 0">
                                <table id="example" class="table bg-light" style="width:100%; color: #0E3854">
                                    <thead style="background : rgba(255,165,2,0.5); font-weight: 900;">
                                        <tr>
                                            <th>Nama</th>
                                            <th>Tugas</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <!-- sementara data nya manual dulu nanti di ambil dari database -->
                                        <tr>
                                            <td>Eka Diah Putri</td>
                                            <td>Pembuatan halaman login pada aplikasi android</td>
                                            <td>Jumat, 10 Oktober 2020</td>
                                            <td><button class="btn btn-info">Detail</button></td>
                                        </tr>
                                        <tr>
                                            <td>Taylor Swift</td>
                                            <td>Pembuatan halaman dashboard pada aplikasi android</td>
                                            <td>Jumat, 10 Oktober 2020</td>
                                            <td><button class="btn btn-info">Detail</button></td>
                                        </tr>
                                        <tr>
                                            <td>Eka Diah Putri</td>
                                            <td>Pembuatan halaman login pada aplikasi android</td>
                                            <td>Jumat, 10 Oktober 2020</td>
                                            <td><button class="btn btn-info">Detail</button></td>
                                        </tr>
                                        <tr>
                                            <td>Taylor Swift</td>
                                            <td>Pembuatan halaman dashboard pada aplikasi android</td>
                                            <td>Jumat, 10 Oktober 2020</td>
                                            <td><button class="btn btn-info">Detail</button></td>
                                        </tr>
                                        <tr>
                                            <td>Eka Diah Putri</td>
                                            <td>Pembuatan halaman login pada aplikasi android</td>
                                            <td>Jumat, 10 Oktober 2020</td>
                                            <td><button class="btn btn-info">Detail</button></td>
                                        </tr>
                                        <tr>
                                            <td>Taylor Swift</td>
                                            <td>Pembuatan halaman dashboard pada aplikasi android</td>
                                            <td>Jumat, 10 Oktober 2020</td>
                                            <td><button class="btn btn-info">Detail</button></td>
                                        </tr>
                                    </tbody>
                                    <tfoot style="font-weight: 900;"> 
                                        <tr>
                                            <th>Name</th>
                                            <th>Jobs</th>
                                            <th>Attachment</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('staff/footer') ?>

        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
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