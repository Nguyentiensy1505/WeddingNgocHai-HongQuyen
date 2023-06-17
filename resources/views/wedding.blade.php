<!-- THE WEDDING SECTION -->
<section id="the-wedding">

    <div class="container">

        <!-- ROW-1 -->
        <div class="row">

            <!-- SECTION TITLE -->
            <div class="col-md-12 text-center">

                <div class="section-title animation fadeInUp">
                    <h2>
                        THE WEDDING
                    </h2>
                    <p class="blurb">
                        Trân trọng kính mời mọi người đến tham dự và chung vui.
                    </p>
                    <div class="heart-divider">
                        <span class="grey-line"></span>
                        <i class="de-icon-heart pink-heart"></i>
                        <i class="de-icon-heart grey-heart"></i>
                        <span class="grey-line"></span>
                    </div>
                    <input type="hidden" id="timeline-now" value="{{ $data['time_now'] }}">
                    <div class="wedding-timeline-block">
                        <div class="timeline-step-bar-wrapper">
                            <div class="timeline-step-bar-progress">
                                <div class="timeline-step-bar">
                                    <div class="timeline-step-progress" style="width: 49%"></div>
                                    @foreach($data['wedding_events'] as $wedding_event)
                                        <div class="timeline-step @if($wedding_event['is_active']){{ 'timeline-step-is-active' }}@endif" data-timeline-date-time="{{ $wedding_event['date_time'] }} +07">
                                            <div class="timeline-step-data">{{ $wedding_event['title'] }}</div>
                                            <div class="event-circle-check">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                                                </svg>
                                            </div>
                                            <img class="timeline-icon" src="{{ $wedding_event['icon'] }}">
                                            <div class="timeline-step-date">
                                                <div class="tls-date">{{ $wedding_event['time'] }}</div>
                                                <div class="tls-time">{{ $wedding_event['date'] }}</div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- END of ROW-1 -->
    </div><!-- END of CONTAINER -->

</section>
