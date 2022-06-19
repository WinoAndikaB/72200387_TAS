<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>Welcome!</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col -lg-1-12 bg-primary py-2">
                <div class="dropdown float-right">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-person-square"></i> User
                    </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/user">{{Auth::user()->nama_user}}</a>
                    <a class="dropdown-item" href="/user">Data Pengguna</a>
                    <a class="dropdown-item" href="/logout">Keluar</a>
                </div>
            </div>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-1-5 vh-100">
                <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" href="/home">Home</a>
                    <a class="nav-link" href="/mahasiswa">Mahasiswa</a>
                    <a class="nav-link" href="/dosen">Dosen</a>
                    <a class="nav-link" href="/user">Data</a>
                </div>
                </div>  
            <div class="col-lg-10 vh-100">
                <div class="card mt-4">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                    <h2>Selamat Datang, <b>{{Auth::user()->nama_user}}</b></h2>
                    <p>Ini merupakan contoh web yang yang akan digunakan untuk menampikan data user.</p>
                    <div class="dropdown float-right">
                    <?php echo date("m/d/Y"); ?>
                        </div>
                    </div>
                </div>
            </div>
         </div>
         {{-- alert --}}
            @if (session('success'))
            <div class="px-4 py-2 mb-4 text-sm text-center text-green-800 bg-green-300 rounded-full shadow-sm">
                {!! session('success') !!}
            </div>
            @endif
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
