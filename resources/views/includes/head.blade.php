  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Document</title>
    <!-- include libraries(jQuery, bootstrap) -->
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

  @if (auth()->check())<meta name="csrf-token" content="{{ csrf_token() }}" />@endif
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('assets/AdminLTE-2.3.11/bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/font-awesome-4.5.0/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('assets/ionicons-2.0.1/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/AdminLTE-2.3.11/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('assets/AdminLTE-2.3.11/dist/css/skins/_all-skins.min.css') }}">
  @if (auth()->check())<link rel="stylesheet" href="{{ asset('assets/AdminLTE-2.3.11/plugins/datatables/dataTables.bootstrap.css') }}">@endif

  <script src="{{ asset('assets/AdminLTE-2.3.11/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
  <script src="{{ asset('assets/AdminLTE-2.3.11/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/AdminLTE-2.3.11/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
  <script src="{{ asset('assets/AdminLTE-2.3.11/plugins/fastclick/fastclick.js') }}"></script>
  <script src="{{ asset('assets/AdminLTE-2.3.11/dist/js/app.min.js') }}"></script>
  <script src="{{ asset('assets/AdminLTE-2.3.11/bootstrap/js/validator.min.js') }}"></script>
  @if (auth()->check())<script src="{{ asset('assets/AdminLTE-2.3.11/plugins/datatables/jquery.dataTables.min.js') }}"></script>@endif
  @if (auth()->check())<script src="{{ asset('assets/AdminLTE-2.3.11/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>@endif

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
