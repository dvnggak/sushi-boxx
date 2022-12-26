<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="style/login-style.css" />
</head>

<body>
  <div class="login-container">
    <h1 class="my-5">Login Form</h1>
    <form action="login-controller.php" method="post">
      <div class="form-controller mb-5">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" />
          <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required="" />
          <label for="floatingPassword">Password</label>
        </div>
      </div>
      <a href="index.php">
        <button type="button" class="btn btn-secondary me-3 btn-lg">
          Cancel
        </button>
      </a>
      <button type="submit" class="btn btn-primary-mod btn-lg">Submit</button>
    </form>
    <!-- Menampung jika ada pesan -->
    <?php if (isset($_GET['pesan'])) {  ?>
      <label style="color: red"><?php echo $_GET['pesan']; ?></label>
    <?php } ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>