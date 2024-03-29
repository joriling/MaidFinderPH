
<?php
$data = null;
if(Session::has('input')) {
    $data = Session::get('input');
}
?>
@extends('home.layout')

@section('content')
    <div class="container s8 animated bounceInUp">
        <div class="row">
            <div class="col s12 m12 l3">
            </div>
            <div class="col s12 m12 l6" style="margin-top:6em;">
                <div class="row">
                            <ul class="collection with-header z-depth-4">
                                <li class="collection-header logHeader2 blue darken-1">
                                    <div class="center white-text">
                                        <i class="mdi mdi-tooltip-edit medium"></i>
                                    </div>
                                    <h6 class="center-align"><strong class="white-text">Register</strong></h6>
                                </li>
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
                                                <div class="input-field blue-grey-text valign-wrapper col s12 m12 l12">
                                                    <i class="material-icons prefix">mail</i>
                                                    <input value="{{ isset($data['email']) ? $data['email'] : '' }}" id="icon_prefix" type="text" name="email" class="validate">
                                                    <label for="icon_prefix ">Email</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field blue-grey-text  valign-wrapper col s12 m12 l12">
                                                    <i class="material-icons prefix">account_circle</i>
                                                    <input value="{{ isset($data['fname']) ? $data['fname'] : '' }}" id="icon_prefix" type="text" name="fname" class="validate">
                                                    <label for="icon_prefix">First Name</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field blue-grey-text  valign-wrapper col s12 m12 l12">
                                                    <i class="material-icons prefix">account_circle</i>
                                                    <input value="{{ isset($data['lname']) ? $data['lname'] : '' }}" id="icon_prefix" type="text" name="lname" class="validate">
                                                    <label for="icon_prefix">Last Name</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field blue-grey-text  valign-wrapper col s12 m12 l12">
                                                    <i class="material-icons prefix">lock</i>
                                                    <input id="icon_prefix" type="password" name="password" class="validate">
                                                    <label for="icon_prefix">Password</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field blue-grey-text  valign-wrapper col s12 m12 l12">
                                                    <i class="material-icons prefix">lock</i>
                                                    <input id="icon_prefix" type="password" name="confirm" class="validate">
                                                    <label for="icon_prefix">Confirm password</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field blue-grey-text  valign-wrapper col s12 m12 l12">
                                                    <input id="icon_prefix" type="submit" name="login" class="btn-large waves-effect waves-light blue-grey darken-2 col s12 m12 l12" value="Register">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="divider horizontal"></div>
                                            </div>

                                            <div class="row">
                                                <div class="input-field  valign-wrapper col s12 m12 l12">
                                                    <button  type="submit" class="btn blue darken-4 waves-effect waves-light col s12"><i class="mdi mdi-facebook-box left"></i>Sign Up Facebook

                                                    </button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12 m12 l12">
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
@stop

@section('css')

@stop

@section('js')

@stop