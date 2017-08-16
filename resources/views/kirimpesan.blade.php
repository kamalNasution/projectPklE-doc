@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class= "content">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Sent Mail
      <small>Pesan Terkirim</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href=""><i class="fa fa-dashboard"></i>E-Document</a></li>
      <li><a href="">Admin</a></li>
      <li class="active">Sent Mail</li>
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
            @foreach ($memorandum as $surat)
            <tr>
            <?php $value = $surat->id ?>
            @if ( Auth::user()-> name == $surat->dari)
              
              <td>{{$loop->iteration}}</td>
              <td>{{$surat->kepada}}</td>
              <td>{{$surat->dari}}</td>
              <td>{{$surat->no}}</td>
              <td>{{$surat->tanggal}}</td>
              <td>{{$surat->hal}}</td>
              <td>
           
                <a href="/memorandumedit/{{($value)}}">
                  <button class="btn btn-sm btn-primary edit" >
                    Edit
                  </button>
                </a>
                <!--button class="btn btn-sm btn-danger hapus" onclick="hapus(this)">Hapus</button-->
              </td>
              <td>
                <a href="/memorandumpreview/{{($value)}}">
                  <button class="btn btn-sm btn-primary edit" onclick="">
                    Preview
                  </button>
                </a>
                <!--button class="btn btn-sm btn-danger hapus" onclick="hapus(this)">Hapus</button-->
                <a href="/memorandumdelete/{{($value)}}">
                  <button class="btn btn-sm btn-primary edit" onclick="">
                    Delete
                  </button>
                </a>
                <!--button class="btn btn-sm btn-danger hapus" onclick="hapus(this)">Hapus</button-->
              </td>
            </tr>
              @endif
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section>

@stop
