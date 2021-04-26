<?php $data["title"] = "Tin tuc"; ?>
<?php $is_home = false; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section">
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-1-3@m">
                <ul class="uk-nav uk-nav-default tintuc__nav">
                    <li class="uk-active"><a href="">THỊ TRƯỜNG BẤT ĐỘNG SẢN</a></li>
                    <li><a href="">CHÍNH SÁCH - THÔNG TIN QUY HOẠCH</a></li>
                    <li><a href="">TÀI CHÍNH - CHỨNG KHOÁN</a></li>
                    <li><a href="">LUẬT - PHÁP LÝ</a></li>
                    <li><a href="">HOẠT ĐỘNG CỦA CÔNG TY</a></li>
                    <li><a href="">PHONG THỦY - KIẾN TRÚC</a></li>
                </ul>
            </div>
            <div class="uk-width-expand">
                <div class="uk-margin-large">
                    <div class="uk-grid-7 uk-flex-middle mb-20 mb-30-m" uk-grid>
                        <div>
                            <img src="images/1x/icco1.png" alt="">
                        </div>
                        <div class="uk-width-expand">
                            <div class="tintuc__box1">
                                <div class="uk-child-width-auto uk-flex-between uk-flex-middle" uk-grid>
                                    <div>
                                        <h2 class="uk-h2 uk-margin-remove tintuc__box1__title">TIN TỨC NỔI BẬT</h2>
                                    </div>
                                    <div>
                                        <div uk-form-custom="target: > * > span:first-child">
                                            <select>
                                                <option value="">Sắp xếp</option>
                                                <option value="1">Option 01</option>
                                                <option value="2">Option 02</option>
                                                <option value="3">Option 03</option>
                                                <option value="4">Option 04</option>
                                            </select>
                                            <button class="tintuc__box1__fillter uk-button uk-button-default uk-button-small" type="button" tabindex="-1">
                                                <span></span>
                                                <span uk-icon="icon: chevron-down"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="uk-h3 tintuc__item1__title"><a href="">THỊ TRƯỜNG BẤT ĐỘNG SẢN - CƠ HỘI NÀO DÀNH CHO CÁC NHÀ ĐẦU TƯ?</a></h3>
                    <div class="uk-cover-container">
                        <img src="images/1x/tintuc1.png" alt="" uk-cover>
                        <canvas width="1520" height="950"></canvas>
                    </div>
                </div>
                <div class="uk-margin-large">
                    <div class="uk-grid-7 uk-flex-middle mb-20 mb-30-m" uk-grid>
                        <div>
                            <img src="images/1x/icco1.png" alt="">
                        </div>
                        <div class="uk-width-expand">
                            <div class="tintuc__box1">
                                <div class="uk-child-width-auto uk-flex-between uk-flex-middle" uk-grid>
                                    <div>
                                        <h2 class="uk-h2 uk-margin-remove tintuc__box1__title">TIN GẦN ĐÂY</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div uk-grid>
                        <?php
                        $data = array(
                            array(
                                'src' => 'images/1x/tin1.png',
                                'title' => 'Những đường cong mềm mại trong căn hộ tông 
màu lạnh',
                                'desc' => 'Đây là một căn hộ chung cư hai phòng ngủ, được cải tạo lại sau khi 
gia chủ đã sống gần chục năm. Vì hai con trai đã lớn, họ muốn có
một không gian linh hoạt hơn....',
                            ),
                            array(
                                'src' => 'images/1x/tin2.png',
                                'title' => 'Những đường cong mềm mại trong căn hộ tông 
màu lạnh',
                                'desc' => 'Đây là một căn hộ chung cư hai phòng ngủ, được cải tạo lại sau khi 
gia chủ đã sống gần chục năm. Vì hai con trai đã lớn, họ muốn có
một không gian linh hoạt hơn....',
                            ),
                        );
                        foreach ($data as $k => $v): ?>
                        <div class="uk-width-1-1">
                            <div class="uk-child-width-1-2@m uk-flex-middle" uk-grid>
                                <div>
                                    <div class="uk-cover-container">
                                        <img src="<?= $v['src'] ?>" alt="" uk-cover>
                                        <canvas width="738" height="492"></canvas>
                                        <span class="uk-position-top-left tintuc__item2__date">15.03</span>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="uk-h4 tintuc__item2__title"><a href=""><?= $v['title'] ?></a></h4>
                                    <p class="tintuc__item2__desc"><?= $v['desc'] ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="uk-margin-large">
                    <div class="uk-grid-7 uk-flex-middle mb-20 mb-30-m" uk-grid>
                        <div>
                            <img src="images/1x/icco1.png" alt="">
                        </div>
                        <div class="uk-width-expand">
                            <div class="tintuc__box1">
                                <div class="uk-child-width-auto uk-flex-between uk-flex-middle" uk-grid>
                                    <div>
                                        <h2 class="uk-h2 uk-margin-remove tintuc__box1__title">TIN TỨC KHÁC</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div uk-grid>
                        <?php
                        $data = array(
                            array(
                                'src' => 'images/1x/tin1.png',
                                'title' => 'Những đường cong mềm mại trong căn hộ tông 
màu lạnh',
                                'desc' => 'Đây là một căn hộ chung cư hai phòng ngủ, được cải tạo lại sau khi 
gia chủ đã sống gần chục năm. Vì hai con trai đã lớn, họ muốn có
một không gian linh hoạt hơn....',
                            ),
                            array(
                                'src' => 'images/1x/tin2.png',
                                'title' => 'Những đường cong mềm mại trong căn hộ tông 
màu lạnh',
                                'desc' => 'Đây là một căn hộ chung cư hai phòng ngủ, được cải tạo lại sau khi 
gia chủ đã sống gần chục năm. Vì hai con trai đã lớn, họ muốn có
một không gian linh hoạt hơn....',
                            ),
                            array(
                                'src' => 'images/1x/tin1.png',
                                'title' => 'Những đường cong mềm mại trong căn hộ tông 
màu lạnh',
                                'desc' => 'Đây là một căn hộ chung cư hai phòng ngủ, được cải tạo lại sau khi 
gia chủ đã sống gần chục năm. Vì hai con trai đã lớn, họ muốn có
một không gian linh hoạt hơn....',
                            ),
                            array(
                                'src' => 'images/1x/tin2.png',
                                'title' => 'Những đường cong mềm mại trong căn hộ tông 
màu lạnh',
                                'desc' => 'Đây là một căn hộ chung cư hai phòng ngủ, được cải tạo lại sau khi 
gia chủ đã sống gần chục năm. Vì hai con trai đã lớn, họ muốn có
một không gian linh hoạt hơn....',
                            ),
                        );
                        foreach ($data as $k => $v): ?>
                            <div class="uk-width-1-2@m">
                                <div class="uk-child-width-1-1@m uk-flex-middle uk-grid-small" uk-grid>
                                    <div>
                                        <div class="uk-cover-container">
                                            <img src="<?= $v['src'] ?>" alt="" uk-cover>
                                            <canvas width="738" height="492"></canvas>
                                            <span class="uk-position-top-left tintuc__item2__date">15.03</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="uk-h4 tintuc__item2__title"><a href=""><?= $v['title'] ?></a></h4>
                                        <p class="tintuc__item2__desc"><?= $v['desc'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>