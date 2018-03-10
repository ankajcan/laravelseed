@extends('admin/master_admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="m-b-md">
                @if($user->id)
                    <h2>User #{{ $user->id }}</h2>
                @else
                    <h2>New User</h2>
                @endif
            </div>
            <form id="update-user" class="form-horizontal">
                @if($user->id)
                <div class="form-group">
                    <label class="col-sm-2 control-label">ID</label>
                    <div class="col-sm-10">
                        {{ $user->id }}
                        <input type="hidden" name="id" value="{{ $user->id }}" >
                    </div>
                </div>
                @endif
                <div class="form-group">
                    <label class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-3" data-error="first_name">
                        <input type="text" name="first_name" class="form-control" placeholder="First name" required value="{{ $user->first_name }}" />
                        <p class="text-danger text-left error-content"></p>
                    </div>
                    <div class="col-sm-3" data-error="last_name">
                        <input type="text" name="last_name" class="form-control" placeholder="Last name" required value="{{ $user->last_name }}" />
                        <p class="text-danger text-left error-content"></p>
                    </div>
                </div>
                <div class="form-group" data-error="email">
                    <label class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-6">
                        <input type="email" name="email" class="form-control" placeholder="Email" required value="{{ $user->email }}" />
                        <p class="text-danger text-left error-content"></p>
                    </div>
                </div>
                @if(!$user->id)
                <div class="form-group" data-error="password">
                    <label class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" required  name="password" placeholder="Choose a Password">
                        <p class="text-danger text-left error-content"></p>
                    </div>
                </div>
                <div class="form-group" data-error="password_confirm">
                    <label class="col-sm-2 control-label">Password repeat</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" required  name="password_confirm" placeholder="Repeat Password">
                        <p class="text-danger text-left error-content"></p>
                    </div>
                </div>
                @endif
                @if($user->id)
                <div class="form-group">
                    <label class="col-sm-2 control-label">Created</label>
                    <div class="col-sm-10">
                        {{ Carbon\Carbon::parse($user->created_at)->format('m/d/Y') }}
                    </div>
                </div>
                @endif
                <div class="form-group">
                    <label class="col-sm-2 control-label">Roles</label>
                    <div class="col-sm-10">
                        @foreach(\Spatie\Permission\Models\Role::all() as $role)
                            <label class="checkbox-inline">
                                <input name="roles[]" type="checkbox" @if($user->hasRole($role->name)) checked @endif value="{{ $role->name }}" id=""> {{ $role->name }}
                            </label>
                        @endforeach
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Avatar</label>
                    <div class="col-sm-10">
                        @if($user->avatar)
                            <img id="img-user-avatar" src="{{ $user->avatar->url }}" class="img-lg"> <br> <br>
                        @else
                            <img id="img-user-avatar" src="http://via.placeholder.com/200x200?text=Avatar" class="img-lg"> <br> <br>
                        @endif
                        <a id="btn-avatar-upload" class="btn btn-success" @click="openUploadDialog"> Upload Photo</a>
                        <input type="hidden" id="input-user-avatar" name="avatar" value="" >
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-8">
                        @if($user->id)
                            <a id="btn-delete-user" data-user-id="{{ $user->id }}" class="btn btn-danger pull-left">Delete User</a>
                            <button type="submit" class="btn btn-primary pull-right">Update User</button>
                        @else
                            <button type="submit" class="btn btn-primary pull-right">Save User</button>
                        @endif
                    </div>
                </div>
            </form>
            <form class="hidden" enctype="multipart/form-data">
                <input id="input-avatar-upload" type="file" name="file" />
            </form>
        </div>
    </div>
@stop
