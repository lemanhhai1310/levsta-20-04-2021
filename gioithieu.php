<?php $data["title"] = "Gioi thieu"; ?>
<?php $is_home = false; ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--su menh-->
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-child-width-1-2@m uk-flex-middle" uk-grid>
            <div>
                <div class="uk-flex-center" uk-grid>
                    <div>
                        <div class="uk-grid-10 uk-flex-middle" uk-grid>
                            <div>
                                <img src="images/1x/ico1.png" alt="">
                            </div>
                            <div>
                                <div class="uk-flex-bottom uk-grid-5" uk-grid>
                                    <div>
                                        <div class="home__block02__txt1 uk-text-uppercase">Sứ</div>
                                        <div class="home__block02__txt2 uk-text-uppercase">Mệnh</div>
                                    </div>
                                    <div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div uk-grid>
                    <div class="uk-width-3-5@m">
                        <?php
                        $data = array(
                            array(
                                "title" => "TÂM",
                                "desc" => "Levista cam kết mang đến tới khách hàng các sản phẩm tinh hoa bất động sản và đồng hành với khách hàng trên hành trình sinh lợi bền vững.",
                            ),
                        );
                        foreach ($data as $k => $v): ?>
                            <div class="uk-margin-medium">
                                <div class="tintuc__item2__desc"><?= $v['desc'] ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-margin-medium">
        <img class="uk-width-1-1" src="images/1x/bg-sumenh.png" alt="">
    </div>
</div>
<!--/su menh-->
<!--gia tri cot loi-->
<div class="uk-flex uk-flex-middle uk-section uk-background-norepeat uk-background-cover uk-background-center-center" data-src="images/1x/bg-giatricotloi.png" uk-img uk-height-viewport="offset-top: true;">
    <div class="uk-width-1-1">
        <div class="uk-container">
            <div class="uk-child-width-1-2@m uk-flex-middle" uk-grid>
                <div>
                    <div class="uk-flex-center" uk-grid>
                        <div>
                            <div class="uk-grid-10 uk-flex-middle" uk-grid>
                                <div>
                                    <img src="images/1x/ico1.png" alt="">
                                </div>
                                <div>
                                    <div class="uk-flex-bottom uk-grid-5" uk-grid>
                                        <div>
                                            <div class="home__block02__txt1">GIÁ TRỊ</div>
                                            <div class="home__block02__txt2">CỐT LÕI</div>
                                        </div>
                                        <div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div uk-grid>
                        <div class="uk-width-3-5@m">
                            <?php
                            $data = array(
                                array(
                                    "title" => "TÂM",
                                    "desc" => "Tận tâm đồng hành cùng khách hàng trên mọi khía cạnh sử dụng sản phẩm - dịch vụ.",
                                ),
                                array(
                                    "title" => "TRÍ",
                                    "desc" => "Kinh nghiệm của các chuyên gia trong lĩnh vực bất động sản kết hợp với các giải pháp nhạy bén đúc kết trong mỗi giải pháp cho từng nhu cầu của khách hàng.",
                                ),
                                array(
                                    "title" => "TRƯỜNG",
                                    "desc" => "Bằng một tâm nguyện kiên định,  Levista hướng đến những giá trị phát triển bền vững, trường tồn và tốt hơn mỗi ngày.",
                                ),
                            );
                            foreach ($data as $k => $v): ?>
                            <div class="uk-margin-medium">
                                <div class="about__giatricotloi__title"><?= $v['title'] ?></div>
                                <div class="tintuc__item2__desc"><?= $v['desc'] ?></div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/gia tri cot loi-->
<!--san pham-->
<div class="uk-section-large uk-background-norepeat uk-background-cover uk-background-center-center" data-src="images/1x/bg-sp.png" uk-img uk-height-viewport="offset-top: true;">
    <div class="uk-container">
        <div class="uk-child-width-1-2@m uk-flex-middle" uk-grid>
            <div></div>
            <div>
                <div class="uk-flex-center" uk-grid>
                    <div>
                        <div class="uk-grid-10 uk-flex-middle mb-20 mb-30-m" uk-grid>
                            <div>
                                <img src="images/1x/ico1.png" alt="">
                            </div>
                            <div>
                                <div class="uk-flex-bottom uk-grid-5" uk-grid>
                                    <div>
                                        <div class="home__block02__txt1">SẢN</div>
                                        <div class="home__block02__txt2">PHẨM</div>
                                    </div>
                                    <div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div uk-grid>
                            <div class="uk-width-3-5@m">
                                <div class="about__sanpham__desc">Những sản phẩm Tinh hoa được tuyển chọn kỹ lưỡng, đảm bảo tínH thanh khoản cao, tiềm năng sinh lời dồi dào và bền vững, an toàn pháp lý và đáp ứng toàn diện nhu cầu sử dụng của khách hàng</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/san pham-->
<?php require "template-parts/layouts/doitac.php"; ?>
<?php require "template-parts/layouts/footer.php"; ?>