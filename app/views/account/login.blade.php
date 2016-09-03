


@extends('account.layout')
@section('css')
    @parent
    <style>
        body {
            background-color: #DADADA;
        }
        body > .grid {
            height: 100%;
        }
        .image {
            margin-top: -100px;
        }
        .column {
            max-width: 450px;
        }
    </style>
@stop
@section('content')
    <div class="ui middle aligned center aligned grid">
        <div class="column">
            <h2 class="ui teal image header">
                <img src="{{ asset('public/semantic/assets/img/icon.png') }}" class="image">
                <div class="content">
                    Log-in to your account
                </div>
            </h2>
            @if(Session::has('msg'))
                <div class="ui warning message">
                    <div class="header">
                        {{ Session::get('msg') }}
                    </div>
                </div>
            @endif
            <form class="ui large form" action="user-login" method="POST">
                <div class="ui stacked segment">
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            <input type="text" name="email" placeholder="E-mail address">
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="lock icon"></i>
                            <input type="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <input type="submit" class="ui fluid large teal submit button" value='Login' />
                    <div class="ui horizontal divider">
                        Or
                    </div>
                    <a href='facebook-login' class="ui fluid large facebook button">
                        <i class="facebook icon"></i>
                        Login with Facebook
                    </a>
                </div>

                <div class="ui error message"></div>

            </form>

            <div class="ui message">
                New to us? <a href="user-register">Sign Up</a>
            </div>
        </div>
    </div>
@stop
