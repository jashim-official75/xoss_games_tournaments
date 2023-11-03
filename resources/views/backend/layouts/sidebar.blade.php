<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img">
                <a href="{{ route('home') }}" target="_blank">
                    <img src="{{ asset('assets/backend/images/xoss_games_popup-logo.png') }}" alt="user" />
                </a>
            </div>
            <!-- User profile text-->
            <div class="profile-text">
                <h5>{{ auth()->user()->name }}</h5>
                {{-- <a href="#" class="" data-toggle="tooltip" title="Settings"><i
                        class="mdi mdi-settings"></i></a>
                <a href="#" class="" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a> --}}
                <a href="{{ route('admin.logout') }}" class="" data-toggle="tooltip" title="Logout"><i
                        class="mdi mdi-power"></i></a>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <!---Admin Dashboard Sidebar---->
                <!---Dashboard start----->
                <li class="nav-small-cap">ANALYTICS</li>
                <li> <a class="waves-effect waves-dark" href="{{ route('dashboard') }}" aria-expanded="false"><i
                            class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>
                </li>
                <!---Dashboard end----->
                <!---tournamnent ---->
                <li class=""><a href="#"><i
                            class="mdi mdi-gamepad-variant"></i><span>Tournamnent</span>&nbsp;&nbsp;&nbsp;<i
                            class="mdi mdi-chevron-down"></i></a>
                    <ul>
                        <li> <a class="waves-effect waves-dark" href="{{ route('tournament.game.add') }}"
                                aria-expanded="false"><i class="mdi mdi-gamepad-variant"></i>&nbsp;&nbsp;<span
                                    class="hide-menu">Add Game
                                </span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{ route('tournament.game.index') }}"
                                aria-expanded="false"><i class="mdi mdi-gamepad-variant"></i>&nbsp;&nbsp;<span
                                    class="hide-menu">All Game
                                </span></a>
                        </li>
                    </ul>
                </li>
                <!---tournamnentend---->
                <!---user---->
                <li> <a class="waves-effect waves-dark" href="{{ route('admin.front.user') }}" aria-expanded="false"><i
                            class="mdi mdi-gauge"></i><span class="hide-menu">User </span></a>
                </li>

                <!---prize---->
                <li> <a class="waves-effect waves-dark" href="{{ route('prize.index') }}" aria-expanded="false"><i
                            class="mdi mdi-gauge"></i><span class="hide-menu">Prize </span></a>
                </li>

                <!---subscriber---->
                <li> <a class="waves-effect waves-dark" href="{{ route('admin.tournamant.perticipation') }}"
                        aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Total
                            Participation</span></a>
                </li>
                <!---administrator start----->
                <li class=""><a href="#"><i
                            class="mdi mdi-account-alert"></i><span>Administrator</span>&nbsp;&nbsp;&nbsp;<i
                            class="mdi mdi-chevron-down"></i></a>
                    <ul>
                        <li> <a class="waves-effect waves-dark" href="{{ route('admin.register') }}"
                                aria-expanded="false"><i class="mdi mdi-clipboard-account"></i>&nbsp;&nbsp;<span
                                    class="hide-menu">AdminUser</span></a>
                        </li>
                    </ul>
                </li>
                <!---administrator start----->
                <!---Admin Dashboard Sidebar end---->
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
