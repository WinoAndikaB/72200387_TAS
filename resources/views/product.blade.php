@extends('layout/grid') 
@section('title', 'Product')
@section('articles')
  <h1>OUR PRODUCT</h1>
  <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right">
            </div>
        </div>
    </div>
     
    <table class="table ">
      <thead>
        <tr>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <td>
            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80.jpg" alt="" width="180" height="150">
            </td>
            <td>
              <b>Produk 1</b> <br>
              Ini merupakan contoh produk yang dapat ditampilkan pada website ini
            </td>
            <td>
                    <a class="btn btn-info" href="">Show</a>
                    <a class="btn btn-primary" href="">Edit</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
            </td>
        </tr>
        <tr>
            <td>
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1099&q=80.jpg" alt="" width="180" height="150">
            </td>
            <td>
            <b>Produk 2</b> <br>
              Ini merupakan contoh produk yang dapat ditampilkan pada website ini
            </td>
            <td>
                    <a class="btn btn-info" href="">Show</a>
                    <a class="btn btn-primary" href="">Edit</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
            </td>
        </tr>
        <tr>
            <td>
            <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80.jpg" alt="" width="180" height="150">
            </td>
            <td>
            <b>Produk 3</b><br>
              Ini merupakan contoh produk yang dapat ditampilkan pada website ini
            </td>
            <td>
                    <a class="btn btn-info" href="">Show</a>
                    <a class="btn btn-primary" href="">Edit</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
            </td>
        </tr>
        <tr>
            <td>
            <img src="https://images.unsplash.com/photo-1572635196237-14b3f281503f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80.jpg" alt="" width="180" height="150">
            </td>
            <td>
            <b>Produk 4</b><br>
              Ini merupakan contoh produk yang dapat ditampilkan pada website ini
            </td>
            <td>
                    <a class="btn btn-info" href="">Show</a>
                    <a class="btn btn-primary" href="">Edit</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
            </td>
        </tr>
        <tr>
            <td>
            <img src="https://images.unsplash.com/photo-1543512214-318c7553f230?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80.jpg" alt="" width="180" height="150">
            </td>
            <td>
            <b>Produk 5</b><br>
              Ini merupakan contoh produk yang dapat ditampilkan pada website ini
            </td>
            <td>
                    <a class="btn btn-info" href="">Show</a>
                    <a class="btn btn-primary" href="">Edit</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
            </td>
        </tr>
      </tbody>
    </table>
@endsection

