
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('assets/base/dist/img/download.jpeg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrator</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active menu-open">
          <a href="#">
            <i class="fa fa-barcode"></i> <span>Số phát hành</span>
            {{--  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>  --}}
          </a>
          {{--  <ul class="-menu">
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>  --}}
        </li>
        <li class="">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>Bài viết</span>
            {{--  <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>  --}}
          </a>
        </li>
        <li class="">
          <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>Danh mục</span>
          </a>
        </li>
        <li class="">
          <a href="#">
            <i class="fa fa-picture-o"></i>
            <span>Hình ảnh</span>
          </a>
        </li>
        <li class="">
          <a href="#">
            <i class="fa fa-bars"></i>
            <span>Sidebar</span>
          </a>
        </li>
        <li class="">
          <a href="#">
            <i class="fa fa-eye"></i>
            <span>TOP preview</span>
          </a>
        </li>
        <li class="">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Hội viên</span>
          </a>
        </li>
        <li class="">
          <a href="/admincp/users">
            <i class="fa fa-user-o"></i>
            <span>Users</span>
          </a>
        </li>
        <li class="header">MORE</li>
        <li><a href="/logout"><i class="fa fa-circle-o text-red"></i> <span>Logout</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>