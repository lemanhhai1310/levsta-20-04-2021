<?php $data["title"] = "Bất động sản"; ?>
<?php $is_home = false; ?>
<?php require "template-parts/layouts/header.php"; ?>
    <div class="home__block01 uk-grid-match uk-overflow-hidden uk-grid-collapse uk-child-width-1-2 uk-child-width-1-4@m" uk-height-viewport="offset-top: true" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom; target: .animation; delay: 300; repeat: false">
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
        );
        foreach ($data as $k => $v): ?>
            <div>
                <div uk-scrollspy-class="<?= ($k%2 == 1) ? 'uk-animation-slide-top' : '' ?>" class="uk-inline-clip uk-transition-toggle animation" tabindex="0">
                    <div class="uk-transition-scale-up uk-height-1-1 uk-transition-opaque uk-background-norepeat uk-background-cover uk-background-center-center" data-src="<?= $v['src'] ?>" uk-img>

                    </div>
                    <a href="#" class="uk-link-toggle uk-position-cover home__block01__bg1 uk-padding-small uk-flex uk-flex-middle uk-flex-center">
                        <div class="uk-text-center" uk-toggle="cls: uk-margin-xlarge-top; mode: media; media: @m">
                            <h2 class="uk-h2 home__block01__title1"><?= $v['txt'] ?></h2>
                        </div>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php require "template-parts/layouts/footer.php"; ?>