<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content gray-text browser-default" style="margin-top:5px">

    <li><a class="black-text" href="{{ asset('employer/logout') }}">Logout <i class="mdi mdi-logout right" style="font-size: 1em"></i></a></li>
</ul>
<!-- Dropdown Structure -->
<ul id="dropdown2" class="dropdown-content gray-text browser-default">
    <li><a class="black-text" href="{{ asset('employer/logout') }}">Logout <i class="mdi mdi-logout right" style="font-size: 1em"></i></a></li>
</ul>
<div class="navbar-fixed">
    <nav class="">
        <div class="nav-wrapper navbar-fixed container-fluid">
            <a href="#" data-activates="mobile-demo" class="grey-text button-collapse"><i class="material-icons">menu</i></a>
            <a href="{{asset('/')}}" style="font-family:DancingScript, cursive; margin-left:0;color:#46a7f7; weight:100;font-size:2em;"  class="brand-logo above "><span><img height="55"   src="{{ asset('public/images/header2.png') }}" /></span></a>
            <ul class="right hide-on-med-and-down ">
                <li><a class="white-text" href="{{ asset('employer/home') }}"><strong>Home</strong></a></li>
                <li><a class="white-text" href="{{ asset('helpers') }}"><strong>Find Helpers</strong></a></li>
                <li><a class="white-text" href="{{ asset('helpers') }}"><strong>Subscription</strong></a></li>
                <!-- Dropdown Trigger -->
                <li>
                    <a class="dropdown-button chip light-blue lighten-5" style="color:#5b5b5c;text-transform: capitalize;" data-hover="true" data-beloworigin="true" href="{{ asset('employer/profile') }}" data-activates="dropdown1">{{ $emp['fname'] }}
                        <i class="material-icons right" style="color:#e1f5fe">arrow_drop_down</i>
                        <img src="{{ asset('public/uploads/profile/'.(($emp['profilepic']) != null ? $emp['profilepic'] :'facebook.jpg' )) }}" alt="Contact Person"></a>
                </li>

            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li>
                    <div class="collection black-text">
                        <a class="collection-item black-text" href="{{ asset('employer/home') }}">Home</a>
                        <a class="collection-item black-text" href="{{ asset('employer/shortlist') }}">Shortlist</a>
                        <a class="collection-item black-text" href="{{ asset('job/request') }}">Job request</a>
                        <a class="collection-item black-text" href="{{ asset('employer/message/inbox') }}">Message box</a>
                        <a class="collection-item black-text" href="{{ asset('employer/ads') }}">Publish job ads</a>
                    </div>
                </li>
                <li><a class="black-text" href="{{ asset('helpers') }}">Find helpers</a></li>
                <li><a class="black-text"href="badges.html">Recomendations</a></li>
                <!-- Dropdown Trigger -->
                <li><a class="black-text dropdown-button" href="{{ asset('/employer/profile') }}" data-activates="dropdown2">{{ $emp['fname'] }}<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </div>
    </nav>
</div>
