<!doctype html>
<html lang="en">
  <HEAD>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </HEAD>
    
    <body>
        <div class=*container*>
          <form action="/form/process" method="POST">
            <div class="form-group">
              <label><b>Nama:</b></label>
              <input type="text" name="text" class="form-control" placeholder="Tulis Nama Disini..." aria-describedby="helpId">

              <label><b>Gender</b></label><br>
                <input type="radio" name="gender" value="1" checked> Laki-laki <br>
                <input type="radio" name="gender" value="0"> Perempuan <br>

              <label><b>Warga Negara:</b></label><br>
              <select name="warga_negara">
                <option value="Indonesia"> Indonesia </option>
                <option value="Inggris"> Inggris </option>
                <option value="Jerman"> Jerman </option>
                <option value="Jepang"> Jepang </option>
                <option value="Perancis"> Perancis </option>
                <option value="China "> China </option>
            </select> 
            <br>
                <label><b>Bahasa:</b></label>
            <br>
                <input type="checkbox" name="bhs[]" value="Indonesia"> Indonesia
                <input type="checkbox" name="bhs[]" value="Inggris"> Inggris
                <input type="checkbox" name="bhs[]" value="Jerman"> Jerman
                <input type="checkbox" name="bhs[]" value="Jepang"> Jepang
                <input type="checkbox" name="bhs[]" value="Perancis"> Perancis
                <input type="checkbox" name="bhs[]" value="Mandarin"> Mandarin

              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </body>
</html>