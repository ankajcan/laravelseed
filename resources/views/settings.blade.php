@extends('master')

@section('content')

        <div class="row wrapper gray-bg page-heading m-b-lg">
            <div class="container">
                <div class="col-xs-12">
                    <h2>Account</h2>
                    <ol class="breadcrumb gray-bg">
                        <li>
                            <a href>Settings</a>
                        </li>
                        <li class="active">
                            @if(Route::current()->getName() == 'settings.profile') <strong>Profile</strong> @endif
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-xs-12 sidebar">
                        <ul class="nav nav-sidebar">
                            <li class="@if(Route::current()->getName() == 'settings.profile') active @endif">
                                <a href="{{ route('settings.profile') }}">Profile <span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-9 col-xs-12 ">
                        @yield('settings_content')
                    </div>
                </div>
            </div>
        </div>
@stop
