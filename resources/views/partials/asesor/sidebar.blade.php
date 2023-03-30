<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset('dashboard') }}/assets/img/profile.jpg" alt="..."
                        class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{-- {{ Auth::guard('user')->user()->nama }} --}}
                            Asesor
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item {{ request()->is('dashboard-asesor/data-asesi','dashboard-asesor/data-pendaftar') ? 'active' : '' }} submenu">
                    <a data-toggle="collapse" href="#base">
                        <i class="fas fa-layer-group"></i>
                        <p>Data</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ request()->is('dashboard-asesor/data-asesi','dashboard-asesor/data-pendaftar') ? 'show' : '' }}" id="base">
                        <ul class="nav nav-collapse">

                            <li class="{{request()->is('dashboard-asesor/data-asesi') ? 'active' : '' }}">
                                <a href="/dashboard-asesor/data-asesi">
                                    <span class="sub-item">Data Asesi</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('dashboard-asesor/data-pendaftar') ? 'active' : '' }}">
                                <a href="/dashboard-asesor/data-pendaftar">
                                    <span class="sub-item">Data Pendaftar</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Master Data</h4>
                </li>
                <li class="nav-item {{ request()->is('dashboard-asesor/skema-sertifikasi') ? 'active' : '' }}">
                    <a href="/dashboard-asesor/skema-sertifikasi">
                        <i class="fas fa-sticky-note"></i>
                        <p>Skema Sertifikasi</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
