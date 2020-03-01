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
                        <form action="">
                            <div class="form-group">
                                <label for="NameSurname">Fullname</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" id="NameSurname" name="NameSurname" placeholder="Complete Name" value="{{ Auth::user()->name}}" disabled>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Email">Email</label>
                                <div class="form-line">
                                    <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" value="{{ Auth::user()->email}}" disabled>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Address">Address</label>
                                <div class="form-line">
                                    <input type="text" class="form-control" id="Address" name="Address" placeholder="Complete Address">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
