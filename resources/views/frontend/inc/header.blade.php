<!-- ------------------------- Header Start ---------------------- -->
<div id="header-wrap" class="pb-80px">
    <section id="header">
        <div class="custom_container">
            <nav class="navbar navbar-expand-lg navber-fixed">
                <a class="navbar-brand" href="{{ route('home') }}"><img
                        src="{{ asset('assets/frontend/img/logo.png') }}" class="logo__img" alt="" /></a>
 
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('tournament_rules') }}">
                                        Tournamnet Rules</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('tournament_faq') }}">
                                        FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('tournament_support') }}">
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
                <div class="profie_img" id="profile_pic" onclick="showSidebar()">
                    <div class="active_status">

                    </div>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxXxAkaZsZ1gZ3PrygUrnBQ6j4taiGtnFpwchadr3TG4whr6O2O5zjT_7w7rf9oQ31yX0&usqp=CAU" alt="">
                </div>
            </nav>
        
        </div>
    </section>
</div>

<!-- Sidebar -->
<div class="sidebar">
    <span class="close_icon" onclick="closeSidebar()"><img
        src="{{ asset('assets/frontend/img/close.png') }}"  alt="" /></span>
    <div class="sidebar-content">
        <!-- Sidebar content goes here -->
        <div class="profile_pic">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxXxAkaZsZ1gZ3PrygUrnBQ6j4taiGtnFpwchadr3TG4whr6O2O5zjT_7w7rf9oQ31yX0&usqp=CAU" alt="">
        </div>
        <h2 class="user_name">Jashim Uddin</h2>
        <p>+8801994037306</p>
        <div class="profile_edits">
            <ul>
                <li>
                   <span><i class="fas fa-tachometer-alt"></i></span> <a href="#">Dashboard</a>
                </li>
                <li>
                   <span><i class="far fa-user"></i></span> <a href="#">My Profile</a>
                </li>
                <li>
                   <span><i class="far fa-edit"></i></span> <a href="#">Edit Profile</a>
                </li>
                <li>
                   <span><i class="fas fa-gamepad"></i></span> <a href="#">Played Games</a>
                </li>
                <li>
                   <span><i class="far fa-share-square"></i></span> <a href="#">Refer to Friend</a>
                </li>
                <li>
                   <span><i class="fa-solid fa-gift"></i></span> <a href="#">Prizes</a>
                </li>
                <li>
                   <span><i class="fas fa-sign-out-alt"></i></span> <a href="#">LogOut</a>
                </li>
                <div class="language py-5">
                    <select name="language" id="language">
                        <option value="0">বাংলা</option>
                        <option value="1">English</option>
                    </select>
                </div>
               <ul >
                <li>
                    <span><i class="fas fa-phone-volume"></i></span> <a href="#">Contact Us</a>
                 </li>
                 <li>
                    <span><i class="fas fa-download"></i></span> <a href="#">Install App</a>
                 </li>
               </ul>
            </ul>
        </div>
       <div class="short_links">
        <div class="single_row">
            <a href="#">About Us</a>
            <a href="#">FAQ</a>
        </div>
        <div class="single_row">
            <a href="#">Terms & Condition</a>
            <a href="#">Privacy Policy</a>
        </div>
       </div>
       <div class="socail_icons">
        <div class="icon">
           <a href="#" style="--i:#4267B2;"><i class="fa-brands fa-facebook-f" ></i></a>
        </div>
        <div class="icon">
            <a href="#" style="--i:#FF0000;"><i class="fa-brands fa-youtube" ></i></a>
        </div>
        <div class="icon">
            <a href="#" style="--i:#0072b1;"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <div class="icon">
            <a href="#" style="--i:#c72d8d;" ><i class="fa-brands fa-instagram"></i></a>
        </div>
        <div class="icon">
            <a href="#" style="--i:#1DA1F2;"><i class="fa-brands fa-twitter"></i></a>
        </div>
       </div>

    </div>
</div>

<!-- Overlay -->
<div class="overlay" onclick="closeSidebar()"></div>




  