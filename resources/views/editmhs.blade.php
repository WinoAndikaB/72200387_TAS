<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>Hello, world!</title>
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
                            @php
                            $bidang_minat = explode(',' , $mahasiswa -> bidang_minat);
                            @endphp
                            <form action="/mahasiswa/updatemhs/{{ $mahasiswa -> id }}" method="POST" class="pt-2 pb-2">
                            @csrf
                            @method('PUT')
                                <h2>Edit Data Mahasiswa</h2>
                                <div class="form-group w-25">
                                    <label>NIM</label>
                                    <input type="number" name="nim" class="form-control" value="{{ $mahasiswa -> nim }}">
                                </div>
                                <div class="form-group w-25">
                                    <label>Nama Mahasiswa</label>
                                    <input type="text" name="nama" class="form-control" value="{{ $mahasiswa -> nama }}">
                                </div>
                                <label>Gender</label>
                                <div class="form-check w-25=">
                                    <input type="radio" name="gender" value="Pria" {{ $mahasiswa -> gender = 'Pria' ? 'checked':'' }} class="form-check-input">
                                    <label>Pria</label>
                                </div>
                                <div class="form-check w-25">
                                    <input type="radio" name="gender" value="Wanita" {{ $mahasiswa -> gender = 'Wanita' ? 'checked':'' }}  class="form-check-input" >
                                    <label>Wanita</label>
                                </div>
                                <div class="form-group w-25">
                                    <label>Jurusan</label>
                                    <select name="jurusan" class="form-control">
                                        <option value="0">Pilih Jurusan</option>
                                        <option value="Sistem Informasi" {{ $mahasiswa->jurusan = 'Sistem Informasi' ? 'selected':'' }}>Sistem Informasi</option>
                                        <option value="Informatika" {{ $mahasiswa -> jurusan = 'Informatika' ? 'selected':'' }}>Informatika</option>
                                        <option value="Manajemen" {{ $mahasiswa -> jurusan = 'Manajemen' ? 'selected':'' }}>Manajemen</option>
                                        <option value="Kedokteran" {{ $mahasiswa -> jurusan = 'Kedokteran' ? 'selected':'' }}>Kedokteran</option>
                                        <option value="Desain Produk" {{ $mahasiswa -> jurusan = 'Desain Produk' ? 'selected':'' }}>Desain Produk</option>
                                        <option value="Arsitek" {{ $mahasiswa -> jurusan = 'Arsitek' ? 'selected':'' }}>Arsitek</option>
                                        <option value="Akutansi" {{ $mahasiswa -> jurusan = 'Akutansi' ? 'selected':'' }}>Akutansi</option>
                                    </select>
                                </div>
                                <label>Bidang Minat</label>
                                <div class="form-check w-25=">
                                    <input type="checkbox" name="bidang_minat[]" value="Mechanical" class="form-check-input" {{ in_array('Mechanical', $bidang_minat) ? 'checked':''}}>
                                    <label>Mechanical</label>
                                </div>
                                <div class="form-check w-25">
                                    <input type="checkbox" name="bidang_minat[]" value="Medical" class="form-check-input" {{ in_array('Medical', $bidang_minat) ? 'checked':''}}>
                                    <label>Medical</label>
                                </div>
                                <div class="form-check w-25">
                                    <input type="checkbox" name="bidang_minat[]" value="Musical" class="form-check-input" {{ in_array('Musical', $bidang_minat) ? 'checked':''}}>
                                    <label>Musical</label>
                                </div>
                                <div class="form-check w-25">
                                    <input type="checkbox" name="bidang_minat[]" value="Computational" class="form-check-input" {{ in_array('Computational', $bidang_minat) ? 'checked':''}}>
                                    <label>Computational</label>
                                </div>
                                <div class="form-check w-25">
                                    <input type="checkbox" name="bidang_minat[]" value="Aesthetic" class="form-check-input" {{ in_array('Aesthetic', $bidang_minat) ? 'checked':''}}>
                                    <label>Aesthetic</label>
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