<?php $data["title"] = "Bất động sản"; ?>
<?php $is_home = false; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section uk-background-norepeat uk-flex uk-flex-middle uk-background-cover uk-background-center-center" data-src="images/1x/bg-bds1.png" uk-img uk-height-viewport="offset-top: true">
    <div class="uk-width-1-1">
        <div class="uk-container">
            <div class="uk-child-width-expand@m" uk-grid>
                <div>

                </div>
                <div>

                </div>
                <div>

                </div>
                <div>

                </div>
                <div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
        <?php
        $data = array(
            array(
                'src' => 'images/1x/bg1.png',
                'txt' => 'THE ROYAL
DANANG BOUTIQUE HOTEL & CONDO',
            ),
            array(
                'src' => 'images/chung-cu-haven-park-2.jpg',
                'txt' => 'Risemount Apartment Da Nang
Tokyo Bên Dòng Sông Hàn',
            ),
            array(
                'src' => 'images/1x/bg2.png',
                'txt' => 'THE METROPOLE THU THIEM
THE OPERA RESIDENCES',
            ),
            array(
                'src' => 'images/1x/bg3.png',
                'txt' => 'THE METROPOLE THU THIEM
THE OPERA RESIDENCES',
            ),
            array(
                'src' => 'images/1x/bg1.png',
                'txt' => 'THE ROYAL
DANANG BOUTIQUE HOTEL & CONDO',
            ),
            array(
                'src' => 'images/chung-cu-haven-park-2.jpg',
                'txt' => 'Risemount Apartment Da Nang
Tokyo Bên Dòng Sông Hàn',
            ),
            array(
                'src' => 'images/1x/bg2.png',
                'txt' => 'THE METROPOLE THU THIEM
THE OPERA RESIDENCES',
            ),
            array(
                'src' => 'images/1x/bg3.png',
                'txt' => 'THE METROPOLE THU THIEM
THE OPERA RESIDENCES',
            ),
        );
        foreach ($data as $k => $v): ?>
            <li>
                <div uk-scrollspy-class="<?= ($k%2 == 1) ? 'uk-animation-slide-top' : '' ?>" class="uk-inline-clip uk-transition-toggle animation" tabindex="0">
                    <div class="uk-transition-scale-up uk-transition-opaque uk-cover-container">
                        <img src="<?= $v['src'] ?>" alt="" uk-cover>
                        <canvas width="469" height="975"></canvas>
                    </div>
                    <a href="#" class="uk-link-toggle uk-position-cover home__block01__bg1 uk-padding-small uk-flex uk-flex-middle uk-flex-center">
                        <div class="uk-text-center" uk-toggle="cls: home__block01__marginTop; mode: media; media: @m">
                            <h2 class="uk-h2 home__block01__title1"><?= $v['txt'] ?></h2>
                        </div>
                    </a>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>
<ul class="uk-pagination uk-flex-center" uk-margin>
    <li><a href="#"><span uk-pagination-previous></span></a></li>
    <li><a href="#">1</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">5</a></li>
    <li><a href="#">6</a></li>
    <li class="uk-active"><span>7</span></li>
    <li><a href="#">8</a></li>
    <li><a href="#"><span uk-pagination-next></span></a></li>
</ul>
<?php require "template-parts/layouts/footer.php"; ?>