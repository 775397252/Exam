<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
      {{--  <div class="user-panel">
            <div class="pull-left image">
                <img src="/imgs/avatar/u1.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{auth()->user()->username}}</p>
                <!-- Status -->
                <a><i class="fa fa-circle text-success"></i> 在线</a>
            </div>
        </div>
--}}
        <!-- search form (Optional) -->
      {{--  <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="搜索...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>--}}
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">栏目导航</li>
            <!-- Optionally, you can add icons to the links -->

            <li><a href="/admin"><i class="fa fa-dashboard"></i> <span>控制面板</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-users"></i> <span>权限管理</span> <i class="fa fa-angle-left pull-right"> </i></a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="active"><a href="http://192.168.11.111/admin/permission/index">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle-o"></i>权限列表</a></li>
                    <li><a href="http://192.168.11.111/admin/role/index">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle-o"></i>角色列表</a></li>
                    <li><a href="http://192.168.11.111/admin/user/index">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle-o"></i>用户管理</a></li>
                </ul>
            </li>
            <li class="treeview  ">
                <a href="#"><i class="fa fa-newspaper-o"></i> <span>试卷管理</span> <i class="fa fa-angle-left pull-right"> </i></a>
                <ul class="treeview-menu">
                    <li><a href="http://192.168.11.111/admin/paper/index">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle-o"></i>试卷列表</a></li>
                </ul>
            </li>
            <li class="treeview  ">
                <a href="#"><i class="fa fa-child"></i> <span>学生管理</span> <i class="fa fa-angle-left pull-right"> </i></a>
                <ul class="treeview-menu">
                    <li><a href="http://192.168.11.111/admin/student/index">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-circle-o"></i>学生列表</a></li>
                </ul>
            </li>

        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>