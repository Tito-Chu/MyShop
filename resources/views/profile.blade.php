@extends('layouts.profile')
@section('content')
    
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-3">
                <div class="card profile-card">
                    <div class="profile-header">&nbsp;</div>
                    <div class="profile-body">
                        <div class="image-area">
                            <img src="../../images/user-lg.jpg" alt="AdminBSB - Profile Image" />
                        </div>
                        <div class="content-area">
                            <h3>{{ Auth::user()->name }}</h3>
                            {{--
                                comming soon for the sellers
                                <p>Web Software Developer</p>
                            --}}
                            <p>
                                @php
                                    $type = Auth::user()->account_type;
                                @endphp
                                @switch($type)
                                    @case(Auth::user()->account_type == 'admin')
                                       Administrator
                                       @break
                                    @case(Auth::user()->account_type == 'seller')
                                        Seller
                                        @break
                                    @case(Auth::user()->account_type == 'buyyer')
                                        Buyyer
                                        @break
                                    @default
                                        
                                @endswitch
                            </p>
                        </div>
                    </div>
                    <div class="profile-footer">
                        <ul>
                            <li>
                                <span>Member Since</span>
                                <span>{{Auth::user()->created_at}}</span>
                            </li>
                            @switch($type)
                                @case(Auth::user()->account_type == 'seller')
                                    Total Number Of Products
                                    @break
                                @default
                                    
                            @endswitch
                        </ul>
                        {{--
                            this function is for seller there will be a button here to visit the shop!
                            <button class="btn btn-primary btn-lg waves-effect btn-block">FOLLOW</button>
                        --}}
                    </div>
                </div>
                @if ($profile->count() > 0)
                    @foreach ($profile as $prof)
                        @if ($prof->account_id == Auth::user()->id)
                            <div class="card card-about-me">
                                <div class="header">
                                    <h2>ABOUT ME</h2>
                                </div>
                                <div class="body">
                                    <ul>
                                        <li>
                                            <div class="title">
                                                <i class="material-icons">group</i>
                                                Gender
                                            </div>
                                            <div class="content">
                                                {{ $prof->gender}}
                                            </div>
                                        </li>
        
                                        <li>
                                            <div class="title">
                                                <i class="material-icons">cake</i>
                                                Birthdate
                                            </div>
                                            <div class="content">
                                                {{ $prof->birthdate}}
                                            </div>
                                        </li>
                                        <li>
                                            <div class="title">
                                                <i class="material-icons">location_on</i>
                                                Address
                                            </div>
                                            <div class="content">
                                                {{ $prof->address}}
                                            </div>
                                        </li>
                                        <li>
                                            <div class="title">
                                                <i class="material-icons">phone</i>
                                                Contact Number
                                            </div>
                                            <div class="content">
                                                (+63) {{ $prof->contactnumber}}
                                            </div>
                                        </li>
                                        <li>
                                            <div class="title">
                                                <i class="material-icons">notes</i>
                                                Description
                                            </div>
                                            <div class="content">
                                                {{ $prof->description}}
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    
                @else
                    <div class="card card-about-me">
                        <div class="header">
                            <h2>ABOUT ME</h2>
                        </div>
                        <div class="body">
                            <ul>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">group</i>
                                        Gender
                                    </div>
                                    <div class="content">
                                        Null
                                    </div>
                                </li>

                                <li>
                                    <div class="title">
                                        <i class="material-icons">cake</i>
                                        Birthdate
                                    </div>
                                    <div class="content">
                                       Null
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">location_on</i>
                                        Location
                                    </div>
                                    <div class="content">
                                        Null
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">phone</i>
                                        Contact Number
                                    </div>
                                    <div class="content">
                                        Null
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">notes</i>
                                        Description
                                    </div>
                                    <div class="content">
                                        Null
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endif
                
                
            </div>
            <div class="col-xs-12 col-sm-9">
                <div class="card">
                    <div class="body">
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                                <li role="presentation"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">Profile Settings</a></li>
                                <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab">Change Password</a></li>
                            </ul>

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                    <div class="panel panel-default panel-post">
                                        <div class="panel-heading">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img src="../../images/user-lg.jpg" />
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">
                                                        <a href="#">Marc K. Hammond</a>
                                                    </h4>
                                                    Shared publicly - 26 Oct 2018
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="post">
                                                <div class="post-heading">
                                                    <p>I am a very simple wall post. I am good at containing <a href="#">#small</a> bits of <a href="#">#information</a>. I require little more information to use effectively.</p>
                                                </div>
                                                <div class="post-content">
                                                    <img src="../../images/profile-post-image.jpg" class="img-responsive" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="material-icons">thumb_up</i>
                                                        <span>12 Likes</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="material-icons">comment</i>
                                                        <span>5 Comments</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="material-icons">share</i>
                                                        <span>Share</span>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Type a comment" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default panel-post">
                                        <div class="panel-heading">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img src="../../images/user-lg.jpg" />
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">
                                                        <a href="#">Marc K. Hammond</a>
                                                    </h4>
                                                    Shared publicly - 01 Oct 2018
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="post">
                                                <div class="post-heading">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                                <div class="post-content">
                                                    <iframe width="100%" height="360" src="https://www.youtube.com/embed/10r9ozshGVE" frameborder="0" allowfullscreen=""></iframe>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="material-icons">thumb_up</i>
                                                        <span>125 Likes</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="material-icons">comment</i>
                                                        <span>8 Comments</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="material-icons">share</i>
                                                        <span>Share</span>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Type a comment" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="profile_settings">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="NameSurname" class=" control-label">Fullname</label>
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="NameSurname" name="NameSurname" placeholder="Name Surname" value="{{ Auth::user()->name }}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Email" class="control-label">Email</label>
                                            <div class="form-line">
                                                <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" value="{{ Auth::user()->email}}" disabled>
                                            </div>
                                        </div>
                                        @foreach ($profile as $prof)
                                            @if ($prof->account_id == Auth::user()->id)
                                            <div class="form-group">
                                                <label for="InputExperience" class="control-label">Description</label>
                                                <div class="form-line">
                                                    <textarea class="form-control"  name="InputExperience" rows="3">{{ $prof->description }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="address" class="control-label">Address</label>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="address" value="{{ $prof->address}}">
                                                </div>
                                            </div>

                                            <div class="row container">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="gender">Gender</label>
                                                        <div class="form-line">
                                                            <select class="form-control show-tick">
                                                                @if ($prof->gender == "Male")
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                @else
                                                                    <option value="Female">Female</option>
                                                                    <option value="Male">Male</option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="birthdate">Birthdate</label>
                                                        <div class="form-line">
                                                            <input type="date" name="birthdate" value="{{ $prof->birthdate }}" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="contact">Contact Number</label>
                                                        <div class="form-line">
                                                            <input type="text" name="contact" class="form-control" value="{{ $prof->contactnumber}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        @endforeach
                                        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-danger">Update</button>
                                        </div>
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="OldPassword" class="col-sm-3 control-label">Old Password</label>
                                            <div class="col-sm-9">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" id="OldPassword" name="OldPassword" placeholder="Old Password" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="NewPassword" class="col-sm-3 control-label">New Password</label>
                                            <div class="col-sm-9">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" id="NewPassword" name="NewPassword" placeholder="New Password" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="NewPasswordConfirm" class="col-sm-3 control-label">New Password (Confirm)</label>
                                            <div class="col-sm-9">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" id="NewPasswordConfirm" name="NewPasswordConfirm" placeholder="New Password (Confirm)" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <button type="submit" class="btn btn-danger">SUBMIT</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection