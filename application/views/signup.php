<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/signup.css">
    <title>Hello, world!</title>
    <script>
        function roles(string){
            if(string != 'management'){
                document.getElementById("dept").style.display = 'block';
            }else if(string == 'management' ){
                document.getElementById("dept").style.display = 'none';
            }
        }

        function valid(){
            if(document.getElementById("password").value != document.getElementById("password-confirm").value){
                alert("Password yang anda masukkan tidak sama  !!");
                document.getElementById("password-confirm").focus();
                return false;
            }
            return true;
        }
    </script>
  </head>
  <body>
    <div class="row no-gutters">
        <div class="col-md-7 panel">
            <h1 class="panel-title">Sign in to Web Project Management</h1>
        </div>
        <div class="col-md-5 login">
            <img class="logo" src="<?php echo base_url(); ?>assets/image/logo.png" style="margin-top: 20px">
            <h1 class="login-title">Sign Up</h1>
            <form class="form-login" action="<?php echo base_url().'index.php/accountctl/creatingAccount';?>" name="login" method="POST">
                <?php if($msg != ""){ ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Sorry </strong><?php echo htmlentities($msg)?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } ?>
                <input type="text" class="username inputs" name="username" placeholder="Enter Username" style="margin-bottom: 20px;"><br>
                <input type="password" class="password inputs" id="password" name="password" placeholder="Enter Password" style="margin-bottom: 20px;"><br>
                <input type="password" class="password inputs" id="password-confirm" name="password-confirm" placeholder="Re-enter Password" style="margin-bottom: 20px;"><br>
                <select name="level" class="inputs" id="level"  onchange="roles(this.value)" style="margin-bottom: 20px;">
                    <option value="1" selected="selected">Management</option>
                    <option value="2">HRD</option>
                    <option value="3">Staff</option>
                </select>
                <select name="dept" class="inputs hidden" id="dept" style="margin-bottom: 20px;">
                    <?php foreach($dept as $nama){ ?>
                        <option value="<?php echo htmlentities($nama['id_departemen']) ?>"><?php echo htmlentities($nama['nama_departemen'])?></option>
                    <?php } ?>
                </select>
                <div class="d-flex">
                    <div class="p-2 ml-auto"><button name="submit" type="submit" class="btn login-button text-light ml-auto" onclick="return valid();">Sign In</button></div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>