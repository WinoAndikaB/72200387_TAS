<!doctype html>
<html lang="en">
  <HEAD>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </HEAD>
    <title>UKDW - @yield('title', 'Default Title')</title>

    <body>
    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <nav class="navbar navbar-dark bg-dark rounded-bottom">
            <a class="navbar-brand" href="#"><i class="bi bi-house-fill"></i></a>
            <img src="https://1.bp.blogspot.com/-VVqX3nlqiRs/XVy4krJV_OI/AAAAAAAAAfc/jSM7NmN2-dYescO3AC_28fhb-DHYoQiUACLcBGAs/s1600/33.UKDW.png.jpg" alt="" width="80" height="80" class="left">
            <div class="btn-group dropleft">
            <button type="button" class="btn btn-info bg-dark dropdown-toggle" datatoggle="dropdown" aria-haspopup="true" aria-expanded="false">
            </button>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Logout</a>
            </div>
          </div>
          </nav>
        </div>
      </div>
    </div>
    
      <div class="container-fluid">
      <div class="row">
      <div class="row">
        <div class="col-lg-2">
          
        {{-- NAVS --}}
          @include('layout/navbar')
          <br>
          <br>
          </div>

          <div class="col-lg-8">
          {{-- Aticle --}}
           @yield('articles')

           <br>
          <br>
          </div>

        <div class="col-lg-2 border ">
          <ul>
          <b>Phone Number</b>
            <li>Wino : 0812-4237-6466</li>
            <b>Email</b>
            <li>wino.andika@si.ukdw.ac.id</li>
            <b>YouTube</b>
            <li>Wino Andika Batara</li>
          </ul>
          </div>
      </div>
    
      
      <br>
    <br>
  <div class="container-fluid">
  <nav class="navbar p-2 bg-dark">
    <div class="row">
      <div class="col-lg-12">
      <span class="badge badge-pill badge-white text-light text-center"><i
      class="bi bi-at"></i>72200387 - Wino Andika Batara</span>
      </div>
    </div>
  </nav>
 </div>
 

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </body>
</html>
