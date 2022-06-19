<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>Data</title>
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
                    <a class="nav-link" href="/home">Home</a>
                    <a class="nav-link" href="/mahasiswa">Mahasiswa</a>
                    <a class="nav-link" href="/dosen">Dosen</a>
                    <a class="nav-link active" href="/user">Data</a>
                </div>
                </div>  
            <div class="col-lg-10 vh-100">
                <div class="card mt-4">
                    <div class="card-header">
                    
                    <a name="" id="" class="btn btn-primary" href="/user/formuliruser" role="button"><i class="bi bi-plus-square-fill"></i></a>

                    <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/mahasiswa/cari">
                    <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search" value="{{request('cari')}}">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"> Cari </button>
                    </form>
                    </div>
                    <div class="card-body">
                        @if(session('tambah'))
                        <div class="alert alert-primary alert-dismissible fade show" role="tambah">
                        <strong> {{ session('tambah') }}</strong>
                        <button type="button" class="close" data-dismiss="tambah" aria-label="Close" >
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        @endif

                        @if(session('edit'))
                        <div class="alert alert-success alert-dismissible fade show" role="edit">
                        <strong> {{ session('edit') }}</strong>
                        <button type="button" class="close" data-dismiss="edit" aria-label="Close" >
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        @endif

                        @if(session('hapus'))
                        <div class="alert alert-danger alert-dismissible fade show" role="hapus">
                        <strong> {{ session('hapus') }}</strong>
                        <button onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Data?') || event.stopImmediatePropagation()" type="button" class="close" data-dismiss="hapus" aria-label="Close" >
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        @endif
                        
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIK User</th>
                            <th scope="col">Nama User</th>
                            <th scope="col">No. Handphone</th>
                            <th scope="col">Manipulasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $no => $u)
                            <tr>
                            <th scope="row">{{ $user->firstItem() + $no }}</th>
                            <td>{{$u -> nik_user}}</td>
                            <td>{{$u -> nama_user}}</td>
                            <td>{{$u -> no_hp}}</td>
                            <td>
                                <a href="/user/edituser/{{ $u -> id }}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                                <a href="/user/deleteuser/{{ $u -> id }}" class="btn btn-outline-danger"><i class="bi bi-x-square"></i></a>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        <span class="float-right">{{$user->links() }}</span>
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