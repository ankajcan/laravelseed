
@extends('settings')


@section('settings_content')

    <div class="panel panel-default">
        <div class="panel-body">
            <form id="update-user" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group">
            <div class="clearfix"></div>
            <div class="col-sm-3 col-xs-12">
                @if($user->avatar)
                    <img id="img-user-avatar" src="{{ $user->avatar->thumb }}" class="img-lg"> <br> <br>
                @else
                    <img id="img-user-avatar" src="http://via.placeholder.com/200x200?text=Avatar" class="img-lg">
                @endif
            </div>
            <div class="col-sm-6 col-xs-12">
                <label class="name">Your Avatar</label><br>
                <a id="btn-avatar-upload" class="" > Update Avatar</a>
                <input type="hidden" id="input-user-avatar" name="avatar" value="" >
            </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <div class="col-xs-12">
                    <label >Your Name</label>
                </div>
                <div class="clearfix"></div>
                <div class="col-sm-6 col-xs-12" data-error="first_name">
                    <input type="text" name="first_name" value="{{ $user->first_name }}" placeholder="First Name" class="form-control" required>
                    <p class="text-danger center error-content"></p>
                </div>
                <div class="col-sm-6 col-xs-12" data-error="last_name">
                    <input type="text" name="last_name" value="{{ $user->last_name }}"  placeholder="Last Name" class="form-control" required>
                    <p class="text-danger center error-content"></p>
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group" data-error="email">
                <div class="col-sm-12 col-xs-12">
                    <label>Email</label>
                </div>
                <div class="clearfix"></div>
                <div class="col-sm-6 col-xs-12">
                    <input type="text" name="email" value="{{ $user->email }}" placeholder="Email Address" class="form-control" required>
                    <p class="text-danger center error-content"></p>
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group" data-error="username">
                <div class="col-sm-12 col-xs-12">
                    <label>Username</label>
                </div>
                <div class="clearfix"></div>
                <div class="col-sm-6 col-xs-12">
                    <input type="text" name="username" value="{{ $user->username }}" placeholder="Username" class="form-control" required>
                    <p class="text-danger center error-content"></p>
                </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
                <div class="col-sm-12 col-xs-12">
                    <label>Password</label>
                </div>
                <div class="clearfix"></div>
                <div class="col-sm-6 col-xs-12">
                    <a href="{{ route('password.request') }}" class="" > Reset Password</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <input type="hidden" name="id" value="{{ $user->id }}" >
                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                </div>
            </div>
            </form>
            <form class="hidden" enctype="multipart/form-data">
                <input id="input-avatar-upload" type="file" name="file" />
            </form>
        </div>
    </div>
@stop
