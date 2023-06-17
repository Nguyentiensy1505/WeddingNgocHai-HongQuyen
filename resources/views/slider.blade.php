<!-- MAIN SLIDER -->
<section id="main-slider" class="flexslider fullscreen">

    <!-- MAIN SLIDER TITLE OUTTER WRAPPER -->
    <div class="slide-title-outter-wrapper">

        <!-- MAIN SLIDER TITLE INNER WRAPPER -->
        <div class="slide-title-inner-wrapper">
            <!-- TITLE -->
            <div class="slide-title align-middle">

                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-6 animation delay1 fadeInUp slider-content">
                            <div id="save-the-date">
                                <div id="save">Save</div>
                                <div id="the-date">The Date</div>
                                <div id="date">
                                    - 13<span class="pink-dot">.</span>11<span class="pink-dot">.</span>22
                                    - 31<span class="pink-dot">.</span>12<span class="pink-dot">.</span>22 -
                                </div>
                            </div>
                            <div class="banner-text light medium" style="letter-spacing:3px">
                                <h4>*** WE ARE GETTING MARRIED ***</h4>
                            </div>
                            <div class="light medium mobile-title" style="letter-spacing:3px">
                                <h4>{{ $data['slider_content']['ja_text_1']  }}</h4>
                                <h4>{{ $data['slider_content']['ja_text_2'] }}</h4>
                            </div>
                            <div class="heart-divider">
                                <span class="white-line" style="width:10px"></span>
                                <i class="de-icon-heart pink-heart"></i>
                                <i class="de-icon-heart white-heart"></i>
                                <span class="white-line" style="width:10px"></span>
                            </div>
                            <div class="clearboth"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-main-title light medium">
                <h4>{{ $data['slider_content']['ja_text_1'] }}</h4>
                <h4>{{ $data['slider_content']['ja_text_2'] }}</h4>
            </div>
        </div><!-- END of MAIN SLIDER TITLE INNER WRAPPER -->

    </div> <!-- END of MAIN SLIDER TITLE OUTTER WRAPPER -->

    <!-- MAIN SLIDER IMAGES -->

    <ul class="slides">
        @foreach($data['slider_images'] as $slider_image)
            <li>
                <!-- SLIDE IMAGE -->
                <div data-stellar-ratio="0.5" class="slide-image"
                     style="background-image:url({{ $slider_image }});">
                </div>

                <!-- SLIDE OVERLAY -->
                <div class="slide-overlay" style="opacity:0.2"> </div>
            </li>
        @endforeach
    </ul><!-- END of MAIN SLIDER IMAGES -->

    <!-- BACKGROUND MUSIC -->
    <div class="video-audio-control">
        <a id="mute-audio" href="#" data-start="unmute" data-mute-icon="de-icon-volume-off"
           data-unmute-icon="de-icon-volume-up">
            <div class="de-icon circle light outline audio-icon inline">
                <i class="de-icon-volume-up"></i>
            </div>
        </a>

        <audio id="music-slider" src="{{ $data['music_link'] }}" autoplay="" loop="">
            Your browser does not support the audio element.
        </audio>
    </div>
    <!-- END oF BACKGROUND MUSIC -->

    <ul class="flex-direction-nav">
        <li>
            <a class="flex-prev" href="#">Previous</a>
        </li>
        <li>
            <a class="flex-next" href="#">Next</a>
        </li>
    </ul>
</section><!-- ENF of MAIN SLIDER -->
