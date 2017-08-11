@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class= "content">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Surat Edaran
      <small>Kotak Masuk Surat Edaran</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href=""><i class="fa fa-dashboard"></i>E-Document</a></li>
      <li><a href="">Admin</a></li>
      <li><a href="">Inbox</a></li>
      <li class="active">Inbox Surat Edaran</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Daftar Surat</h3>
      </div>
      <div class="box-body table-responsive">
        <table class="table table-bordered table-striped" id="dataTable" style="white-space: nowrap;">
          <thead>
            <tr>
              <th>No</th>
              <th>Kepada</th>
              <th>Dari</th>
              <th>Nomor</th>
              <th>Tanggal</th>
              <th>Hal</th>
              <th>Isi</th>
              <th><div align="center">Aksi</div></th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <td></td>
              <td></td>
              <td>Kepada</td>
              <td>Dari</td>
              <td>Tanggal</td>
              <td>Hal</td>
              <td></td>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($surat_edaran as $surat)
            <tr>
              <?php $value = $surat->id ?>
              <td>{{$loop->iteration}}</td>
              <td>{{$surat->kepada}}</td>
              <td>{{$surat->dari}}</td>
              <td>{{$surat->no}}</td>
              <td>{{$surat->tanggal}}</td>
              <td>{{$surat->hal}}</td>
              <td>
                <!-- {{$surat->isi}} -->
                <a href="/suratedaranedit/{{($value)}}">
                  <button class="btn btn-sm btn-primary edit" >
                    Edit
                  </button>
                </a>
              </td>
              <!-- <td> -->
              <!-- <a href="/inboxsuratedaran/{{$loop->iteration}}"><button class="btn btn-sm btn-primary edit" >Edit Data</button></a> -->
              <!--button class="btn btn-sm btn-danger hapus" onclick="hapus(this)">Hapus</button-->
              <!-- </td> -->
              <td>
                <a href="/edaranpreview/{{($value)}}">
                  <button class="btn btn-sm btn-primary edit" onclick="">
                    Preview
                  </button>
                </a>
                <a href="/edarandelete/{{($value)}}">
                  <button class="btn btn-sm btn-primary edit" onclick="">
                    Delete
                  </button>
                </a>
              </td>
            </tr>
          </tfoot>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

</section>

@stop
<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.js"></script>
<meta charset="UTF-8">
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.js"></script>
