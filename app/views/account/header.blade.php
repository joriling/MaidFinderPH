<div class="navbar-fixed">
    <nav class="white navHeader">
        <div class="nav-wrapper navbar-fixed container-fluid" >
            <a href="#" data-activates="mobile-demo" class="blue blue-text btn-floating btn-large waves-effect waves-light button-collapse"><i class="material-icons">menu</i></a>
            <a href="{{asset('/')}}" style="font-family:DancingScript, cursive; margin-left:0;color:#46a7f7; weight:100;font-size:2em;"  class="brand-logo above animated bounceInLeft"><span><img height="55"   src="{{ asset('public/images/header.png') }}" /></span></a>
            <ul class="right hide-on-med-and-down ">
                <li class="grey-text">Already have an account?</li>
                <li>
                    <a class="blue-text" style="text-decoration: underline" href="{{ asset('/user-login') }}">Sign in</a>
                </li>
                <!-- Dropdown Trigger -->
            </ul>
        </div>
    </nav>
</div>