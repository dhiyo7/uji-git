    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{asset('images/avatar/'.Auth::user()->avatar)}}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</div>
                    <div class="email">{{Auth::user()->email}}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{route('company.dashboard.profile')}}"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('company.logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="material-icons">input</i>Sign Out</a>
                                 <form id="logout-form" action="{{ route('company.logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="@if (Request::is('dashboard')) active

                    @endif">
                        <a href="{{url('dashboard')}}">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li><li class="@if (Request::is('daftarpelamar')) active

                    @endif">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">layers</i>
                            <span>Data Pelamar</span>
                        </a>
                         <ul class="ml-menu">
                            <li class="@if (Request::is('daftarpelamar')) active @endif">
                                <a href="{{route('company.dashboard.daftarpelamarkerja')}}">Daftar Pelamar Kerja</a>
                            </li>
                            <li>
                                <a href="pages/ui/alerts.html">Dokumen Persyaratan</a>
                            </li>
                            <li>
                                <a href="pages/ui/animations.html">Pelamar Kerja acc</a>
                            </li>
                            <li>
                                <a href="pages/ui/badges.html">Pelamar kerja Decline</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('company.dashboard.dataloker')}}">
                            <i class="material-icons">layers</i>
                            <span>Data Lowongan Kerja</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">swap_calls</i>
                            <span>Log Aktifitas</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->

    </section>
