<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend')}}/dist/img/logo.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Kazi Communications</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{url('admin/dashboard')}}" class="nav-link @if(Request::segment(2)=='dashboard') active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('topbar.index')}}" class="nav-link @if(Request::segment(2)=='topbar') active @endif">
              <i class="far fa-circle nav-icon"></i>
              <p>Topbar Data</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('destination.index')}}" class="nav-link @if(Request::segment(2)=='destination') active @endif">
              <i class="fa fa-map-marker nav-icon"></i>
              <p>destination Data</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('package.index')}}" class="nav-link @if(Request::segment(2)=='package') active @endif">
              <i class="fas fa-user-friends nav-icon"></i>
              <p>Packages Data</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('booking.index')}}" class="nav-link @if(Request::segment(2)=='booking') active @endif">
            <i class="far fa-circle nav-icon"></i>
              <p>All Booking</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('message.index')}}" class="nav-link @if(Request::segment(2)=='message') active @endif">
            <i class="fas fa-comment-alt nav-icon"></i>
              <p>All message</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('guide.index')}}" class="nav-link @if(Request::segment(2)=='guide') active @endif">
              <i class="far fa-user nav-icon"></i>
              <p>guide Data</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('client.index')}}" class="nav-link @if(Request::segment(2)=='client') active @endif">
              <i class="far fa-user nav-icon"></i>
              <p>client Data</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('contact.index')}}" class="nav-link @if(Request::segment(2)=='contact') active @endif">
              <i class="nav-icon fa fa-address-book"></i>
              <p>  contact Data</p>
            </a>
          </li>
          <li class="nav-item">
            <form action="{{route('logout')}}" method="POST" id="logout">
              @csrf
            </form>
            <a type="submit" class="nav-link" onclick="event.preventDefault();
            document.getElementById('logout').submit();
            ">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>