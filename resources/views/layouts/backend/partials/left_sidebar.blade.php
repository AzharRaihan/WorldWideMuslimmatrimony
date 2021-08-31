<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li class="text-muted menu-title">Navigation</li>
                <li class="has_sub">
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect"><span class="badge badge-pill badge-primary float-right">1</span><i class="zmdi zmdi-view-dashboard"></i><span> Dashboard </span> </a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span> Categories </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('admin.looking.index') }}">Looking For</a></li>
                        <li><a href="{{ route('admin.regforwho.index') }}">Registering For Who</a></li>
                        <li><a href="{{ route('admin.maritalstatus.index') }}">Maritalstatus</a></li>
                    </ul>
                </li>
                {{-- <li class="has_sub __web-inspector-hide-shortcut__">
                    <a href="{{ route('registration.index') }}" class="waves-effect"><i class="zmdi zmdi-calendar"></i><span> Registration </span> </a>
                </li> --}}
            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
    </div>
</div>