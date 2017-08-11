@extends('layouts.admin')
@section('content')
<!-- Include Summernote CSS files -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
<!-- Include Summernote JS file -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>

<!-- Main content -->
<section class="content">
  <section class="content-header">
    <h1>
      Surat
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
      <div class="box-body table-responsive">
        <td>
          @foreach($intern1 as $surat)
          {!!$surat->isi!!}
          @endforeach
        </td>
      </div>
    </div>

      <script>
      $(document).ready(function() {
        $('#summernote').summernote();

      });

      $('#summernote').summernote({
        height: 300,                 // set editor height
        minHeight: 470,             // set minimum height of editor
        maxHeight: 500,             // set maximum height of editor
        focus: true                  // set focus to editable area after initializing summernote
      });

      $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus()
      })

      $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
      })
      </script>

      @stop
