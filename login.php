<?php
require 'function.php';

//cek login, terdaftar atau tidak
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    //cocokin dengan database, cari... ada tau enggak tuh data
    $cekdatabase = mysqli_query($conn, "SELECT * FROM login where email='$email' and password='$password'");
    //hitung jumlah data
    $hitung = mysqli_num_rows($cekdatabase);

    if($hitung>0){
        $_SESSION['log'] = 'True';
        header('location:index.php');
    } else {
        header('location:login.php');
    };
};

if(!isset($_SESSION['log'])){

} else {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="styleuas.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
    <div class="biodata">
        <h3>LOGIN</h3>
          <table class="table">
            <tr>
              <td>        
                 <form method='post'>
                   <div class="form-floating mb-3">
                      <input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
                       <label for="inputEmail">Email address</label>
                        </div>
                       <div class="form-floating mb-3">
                       <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Password" />
                         <label for="inputPassword">Password</label>
                            </div>
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                        <button class="btn btn-primary" name="login">Login</button>
                        </div>
                        </div>
                     </form>
                  </div>
              </tr>
             </td>
           </div>
          </div>
        </div>
      </div>
    </main>
   </div>
 </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
   </body>
</html>

