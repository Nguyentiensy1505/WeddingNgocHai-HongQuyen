<!--COUPLE SECTION-->
<section id="couple">

    <div class="container">
        <div class="row">

            <!-- SECTION TITLE -->
            <div class="col-md-offset-1 col-md-10 text-center">

                <div class="section-title animation fadeInUp">
                    <h1>
                        HAPPY COUPLE
                    </h1>

                    <div class="heart-divider">
                        <span class="grey-line"></span>
                        <i class="de-icon-heart pink-heart"></i>
                        <i class="de-icon-heart grey-heart"></i>
                        <span class="grey-line"></span>
                    </div>
                </div>
            </div>

            <!-- SECTION CONTENT -->
            <div class="col-md-offset-1 col-md-5">

                <!--PHOTO-ITEM-->
                <div class="photo-item animation fadeInLeft">

                    <!--HER-PHOTO-->
                    <img src="{{ $data['couple']['u_image_link'] }}" alt="" class="hover-animation image-zoom-in">

                    <!--PHOTO CAPTION-->
                    <div class="layer wh95 border-photo-caption hover-animation fade-out">
                        <div class="alignment">
                            <div class="v-align center-bottom">

                                <div>
                                    <div class="heart-divider">
                                        <i class="de-icon-heart pink-heart"></i>
                                        <i class="de-icon-heart white-heart"></i>
                                    </div>
                                    <div class="banner-text red small banner-couple-name" style="letter-spacing:3px;">
                                        <h4>*** Tú Uyên ***</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END of PHOTO CAPTION-->
                </div>
                <!--END of PHOTO-ITEM-->

                <!--ICON LINK-->
                <div class="text-center">
                    <a type="button" class="de-button reverse small" data-toggle="modal" data-target="#happy-modal-u">
                        Chúc mừng
                    </a>
                </div>
                <!--END of ICON LINK-->

                <div class="modal fade happy-modal" id="happy-modal-u" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row no-gutters">
                                    <div class="col-xs-6">
                                        <div class="modal-body modal-content-form align-items-center">
                                            <div class="text w-100 text-center py-5">
                                                <div class="happy-img" style="background-image: url('./images/icons/couple.png');"></div>
                                                <h3 class="mb-4 congrat-title">Gửi lời chúc mừng tới Uyên</h3>
                                                <form action="" class="congratulation-form">
                                                    <input type="hidden" name="type" class="congratulation-type" value="u">
                                                    <div class="form-group d-flex">
                                                        <input name="name" type="text" class="form-control congratulation-name" placeholder="Tên">
                                                    </div>
                                                    <div class="form-group d-flex">
                                                        <input name="content" type="text" class="form-control congratulation-content" placeholder="Lời chúc">
                                                    </div>
                                                    <a href="#" class="de-button de-button-primary small congratulate-submit" data-url="{{ route('congratulate') }}">Gửi liền</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="modal-body modal-content-img text-center qr-code-content">
                                            <img class="qr-code-img" src="{{ $data['couple']['u_image_qr_code_link'] }}">
                                            <p>
                                            <h3 class="mb-4">NGUYEN LE TU UYEN</h3>
                                            <h3>{{ $data['couple']['u_cc_info'] }}</h3>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <!--PHOTO-ITEM-->
                <div class="photo-item animation fadeInRight">

                    <!--HIS-PHOTO-->
                    <img src="{{ $data['couple']['v_image_link'] }}" alt="" class="hover-animation image-zoom-in">

                    <!--PHOTO CAPTION-->
                    <div class="layer wh95 border-photo-caption hover-animation fade-out">
                        <div class="alignment">
                            <div class="v-align center-bottom">

                                <div>

                                    <div class="heart-divider">
                                        <i class="de-icon-heart pink-heart"></i>
                                        <i class="de-icon-heart white-heart"></i>
                                    </div>
                                    <div class="banner-text red small banner-couple-name" style="letter-spacing:3px;">
                                        <h4>*** Quang Vĩnh ***</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END of PHOTO CAPTION-->
                </div>
                <!--END of PHOTO-ITEM-->

                <!--ICON LINK-->
                <div class="text-center">
                    <a type="button" class="de-button reverse small" data-toggle="modal" data-target="#happy-modal-v">
                        Chúc mừng
                    </a>
                </div>
                <!--END of ICON LINK-->

                <div class="modal fade happy-modal" id="happy-modal-v" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row no-gutters">
                                    <div class="col-xs-6">
                                        <div class="modal-body modal-content-img text-center qr-code-content">
                                            <img class="qr-code-img" src="{{ $data['couple']['v_image_qr_code_link'] }}">
                                            <p>
                                            <h3 class="mb-4">NGUYEN QUANG VINH</h3>
                                            <h3>{{ $data['couple']['v_cc_info'] }}</h3>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="modal-body modal-content-form align-items-center">
                                            <div class="text w-100 text-center py-5">
                                                <div class="happy-img" style="background-image: url('./images/icons/couple.png');"></div>
                                                <h3 class="mb-4 congrat-title">Gửi lời chúc mừng tới Vĩnh</h3>
                                                <form action="" class="congratulation-form">
                                                    <input type="hidden" name="type" class="congratulation-type" value="v">
                                                    <div class="form-group d-flex">
                                                        <input name="name" type="text" class="form-control congratulation-name" placeholder="Tên">
                                                    </div>
                                                    <div class="form-group d-flex">
                                                        <input name="content" type="text" class="form-control congratulation-content" placeholder="Lời chúc">
                                                    </div>
                                                    <a href="#" class="de-button de-button-primary small congratulate-submit" data-url="{{ route('congratulate') }}">Gửi liền</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
