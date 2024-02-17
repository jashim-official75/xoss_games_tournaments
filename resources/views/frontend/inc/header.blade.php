<!-- ------------------------- Header Start ---------------------- -->
<div id="header-wrap" class="pb-80px">
    <section id="header">
        <div class="custom_container">
            <nav class="navbar navbar-expand-lg navber-fixed">
                <a class="navbar-brand" href="{{ route('home') }}" onclick="navigateTo('{{ route('home') }}')"><img src="{{ asset('assets/frontend/img/logo.png') }}"
                        class="logo__img" alt="" /></a>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tournament_rules') }}" onclick="navigateTo('{{ route('tournament_rules') }}')">
                            <img src="{{ asset('assets/frontend/img/rules.png') }}" alt="" />Tournament Rules
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('prizes') }}">
                            <img src="{{ asset('assets/frontend/img/gift.png') }}" alt="" />
                            <span style="position: relative;top:2px">Prizes</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tournament_faq') }}">
                            <img src="{{ asset('assets/frontend/img/faq.png') }}" alt="" />FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tournament_support') }}">
                            <img src="{{ asset('assets/frontend/img/call-center.png') }}" alt="" />Support</a>
                    </li>
                </ul>
                @if (auth()->guard('subscriber')->check())
                    <div class="profie_img" id="profile_pic" onclick="showSidebar()">
                        <div class="active_status">
                        </div>
                        @if (auth()->guard('subscriber')->user()->profile_pic)
                            <img src="{{ asset('uploads/User/Profile/' .auth()->guard('subscriber')->user()->profile_pic) }}"
                                alt="">
                        @else
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxXxAkaZsZ1gZ3PrygUrnBQ6j4taiGtnFpwchadr3TG4whr6O2O5zjT_7w7rf9oQ31yX0&usqp=CAU"
                                alt="">
                        @endif

                    </div>
                @else
                    <a class="nav-link text-white custom_btn sign_in_btn ml-auto" href="{{ route('user.sign_in') }}">
                        Login</a>
             
                        <a class="nav-link text-white custom_btn ml-4" href="{{ route('user.sign_up') }}">SignUp</a>
                @endif
            </nav>
        </div>
    </section>
</div>

<!-- Sidebar -->
@if (auth()->guard('subscriber')->check())
    <div class="sidebar">
        <span class="close_icon" onclick="closeSidebar()"><img src="{{ asset('assets/frontend/img/close.png') }}"
                alt="" /></span>
        <div class="sidebar-content">
            <!-- Sidebar content goes here -->
            <div class="profile_pic">
                @if (auth()->guard('subscriber')->user()->profile_pic)
                    <img src="{{ asset('uploads/User/Profile/' .auth()->guard('subscriber')->user()->profile_pic) }}"
                        alt="">
                @else
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxXxAkaZsZ1gZ3PrygUrnBQ6j4taiGtnFpwchadr3TG4whr6O2O5zjT_7w7rf9oQ31yX0&usqp=CAU"
                        alt="">
                @endif
            </div>
            <h2 class="user_name">{{ auth()->guard('subscriber')->user()->name }}</h2>
            @if (auth()->guard('subscriber')->user()->referr_code)
            <p>Referr Code : {{ auth()->guard('subscriber')->user()->referr_code }}</p>
            @endif
            <p>Number : {{ auth()->guard('subscriber')->user()->phone_num }}</p>
            <div class="profile_edits">
                <ul>
                    {{-- <li>
                        <span><i class="fas fa-tachometer-alt"></i></span> <a href="#">Dashboard</a>
                    </li> --}}
                    <li>
                        <span><i class="far fa-user"></i></span> <a href="{{ route('user.profile') }}">My Profile</a>
                    </li>
                    {{-- <li>
                        <span><i class="far fa-edit"></i></span> <a href="#">Edit Profile</a>
                    </li> --}}
                    <li>
                        <span><i class="fas fa-gamepad"></i></span> <a href="{{ route('user.my_games') }}">My Games</a>
                    </li>
                    <li>
                        <span><i class="far fa-share-square"></i></span> <a href="{{ route('referr') }}">Refer to
                            Friend</a>
                    </li>
                    {{-- <li>
                        <span><i class="fa-solid fa-gift"></i></span> <a href="{{ route('prizes') }}">Prizes</a>
                    </li> --}}
                    <li>
                        <span><i class="fas fa-sign-out-alt"></i></span> <a
                            href="{{ route('user.logout') }}">LogOut</a>
                    </li>
                    {{-- <div class="language py-5">
                        <select name="language" id="language">
                            <option value="0">বাংলা</option>
                            <option value="1">English</option>
                        </select>
                    </div> --}}
                    <ul>
                        <li>
                            <span><i class="fas fa-phone-volume"></i></span> <a href="{{ route('tournament_support') }}">Contact Us</a>
                        </li>
                        <li>
                            <span><i class="fas fa-download"></i></span> <a href="#">Install App</a>
                        </li>
                    </ul>
                </ul>
            </div>
            <div class="short_links">
                <div class="single_row">
                    <a href="https://xoss.games/about-us">About Us</a>
                    <a href="{{ route('tournament_faq') }}">FAQ</a>
                </div>
                <div class="single_row">
                    <a href="https://xoss.games/terms-condition">Terms & Condition</a>
                    <a href="https://xoss.games/privacy-policy">Privacy Policy</a>
                </div>
            </div>
            <div class="socail_icons">
                <div class="icon">
                    <a href="https://www.facebook.com/xoss.games" style="--i:#4267B2;"><i class="fa-brands fa-facebook-f"></i></a>
                </div>
                <div class="icon">
                    <a href="https://www.youtube.com/@xossgames" style="--i:#FF0000;"><i class="fa-brands fa-youtube"></i></a>
                </div>
                <div class="icon">
                    <a href="https://www.linkedin.com/showcase/xoss-games" style="--i:#0072b1;"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <div class="icon">
                    <a href="https://www.instagram.com/xossgames" style="--i:#c72d8d;"><i class="fa-brands fa-instagram"></i></a>
                </div>
                <div class="icon">
                    <a href="https://twitter.com/xossgames" style="--i:#1DA1F2;"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>

        </div>
    </div>
@endif

<!-- Overlay -->
<div class="overlay" onclick="closeSidebar()"></div>

<script>
    
function navigateTo(url) {
  // Use pushState to change the URL without reloading the page
  history.pushState(null, null, url);

  // Load the content of the new page
  loadContent(url);
}

function loadContent(url) {
  // You can use AJAX to fetch the content of the new page
  // Here, we'll just simulate loading content for demonstration purposes
  const contentDiv = document.getElementById('content');
  contentDiv.innerHTML = '<p>Loading...</p>';

  // Simulate loading content after a short delay
  setTimeout(() => {
    contentDiv.innerHTML = `<p>Content for ${url}</p>`;
  }, 1000);
}

// Listen for the popstate event to handle back and forward button clicks
window.addEventListener('popstate', () => {
  // Get the current URL when the back or forward button is clicked
  const currentUrl = window.location.pathname;

  // Load the content for the current URL
  loadContent(currentUrl);
});

// Initial load of content based on the current URL
loadContent(window.location.pathname);
</script>
