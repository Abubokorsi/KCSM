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
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Topbar
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('topbar.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Topbar Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('topbar.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Topbar</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage destination
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('destination.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>destination Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('destination.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create destination</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage package
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('package.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>package Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('package.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create package</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('booking.index')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>All Booking</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('message.index')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>All message</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage guide
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('guide.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>guide Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('guide.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create guide</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage client
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('client.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>client Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('client.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create client</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage contact info
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('contact.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>contact Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('contact.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create contact</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                settings
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <form action="{{route('logout')}}" method="POST" id="logout">
                  @csrf
                </form>
                <a type="submit" class="nav-link" onclick="event.preventDefault();
                document.getElementById('logout').submit();
                ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>