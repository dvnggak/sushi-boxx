<?php 
//memulai session yang disimpan pada browser
session_start();

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="sudah_login"){
//melakukan pengalihan
header("location:login.php");
} 
?>

<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style/admin.css">
    <title>Itamae's</title>
</head>
<body>
<!-- (A) SIDEBAR -->
<div id="pgside">
      <!-- (A1) BRANDING OR USER -->
      <!-- LINK TO DASHBOARD OR LOGOUT -->
      <div id="pguser">
        <img src="assets/adminLogo.png"/>
        <i class="txt">Welcome  <?php echo $_SESSION['name']; ?></i>
        <a href="logout.php">
          <img src="assets/logout.png" alt="">
        </a>
      </div>

      <!-- (A2) MENU ITEMS -->
      <a href="admin_panel.php" class="current">
        <i class="txt">Food Ordered</i>
      </a>
      <a href="#">
        <i class="txt">Income</i>
      </a>
    </div>

    <!-- (B) MAIN -->
    <main id="pgmain">
      <h2>Update Pemesanan</h2>
        <?php
            include 'connection.php';

            $order_id = $_GET["order_id"];
            $query = mysqli_query($conn, "SELECT * FROM food WHERE order_id = $order_id");
            
            while($data = mysqli_fetch_array($query)){
            ?>
                <form action="update.php" method="POST">

                    <input type="hidden" name="order_id" value="<?php echo $data['order_id'] ?>">

                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Customer</label>
                                <input type="text" name="customer" class="form-control" id="exampleFormControlInput1" value="<?php echo $data['customer'] ?>">
                            </div>
                        </div>
                    
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Contact</label>
                                <input type="text" name="contact" class="form-control" id="exampleFormControlInput1" value="<?php echo $data['contact'] ?>">
                            </div>
                        </div>
                    
                    
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Salmon</label>
                                <input type="text" name="salmon" class="form-control" id="exampleFormControlInput1" value="<?php echo $data['salmon'] ?>">
                            </div>
                        </div>
                    
                    
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Shrimp</label>
                                <input type="text" name="shrimp" class="form-control" id="exampleFormControlInput1" value="<?php echo $data['shrimp'] ?>">
                            </div>
                        </div>
                    
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Octopus</label>
                                <input type="text" name="octopus" class="form-control" id="exampleFormControlInput1" value="<?php echo $data['octopus'] ?>">
                            </div>
                        </div>
                    
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Tuna</label>
                                <input type="text" name="tuna" class="form-control" id="exampleFormControlInput1" value="<?php echo $data['tuna'] ?>">
                            </div>
                        </div>
                    
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Tamago</label>
                                <input type="text" name="tamago" class="form-control" id="exampleFormControlInput1" value="<?php echo $data['tamago'] ?>">
                            </div>
                        </div>
                    
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Wagyu</label>
                                <input type="text" name="wagyu" class="form-control" id="exampleFormControlInput1" value="<?php echo $data['wagyu'] ?>">
                            </div>
                        </div>
                        </div>

                        <button type="submit" class="btn btn-success">Simpan</button>

                    </div>

                    <!-- <table>
                        <input type="hidden" name="order_id" value="<?php echo $data['order_id'] ?>">
                        <tr>
                            <td>Customer</td>
                            <td><input type="text" name="customer" id="customer" value='<?php echo $data["customer"] ?>'>
                            </td>
                        </tr>
                        <tr>
                            <td>Contact</td>
                            <td><input type="text" name="contact" id="contact" value="<?php echo $data["contact"] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Salmon</td>
                            <td><input type="text" name="salmon" id="salmon" value="<?php echo $data["salmon"] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Shrimp</td>
                            <td><input type="text" name="shrimp" id="shrimp" value="<?php echo $data["shrimp"] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Octopus</td>
                            <td><input type="text" name="octopus" id="octopus" value="<?php echo $data["octopus"] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Tuna</td>
                            <td><input type="text" name="tuna" id="tuna" value="<?php echo $data["tuna"] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Tamago</td>
                            <td><input type="text" name="tamago" id="tamago" value="<?php echo $data["tamago"] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Wagyu</td>
                            <td><input type="text" name="wagyu" id="wagyu" value="<?php echo $data["wagyu"] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Ubah/Simpan"></td>
                        </tr>
                    </table> -->
                </form>
            <?php
            }
        ?>
    </main>
  
      
      
    
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
  </body>
  </html>

