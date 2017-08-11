    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="{{ url('') }}" class="navbar-brand"><b>E-Document PTPN III</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <!-- <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            @if (Auth::guest())
              <li @if (request()->is('daftar')) class="active" @endif><a href="{{url('daftar')}}">Daftar</a></li>
            @else
              <li @if (request()->is('dasbor')) class="active" @endif><a href="{{url('dasbor')}}">Dasbor</a></li>
              <li @if (request()->is('dasbor/penjadwalan')) class="active" @endif><a href="{{url('dasbor/penjadwalan')}}">Penjadwalan</a></li>
              <li @if (request()->is('dasbor/kelompok')) class="active" @endif><a href="{{url('dasbor/kelompok')}}">Kelompok</a></li>
              <li @if (request()->is('dasbor/spp')) class="active" @endif><a href="{{url('dasbor/spp')}}">SPP</a></li>
            @endif
              <li @if (request()->is('jadwal')) class="active" @endif><a href="{{url('jadwal')}}">Jadwal KBM</a></li>
          </ul>
        </div> -->
        <!-- /.navbar-collapse -->
        @if(Auth::check())
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="{{ asset('img/default.png') }}" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{ Auth::users()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                    <img src="{{ asset('img/default.png') }}" class="img-circle" alt="User Image">

                    <p>
                      {{ Auth::users()->name }}
                      <small>{{ Auth::users()->name }}</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="{{ url('dasbor/akun') }}" class="btn btn-default btn-flat">Akun</a>
                    </div>
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
      </div>
      <!-- /.container-fluid -->
    </nav>
