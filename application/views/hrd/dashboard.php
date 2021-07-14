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
        <?php $this->load->view('hrd/sidebar') ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php $this->load->view('hrd/header', array('nama' => $nama)) ?>

                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800" style="font-weight:700">Dashboard</h1>
                        <a href="<?php echo base_url().'index.php/hrdCtl/berikanTugas'?>" class="d-none ml-auto d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-plus-square"></i> Berikan Tugas</a>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>
                    <?php if($msg != ""){ ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success </strong><?php echo htmlentities($msg) ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } ?>
                    <?php if($error != ""){ ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Sorry </strong><?php echo $error?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } ?>
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
                        <div class="row card" style="color: #0E3854; font-weight: 700; background:white !important">
                            <div class="table-responsive" style="padding: 20px 0">
                                <table id="example" class="table" style="width:100%; color: #0E3854;background:white">
                                    <thead style="background : rgba(255,165,2,0.5); font-weight: 900;">
                                        <tr class="text-center">
                                            <th>Nama</th>
                                            <th>Subject</th>
                                            <th>Tanggal</th>
                                            <th>Detail</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    <!-- sementara data nya manual dulu nanti di ambil dari database -->
                                        <?php 
                                        $i=0;
                                        foreach($alltask as $task){
                                            $i++; ?>
                                            <tr>
                                                <td><?php echo htmlentities($task['nama_user']) ?></td>
                                                <td><?php echo htmlentities($task['pekerjaan']) ?></td>
                                                <td><?php echo htmlentities($task['date']) ?></td>
                                                <td><a href="<?php echo base_url().'index.php/hrdCtl/detailTugas?kode='.$task['kode'];?>"><button class="btn" style="color:#0E3854">Detail</button></a></td>
                                                <?php if($task['status']==0){ ?>
                                                    <td class="text-success text-center">Selesai</td>
                                                <?php }else if($task['status'] == 1){ ?>
                                                    <td class="text-warning text-center">Belum selesai</td>
                                                <?php }else if($task['status'] == 2) { ?>
                                                    <td class="text-info text-center">Menunggu</td>
                                                <?php } ?>
                                                <?php if($task['status']==0){ ?>
                                                    <td class="text-success text-center">-</td>
                                                <?php }else if($task['status'] == 1){ ?>
                                                    <td class="text-warning text-center">-</td>
                                                <?php }else if($task['status'] == 2) { ?>
                                                    <td><button class="btn btn-info">Setujui</button></td>
                                                <?php } ?>
                                            </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('hrd/footer') ?>

        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <?php $this->load->view('hrd/modal') ?>
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