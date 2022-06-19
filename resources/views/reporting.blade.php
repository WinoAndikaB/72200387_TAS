@extends('layout/grid')
@section('articles')
  <h1>REPORTING</h1>
  <p><b>Dalam Reporting ini, anda perlu mengisi laporan produknya dengan menuliskan detail produk tersebut kemudian anda perlu melampirkan foto tersebut</b></p>
  <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
        </div>
    </div>
    
    <form> 
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <img src="" width="300px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    <br>
    <br>

@endsection
