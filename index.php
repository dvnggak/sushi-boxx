<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sushi-Boxx</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="style/style.css" />
</head>

<body>
  <nav class="row navbar text-center">
    <div class="col col-8 container-fluid align-items-center">
      <a class="navbar-brand d-inline-flex align-items-center" href="#">
        <img src="./assets/logo-removebg-preview.png" alt="Logo" width="50" height="85" class="img-fluid" />
        <h2>Sushi-Boxx</h2>
      </a>
    </div>
    <div class="col col-4 justify-content-end">
      <div class="d-inline-flex align-items-center text-center">
        <img data-bs-toggle="modal" data-bs-target="#exampleModal" src="assets/cart.png" alt="" style="width: 5px; height: 50px; cursor: pointer;">
        <a href="login.php" class="d-inline-flex align-items-center">
          <img src="./assets/adminLogo.png" alt="Logo" width="1" height="1" class="img-fluid" />
          <h4>Login</h4>
        </a>
      </div>
    </div>
  </nav>
  <div class="container my-5">
    <div class="row align-items-center">
      <div data-aos='zoom-in-up' data-aos-duration="3000" class="col">
        <h1 class="fw-bold">Sushi-Boxx</h1>
        <div class="row align-items-center">
          <p class="col-6 mt-3">Get your best Japanesse Cuisine</p>
          <button class="btn btn-lg btn-order col-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Order Now</button>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Order Details</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form onsubmit="confirm()" action="order-controller.php" method="post">
              <div class="modal-body">
                <div class="form-controller mb-5">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="customer" />
                    <label for="floatingInput">Nama Pelanggan</label>
                  </div>
                  <div class="form-floating">
                    <input type="number" class="form-control" id="floatingInput" placeholder="Password" name="contact" required="" />
                    <label for="floatingPassword">Nomor Telepon</label>
                  </div>
                  <div class="row g-3 align-items-center my-2">
                    <div class="col-4">
                      <label for="inputSalmon" class="col-form-label fw-bold fs-6 me-4">Salmon Nigiri</label>
                    </div>
                    <div class="col-7">
                      <input name="salmon" type="number" id="inputSalmon" class="form-control align-self-end ms-5" aria-describedby="passwordHelpInline">
                    </div>
                  </div>
                  <div class="row g-3 align-items-center my-2">
                    <div class="col-4">
                      <label for="inputShrimp" class="col-form-label fw-bold fs-6 me-4">Shrimp Nigiri</label>
                    </div>
                    <div class="col-7">
                      <input name="shrimp" type="number" id="inputShrimp" class="form-control align-self-end ms-5" aria-describedby="passwordHelpInline">
                    </div>
                  </div>
                  <div class="row g-3 align-items-center my-2">
                    <div class="col-4">
                      <label for="inputOctopus" class="col-form-label fw-bold fs-6 me-4">Octopus Nigiri</label>
                    </div>
                    <div class="col-7">
                      <input name="octopus" type="number" id="inputOctopus" class="form-control align-self-end ms-5" aria-describedby="passwordHelpInline">
                    </div>
                  </div>
                  <div class="row g-3 align-items-center my-2">
                    <div class="col-4">
                      <label for="inputTuna" class="col-form-label fw-bold fs-6 me-4">Tuna Nigiri</label>
                    </div>
                    <div class="col-7">
                      <input name="tuna" type="number" id="inputTuna" class="form-control align-self-end ms-5" aria-describedby="passwordHelpInline">
                    </div>
                  </div>
                  <div class="row g-3 align-items-center my-2">
                    <div class="col-4">
                      <label for="inputTamago" class="col-form-label fw-bold fs-6 me-4">Tamago Nigiri</label>
                    </div>
                    <div class="col-7">
                      <input name="tamago" type="number" id="inputTamago" class="form-control align-self-end ms-5" aria-describedby="passwordHelpInline">
                    </div>
                  </div>
                  <div class="row g-3 align-items-center my-2">
                    <div class="col-4">
                      <label for="inputWagyu" class="col-form-label fw-bold fs-6 me-4">Wagyu Nigiri</label>
                    </div>
                    <div class="col-7">
                      <input name="wagyu" type="number" id="inputWagyu" class="form-control align-self-end ms-5" aria-describedby="passwordHelpInline">
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-order">Order</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div data-aos='fade-left' data-aos-duration="3000" class="col">
      <img class="img-fluid" src="./assets/thumbnail-removebg-preview.png" alt="thumbnail" srcset="" />
    </div>
  </div>
  </div>
  <div class="container my-5">
    <h1 class="fw-bold text-center">Menus</h1>
    <div data-aos='fade-right' data-aos-duration="1500" class="row align-items-center my-5">
      <div class="col">
        <img class="img-fluid me-5" src="./assets/menus/salmon-removebg-preview.png" alt="" />
      </div>
      <div class="col ms-5">
        <h2 class="text-start">Salmon Nigiri</h2>
        <p class="text-start">
          Salmon nigiri consists a slice of raw salmon served over pressed
          vinegar rice.
        </p>
        <button class="btn btn-lg btn-order text-start" data-bs-toggle="modal" data-bs-target="#exampleModal">Add to Cart</button>
      </div>
    </div>
    <div data-aos='fade-left' data-aos-duration="1500" class="row align-items-center my-5">
      <div class="col ms-5">
        <h2 class="text-start">Shrimp Nigiri</h2>
        <p class="text-start">
          Shrimp nigiri consists a slice of raw Shrimp served over pressed
          vinegar rice.
        </p>
        <button class="btn btn-lg btn-order text-start" data-bs-toggle="modal" data-bs-target="#exampleModal">Add to Cart</button>
      </div>
      <div class="col">
        <img class="img-fluid me-5" src="./assets/menus/shrimp-removebg-preview.png" alt="" />
      </div>
    </div>
    <div data-aos='fade-right' data-aos-duration="1500" class="row align-items-center my-5">
      <div class="col">
        <img class="img-fluid me-5" src="./assets/menus/octopus-removebg-preview.png" alt="" />
      </div>
      <div class="col ms-5">
        <h2 class="text-start">Octopus Nigiri</h2>
        <p class="text-start">
          Octopus nigiri consists a slice of Medium Burned Octopus served over
          pressed vinegar rice.
        </p>
        <button class="btn btn-lg btn-order text-start" data-bs-toggle="modal" data-bs-target="#exampleModal">Add to Cart</button>
      </div>
    </div>
    <div data-aos='fade-left' data-aos-duration="1500" class="row align-items-center my-5">
      <div class="col ms-5">
        <h2 class="text-start">Tuna Nigiri</h2>
        <p class="text-start">
          Tuna nigiri consists a slice of raw Tuna served over pressed vinegar
          rice.
        </p>
        <button class="btn btn-lg btn-order text-start" data-bs-toggle="modal" data-bs-target="#exampleModal">Add to Cart</button>
      </div>
      <div class="col">
        <img class="img-fluid me-5" src="./assets/menus/tuna.png" alt="" />
      </div>
    </div>
    <div data-aos='fade-right' data-aos-duration="1500" class="row align-items-center my-5">
      <div class="col">
        <img class="img-fluid me-5" src="./assets/menus/tamago-removebg-preview.png" alt="" />
      </div>
      <div class="col ms-5">
        <h2 class="text-start">Tamago Nigiri</h2>
        <p class="text-start">
          Tamago nigiri consists a slice of Tamago served over pressed vinegar
          rice.
        </p>
        <button class="btn btn-lg btn-order text-start" data-bs-toggle="modal" data-bs-target="#exampleModal">Add to Cart</button>
      </div>
    </div>
    <div data-aos='fade-left' data-aos-duration="1500" class="row align-items-center my-5">
      <div class="col ms-5">
        <h2 class="text-start">Wagyu Nigiri</h2>
        <p class="text-start">
          Wagyu nigiri consists a slice of Medium-Well Wagyu A3 served over
          pressed vinegar rice.
        </p>
        <button class="btn btn-lg btn-order text-start" data-bs-toggle="modal" data-bs-target="#exampleModal">Add to Cart</button>
      </div>
      <div class="col">
        <img class="img-fluid me-5" src="./assets/menus/wagyu-removebg-preview.png" alt="" />
      </div>
    </div>
  </div>
  <div data-aos="fade-down" data-aos-duration="1000" class="container my-5 text-center" style="margin-top: 10rem;">
    <h1 class="fw-bold">Our Itamae's</h1>
    <div class="mt-5 d-flex" style="gap:2rem;">
      <div class="card-body shadow ms-2 mb-5 bg-body rounded d-flex p-5 justify-content-between" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200" data-aos-offset="0" style="width: 10rem; background: none;">
        <div>
          <img src="assets/itamae/hersa.jpeg" class="card-img-top" alt="" style="border-radius: 50%;">
          <h5 class="card-title my-5">Putri Hersa</h5>
          <a class="mt-5" href="https://www.instagram.com/putrihrsa/?igshid=MDM4ZDc5MmU%3D">
            <!-- Generator: Adobe Illustrator 21.0.2, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
            <svg style="width: 50px; height: 50px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 56.7 56.7" enable-background="new 0 0 56.7 56.7" xml:space="preserve">
              <g>
                <path d="M28.2,16.7c-7,0-12.8,5.7-12.8,12.8s5.7,12.8,12.8,12.8S41,36.5,41,29.5S35.2,16.7,28.2,16.7z M28.2,37.7
                  c-4.5,0-8.2-3.7-8.2-8.2s3.7-8.2,8.2-8.2s8.2,3.7,8.2,8.2S32.7,37.7,28.2,37.7z" />
                <circle cx="41.5" cy="16.4" r="2.9" />
                <path d="M49,8.9c-2.6-2.7-6.3-4.1-10.5-4.1H17.9c-8.7,0-14.5,5.8-14.5,14.5v20.5c0,4.3,1.4,8,4.2,10.7c2.7,2.6,6.3,3.9,10.4,3.9
                  h20.4c4.3,0,7.9-1.4,10.5-3.9c2.7-2.6,4.1-6.3,4.1-10.6V19.3C53,15.1,51.6,11.5,49,8.9z M48.6,39.9c0,3.1-1.1,5.6-2.9,7.3
                  s-4.3,2.6-7.3,2.6H18c-3,0-5.5-0.9-7.3-2.6C8.9,45.4,8,42.9,8,39.8V19.3c0-3,0.9-5.5,2.7-7.3c1.7-1.7,4.3-2.6,7.3-2.6h20.6
                  c3,0,5.5,0.9,7.3,2.7c1.7,1.8,2.7,4.3,2.7,7.2V39.9L48.6,39.9z" />
              </g>
            </svg>
          </a>
        </div>
      </div>
      <div class="card-body shadow ms-2 mb-5 bg-body rounded d-flex p-5 justify-content-between" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="400" data-aos-offset="0" style="width: 10rem; background: none;">
        <div>
          <img src="assets/itamae/dev.jpeg" class="card-img-top" alt="" style="border-radius: 50%;">
          <h5 class="card-title my-5">Devangga K</h5>
          <a class="mt-5" href="https://instagram.com/dvnggak?igshid=NDU3Y2E5ZmY=">
            <!-- Generator: Adobe Illustrator 21.0.2, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
            <svg style="width: 50px; height: 50px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 56.7 56.7" enable-background="new 0 0 56.7 56.7" xml:space="preserve">
              <g>
                <path d="M28.2,16.7c-7,0-12.8,5.7-12.8,12.8s5.7,12.8,12.8,12.8S41,36.5,41,29.5S35.2,16.7,28.2,16.7z M28.2,37.7
          c-4.5,0-8.2-3.7-8.2-8.2s3.7-8.2,8.2-8.2s8.2,3.7,8.2,8.2S32.7,37.7,28.2,37.7z" />
                <circle cx="41.5" cy="16.4" r="2.9" />
                <path d="M49,8.9c-2.6-2.7-6.3-4.1-10.5-4.1H17.9c-8.7,0-14.5,5.8-14.5,14.5v20.5c0,4.3,1.4,8,4.2,10.7c2.7,2.6,6.3,3.9,10.4,3.9
          h20.4c4.3,0,7.9-1.4,10.5-3.9c2.7-2.6,4.1-6.3,4.1-10.6V19.3C53,15.1,51.6,11.5,49,8.9z M48.6,39.9c0,3.1-1.1,5.6-2.9,7.3
          s-4.3,2.6-7.3,2.6H18c-3,0-5.5-0.9-7.3-2.6C8.9,45.4,8,42.9,8,39.8V19.3c0-3,0.9-5.5,2.7-7.3c1.7-1.7,4.3-2.6,7.3-2.6h20.6
          c3,0,5.5,0.9,7.3,2.7c1.7,1.8,2.7,4.3,2.7,7.2V39.9L48.6,39.9z" />
              </g>
            </svg>
          </a>
        </div>
      </div>
      <div class="card-body shadow ms-2 mb-5 bg-body rounded d-flex p-5 justify-content-between" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="600" data-aos-offset="0" style="width: 10rem; background: none;">
        <div>
          <img src="assets/itamae/ian.jpeg" class="card-img-top" alt="" style="border-radius: 50%;">
          <h5 class="card-title my-5">Ian </h5>
          <a class="mt-5" href="https://instagram.com/m.alfian_m?igshid=ZDdkNTZiNTM=">
            <!-- Generator: Adobe Illustrator 21.0.2, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
            <svg style="width: 50px; height: 50px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 56.7 56.7" enable-background="new 0 0 56.7 56.7" xml:space="preserve">
              <g>
                <path d="M28.2,16.7c-7,0-12.8,5.7-12.8,12.8s5.7,12.8,12.8,12.8S41,36.5,41,29.5S35.2,16.7,28.2,16.7z M28.2,37.7
          c-4.5,0-8.2-3.7-8.2-8.2s3.7-8.2,8.2-8.2s8.2,3.7,8.2,8.2S32.7,37.7,28.2,37.7z" />
                <circle cx="41.5" cy="16.4" r="2.9" />
                <path d="M49,8.9c-2.6-2.7-6.3-4.1-10.5-4.1H17.9c-8.7,0-14.5,5.8-14.5,14.5v20.5c0,4.3,1.4,8,4.2,10.7c2.7,2.6,6.3,3.9,10.4,3.9
          h20.4c4.3,0,7.9-1.4,10.5-3.9c2.7-2.6,4.1-6.3,4.1-10.6V19.3C53,15.1,51.6,11.5,49,8.9z M48.6,39.9c0,3.1-1.1,5.6-2.9,7.3
          s-4.3,2.6-7.3,2.6H18c-3,0-5.5-0.9-7.3-2.6C8.9,45.4,8,42.9,8,39.8V19.3c0-3,0.9-5.5,2.7-7.3c1.7-1.7,4.3-2.6,7.3-2.6h20.6
          c3,0,5.5,0.9,7.3,2.7c1.7,1.8,2.7,4.3,2.7,7.2V39.9L48.6,39.9z" />
              </g>
            </svg>
          </a>
        </div>
      </div>
      <div class="card-body shadow ms-2 mb-5 bg-body rounded d-flex p-5 justify-content-between" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="800" data-aos-offset="0" style="width: 10rem; background: none;">
        <div>
          <img src="assets/itamae/regina.jpeg" class="card-img-top" alt="" style="border-radius: 50%;">
          <h5 class="card-title my-5">Putri Regina </h5>

          <a class="mt-5" href="https://instagram.com/reginafp03?igshid=ZDdkNTZiNTM=">
            <!-- Generator: Adobe Illustrator 21.0.2, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
            <svg style="width: 50px; height: 50px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 56.7 56.7" enable-background="new 0 0 56.7 56.7" xml:space="preserve">
              <g>
                <path d="M28.2,16.7c-7,0-12.8,5.7-12.8,12.8s5.7,12.8,12.8,12.8S41,36.5,41,29.5S35.2,16.7,28.2,16.7z M28.2,37.7
          c-4.5,0-8.2-3.7-8.2-8.2s3.7-8.2,8.2-8.2s8.2,3.7,8.2,8.2S32.7,37.7,28.2,37.7z" />
                <circle cx="41.5" cy="16.4" r="2.9" />
                <path d="M49,8.9c-2.6-2.7-6.3-4.1-10.5-4.1H17.9c-8.7,0-14.5,5.8-14.5,14.5v20.5c0,4.3,1.4,8,4.2,10.7c2.7,2.6,6.3,3.9,10.4,3.9
          h20.4c4.3,0,7.9-1.4,10.5-3.9c2.7-2.6,4.1-6.3,4.1-10.6V19.3C53,15.1,51.6,11.5,49,8.9z M48.6,39.9c0,3.1-1.1,5.6-2.9,7.3
          s-4.3,2.6-7.3,2.6H18c-3,0-5.5-0.9-7.3-2.6C8.9,45.4,8,42.9,8,39.8V19.3c0-3,0.9-5.5,2.7-7.3c1.7-1.7,4.3-2.6,7.3-2.6h20.6
          c3,0,5.5,0.9,7.3,2.7c1.7,1.8,2.7,4.3,2.7,7.2V39.9L48.6,39.9z" />
              </g>
            </svg>
          </a>
        </div>
      </div>
      <div class="card-body shadow ms-2 mb-5 bg-body rounded d-flex p-5 justify-content-between" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="1000" data-aos-offset="0" style="width: 10rem; background: none;">
        <div>
          <img src="assets/itamae/rinaldi.jpeg" class="card-img-top" alt="" style="border-radius: 50%;">
          <h5 class="card-title my-5">Muhammad Rinaldi</h5>
          <a class="mt-5" href="https://instagram.com/ibnu_ahmad_r?igshid=YzgyMTM2MGM=">
            <!-- Generator: Adobe Illustrator 21.0.2, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
            <svg style="width: 50px; height: 50px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 56.7 56.7" enable-background="new 0 0 56.7 56.7" xml:space="preserve">
              <g>
                <path d="M28.2,16.7c-7,0-12.8,5.7-12.8,12.8s5.7,12.8,12.8,12.8S41,36.5,41,29.5S35.2,16.7,28.2,16.7z M28.2,37.7
          c-4.5,0-8.2-3.7-8.2-8.2s3.7-8.2,8.2-8.2s8.2,3.7,8.2,8.2S32.7,37.7,28.2,37.7z" />
                <circle cx="41.5" cy="16.4" r="2.9" />
                <path d="M49,8.9c-2.6-2.7-6.3-4.1-10.5-4.1H17.9c-8.7,0-14.5,5.8-14.5,14.5v20.5c0,4.3,1.4,8,4.2,10.7c2.7,2.6,6.3,3.9,10.4,3.9
          h20.4c4.3,0,7.9-1.4,10.5-3.9c2.7-2.6,4.1-6.3,4.1-10.6V19.3C53,15.1,51.6,11.5,49,8.9z M48.6,39.9c0,3.1-1.1,5.6-2.9,7.3
          s-4.3,2.6-7.3,2.6H18c-3,0-5.5-0.9-7.3-2.6C8.9,45.4,8,42.9,8,39.8V19.3c0-3,0.9-5.5,2.7-7.3c1.7-1.7,4.3-2.6,7.3-2.6h20.6
          c3,0,5.5,0.9,7.3,2.7c1.7,1.8,2.7,4.3,2.7,7.2V39.9L48.6,39.9z" />
              </g>
            </svg>
          </a>

        </div>
      </div>
    </div>
  </div>
  <div data-aos="zoom-in" data-aos-duration="1000" class="container my-5 py-5 text-center">
    <h1 class="fw-bold">How is Our Service ?</h1>
    <p>Sampaikan pesan kesan kritik saran anda ataupun pengalaman selama bersama dengan Sushi-Boxx <br> Masukan anda sangat berarti dan penting untuk meningkatkan mutu pelayanan kami.</p>
    <div class="container shadow-lg bg-body rounded my-3">
      <form id="submitHandler" action="message-controller.php" method="post">
        <div class="modal-body">
          <div class="form-controller py-3 px-5">
            <div class="form-floating my-3">
              <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="name" />
              <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating my-3">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" />
              <label for="floatingInput">E-mail</label>
            </div>
            <div class="form-floating my-3">
              <select name="category" class="form-select" id="inputGroupSelect01">
                <option selected>Food Experience</option>
                <option value="1">Critics</option>
                <option value="2">Suggestion</option>
                <option value="3">Anything</option>
              </select>
              <label for="floatingInput">Categories</label>
            </div>
            <div class="form-floating my-3">
              <textarea type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="message" style="height:8rem;">
              </textarea>
              <label for="floatingInput">Message</label>
            </div>
          </div>
        </div>
        <div class="d-grid gap-2 col-6 py-4 mx-auto">
          <button onclick="msgDelivered()" type="submit"class="btn btn-lg btn-order">Send</button>
        </div>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script type="text/javascript">

    document.getElementById("submitHander").addEventListener("click", function(event){
      event.preventDefault()
    });

    function confirm() {
      swal('Orderan anda sudah kami catat ! Mohon Ditunggu ya :D', {
        icon: "success",
        timer: 3000,
        confirmButtonText: "Ok"
      });
    }

    function msgDelivered() {
      swal({
        title: 'Apakah anda yakin ingin mengirim pesan ?',
        showCancelButton: true,
        confirmButtonText: 'Kirim',
      }).then(res => {
        if (res.isConfirmed) {
          $.ajax({
            url: "index.php",
            type: "GET",
            success: function(res) {
              Swal({
                title: "Berhasil mengirim data",
                text: "Terima Kasih sudah memberi masukan :D",
                icon: "success",
                confirmButtonText: "Ok"
              })
            }
          })
        }
      })
    }
  </script>
</body>

</html>