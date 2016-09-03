

@extends('employer.layout')
@section('css')

@stop

@section('content')

    @if(count($ads) > 0)
        <div class="row">
            <div class="white card-panel">
                <h5 class="">Your ads</h5>
                <p><a href="{{ asset('subscription') }}">Subscribe</a> to our basic and premium plans for your ads promotion and helpers job hiring.</p>
                <div class=""><a href="{{ asset('employer/ads') }}">View your ads</a> </div>
            </div>
        </div>
    @else
        <div class="row">
            <div class="white card-panel">
                <h6 class="center-align">Your ads info</h6>
                <div class="center-align"><a href="{{ asset('create/ad') }}" class="btn cyan lighten-3">Create ad now</a></div>
            </div>
        </div>
    @endif

@stop

@section('js')

@stop