
<?php
$data = null;
if(Session::has('input')) {
    $data = Session::get('input');
}
?>
@extends('home.layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col s12 m12 l3">
            </div>
            <div class="col s12 m12 l6" style="margin-top:6em;">
                <div class="row">
                    <div class="card-panel col s12 m12 l12" >
                        <div class="row">
                            <ul class="collection with-header">
                                <li class="collection-header blue darken-1"><h4 class="center-align"><strong class="white-text">Register account</strong></h4></li>
                                <li class="collection-item">
                                    <div class="container">
                                        <div class="row">
                                            @if(Session::has('message'))
                                                <div class="card-panel orange">
                                                    <strong class="white-text">{{ Session::get('message') }}</strong>
                                                </div>
                                            @endif
                                            @if(Session::has('error'))
                                                <div class="left-align">
                                                    @foreach(Session::get('error')->all() as $msg)
                                                        <span class="orange-text">* {{ $msg }}</span><br />
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                        <form action="{{ asset('/user-register')  }}" method="POST">
                                            <div class="row">
                                                <div class="input-field col s12 m12 l10">
                                                    <i class="material-icons prefix">account_circle</i>
                                                    <input value="{{ isset($data['email']) ? $data['email'] : '' }}" id="icon_prefix" type="text" name="email" class="validate">
                                                    <label for="icon_prefix">Email address</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12 m12 l10">
                                                    <i class="material-icons prefix">account_circle</i>
                                                    <input value="{{ isset($data['fname']) ? $data['fname'] : '' }}" id="icon_prefix" type="text" name="fname" class="validate">
                                                    <label for="icon_prefix">First name</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12 m12 l10">
                                                    <i class="material-icons prefix">account_circle</i>
                                                    <input value="{{ isset($data['lname']) ? $data['lname'] : '' }}" id="icon_prefix" type="text" name="lname" class="validate">
                                                    <label for="icon_prefix">Last name</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12 m12 l10">
                                                    <i class="material-icons prefix">lock</i>
                                                    <input id="icon_prefix" type="password" name="password" class="validate">
                                                    <label for="icon_prefix">Password</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12 m12 l10">
                                                    <i class="material-icons prefix">lock</i>
                                                    <input id="icon_prefix" type="password" name="confirm" class="validate">
                                                    <label for="icon_prefix">Confirm password</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12 m12 l10">
                                                    <input id="icon_prefix" type="submit" name="login" class="btn-large green darken-2 waves-green col s12 m12 l12" value="Submit">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12 m12 l10">
                                                    <span>Already have an account? </span><a class="blue-text" href="{{ asset('/user-login') }}">Sign in</a>
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