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