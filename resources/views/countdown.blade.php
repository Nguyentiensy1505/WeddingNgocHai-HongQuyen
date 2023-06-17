<!-- LOCATION & COUNTDOWN SECTION -->
<section id="location-countdown">
    <div id="snow"></div>
    <div class="image-divider auto-height" style="background-image:url({{ $data['countdown']['image_link'] }});"
         data-stellar-background-ratio="0.5">

        <div class="divider-overlay"></div>

        <!-- Use Center Middle Alignment to align middle the content for fixed-height parallax
        <div class="alignment">
            <div class="v-align center-middle"> -->

        <div class="coundown-content">
            <div class="row">
                <div class="col-md-12 text-center">

                    <div class="banner-text light medium animation fadeInUp" style="letter-spacing:3px;">
                        <h4>*** {{ $data['countdown']['place'] }} ***</h4>
                    </div>

                    <div class="animation fadeInUp">
                        <div id="counting-down">
                            <div id="counting">Counting down</div>
                            <div id="down">to the date</div>
                        </div>
                    </div>

                    <div class="heart-divider animation fadeInUp">
                        <span class="white-line"></span>
                        <i class="de-icon-heart pink-heart"></i>
                        <i class="de-icon-heart white-heart"></i>
                        <span class="white-line"></span>
                    </div>

                    <div class="banner-text light medium wd-date-content">
                        <div class="wd-date-time">11h00</div>
                        <div class="wd-date">
                            <div>Thứ 7</div>
                            <div class="wd-date-of-week">31</div>
                        </div>
                        <div class="wd-date-month">
                            <div>Tháng 12</div>
                            <div>2022</div>
                        </div>
                    </div>
                    <div id="countdown" class="simple-countdown animation fadeInUp"></div>
                </div>
            </div>
        </div>

        <!--</div>
           </div>-->

    </div>
</section>
