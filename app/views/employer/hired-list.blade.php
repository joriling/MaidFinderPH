

@extends('employer.layout')


@section('content')
    <div class="row">
        <h4>Hire list</h4>
    </div>
    @if($hirelist != null and count($hirelist) > 0)
        <div class="row">
            <ul class="collection">
                @foreach($hirelist as $a)
                    <?php
                    $application = Applications::find($a->applicationid);
                    $app = Applicants::find($application->appid);
                    $jobtype = JobTypes::find($application->jobtypeid);
                    ?>
                    @if($app != null)
                        <li class="collection-item avatar card-panel">
                            <img src="{{ asset('public/uploads/profile/'.(($app['profilepic']) != null ? $app['profilepic'] :'facebook.jpg' )) }}" alt="" class="circle">
                            <h4>{{ $app->fname ." " .$app->lname }}</h4>
                            <p>Applying for - <strong>{{ $jobtype->description }}</strong><br>
                            </p>
                            <a href="{{ asset('/application/view/'.$app->applicationid) }}" class="secondary-content btn green waves-effect">View profile</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    @else
        <div class="row">
            <div class="white" style="padding:10px;">
                <p class="grey-text">Your shortlist is empty. Browse for helper profiles, add them to your shortlist if you like a helper profile. <a class="btn green" href="{{ asset('/helpers') }}">Helpers</a></p>
            </div>
        </div>
    @endif
@stop


@section('js')


@stop


@section('css')