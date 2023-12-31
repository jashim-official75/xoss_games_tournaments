@extends('frontend.layouts.web')
@section('frontend_header')
    <title>Xoss Games | Tournaments</title>
@endsection

@section('content')
    <div class="containerBody section">
        <section class="contant_body_profile">
            <form action="{{ route('user.profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="contant_body__logo">
                    <input type="file" id="imageUpload" style="display: none" name="profile_pic"  onchange="document.getElementById('imageshow').src = window.URL.createObjectURL(this.files[0])" />
                    <label for="imageUpload" id="profile_img">
                     <div class="imgUpload">
                        @if ($user->profile_pic)
                        <img class="login_logo" src="{{ asset('uploads/User/Profile/' . $user->profile_pic) }}"
                            alt="" style="border-radius: 50%;" id="imageshow">
                    @else
                        <img class="login_logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxXxAkaZsZ1gZ3PrygUrnBQ6j4taiGtnFpwchadr3TG4whr6O2O5zjT_7w7rf9oQ31yX0&usqp=CAU"
                            alt="" id="imageshow" style="border-radius: 50%;" />
                    @endif
                    <div class="upload_icon" id="upload">
                        <i class="fa-solid fa-camera"></i>
                    </div>
                     </div>
                    </label>
                    @if ($user->name)
                        <p>{{ $user->name }} </p>
                    @else
                        <p>{{ $user->phone_num }}</p>
                    @endif
                    <small>Gaming Account</small>
                </div>
                <div class="user_control-btn pt-4 d-flex justify-content-center">
                    <a href="{{ route('user.logout') }}" class="logout_btn user_btn ml-3"><i
                            class="fas fa-sign-out-alt"></i>&nbsp;Log Out</a>
                </div>
                <div class="contant_body__inputs">
                    <div class="input-icons">
                        @error('name')
                            <div class="eroor_text">{{ $message }}</div>
                        @enderror
                        <div>
                            <div class="icon"><i class="fas fa-user"></i></div>
                            <span>|</span>
                            <input class="input-field" type="text" placeholder="Your Name" name="name"
                                value="{{ $user->name }}" />
                        </div>

                        <div>
                            <div class="icon"><i class="fas fa-phone-alt"></i></div>
                            <span>|</span>
                            <input class="input-field" type="text" placeholder="Your Phone Number" name="phone_num"
                                value="{{ $user->phone_num }}" readonly />
                        </div>

                        <div>
                            <div class="icon"><i class="fas fa-key"></i></div>
                            <span>|</span>
                            <input class="input-field" type="password" placeholder="Old Password" name="password" />
                        </div>

                        <div>
                            <div class="icon"><i class="fas fa-key"></i></div>
                            <span>|</span>
                            <input class="input-field" type="password" placeholder="New Password" name="new_password" />
                            @error('new_password')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>

                    </div>

                    <div>
                        <button type="submit">Save Changes</button>
                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection
