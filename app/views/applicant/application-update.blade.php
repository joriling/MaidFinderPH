
@extends('applicant.layout')

@section('content')
    @if(Session::has('error'))
        <?php $error = Session::get('error'); ?>
    @endif
    <div class="row">
        <div class="row">
            <h5>Update job preferences</h5>
        </div>
        <div class="card-panel">
            @if(Session::has('message'))
                <h5 class="orange-text center">{{ Session::get('message') }}</h5>
            @endif
            <form action="{{ asset('/applicant/job/application/edit') }}" method="POST">
                <input type="hidden" name="applicationid" value="{{ $application->applicationid }}" />
                <div class="row">
                    <p><strong class="title">Basic job info</strong></p>
                    <div class="col s12 m12 l4">
                        <label for="location">Location</label>
                        <select name="location" class="browser-default">
                            <option value="" selected>Preffered location</option>
                            @foreach($location as $loc)
                                <option value="{{ $loc->regionid }}" {{ $application->regionid == $loc->regionid ? 'selected' : '' }}>{{ $loc->location }}</option>
                            @endforeach
                        </select>
                        <label class="red-text" for="location">{{ isset($error)? $error->first('location') : '' }}</label>
                    </div>
                    <div class="col s12 m12 l4">
                        <label for="jobtype">Position</label>
                        <select name="jobtype" class="browser-default">
                            <option value="" selected>Position</option>
                            @foreach($jobtype as $job)
                                <option value="{{ $job->jobtypeid }}" {{ $application->jobtypeid == $job->jobtypeid ? 'selected' :'' }}>{{ $job->description }}</option>
                            @endforeach
                        </select>
                        <label class="red-text" for="jobtype">{{ isset($error)? $error->first('position') : '' }}</label>
                    </div>
                    <div class="col s12 m12 l4">
                        <label for="salary">Preffered alary</label>
                        <select name="salary" class="browser-default">
                            <option value="" selected>Salary (pesos)</option>
                            @foreach($salary as $sal)
                                <option value="{{ $sal->salaryid }}" {{ $application->salaryid == $sal->salaryid ? 'selected' : '' }}>{{ $sal->amount_range }}</option>
                            @endforeach
                        </select>
                        <label class="red-text" for="salary">{{ isset($error)? $error->first('salary') : '' }}</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12 l4">
                        <?php $capacity = array('Full Time', 'Part Time'); ?>
                        <label for="capacity">Capacity</label>
                        <select name="capacity" class="browser-default">
                            <option value="" selected>Capacity</option>
                            @foreach($capacity as $key => $value)
                                <option value="{{ $key }}" {{ $application->capacity == $key ? 'selected' : '' }}>{{ $value }}</option>
                            @endforeach
                        </select>
                        <label class="red-text" for="capacity">{{ isset($error)? $error->first('capacity') : '' }}</label>
                    </div>
                    <div class="col s12 m12 l4">
                        <label for="edlevel">Education level</label>
                        <?php $edlevel = array("Elementary", "High School", "College graduate"); ?>
                        <select name="edlevel" class="browser-default">
                            <option value="" selected>Eduction level</option>
                            @foreach($edlevel as $key => $value)
                                <option value="{{ $key }}" {{ $application->edlevel == $key ? 'selected' : '' }}>{{ $value }}</option>
                            @endforeach
                        </select>
                        <label class="red-text" for="edlevel">{{ isset($error)? $error->first('edlevel') : '' }}</label>
                    </div>
                    <div class="col s12 m12 l4">
                        <?php $days = array('Monday', 'Tuesday', 'Wednesday','Thursday', 'Friday','Saturday','Sunday'); ?>
                        <label for="dayof">Preffered day off</label>
                        <select name="dayof" class="browser-default">
                            <option value="" disabled selected>Day off</option>
                            @foreach($days as $key => $value)
                                <option value="{{ $key }}" {{ $application->dayof == $key ? 'selected' :'' }}>{{ $value }}</option>
                            @endforeach
                        </select>
                        <label class="red-text" for="dayof">{{ isset($error)? $error->first('dayof') : '' }}</label>
                    </div>
                </div>
                <div class="row">
                    <p><strong class="title">Job application pitch</strong></p>
                    <div class="col s12 m12 l12">
                        <textarea id="textarea1" placeholder ="Tell the employer why you are best suited for this role. Highlight specific skills and how you can contribute." cols="20" name="pitch" class="materialize-textarea" placeholder="Write here">{{ $application->pitch != null ? $application->pitch : '' }}</textarea>
                        <label class="red-text" for="dayof">{{ isset($error)? $error->first('pitch') : '' }}</label>
                    </div>
                </div>
                <div class="row">
                    <div class="row">
                        <div class="row">
                            <div class="col s12 m12 l3">
                                <p><strong class="title">Perfurmed duties</strong></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m12 l2"></div>
                            <div class="col s12 m12 l6">
                                <table border="0" class="other_duties">
                                    <tr>
                                        <td>
                                            <input type="checkbox" id="test5" name="cooking" value="Cooking" {{ $duties->cooking != null ? 'checked' : '' }}/>
                                            <label for="test5">Cooking</label>
                                        </td>
                                        <td>
                                            <input type="checkbox" id="test6" name="laundry" value="Laundry" {{ $duties->laundry != null ? 'checked' : '' }}/>
                                            <label for="test6">Laundry</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" id="test7" name="gardening" value="gardening" {{ $duties->gardening != null ? 'checked' : '' }}/>
                                            <label for="test7">Gardening</label>
                                        </td>
                                        <td>
                                            <input type="checkbox" id="test8" name="grocery" value="Grocery" {{ $duties->grocery != null ? 'checked' : '' }}/>
                                            <label for="test8">Grocery</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" id="test9" name="cleaning" value="House Cleaning" {{ $duties->cleaning != null ? 'checked' : '' }}/>
                                            <label for="test9">House cleaning</label>
                                        </td>
                                        <td>
                                            <input type="checkbox" id="test10" name="tutoring" value="Tutoring" {{ $duties->tuturing != null ? 'checked' : '' }}/>
                                            <label for="test10">Tutoring</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" id="test11" name="driving" value="Driving" {{ $duties->driving != null ? 'checked' : '' }}/>
                                            <label for="test11">Driving</label>
                                        </td>
                                        <td>
                                            <input type="checkbox" id="test12" name="pet" value="Pet Care" {{ $duties->pet != null ? 'checked' : '' }}/>
                                            <label for="test12">Pet Care</label>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="row">
                                <h1></h1>
                                <div class="col s12 m12 l12">
                                    <p class="center-align">
                                        <button class="btn-large waves-effect light-blue darken-2" type="submit" name="action">Update job application
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

@section('js')
    @parent
    <script>
        $(document).ready(function() {

        });
    </script>
@stop
