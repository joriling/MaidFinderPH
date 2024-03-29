

@extends('applicant.layout')
@section('css')

@stop

@section('content')
    <div class="row">
        <div class="card-panel">
            <h6><strong>Find helpers</strong></h6>
            <form action="{{ asset('') }}" method="get">
                <div class="row">
                    <div class="col s12 m12 l6">
                        <select name="location" class="browser-default">
                            @foreach($location as $loc)
                                <option value="{{ $loc['regionid'] }}">{{ $loc['location'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col s12 m12 l6">
                        <select name="jobtype" class="browser-default">
                            @foreach($jobtype as $type)
                                <option value="{{ $type['jobtypeid'] }}">{{ $type['description'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12 l12 center-align">
                        <div class="center-align">
                            <input type="submit" href="{{ asset('helpers') }}" class="btn cyan lighten-3 col s12 l12 m12" value="Find Match"/>

                        </div>
                    </div>
                </div>
            </form>
            <div class="divider"></div>
            <div class="row">
                <p class="center sub"> Suggested Employer<p>
                <div class="col s4 ">
                        <div class="card ">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator " src="{{ asset('public/images/user-bg.jpg') }}">
                                <span class="card-title">
                                    <div class="col s5 ">
                                         <img class="circle responsive-img" src="{{asset('public/images/facebook.jpg')}}" alt=""> <!-- notice the "circle" class -->

                                     </div>
                                    <a class="btn-floating btn-large waves-effect waves-light btn tooltipped right pink" data-position="right" data-delay="50" data-tooltip="Add to Shortlist"><i class="mdi mdi-heart"></i></a>

                                </span>

                            </div>

                            <div class="card-content">

                                <span class="card-title activator grey-text text-darken-4">
                                    FName LastName<i class="material-icons right">more_vert</i>
                                </span>

                                <a href="#">position(NANNY)</a>
                                        <div class=" valign-wrapper">
                                                <a href="#" class="yellow-text text-darken-4">
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star-half"></i>
                                                    <i class="mdi mdi-star-outline"></i>
                                                    <i class="mdi mdi-star-outline"></i>
                                                </a>
                                        </div>


                                <div class=" grey-text text-darken-4 valign-wrapper">
                                            <i class="tIcon mdi mdi-account-location tiny"></i>
                                            Location
                                        </div>
                                        <div class=" grey-text text-darken-4 valign-wrapper">
                                            <i class="tIcon mdi mdi-tag-faces tiny"></i>&#8369;
                                            Expected Salary
                                        </div>
                                        <div class=" grey-text text-darken-4 valign-wrapper">
                                            <i class="tIcon mdi mdi-book-open tiny"></i>
                                            Year of Experience
                                        </div>


                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Short Description of Self <i class="material-icons right">close</i> </span>
                                <p>I am a very simple card. I am good at containing small bits of information.
                                    I am convenient because I require little markup to use effectively.</p>
                            </div>
                </div>
                </div>
    <div class="col s4 ">
        <div class="card ">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator " src="{{ asset('public/images/user-bg.jpg') }}">
                                <span class="card-title">
                                    <div class="col s5 ">
                                        <img class="circle responsive-img" src="{{asset('public/images/facebook.jpg')}}" alt=""> <!-- notice the "circle" class -->

                                    </div>
                                    <a class="btn-floating btn-large waves-effect waves-light btn tooltipped right pink" data-position="right" data-delay="50" data-tooltip="Add to Shortlist"><i class="mdi mdi-heart"></i></a>

                                </span>

            </div>

            <div class="card-content">

                                <span class="card-title activator grey-text text-darken-4">
                                    FName LastName<i class="material-icons right">more_vert</i>
                                </span>

                <a href="#">position(NANNY)</a>
                <div class=" valign-wrapper">
                    <a href="#" class="yellow-text text-darken-4">
                        <i class="mdi mdi-star"></i>
                        <i class="mdi mdi-star"></i>
                        <i class="mdi mdi-star-half"></i>
                        <i class="mdi mdi-star-outline"></i>
                        <i class="mdi mdi-star-outline"></i>
                    </a>
                </div>


                <div class=" grey-text text-darken-4 valign-wrapper">
                    <i class="tIcon mdi mdi-account-location tiny"></i>
                    Location
                </div>
                <div class=" grey-text text-darken-4 valign-wrapper">
                    <i class="tIcon mdi mdi-tag-faces tiny"></i>&#8369;
                    Expected Salary
                </div>
                <div class=" grey-text text-darken-4 valign-wrapper">
                    <i class="tIcon mdi mdi-book-open tiny"></i>
                    Year of Experience
                </div>


            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Short Description of Self <i class="material-icons right">close</i> </span>
                <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
            </div>
        </div>
    </div>
    <div class="col s4 ">
        <div class="card ">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator " src="{{ asset('public/images/user-bg.jpg') }}">
                                <span class="card-title">
                                    <div class="col s5 ">
                                        <img class="circle responsive-img" src="{{asset('public/images/facebook.jpg')}}" alt=""> <!-- notice the "circle" class -->

                                    </div>
                                    <a class="btn-floating btn-large waves-effect waves-light btn tooltipped right pink" data-position="right" data-delay="50" data-tooltip="Add to Shortlist"><i class="mdi mdi-heart"></i></a>

                                </span>

            </div>

            <div class="card-content">

                                <span class="card-title activator grey-text text-darken-4">
                                    FName LastName<i class="material-icons right">more_vert</i>
                                </span>

                <a href="#">position(NANNY)</a>
                <div class=" valign-wrapper">
                    <a href="#" class="yellow-text text-darken-4">
                        <i class="mdi mdi-star"></i>
                        <i class="mdi mdi-star"></i>
                        <i class="mdi mdi-star-half"></i>
                        <i class="mdi mdi-star-outline"></i>
                        <i class="mdi mdi-star-outline"></i>
                    </a>
                </div>


                <div class=" grey-text text-darken-4 valign-wrapper">
                    <i class="tIcon mdi mdi-account-location tiny"></i>
                    Location
                </div>
                <div class=" grey-text text-darken-4 valign-wrapper">
                    <i class="tIcon mdi mdi-tag-faces tiny"></i>&#8369;
                    Expected Salary
                </div>
                <div class=" grey-text text-darken-4 valign-wrapper">
                    <i class="tIcon mdi mdi-book-open tiny"></i>
                    Year of Experience
                </div>


            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Short Description of Self <i class="material-icons right">close</i> </span>
                <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
            </div>
        </div>
    </div>

            </div>
        </div>

    </div>
@stop

@section('js')

@stop