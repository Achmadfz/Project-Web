
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bill Strap Boots</title>
	
    <link href="css/bootstrap.min.css " rel="stylesheet">
	<meta name="theme-color" content="#712cf9">
	<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
	  .bg-hr{margin:1rem 0;color:white;border:0;border-top:1px solid;opacity:.25}
    </style>
	
	
	
	
  </head>
  <body class="bg-dark">
  <!----------------------------------------------------------------------------------------------------------------------------->

  <!----------------------------------------------------------------------------------------------------------------------------->
  <br><br>
  
  
    <div class="container " >
	<main>
<br>
<br>
    <div class="row g-5 ">
      <div class="col-md-6 col-lg-6 order-md-last bg-light rounded-4"><br>
        
		<h2 class="mb-3 text-dark">Sign-in</h2>
        <form class="needs-validation" action="" method="POST" novalidate>
          <div class="row g-3">
            <div class="col-sm-12">
              <label for="Name" class="form-label  text-dark">Name</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder=""  required>
              <div class="invalid-feedback">
                Valid name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label text-dark">Username</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label text-dark">Email (<span class="text-danger">wajib</span>)</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" >
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label  text-dark">password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label text-dark">confirm password (<span class="text-danger">Ulangi</span>)</label>
              <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="confirm Password">
            </div>
				
          </div>
<br>
          <div class="col-12"><p class=" text-dark">Centang bila anda sudah yakin dengan dengan data yang diisi</p></div>
		  <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label  text-dark" for="save-info">Save this information</label>

          </div>
<br>

          <button class="w-100 btn btn-outline-dark btn-lg" type="submit" name="simpan" >Simpan Data</button>
		            <hr class="my-4 bg-hr">
		</form>		
      </div>
<?php
include "koneksikan.php";
error_reporting(0);
session_start();
 
if(isset($_POST['simpan'])){
	
	if ($_POST['password'] == $_POST['cpassword']) { $s = "select * from login where username='$_POST[username]'";
	$result = mysqli_query($koneksi,$s);
	if (!$result->num_rows > 0) {
	mysqli_query($koneksi,"insert into login set
username = '$_POST[username]',
password = '$_POST[password]',
nama = '$_POST[nama]',
email = '$_POST[email]'");
echo "<script>alert('Selamat, registrasi berhasil!')</script>";
echo "<meta http-equiv=refresh content=2;URL='login.php'>";
}}}
?>
 <!--------------------------------------------------------->
      <div class="col-md-4 col-lg-3">
        
      </div>
    </div>
  </main>
<br>
<br>
<br>

</div>



    <script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/popper.min.js"></script>
  </body>
</html>