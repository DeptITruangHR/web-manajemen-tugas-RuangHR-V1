<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/login.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="row no-gutters">
        <div class="col-md-7 panel">
            <h1 class="panel-title">Sign in to Web Project Management</h1>
        </div>
        <div class="col-md-5 login">
            <img class="logo" src="<?php echo base_url(); ?>assets/image/logo.png">
            <h1 class="login-title">Login</h1>
            <p class="login-desc">Not have an account ? <span><a href="#">request access</a></span></p>
            <form class="form-login" action="<?php echo base_url().'index.php/accountctl/checkingLogin';?>" name="login" method="POST">
                <?php if($msg != ""){ ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Sorry </strong><?php echo htmlentities($msg)?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } ?>
                <input type="text" class="username inputs" name="username" placeholder="Enter Username" style="margin-bottom: 20px;"><br>
                <input type="password" class="password inputs" name="password" placeholder="Password">
                <p class="recovery">Recovery Password</p>
                <div class="d-flex">
                    <div class="p-2 ml-auto"><button name="submit" type="submit" class="btn login-button text-light ml-auto">Sign In</button></div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>