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
      <a href="message_panel.php">
        <i class="txt">Messages</i>
      </a>
      <a href="#">
        <i class="txt">Income</i>
      </a>
    </div>

    <!-- (B) MAIN -->
    <main id="pgmain">
      <table class="table table-hover align-middle">
      <thead class=" align-middle">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Salmon Nigiri</th>
            <th scope="col">Shrimp Nigiri</th>
            <th scope="col">Octopus Nigiri</th>
            <th scope="col">Tuna Nigiri</th>
            <th scope="col">Tamago Nigiri</th>
            <th scope="col">Wagyu Nigiri</th>
            <th scope="col">Aksi</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <?php
            include "connection.php";
            $i=1;
            $query = mysqli_query($conn, 'SELECT * FROM food');
            while ($data = mysqli_fetch_array($query)) {
        ?>
        <tbody>
          <tr>
            <th scope="row"><?php echo $i++?></th>
            <td><?php echo $data['customer'] ?></td>
            <td><?php echo $data['contact'] ?></td>
            <td><?php echo $data['salmon'] ?></td>
            <td><?php echo $data['shrimp'] ?></td>
            <td><?php echo $data['octopus'] ?></td>
            <td><?php echo $data['tuna'] ?></td>
            <td><?php echo $data['tamago'] ?></td>
            <td><?php echo $data['wagyu'] ?></td>
            <td>
                <a href="edit.php?order_id=<?php echo $data['order_id'];?>"><button type="button" class="btn btn-warning">Edit</button></a>
            </td>
            <td>
              <button type="button" class="btn btn-danger" onclick="confirm('<?php echo $data['order_id'] ?>')">Delete</button>
                <!-- <a href="delete.php?order_id=<?php echo $data['order_id'];?>"><button type="button" class="btn btn-danger">Delete</button></a> -->
            </td>
          </tr>
        </tbody>
        <?php } ?>
      </table>
    </main>
  
      
      
    
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
  function confirm(order_id)
  {
    Swal.fire({
      title: 'Anda Yakin?',
      text: 'Tekan tombol dibawah untuk menghapus',
      type: 'warning',
      icon: 'warning',
      confirmButtonColor: "#DD6B55",
      showCancelButton: true,
      confirmButtonText: 'Hapus',
    })
    .then(res => {
      if(res.isConfirmed){
        $.ajax({
          url: "delete.php?order_id="+order_id,
          type: "GET",
          success: function (res) {
            Swal.fire({
              title: "Sukses hapus",
              text: "Berhasil menghapus",
              icon: "success",
              confirmButtonText: "Ok",
            })
            Window.setTimeout(function() {
              window.location.reload()
            }, 100);
          }
        })
      }
    })
  }
</script>

</body>
</html>