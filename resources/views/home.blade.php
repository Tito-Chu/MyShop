@extends('layouts.index')
@section('content')
    @if ($profile->count() > 0)
        
    @else
        {{--
        <div class="alert alert-danger">
            <strong>You need to update the profile first.  click</strong> <a href="/profile" class="alert-link">here</a>.
        </div>
        --}}
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Update Your Profile First
                            <small>please update your profile to access more functions!</small>
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('profile.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="NameSurname">Fullname</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" id="NameSurname" name="NameSurname" placeholder="Complete Name" value="{{ Auth::user()->name}}" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <div class="form-line">
                                            <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" value="{{ Auth::user()->email}}" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contact">Contact Number</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="contact" name="contactnumber" placeholder="Contact Number">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="form-group">
                                <label for="Address">Address</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" id="Address" name="Address" placeholder="Complete Address">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Gender">Gender</label>
                                        <div class="form-line">
                                            <select class="form-control show-tick" name="gender">
                                                <option disabled>-- Please select --</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="birthdate">Birthdate</label>
                                        <div class="form-line">
                                            <input type="date" class="form-control" id="birthdate" name="birthdate">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <div class="form-line">
                                        <textarea rows="4" class="form-control no-resize" placeholder="Description About Your Self" name="description"></textarea>
                                    </div>
                                    
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary-outline">Add contact</button>
  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
