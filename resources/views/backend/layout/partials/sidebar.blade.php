<nav class="pcoded-navbar  ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div ">

            <ul class="nav pcoded-inner-navbar ">
                
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link ">
                        <span class="pcoded-micon">
                            <i class="feather icon-user-plus"></i></span><span class="pcoded-mtext">User
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('category.index') }}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Category</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Post Element</label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-box"></i></span><span class="pcoded-mtext">Post</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{ route('post.index') }}">Manage Post</a></li>
                        <li><a href="{{ route('post.create') }}">Add Post</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>