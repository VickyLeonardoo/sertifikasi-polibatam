<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset('dashboard') }}/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::guard('user')->user()->nama }}
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in {{ request()->is('dashboard-asesi/identitas','dashboard-asesi/ganti-psswor') ? 'show' : '' }}" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="/dashboard-asesi/identitas">
                                    <span class="link-collapse">Identitas</span>
                                </a>
                            </li>
                            <li>
                                <a href="/dashboard-asesi/ganti-password">
                                    <span class="link-collapse">Password</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item">
                    <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dashboard">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ asset('dashboard') }}/demo1/index.html">
                                    <span class="sub-item">Dashboard 1</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('dashboard') }}/demo2/index.html">
                                    <span class="sub-item">Dashboard 2</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-section" >
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">APL</h4>
                </li>
                <li class="nav-item  {{ request()->is('dashboard-asesi/apl') ? 'active' : '' }}">
                    <a href="/dashboard-asesi/apl">
                        <i class="fas fa-table"></i>
                        <p>APL</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
