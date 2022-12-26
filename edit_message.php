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
      <a href="admin_panel.php" >
        <i class="txt">Food Ordered</i>
      </a>
      <a href="message_panel.php" class="current">
        <i class="txt">Messages</i>
      </a>
      <a href="#">
        <i class="txt">Income</i>
      </a>
    </div>


    <!-- (B) MAIN -->
    <main id="pgmain">
      <h2>Update Pesan</h2>
        <?php
            include 'connection.php';

            $msg_id = $_GET["msg_id"];
            $query = mysqli_query($conn, "SELECT * FROM messages WHERE msg_id = $msg_id");
            
            while($data = mysqli_fetch_array($query)){
            ?>
                <form action="update_message.php" method="POST">
                    <input type="hidden" name="msg_id" value="<?php echo $data['msg_id'] ?>">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" value="<?php echo $data['name'] ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" value="<?php echo $data['email'] ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Category</label>
                                <input type="text" name="category" class="form-control" id="exampleFormControlInput1" value="<?php echo $data['category'] ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Message</label>
                                <input type="text" name="messages" class="form-control" id="exampleFormControlInput1" value="<?php echo $data['message'] ?>">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            <?php
            }
        ?>
    </main>
  
      
      
    
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
  </body>
  </html>

