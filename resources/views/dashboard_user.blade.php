@extends('master')

@section('content')
    <div class="row wrapper bg-muted page-heading m-b-lg">
        <div class="container">
            <div class="col-xs-12">
                <h2>Dashboard</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-xs-12 sidebar">
                    <div class="contact-box center-version">
                        <a href>
                            @if(\Illuminate\Support\Facades\Auth::user()->avatar)
                                <img id="img-user-avatar" src="{{ \Illuminate\Support\Facades\Auth::user()->avatar->url }}" class="img-circle"> <br> <br>
                            @else
                                <img id="img-user-avatar" src="http://via.placeholder.com/200x200?text=Avatar" class="img-circle">
                            @endif

                            <h3 class="m-b-xs">
                                <strong>
                                    {{ \Illuminate\Support\Facades\Auth::user()->first_name }}
                                    {{ \Illuminate\Support\Facades\Auth::user()->last_name }}
                                </strong>
                            </h3>

                            <div class="font-bold">{{ \Illuminate\Support\Facades\Auth::user()->username }}</div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-9 col-xs-12 ">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <i class="fa fa-info-circle"></i> Notifications
                        </div>
                        <div class="panel-body">
                            <h3 class="text-muted text-center">You have no notifications</h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
