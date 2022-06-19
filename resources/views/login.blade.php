    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
<title>Login</title>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="/user/ceklogin" method="POST">
        @csrf
        @if(session('keluar'))
                        <div class="alert alert-primary alert-dismissible fade show" role="keluar">
                        <strong> {{ session('keluar') }}</strong>
                        <button type="button" class="close" data-dismiss="keluar" aria-label="Close" >
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        @endif
        <h1>Form Log in</h1><br>
          <!-- no_hp input -->
          <div class="form-outline mb-4">
            <input type="no_hp" name="no_hp" id="formExample" class="form-control form-control-lg"
              placeholder="Nomor Handphone">
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" name="password" id="formExample1" class="form-control form-control-lg"
              placeholder="Password">
          </div>


          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg" 
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2020. All rights reserved.
    </div>
  </div>
</section>