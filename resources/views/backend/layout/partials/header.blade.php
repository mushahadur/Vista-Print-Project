<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">


    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        <a href="#!" class="b-brand">
            <!-- ========   change your logo hear   ============ -->
            <img src="{{ asset('/') }}backend/assets/images/logo.png" alt="" height="60" width="80" class="logo">
            <img src="{{ asset('/') }}backend/assets/images/logo.png" alt="" height="60" width="80" class="logo-thumb">
        </a>
        <a href="#!" class="mob-toggler">
            <i class="feather icon-more-vertical"></i>
        </a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
                <div class="search-bar">
                    <input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
                    <button type="button" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="icon feather icon-bell"></i>
                        <span class="badge badge-pill badge-danger">5</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right notification">
                        <div class="noti-head">
                            <h6 class="d-inline-block m-b-0">Notifications</h6>
                            <div class="float-right">
                                <a href="#!" class="m-r-10">mark as read</a>
                                <a href="#!">clear all</a>
                            </div>
                        </div>
                        <div class="noti-footer">
                            <a href="#!">show all</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown drp-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset('/') }}backend/assets/images/p.png"
                            class="img-radius mx-3" alt="User-Profile-Image" height="40" width="40">
                        <span>{{Auth::user()->name}}<i class="fa fa-chevron-down m-l-5"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <ul class="pro-body">
                            <li><a href="user-profile.html" class="dropdown-item"><i
                                        class="feather icon-user"></i> Profile</a></li>
                            <li><a href="email_inbox.html" class="dropdown-item"><i
                                        class="feather icon-mail"></i> My Messages</a></li>
                            <li><a class="dropdown-item text-danger" href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                                <i class="mr-1 align-middle bx bx-power-off font-size-16 text-danger"></i> Logout
                            </a>
                                <form action="{{route('logout')}}" method="POST" id="logoutForm">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>