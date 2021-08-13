<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/login.css">
    <title>Hello, world!</title>
</head>

<body>
    <div class="row no-gutters">
        <div class="col-md-7 panel">
            <h1 class="panel-title">Sign in to Web Project Management</h1>
        </div>
        <div class="col-md-5 login">
            <img class="logo" src="<?php echo base_url(); ?>assets/image/logo_lokerbee1.png">
            <h1 class="login-title">Login</h1>
            <p class="login-desc">Not have an account ? <span><a href="#">request access</a></span></p>
            <form class="form-login" action="<?php echo base_url() . 'index.php/accountctl/checkingLogin'; ?>" name="login" method="POST">
                <?php if ($msg != "") { ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Sorry </strong><?php echo htmlentities($msg) ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } ?>
                <input type="text" class="username inputs" name="username" placeholder="Enter Username" style="margin-bottom: 20px;"><br>
                <input type="password" class="password inputs" name="password" placeholder="Password">
                <!-- Button trigger modal -->
                <p data-toggle="modal" data-target="#exampleModalCenter" class="recovery">Forgot Password</p>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="py-4 col-lg-10 form-group mx-auto">
                                <img src="<?php echo base_url(); ?>assets/image/logo_lokerbee1.png" width="300">
                                <h1 class="py-4">Forget Password</h1>
                                    <!-- <p class="text-center">Enter New Password</p> -->
                                    <input type="text" class="form-control" placeholder="Enter Username">
                                    <input type="text" class="my-3 form-control" placeholder="Enter Password">
                                    <input type="text" class="form-control" placeholder="Confirm Password">

                                    <div class="d-flex flex-row-reverse">
                                        <input type="button" value="Save Password" class="mt-5 ml-auto btn" id="btn-recovery">
                                    </div>
                                </div>
                                <!-- <div class="mt-3 col-lg-11 form-group mx-auto">
                                    <p class="text-center">Re-Enter New Password</p>
                                    <input type="text" class="form-control">
                                </div> -->
                            </div>
                            <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="mt-5 d-flex">
                    <div class="ml-auto"><button name="submit" type="submit" class="btn login-button text-light ml-auto">Sign In</button></div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>