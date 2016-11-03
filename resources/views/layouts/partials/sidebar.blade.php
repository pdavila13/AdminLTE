<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ url('/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="{{ url('#') }}"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <li class="active"><a href="{{ url('/') }}"><i class="fa fa-home"></i> <span>Home</span></a></li>
            <li><a href="{{ url('about') }}"><i class="fa fa-book"></i><span>Sobre mí</span></a></li>
            <li><a href="{{ url('contact') }}"><i class="fa fa-comments-o"></i> <span>Contacta</span></a></li>
            <li><a href="{{ url('welcome') }}" target="_blank"><i class="fa fa-check"></i> <span>Welcome</span></a></li>

            <li class="header">ETIQUETES</li>
            <li><a href="{{ url('#') }}"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="{{ url('#') }}"><i class="fa fa-circle-o text-yellow"></i> <span>Perillòs</span></a></li>
            <li><a href="{{ url('#') }}"><i class="fa fa-circle-o text-aqua"></i> <span>Informació</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>