 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.home') }}" class="brand-link">
      <img src="{{ asset('dashboard/dist/img/Trisomia21VALogo.png') }}" alt="Trisomia21 VA Logo" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light"><strong>Trisomia 21 VA</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dashboard/dist/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name ?? ''}}</a>
        </div>
      </div>

      @include('admin.partials.sidebarmenu')
      
    </div>
    <!-- /.sidebar -->
  </aside>