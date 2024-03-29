<div class="side-nav fixed " style="margin-top: 4.3em; width:22rem; background:#eff0f1">
    <div class="sideNav ">
        <div class="collection" style="border:0">
            <a class="collection-item" href="{{ asset('/employer/hired/list') }}">Hired List<i class="mdi mdi-briefcase-download small right "></i></a>
            <a class="collection-item" href="{{ asset('/employer/hired/list') }}">Shortlist<i class="mdi mdi-format-list-bulleted small right "></i></a>
            <a class="collection-item" href="{{ asset('/employer/job/request') }}">Job request <i class="mdi mdi-human-greeting small right" ></i>
                <?php
                    $app_ad = ApplyAds::where('empid','=', $emp->empid)->get();
                    $count = count($app_ad);
                ?>
                @if($count > 0)
                    <span class="new badge green">{{ $count }}</span>
                @endif
            </a>
            <a class="collection-item" href="{{ asset('/employer/message/inbox') }}">Message <i class="mdi mdi-inbox-arrow-down small right"></i> </a>
            <a class="collection-item" href="{{ asset('/employer/ads') }}">Job ads <i class="mdi mdi-note-plus small right" ></i></a>
        </div>
    </div>
</div>