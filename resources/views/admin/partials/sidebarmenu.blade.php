   <!-- Sidebar Menu -->
   <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
       <li class="nav-item has-treeview menu-closed">
        <a href="#" class="nav-link active">
          <i class="nav-icon fas fa-globe"></i>
          <p>
            Sitio Web
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Posts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              @include('admin.partials.sidebarmenuposts')
              
            </ul>
          </li>
        </li>
      </ul>
      <li class="nav-item has-treeview menu-closed">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Administrar
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="./index3.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Censados</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./index2.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Perfil</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./index3.html" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>Usuarios</p>
           </a>
         </li>
         <li class="nav-item">
          <a href="./index.html" class="nav-link active">
            <i class="far fa-circle nav-icon"></i>
            <p>Roles</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="./index2.html" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Permisos</p>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</nav>
  <!-- /.sidebar-menu -->