<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Blog</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('/my-comments') }}" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                My Comments
              </p>
            </a>
          </li>
          @if (Auth::user()->group_id == 2)
          <li class="nav-item">
            <a href="{{ url('/add-mod') }}" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Add Moderator
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/del-mod') }}" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Delete Moderator
              </p>
            </a>
          </li>
          @endif
          @if (Auth::user()->group_id >= 1)
          <li class="nav-item">
            <a href="{{ url('/add-post') }}" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Add Post
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/edit-post') }}" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Edit Post
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/del-post') }}" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Delete Post
              </p>
            </a>
          </li>
          @endif
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>