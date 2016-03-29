<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{$img_path}users/{$current_id}.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{$user_first_name} {$user_last_name}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        {*<form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>*}
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">ОСНОВНОЕ МЕНЮ</li>
            <li>
                <a href="{$admin_url}registry">
                    <i class="fa fa-th"></i> <span>Реестр</span>
                </a>
            </li>
            <li>
                <a href="{$admin_url}panel">
                    <i class="fa fa-th"></i> <span>Расходы</span>
                </a>
            </li>
            <li>
                <a href="{$admin_url}fuel">
                    <i class="fa fa-th"></i> <span>Топливо</span>
                </a>
            </li>
            <li>
                <a href="{$admin_url}vehicle">
                    <i class="fa fa-th"></i> <span>Машины</span>
                </a>
            </li>
            <li>
                <a href="{$admin_url}worker">
                    <i class="fa fa-th"></i> <span>Водители</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
