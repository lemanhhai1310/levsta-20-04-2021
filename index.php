<?php $data["title"] = "Trang chủ"; ?>
<?php $is_home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="home__blockSlider uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: push">

    <ul class="uk-slideshow-items" uk-height-viewport="offset-top: true;min-height: 300" uk-scrollspy="target: .animation > *; cls: uk-animation-slide-bottom-small; delay: 500; repeat: true;">
        <li>
            <img src="images/1x/bg1.png" alt="" uk-cover>
            <div class="uk-position-cover uk-flex uk-flex-bottom home__blockSlider__overlay">
                <div class="uk-section-large uk-width-1-1">
                    <div class="uk-container">
                        <div uk-grid>
                            <div>
                                <div class="uk-text-center animation">
                                    <h2 class="uk-margin-remove home__blockSlider__title">Mövenpick Hotels & Residences Han River Đà Nẵng</h2>
                                    <p class="uk-margin-remove home__blockSlider__desc">Căn hộ siêu sang tọa lạc đất vàng</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <img src="images/1x/bg2.png" alt="" uk-cover>
            <div class="uk-position-cover uk-flex uk-flex-middle home__blockSlider__overlay">
                <div class="uk-section uk-width-1-1">
                    <div class="uk-container">
                        <div class="uk-flex-right@m" uk-grid>
                            <div class="uk-width-2-5@m">
                                <div class="uk-text-right@m animation">
                                    <h2 class="uk-margin-remove home__blockSlider__title">Risemount Apartment Đà Nẵng </h2>
                                    <p class="uk-margin-remove home__blockSlider__desc">Risemount Apartment Đà Nẵng mang cả không gian hướng ra sông Hàn với tầm nhìn ấn tượng</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <img src="images/1x/bg3.png" alt="" uk-cover>
            <div class="uk-position-cover uk-flex uk-flex-middle home__blockSlider__overlay">
                <div class="uk-section uk-width-1-1">
                    <div class="uk-container">
                        <div uk-grid>
                            <div>
                                <div class="uk-text-center animation">
                                    <h2 class="uk-margin-remove home__blockSlider__title">Radisson BluResort Hội An </h2>
                                    <p class="uk-margin-remove home__blockSlider__desc">Đẳng cấp Nghỉ Dưỡng 5 sao đến từ USA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>

    <div class="uk-light">
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
    </div>

    <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin uk-position-bottom-center"></ul>

</div>
<div class="home__block01 uk-grid-match uk-overflow-hidden uk-grid-collapse uk-child-width-1-2 uk-child-width-1-4@m" uk-height-viewport="offset-top: true" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom; target: .animation; delay: 300; repeat: false">
    <?php
    $data = array(
        array(
            'src' => 'images/1x/bg1.png',
            'txt' => 'VỀ CHÚNG TÔI',
        ),
        array(
            'src' => 'images/chung-cu-haven-park-2.jpg',
            'txt' => 'BẤT ĐỘNG SẢN',
        ),
        array(
            'src' => 'images/1x/bg2.png',
            'txt' => 'DỊCH VỤ',
        ),
        array(
            'src' => 'images/1x/bg3.png',
            'txt' => 'TIN TỨC',
        ),
    );
    foreach ($data as $k => $v): ?>
    <div>
        <div uk-scrollspy-class="<?= ($k%2 == 1) ? 'uk-animation-slide-top' : '' ?>" class="uk-inline-clip uk-transition-toggle animation" tabindex="0">
            <div class="uk-transition-scale-up uk-height-1-1 uk-transition-opaque uk-background-norepeat uk-background-cover uk-background-center-center" data-src="<?= $v['src'] ?>" uk-img>

            </div>
            <a href="#" class="uk-link-toggle uk-position-cover home__block01__bg uk-padding-small uk-flex uk-flex-middle uk-flex-center">
                <div class="uk-text-center" uk-toggle="cls: uk-margin-xlarge-top; mode: media; media: @m">
                    <h2 class="uk-h2 home__block01__title"><?= $v['txt'] ?></h2>
                </div>
            </a>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<div class="uk-section-small">
    <div class="uk-container">
        <div class="uk-grid-10 uk-flex-middle mb-20 mb-30-m" uk-grid>
            <div>
                <img src="images/1x/ico1.png" alt="">
            </div>
            <div>
                <div class="uk-flex-bottom uk-grid-5" uk-grid>
                    <div>
                        <div class="home__block02__txt1">ĐỐI TÁC</div>
                        <div class="home__block02__txt2">CỦA CHÚNG TÔI</div>
                    </div>
                    <div>
                        <img src="images/1x/ico2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div uk-slider>

            <div class="uk-position-relative">

                <div class="uk-slider-container uk-light">
                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m" uk-grid>
                        <?php for ($i=1;$i<=6;$i++): ?>
                            <li>
                                <div class="uk-cover-container uk-background-muted">
                                    <img src="images/noimage.jpg" alt="" uk-cover>
                                    <canvas width="300" height="300"></canvas>
                                </div>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </div>

                <div class="uk-hidden@s uk-light">
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>