<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>Formulir User</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col -lg-1-12 bg-primary py-4"></div>
            </div>
            <div class="row">
            <div class="col-lg-1-5 vh-100">
                <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link" href="#">Home</a>
                    <a class="nav-link active" href="/mahasiswa">Mahasiswa</a>
                    <a class="nav-link" href="/dosen">Dosen</a>
                    <a class="nav-link" href="#v-pills-settings">Data</a>
                </div>
                </div>  
            <div class="col-lg-10 vh-100">
                <div class="card mt-4">
                    <div class="card-header">
            </div>
                    <div class="card-body">
                        <div class="container-fluid mt-4 rounded">
                            <form action="/user/simpanuser" method="POST" class="pt-2 pb-2">
                                @csrf
                                <h2>Formulir User</h2>
                                <div class="form-group w-25">
                                    <label>NIK User</label>
                                    <input type="number" name="nik_user" class="form-control" placeholder="Masukkan NIK User..." required autofocus>
                                </div>
                                <div class="form-group w-25">
                                    <label>Nama User</label>
                                    <input type="text" name="nama_user" class="form-control" placeholder="Masukkan Nama User..." required>
                                </div>
                                <div class="form-group w-25">
                                    <label>Nomor Handphone</label>
                                    <input type="text" name="no_hp" class="form-control" placeholder="Masukkan Nomor Handphone User..." required>
                                </div>
                                <div class="form-group w-25">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password User..." required seen>
                                </div>
                                <div class="form-check pt-4">
                                    <input type="submit" value="SIMPAN" class="btn btn-outline-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
         </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>