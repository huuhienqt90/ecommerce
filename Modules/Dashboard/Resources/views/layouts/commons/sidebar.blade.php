<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('themes/dashboard/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header text-uppercase">{{ trans('dashboard::dashboard.main-navigation') }}</li>
            <li{{ $menuActive == 'dashboard' ? ' class=active' : '' }}>
                <a href="{{ route('dashboard.dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>{{ trans('dashboard::dashboard.dashboard') }}</span>
                </a>
            </li>
            <li class="treeview{{ $menuActive == 'forum' ? ' active' : '' }}">
                <a href="{{ route('dashboard.category.index') }}">
                    <i class="fa fa-cubes"></i> <span>{{ trans('dashboard::dashboard.ask-doctor') }}</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li{{ $subMenuActive == 'category' ? ' class=active' : '' }}><a href="{{ route('dashboard.category.index') }}"><i class="fa fa-circle-o"></i> {{ trans('dashboard::dashboard.categories') }}</a></li>
                    <li{{ $subMenuActive == 'topic' ? ' class=active' : '' }}><a href="{{ route('dashboard.topic.index') }}"><i class="fa fa-circle-o"></i> {{ trans('dashboard::dashboard.questions') }}</a></li>
                    <li{{ $subMenuActive == 'mail' ? ' class=active' : '' }}><a href="{{ route('dashboard.mail.index') }}"><i class="fa fa-circle-o"></i> {{ trans('dashboard::dashboard.mail') }}</a></li>
                </ul>
            </li>
            <li class="treeview{{ $menuActive == 'users' ? ' active' : '' }}">
                <a href="{{ route('dashboard.user.index') }}">
                    <i class="fa fa-users"></i> <span>{{ trans('dashboard::dashboard.users') }}</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li{{ $subMenuActive == 'user' ? ' class=active' : '' }}><a href="{{ route('dashboard.user.index') }}"><i class="fa fa-circle-o"></i> {{ trans('dashboard::dashboard.users') }}</a></li>
                    <li{{ $subMenuActive == 'user-type' ? ' class=active' : '' }}><a href="{{ route('dashboard.user-type.index') }}"><i class="fa fa-circle-o"></i> {{ trans('dashboard::dashboard.user-type') }}</a></li>
                    <li{{ $subMenuActive == 'user-certificate' ? ' class=active' : '' }}><a href="{{ route('dashboard.user-certificate.index') }}"><i class="fa fa-circle-o"></i> {{ trans('dashboard::dashboard.user-certificate') }}</a></li>
                    <li{{ $subMenuActive == 'user-position' ? ' class=active' : '' }}><a href="{{ route('dashboard.user-position.index') }}"><i class="fa fa-circle-o"></i> {{ trans('dashboard::dashboard.user-position') }}</a></li>
                    <li{{ $subMenuActive == 'user-package' ? ' class=active' : '' }}><a href="{{ route('dashboard.user-package.index') }}"><i class="fa fa-circle-o"></i> {{ trans('dashboard::dashboard.user-package') }}</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
