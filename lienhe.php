<?php $data["title"] = "Liên hệ"; ?>
<?php $is_home = false; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section">
    <div class="uk-container uk-container-small">
        <div class="uk-flex-bottom uk-child-width-1-2@m" uk-grid>
            <div>
                <h4 class="uk-h4 uk-text-uppercase lienhe__title">Công ty TNHH Le Vista</h4>
                <ul class="uk-list lienhe__box1">
                    <li>
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-auto">
                                <span class="lienhe__box1__w1">Đà Nẵng:</span>
                            </div>
                            <div class="uk-width-expand">
                                <span>Số 159, Đường 3 Tháng 2, Q.Hải Châu, TP.Đà Nẵng</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-auto">
                                <span class="lienhe__box1__w1">Hà Nội:</span>
                            </div>
                            <div class="uk-width-expand">
                                <span>Tầng 2 tòa A, 88 Láng Hạ, Sky City Tower, Hà Nội</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-auto">
                                <span class="lienhe__box1__w1">Hotline:</span>
                            </div>
                            <div class="uk-width-expand">
                                <span>0979 92 19 29</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-auto">
                                <span class="lienhe__box1__w1">E-mail:</span>
                            </div>
                            <div class="uk-width-expand">
                                <span>levista.com.vn@gmail.com</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div>
                <div class="uk-grid-10 uk-flex-middle mb-20 mb-30-m" uk-grid>
                    <div>
                        <img src="images/1x/ico1.png" alt="">
                    </div>
                    <div>
                        <div class="uk-flex-bottom uk-grid-5" uk-grid>
                            <div>
                                <div class="home__block02__txt1">liên hệ</div>
                                <div class="home__block02__txt2">với chúng tôi</div>
                            </div>
                            <div>
                                <img src="images/1x/ico2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <form>
                    <fieldset class="uk-fieldset">

                        <div class="uk-margin">
                            <input class="uk-input lienhe__boxForm__input" type="text" placeholder="Họ và tên: *">
                        </div>

                        <div class="uk-margin">
                            <input class="uk-input lienhe__boxForm__input" type="text" placeholder="Số điện thoại: *">
                        </div>

                        <div class="uk-margin">
                            <input class="uk-input lienhe__boxForm__input" type="text" placeholder="Email: *">
                        </div>

                        <div class="uk-margin">
                            <textarea class="uk-textarea lienhe__boxForm__input" rows="5" placeholder="Lời nhắn: *"></textarea>
                        </div>

                        <div>
                            <button type="submit" class="uk-button uk-button-secondary">Gửi</button>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>