<section id="our-memories">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-offset-1 col-md-10 text-center">
                <div class="section-title animation fadeInUp">
                    <h1>
                        OUR MEMORIES
                    </h1>
                    <p class="blurb memory-note">
                        Mỗi người đều có một <b>thanh xuân</b> đặc biệt của riêng mình. <br/>
                        Có những <b>thanh xuân</b> trôi qua thật <b>dịu dàng</b>. <br/>
                        Nhưng có những <b>thanh xuân</b> lại day dứt đến <b>khắc cốt ghi tâm</b>. <br/>
                        Và tôi cũng có một <b>thanh xuân</b> của riêng mình ....
                    </p>

                    <div class="heart-divider">
                        <i class="hashtag">#ilyieu</i>
                        <span class="grey-line"></span>
                        <i class="de-icon-heart pink-heart"></i>
                        <i class="de-icon-heart grey-heart"></i>
                        <span class="grey-line"></span>
                        <i class="hashtag">#shmily</i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ROW-2 -->
    <div class="out-memories-container">
        <div class="out-memories-slider">
            <div class="prev no_select"></div>
            <div class="owl_content owl-carousel owl-theme">
                @foreach($data['memories'] as $memory)
                    <div class="item">
                        <img src="{{ $memory['image_link'] }}" alt="" />
                        <p class="img-hashtag-content">
                            @foreach($memory['hashtags'] as $hashtag)
                                <span class="hashtag">#{{ $hashtag }}</span>
                            @endforeach
                            <span class="emoji">{{ $memory['emoji'] }}</span>
                        </p>
                    </div>
                @endforeach
            </div>
            <div class="next no_select"></div>
        </div>
    </div><!-- END of ROW-2 -->
</section>
