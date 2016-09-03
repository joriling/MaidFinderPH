

@extends('home.layout')

@section('content')
    <div class="container-fluid">
        @if(Session::has('auth'))
            <div class="card-panel center pink lighten-6" style="padding: 2px;">
                <h5 class="white-text">{{ Session::get('auth') }}</h5>
            </div>
        @endif
        <div class="row">
            <div class="col s12 m12 l3" >
            </div>
            <div class="col s12 m12 l6" style="margin-top: 6em;">
                <div class="row">
                    <div class="card-panel">
                        <div class="row">
                            <ul class="collection with-header">
                                <li class="collection-header  blue darken-1"><h4 class="center-align"><strong class="white-text">Account Login</strong></h4></li>
                                <li class="collection-item">
                                    <div class="container">
                                        <div class="row">
                                            @if(Session::has('msg'))
                                                <h5 class="center-align orange-text">{{ Session::get('msg') }}</h5>
                                            @endif
                                        </div>
                                        <form action="{{ asset('/user-login')  }}" method="POST">
                                            <div class="row">
                                                <div class="input-field col s12 m12 l12">
                                                    <i class="material-icons prefix">account_circle</i>
                                                    <input id="icon_prefix" type="text" name="email" class="validate">
                                                    <label for="icon_prefix">Email address</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12 m12 l12">
                                                    <i class="material-icons prefix">lock</i>
                                                    <input id="icon_prefix" type="password" name="password" class="validate">
                                                    <label for="icon_prefix">Password</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12 m12 l12">
                                                    <button  type="submit" class="btn-large orange darken-2 waves-orange col s12 m12 l12">Sign In
                                                        <i class="material-icons">lock</i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12 m12 l12">
                                                    <a href="{{ asset('/user-register') }}">Click here to sign up</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l3">

            </div>
        </div>
    </div>
@stop

@section('css')

@stop
@section('js')

@stop