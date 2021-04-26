<?php $data["title"] = "Tin tuc chi tiet"; ?>
<?php $is_home = false; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section">
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-expand">
                <ul class="uk-breadcrumb">
                    <li><a href="">Trang chủ</a></li>
                    <li><a href="">Tin tức</a></li>
                    <li><span>Những đường cong mềm mại trong căn hộ tông màu lạnh</span></li>
                </ul>
                <div class="uk-margin-large-bottom">
                    <div class="uk-margin">
                        <h1 class="uk-h1 tintuc-detail__title">Những đường cong mềm mại trong căn hộ tông màu lạnh</h1>
                        <div class="uk-cover-container">
                            <img src="images/1x/tintuc1.png" alt="" uk-cover>
                            <canvas width="1384" height="598"></canvas>
                        </div>
                    </div>
                    <article class="uk-article tintuc-detail__article">
                        <p>Mình dùng cả hai máy nhiều năm nay và mình chưa bao giờ nghĩ đến việc là dùng iPad Pro thay thế cho MacBook và ngược lại. Điều cơ bản nhất là iPad chạy iPadOS và MacBook chạy macOS, hai nền tảng dựa trên hai cách thức nhập liệu và tiếp nhận nội dung khác nhau hoàn toàn. iPad là đỉnh cao của tablet, MacBook là đỉnh cao của máy tính xách tay. Vậy thì sao cả hai không cùng tồn tại mà lại cần thay thế nhau?</p>
                        <p>Cho dù người ta có nói gì về việc nó có thể thay thế laptop, dựng phim, làm văn phòng, xử lý ảnh… nhưng cuối cùng thì cái mà nó làm tốt nhất là chúng ta cầm nó trên tay, đọc cái gì đó, xem cái gì đó, nghe cái gì đó từ nó… nó là thiết bị làm ra để giúp con người tiêu thụ nội dung.</p>
                        <p>Qua dòng phát triển của thời gian thì các tính năng khác được thêm vào và dĩ nhiên càng về sau người ta càng nói nhiều về các tính năng thêm vào đó chứ không nhắc đi nhắc lại cái tính năng cơ bản của nó nữa. Nhưng khi sử dụng thực tế thì nó không thay đổi. iPad là thiết tuyệt vời nhất hiện nay để anh em có thể đọc tin tức, xem hình, xem phim… với phiên bản 12"9 anh em còn có thể xem được các tạp chí ở kích thước tương đồng với các tạp chí giấy. Tưởng tượng một thiết bị hơn 600g lại gần như là một thư viện khổng lồ…</p>
                        <p>Về cấu hình và công nghệ thì tablet nói chung hay iPad nói riêng nó phát triển cùng với dòng của công nghệ. Và lúc này anh em thấy iPad nó có cấu hình cao hơn cả một chiếc laptop thì cũng bình thường. Đó là sự phát triển tự nhiên của nó. Nó được trang bị cấu hình đó không chỉ để đáp ừng được các nhiệm vụ chính, nhiệm vụ phụ mà còn để người mua nó cảm thấy hài lòng với số tiền bỏ ra, cũng có thể là vì Apple đơn giản là không muốn phân cấp chip theo nhiều phiên bản mạnh yếu khác nhau…</p>
                        <p>Và vì là thiết bị tiêu thụ nội dung và mang đi khắp mọi nơi nên màn hình là cái quan trọng nhất, độ sáng là cái quan trọng nhất</p>
                    </article>
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
                                    <h4 class="uk-h4 tintuc__item2__title"><a href="tintuc-detail.php"><?= $v['title'] ?></a></h4>
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
                                        <h4 class="uk-h4 tintuc__item2__title"><a href="tintuc-detail.php"><?= $v['title'] ?></a></h4>
                                        <p class="tintuc__item2__desc"><?= $v['desc'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-3@m uk-flex-first@m">
                <ul class="uk-nav uk-nav-default tintuc__nav">
                    <li class="uk-active"><a href="tintuc.php">THỊ TRƯỜNG BẤT ĐỘNG SẢN</a></li>
                    <li><a href="tintuc.php">CHÍNH SÁCH - THÔNG TIN QUY HOẠCH</a></li>
                    <li><a href="tintuc.php">TÀI CHÍNH - CHỨNG KHOÁN</a></li>
                    <li><a href="tintuc.php">LUẬT - PHÁP LÝ</a></li>
                    <li><a href="tintuc.php">HOẠT ĐỘNG CỦA CÔNG TY</a></li>
                    <li><a href="tintuc.php">PHONG THỦY - KIẾN TRÚC</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>