<header class="main-header">
  <!-- Logo -->
  <a href="{{ url('/dashboard') }}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>E-Document</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>E-Document</b></span>
  </a>

  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>
    @if (Auth::check())
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="{{ asset('img/default.png') }}" class="user-image" alt="User Image">
                <span class="hidden-xs">{{ Auth::user()->name }}</span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="{{ asset('img/default.png') }}" class="img-circle" alt="User Image">

                  <p>
                    Administrator
                    <small>{{ Auth::user()->name }}</small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="{{ route('logout') }}"
                        class="btn btn-default btn-flat"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                  </div>
                </li>
              </ul>
            </li>
        </ul>
      </div>
        @endif
  </nav>
</header>

<!-- =============================================== -->
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('img/default.png') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Administrator</p>
        Ilmu Komputer IPB
      </div>
    </div>
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li><a href="{{ url('/dashboard/pilihsurat') }}"><b>Create Mail</b></a></li>
      <ul id="tree1">
        <li><a href="{{ url('/inbox') }}">Inbox</a>
          <ul>
            <li><a href="{{ url('dashboard/inbox/memorandum') }}">
              <span>Memorandum</span>
            </a>
          </li>
          <li><a href="{{ url('dashboard/inbox/suratedaran') }}">
            <span>Surat Edaran</span>
          </a>
        </li>
        <li><a href="{{ url('dashboard/inbox/intern') }}">
          <span>Intern</span>
        </a>
      </li>
    </ul>
  </li>
</ul>
<!-- <li><a href="{{ url('/pesan') }}"><span>Inbox</span></a></li> -->
<li><a href="{{ url('/kirimpesan') }}"><b>Sent Mail</b></a></li>
<!-- <li><a><b>Draft</b></a></li>
<li><a><b>Spam</b></a></li> -->
<!--li @if (request()->is('admin/download')) class="active" @endif><a href="{{ url('admin/download') }}"><span>Download</span></a></li-->
</ul><!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>
<style>
.tree, .tree ul {
  margin:0;
  padding:0;
  list-style:none
}
.tree ul {
  margin-left:1em;
  position:relative
}
.tree ul ul {
  margin-left:.5em
}
.tree ul:before {
  content:"";
  display:block;
  width:0;
  position:absolute;
  top:0;
  bottom:0;
  left:0;
  border-left:1px solid
}
.tree li {
  margin:0;
  padding:0 1em;
  line-height:2em;
  color:#369;
  font-weight:700;
  position:relative
}
.tree ul li:before {
  content:"";
  display:block;
  width:10px;
  height:0;
  border-top:1px solid;
  margin-top:-1px;
  position:absolute;
  top:1em;
  left:0
}
.tree ul li:last-child:before {
  background:#fff;
  height:auto;
  top:1em;
  bottom:0
}
.indicator {
  margin-right:5px;
}
.tree li a {
  text-decoration: none;
  color:#369;
}
.tree li button, .tree li button:active, .tree li button:focus {
  text-decoration: none;
  color:#369;
  border:none;
  background:transparent;
  margin:0px 0px 0px 0px;
  padding:0px 0px 0px 0px;
  outline: 0;
}
</style>

<script>
$.fn.extend({
  treed: function (o) {

    var openedClass = 'glyphicon-minus-sign';
    var closedClass = 'glyphicon-plus-sign';

    if (typeof o != 'undefined'){
      if (typeof o.openedClass != 'undefined'){
        openedClass = o.openedClass;
      }
      if (typeof o.closedClass != 'undefined'){
        closedClass = o.closedClass;
      }
    };

    //initialize each of the top levels
    var tree = $(this);
    tree.addClass("tree");
    tree.find('li').has("ul").each(function () {
      var branch = $(this); //li with children ul
      branch.prepend("<i class='indicator glyphicon " + closedClass + "'></i>");
      branch.addClass('branch');
      branch.on('click', function (e) {
        if (this == e.target) {
          var icon = $(this).children('i:first');
          icon.toggleClass(openedClass + " " + closedClass);
          $(this).children().children().toggle();
        }
      })
      branch.children().children().toggle();
    });
    //fire event from the dynamically added icon
    tree.find('.branch .indicator').each(function(){
      $(this).on('click', function () {
        $(this).closest('li').click();
      });
    });
    //fire event to open branch if the li contains an anchor instead of text
    tree.find('.branch>a').each(function () {
      $(this).on('click', function (e) {
        $(this).closest('li').click();
        e.preventDefault();
      });
    });
    //fire event to open branch if the li contains a button instead of text
    tree.find('.branch>button').each(function () {
      $(this).on('click', function (e) {
        $(this).closest('li').click();
        e.preventDefault();
      });
    });
  }
});

//Initialization of treeviews

$('#tree1').treed();

$('#tree2').treed({openedClass:'glyphicon-folder-open', closedClass:'glyphicon-folder-close'});

$('#tree3').treed({openedClass:'glyphicon-chevron-right', closedClass:'glyphicon-chevron-down'});

</script>
