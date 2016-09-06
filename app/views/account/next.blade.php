@extends('account.layout')
        @section('content')
            <div class="container" style="height: 25em">
                <div class="row">
                    <div class="col s12 m12 l12" style="margin-top: 6em">
                        <h3 class="ceneter animated flip">Let us know what you need </h3>
                    </div>
                    <div class="col s6 m6 l6 center">
                        I need a Helper
                        <a href="employer">
                            <button class="btn-large light-blue waves-effect waves-light"> Hire
                                <i class="mdi mdi-account-search right"></i>
                            </button>
                        </a>
                    </div>
                    <div class="col s6 m6 l6 center">
                        I need a Job
                        <a href="applicant">
                            <button class="btn-large blue-grey lighten-2 waves-effect waves-light"> Apply
                                <i class="mdi mdi-briefcase right"></i>
                            </button>

                        </a>
                    </div>

                </div>
            </div>
        @stop

@section('js')

@stop

@section('css')
    @parent
    <style>
        .bg {
            opacity: 0.7;
        }
    </style>
    @stop
