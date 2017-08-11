@extends('layouts.user')
@section('content')
<!-- Include Summernote CSS files -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
<!-- Include Summernote JS file -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>
<!-- Content Wrapper. Contains page content -->
<div class= "content">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Intern
      <small>Kotak Masuk Intern</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href=""><i class="fa fa-dashboard"></i>E-Document</a></li>
      <li><a href="">User</a></li>
      <li><a href="">Sent Mail</a></li>
      <li class="active">Intern</li>
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
            @foreach ($intern as $surat)
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
                <a href="/internedit/{{($value)}}">
                  <button class="btn btn-sm btn-primary edit" >
                    Edit
                  </button>
                </a>
                <!--button class="btn btn-sm btn-danger hapus" onclick="hapus(this)">Hapus</button-->
              </td>
              <td>
                <a href="/internpreview/{{($value)}}">
                  <button class="btn btn-sm btn-primary edit">
                    Preview
                  </button>
                </a>
                <!--button class="btn btn-sm btn-danger hapus" onclick="hapus(this)">Hapus</button-->
                <a href="/interndelete/{{($value)}}">
                  <button class="btn btn-sm btn-primary edit">
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
