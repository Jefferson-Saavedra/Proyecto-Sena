<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{URL::asset('/img/perfil.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrador</p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
      
       

        <li class="treeview">
          <a href="#">
            <i><img src="{{URL::asset('/img/inventory.png')}}"></i>
            <span>suppliers</span>
          </a>
          <ul class="treeview-menu">s
            <li>   <a  href="{{ route('suppliers.index') }}">index suplier </a></li>
        <li>   <a  href="{{ route('suppliers.create') }}">new supplier</a></li> 
          </ul>
        </li>
      
        <li class="treeview">
          <a href="#">
            <i><img src="{{URL::asset('/img/inventory.png')}}"></i>
            <span>clients</span>
          </a>
          <ul class="treeview-menu">s
            <li>   <a  href="{{ route('clients.index') }}">index client </a></li>
        <li>   <a  href="{{ route('clients.create') }}">new client</a></li> 
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i><img src="{{URL::asset('/img/inventory.png')}}"></i>
            <span>product</span>
          </a>
          <ul class="treeview-menu">s
            <li><a  href="{{ route('products.index') }}">index </a></li>
        <li><a href="{{ route('products.create') }}">new product</a></li> 
          </ul>
        </li>

    </section>
    <!-- /.sidebar -->
  </aside>