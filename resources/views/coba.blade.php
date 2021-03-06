@extends('layouts.admin')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- include summernote css/js-->
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.js"></script>
  <meta charset="UTF-8">
  <title>Summernote</title>
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.js"></script>
</head>
<body>
  <div class="container">
    <br>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-body">
            <div align="center"><h3>Memorandum</h3></div>
            <form action="{{ url('/edit') }}" class="form-horizontal" role="form" method="POST">
              {!! csrf_field() !!}
              <div>
                <label for="kepada" class="col-md-4 control-label">Kepada</label>
                <div class="col-md-6">
                  <select id="kepada" class="form-control" name="kepada">
                    <option value="0">--Pilih Asal--</option>
                    <option value="Kepala Bagian Sekretariat">Kepala Bagian Sekretariat</option>
                    <option value="Kepala Bagian Tanaman">Kepala Bagian Tanaman</option>
                    <option value="Kepala Bagian Teknik">Kepala Bagian Teknik</option>
                    <option value="Kepala Bagian Teknologi">Kepala Bagian Teknologi</option>
                    <option value="Kepala Bagian Perencanaan & Pengembangan">Kepala Bagian Perencanaan & Pengembangan</option>
                    <option value="Kepala Bagian Keuangan">Kepala Bagian Keuangan</option>
                    <option value="Kepala Bagian Akutansi">Kepala Bagian Akutansi</option>
                    <option value="Kepala Bagian Komersil">Kepala Bagian Komersil</option>
                    <option value="Kepala Bagian TI/TB & Manajemen Resiko">Kepala Bagian TI/TB & Manajemen Resiko</option>
                    <option value="Kepala Bagian SDM">Kepala Bagian SDM</option>
                    <option value="Kepala Bagian Hukum">Kepala Bagian Hukum</option>
                    <option value="Kepala Bagian PKBL">Kepala Bagian PKBL</option>
                    <option value="Kepala Bagian Pelelangan">Kepala Bagian Pelelangan</option>
                    <option value="Kepala Bagian SPI">Kepala Bagian SPI</option>
                  </select>
                </div>
              </div>

              <div>
                <label for="dari" class="col-md-4 control-label">Dari</label>
                <div class="col-md-6">
                  <select id="dari" class="form-control" name="dari">
                    <option value="0">--Pilih Asal--</option>
                    <option value="Kepala Bagian Sekretariat">Kepala Bagian Sekretariat</option>
                    <option value="Kepala Bagian Tanaman">Kepala Bagian Tanaman</option>
                    <option value="Kepala Bagian Teknik">Kepala Bagian Teknik</option>
                    <option value="Kepala Bagian Teknologi">Kepala Bagian Teknologi</option>
                    <option value="Kepala Bagian Perencanaan & Pengembangan">Kepala Bagian Perencanaan & Pengembangan</option>
                    <option value="Kepala Bagian Keuangan">Kepala Bagian Keuangan</option>
                    <option value="Kepala Bagian Akutansi">Kepala Bagian Akutansi</option>
                    <option value="Kepala Bagian Komersil">Kepala Bagian Komersil</option>
                    <option value="Kepala Bagian TI/TB & Manajemen Resiko">Kepala Bagian TI/TB & Manajemen Resiko</option>
                    <option value="Kepala Bagian SDM">Kepala Bagian SDM</option>
                    <option value="Kepala Bagian Hukum">Kepala Bagian Hukum</option>
                    <option value="Kepala Bagian PKBL">Kepala Bagian PKBL</option>
                    <option value="Kepala Bagian Pelelangan">Kepala Bagian Pelelangan</option>
                    <option value="Kepala Bagian SPI">Kepala Bagian SPI</option>
                  </select>
                </div>
              </div>

              <div>
                <label for="nomer" class="col-md-4 control-label">Nomor</label>
                <div class="col-md-6">
                  <input type="text" id="no" class="form-control" name="no">
                </div>
              </div>
              <div>
                <label for="hal" class="col-md-4 control-label">Hal</label>
                <div class="col-md-6">
                  <input type="text" id="hal" class="form-control" name="hal">
                </div>
              </div>

              <div>
                <label for="tanggal" class="col-md-4 control-label">Tanggal</label>
                <div class="col-md-6">
                  <input type="date" id="tanggal" class="form-control" name="tanggal">
                </div>
              </div>


              <div class="col-md-10 col-md-offset-1">
                <textarea id="summernote" type="text" class="form-control" name="isi" >
                </textarea>
              </div>
              <script>
              $(document).ready(function() {
                $('#summernote').summernote();

              });

              $('#summernote').summernote({
                height: 300,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: true                  // set focus to editable area after initializing summernote
              });
              </script>

            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-1 col-md-offset-10">
          <button type="submit" class="btn btn-primary">
            Simpan
          </button>
        </div>
      </div>
    </form>
  </body>
  </html>
  @stop
