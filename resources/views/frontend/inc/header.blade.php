<!-- ------------------------- Header Start ---------------------- -->
<div id="header-wrap" class="pb-80px">
    <section id="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navber-fixed">
                <a class="navbar-brand" href="{{ route('home') }}"><img
                        src="{{ asset('assets/frontend/img/logo.png') }}" class="logo__img" alt="" /></a>
 
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                        Tournamnet Rules</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                        FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                        Support</a>
                            </li>
                        </ul>
                           
                @if (auth()->guard('subscriber')->check())
                <a class="nav-link text-white custom_btn" href="{{ route('user.profile') }}">
                    Profile</a>
                @else
                <a class="nav-link text-white custom_btn" href="{{ route('user.sign_in') }}">
                    Login</a>
                @endif
            </nav>

        </div>
    </section>
</div>




  