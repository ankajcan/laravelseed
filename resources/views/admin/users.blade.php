@extends('admin/master_admin')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <div class="col-sm-6">
                        <h5>Users</h5>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{ route('admin.user', ['id' => 'new']) }}" type="button" class="btn btn-primary pull-right">New User</a>
                    </div>
                </div>
                <div class="ibox-content">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Roles</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                <td>
                                    @foreach($user->roles as $role)
                                        <span class="label">{{ $role->name }}</span>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('admin.user', ['id' => $user->id]) }}" type="button" class="btn btn-xs btn-success">Edit User</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
