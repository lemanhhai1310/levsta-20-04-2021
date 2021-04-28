<?php $data["title"] = "Dich vu"; ?>
<?php $is_home = false; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-center-center" data-src="images/1x/bg_dichvu.png" uk-img uk-height-viewport="offset-top: true;">
    <div class="uk-width-1-1">
        <div class="uk-container">
            <div class="uk-child-width-1-4@m uk-flex-between" uk-grid>
                <?php
                $data = array(
                    array(
                        'src' => 'images/1x/flag_malaysia.png',
                        'txt' => 'MALAYSIA NGÔI NHÀ THỨ HAI CỦA TÔI',
                    ),
                    array(
                        'src' => 'images/1x/flag_cyrus.png',
                        'txt' => 'ĐẦU TƯ ĐỊNH CƯ CYRUS',
                    ),
                    array(
                        'src' => 'images/1x/flag_lavita.png',
                        'txt' => 'ĐẦU TƯ ĐỊNH CƯ LAVITA',
                    ),
                );
                foreach ($data as $k => $v): ?>
                <div>
                    <div class="uk-cover-container uk-margin">
                        <img src="<?= $v['src'] ?>" alt="" uk-cover>
                        <canvas width="264" height="165"></canvas>
                    </div>
                    <div class="uk-text-center">
                        <h5 class="uk-h5 uk-margin-remove dichvu__title1"><a href=""><?= $v['txt'] ?></a></h5>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<div class="uk-position-relative uk-section-small uk-light uk-background-norepeat uk-background-cover uk-background-center-center uk-background-fixed" data-src="images/1x/bg-bds.png" uk-img uk-height-viewport="offset-top: true;offset-bottom: true;">
    <div class="uk-position-cover dichvu__bg"></div>
    <div class="uk-position-relative">
        <div class="uk-container">
            <div class="uk-grid-100-m" uk-grid>
                <div class="uk-width-1-3@m">
                    <div uk-sticky="offset: 100">
                        <div class="uk-margin-medium">
                            <div class="mb-15 mb-20-m">
                                <h3 class="uk-h3 uk-margin-remove bds__sidebarLeft__title">MALAYSIA
                                    NGÔI NHÀ THỨ HAI CỦA TÔI</h3>
                            </div>
                            <p class="bds__sidebarLeft__desc">
                                Là một chương trình được đề xướng bởi cục du lịch Malaysia và bộ phận nhập cư của Malaysia, chương trình này cho phép người nước ngoài xin visa qua Malaysia trong thời gian 10 năm. Người nước ngoài phải đáp ứng một số tiêu chí của MM2H mới có thể nộp đơn xin tham gia chương trình này, và người nộp đơn được phép dẫn theo vợ/ chồng, con cái chưa lập gia đình dưới 21 tuổi và cha mẹ trên 60 tuổi.
                            </p>
                        </div>
                        <ul class="uk-margin-medium uk-nav uk-nav-default bds__sidebarLeft__nav" uk-scrollspy-nav="closest: li; scroll: true; offset: 0">
                            <li><a href="#cacyeucautaichinh">CÁC YÊU CẦU VỀ TÀI CHÍNH </a></li>
                            <li><a href="#baocaoyte">BÁO CÁO Y TẾ  </a></li>
                            <li><a href="#baohiemyte">BẢO HIỂM Y TẾ  </a></li>
                            <li><a href="#kyquy">KÝ QUỸ  </a></li>
                            <li><a href="#cacbuocnopdon">CÁC BƯỚC NỘP ĐƠN</a></li>
                            <li><a href="#nopdonquadichvu">NỘP ĐƠN THÔNG QUA DỊCH VỤ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="uk-width-expand">
                    <div id="cacyeucautaichinh" class="uk-margin-large">
                        <div class="mb-15 mb-20-m">
                            <h3 class="uk-h3 uk-margin-remove bds__contentRight__title">CÁC YÊU CẦU VỀ TÀI CHÍNH </h3>
                        </div>
                        <div>
                            <div class="uk-margin-large">
                                <div class="mb-15 mb-20-m">
                                    <h5 class="uk-h5 uk-margin-remove uk-text-center dichvu__yeucautaichinh__title">KHI ĐĂNG KÝ THAM GIA</h5>
                                </div>
                                <div class="uk-child-width-1-2@m" uk-grid>
                                    <div>
                                        <div class="mb-10 mb-15-m">
                                            <h5 class="uk-h5 uk-margin-remove dichvu__yeucautaichinh__title1">Người nộp đơn dưới 50 tuổi</h5>
                                        </div>
                                        <div class="dichvu__yeucautaichinh__box1">
                                            <div class="dichvu__yeucautaichinh__box1__txt">Được yêu cầu xuất trình bằng chứng về sổ tiết kiệm ngân hàng có giá trị tối thiểu là 500.000 RM và có thu nhập tối thiểu là 10.000 RM/tháng </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="mb-10 mb-15-m">
                                            <h5 class="uk-h5 uk-margin-remove dichvu__yeucautaichinh__title1">Người nộp đơn trên 50 tuổi</h5>
                                        </div>
                                        <div class="dichvu__yeucautaichinh__box1">
                                            <div class="dichvu__yeucautaichinh__box1__txt">Được yêu  cầu xuất trình bằng chứng về sổ tiết kiệm ngân hàng có giá trị tối thiểu là 350.000 RM và có thu nhập tối thiểu là 10.000 RM/tháng. Đối với người đã về hưu, yêu cầu xuất trình giấy tờ lương hưu tối thiểu là 10.000RM /tháng</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-margin-large">
                                <div class="mb-15 mb-20-m">
                                    <h5 class="uk-h5 uk-margin-remove uk-text-center dichvu__yeucautaichinh__title">KHI ĐƯỢC PHÊ DUYỆT</h5>
                                </div>
                                <div class="uk-child-width-1-2@m" uk-grid>
                                    <div>
                                        <div class="mb-10 mb-15-m">
                                            <h5 class="uk-h5 uk-margin-remove dichvu__yeucautaichinh__title1">Người nộp đơn dưới 50 tuổi</h5>
                                        </div>
                                        <div class="dichvu__yeucautaichinh__box1">
                                            <ul class="uk-list">
                                                <li><span class="dichvu__yeucautaichinh__box1__txt">* Mở tài khoản tiền gởi cố định là 300.00RM</span></li>
                                                <li><span class="dichvu__yeucautaichinh__box1__txt">* Sau một năm người tham gia có thể rút tối đa 150.000 RM cho các chi phí liên quan đến mua nhà, giáo dục cho trẻ em ở Malaysia và các mục đích y tế</span></li>
                                                <li><span class="dichvu__yeucautaichinh__box1__txt">* Phải duy trì số dư tối thiểu là 150.000 RM từ năm thứ hai trở đi và trong suốt thời gian lưu trú ở Malaysia theo chương trình này</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="mb-10 mb-15-m">
                                            <h5 class="uk-h5 uk-margin-remove dichvu__yeucautaichinh__title1">Người nộp đơn trên 50 tuổi</h5>
                                        </div>
                                        <div class="dichvu__yeucautaichinh__box1">
                                            <ul class="uk-list">
                                                <li><span class="dichvu__yeucautaichinh__box1__txt">* Mở tài khoản tiền gởi cố định là 150.00 RM</span></li>
                                                <li><span class="dichvu__yeucautaichinh__box1__txt">* Sau một năm người tham gia có thể rút tối đa 50.000 RM cho các chi phí liên quan đến mua nhà, giáo dục cho trẻ em ở Malaysia và các mục đích y tế́</span></li>
                                                <li><span class="dichvu__yeucautaichinh__box1__txt">*Phải duy trì số dư tối thiểu là 100.000 RM từ năm thứ hai trở đi và trong suốt thời gian lưu trú ở Malaysia theo chương trình này</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="baocaoyte" class="uk-margin-large">
                        <div class="uk-margin-medium">
                            <div class="mb-10 mb-15-m">
                                <h3 class="uk-h3 uk-margin-remove bds__contentRight__title">BÁO CÁO Y TẾ  </h3>
                            </div>
                            <div uk-grid>
                                <div class="uk-width-1-2@m">
                                    <div class="dichvu__yeucautaichinh__box1__txt">
                                        Tất cả người nộp đơn và người phụ thuộc của họ phải nộp báo cáo y tế từ bất kỳ bệnh viện tư nhân hoặc phòng khám nào đã đăng ký ở Mlaysia
                                    </div>
                                </div>
                                <div class="uk-width-1-1">
                                    <img class="uk-width-1-1" src="images/1x/img-dichvu.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="baohiemyte" class="uk-margin-large">
                        <div class="uk-margin-medium">
                            <div class="mb-10 mb-15-m">
                                <h3 class="uk-h3 uk-margin-remove bds__contentRight__title">BẢO HIỂM Y TẾ  </h3>
                            </div>
                            <div uk-grid>
                                <div class="uk-width-1-2@m">
                                    <p class="dichvu__yeucautaichinh__box1__txt">
                                        Người tham gia được phê duyệt và người phụ thuộc của họ phải có bảo hiểm y tế hợp lệ được áp dụng tại MAlaysia từ bất kỳ công ty bảo hiểm nào
                                    </p>
                                    <p class="dichvu__yeucautaichinh__box1__txt">
                                        Tuy nhiên có thể được miễn cho những người tham gia gặp khó khăn trong việc nhận bảo hiểm y tế do tuổi tác hoặc tình trạng sức khỏe của họ
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="kyquy" class="uk-margin-large">
                        <div class="uk-margin-medium">
                            <div class="mb-10 mb-15-m">
                                <h3 class="uk-h3 uk-margin-remove bds__contentRight__title">KÝ QUỸ  </h3>
                            </div>
                            <div uk-grid>
                                <div class="uk-width-1-2@m">
                                    <div class="dichvu__yeucautaichinh__box1__txt">
                                        ( Chỉ nộp đơn trực tiếp)
                                    </div>
                                    <div class="dichvu__yeucautaichinh__box1__txt">
                                        Người nộp đơn đăng ký trực tiếp được yêu cầu phải thực hiện đủ điều kiện về việc ký quỹ. Vui lòng tham khảo khoản ký quỹ cho mỗi người theo quốc tịch, ký quỹ từ 200 RM đến 2.000 RM
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="cacbuocnopdon" class="uk-margin-large">
                        <div class="uk-margin-medium">
                            <div class="mb-15 mb-20-m">
                                <h3 class="uk-h3 uk-margin-remove bds__contentRight__title">CÁC BƯỚC NỘP ĐƠN</h3>
                            </div>
                            <div uk-grid>
                                <div class="uk-width-1-2@m">
                                    <div class="uk-margin">
                                        <div class="dichvu__cacbuocnopdon__title">BƯỚC 1 :</div>
                                        <div class="dichvu__yeucautaichinh__box1__txt">
                                            Người nộp đơn cần đăng ký qua hệ thống trực tuyến, tải xuống các mẫu đơn và đính kèm cùng với các tài liệu cần thiết
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <div class="dichvu__cacbuocnopdon__title">BƯỚC 2 :</div>
                                        <div class="dichvu__yeucautaichinh__box1__txt">
                                            Bạn có thể nộp đơn trực tiếp hoặc qua các công ty dịch vụ
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <div class="dichvu__cacbuocnopdon__title">BƯỚC 3 :</div>
                                        <div class="dichvu__yeucautaichinh__box1__txt">
                                            Thư chấp thuận được cấp cho người nộp đơn và được chấp thuận bởi cục quản lý xuất nhập cảnh, trung tâm MM2H
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <div class="dichvu__cacbuocnopdon__title">BƯỚC 4 :</div>
                                        <div class="dichvu__yeucautaichinh__box1__txt">
                                            <div>Sau khi nhận được thư chấp thuận, có điều kiện như sau:</div>
                                            <div>* Mở tài khoản tiền gửi có kỳ hạn 1 năm gia hạ tự động tại bất kỳ ngân hàng nào ở Malaysia.</div>
                                            <div>* Mua bải hiểm y tế tại bất kỳ công ty bảo hiểm nào tại Malaysia/ Bảo hiểm y tế được áp dụng tại Malaysia.</div>
                                            <div>* Đăng ký khám và nhận báo cáo y tế từ bất kỳ bệnh iện tư nhân hoặc phòng khám nào đã đăng ký ở Malaysia.</div>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <div class="dichvu__cacbuocnopdon__title">BƯỚC 5 :</div>
                                        <div class="dichvu__yeucautaichinh__box1__txt">
                                            Gửi các tài liệu còn lại đến cục quản lý xuất nhập cảnh, trung tâm MM2H: <br>
                                            * Gửi chứng chỉ tiền gửi có kỳ hạn cố định <br>
                                            * Gưi báo cáo y tế <br>
                                            * Nộp giấy tờ về bảo hiểm y tế.
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <div class="dichvu__cacbuocnopdon__title">BƯỚC 6 :</div>
                                        <div class="dichvu__yeucautaichinh__box1__txt">
                                            Người nộp đơn bây giờ có thể nhận được Visa MM2H. <br>
                                            *Phí Visa (Social visit pass) là 120RM/năm. <br>
                                            *Thẻ Visa sẽ được cung cấp theo giá trị của hộ chiếu (tối da 10 năm).
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-1-1">
                                    <img class="uk-width-1-1" src="images/1x/img1-dichvu.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="nopdonquadichvu" class="uk-margin-large">
                        <div class="uk-margin-medium">
                            <div class="mb-15 mb-20-m">
                                <h3 class="uk-h3 uk-margin-remove bds__contentRight__title">NỘP ĐƠN THÔNG QUA DỊCH VỤ</h3>
                            </div>
                            <ul class="uk-list">
                                <li>
                                    <div><span class="dichvu__nopdonquadichvu__number uk-margin-small-right">1</span><span class="dichvu__yeucautaichinh__box1__txt">Sơ yếu lý lịch của người nộp đơn chính bao gồm các thông tin sau:</span></div>
                                    <div class="dichvu__yeucautaichinh__box1__txt">
                                        * Bằng cấp chuyên môn <br>
                                        * Kinh nghiệm làm việc <br>
                                        * Kỹ năng hoặc chuyên môn có được
                                    </div>
                                </li>
                                <li>
                                    <div><span class="dichvu__nopdonquadichvu__number uk-margin-small-right">2</span><span class="dichvu__yeucautaichinh__box1__txt">Mẫu đơn đăng ký MM2H, 1 bản</span></div>
                                    <div class="dichvu__yeucautaichinh__box1__txt">
                                        (có thể tài xuống từ trang web www.mm2h.gov.my) <br>
                                        Lưu ý: người nộp đơn và tất cả người phụ thuộc phải hoàn tất mẫu đơn
                                    </div>
                                </li>
                                <li>
                                    <div><span class="dichvu__nopdonquadichvu__number uk-margin-small-right">3</span><span class="dichvu__yeucautaichinh__box1__txt">Mẫu IM.12 (Social Visit Pass), 3 bản</span></div>
                                    <div class="dichvu__yeucautaichinh__box1__txt">
                                        *1 bản gốc (có thể tải xuống từ trang web mm2h/ lấy tại cục quản lý xuất nhập cảnh)
                                        <br>
                                        * 2 bản sao <br>
                                        Lưu ý: người nộp đơn và tất cả người phụ thuộc phải hoàn tất biểu mẫu riêng lẻ
                                    </div>
                                </li>
                                <li>
                                    <div><span class="dichvu__nopdonquadichvu__number uk-margin-small-right">4</span><span class="dichvu__yeucautaichinh__box1__txt">6 (sáu) ảnh màu kích cỡ hộ chiếu</span></div>
                                </li>

                                <li>
                                    <div><span class="dichvu__nopdonquadichvu__number uk-margin-small-right">5</span><span class="dichvu__yeucautaichinh__box1__txt">Bản sao hộ chiếu/ chứng từ du lịch có công chứng</span></div>
                                    <div class="dichvu__yeucautaichinh__box1__txt">
                                        (sao y công chứng nguyên cuốn, kể cả trang trống) <br>
                                        Lưu ý: bắt buộc có bản sao hộ chiếu cũ là nếu người đăng ký/người phụ thuộc gia hạn hộ chiếu của mình trong vòng 12 tháng qua
                                    </div>
                                </li>
                                <li>
                                    <div><span class="dichvu__nopdonquadichvu__number uk-margin-small-right">6</span><span class="dichvu__yeucautaichinh__box1__txt">Ký quỹ cá nhân</span></div>
                                    <div class="dichvu__yeucautaichinh__box1__txt">
                                        Lưu ý: ký quỹ cá nhân chỉ nộp cho người nộp đơn chính
                                    </div>
                                </li>
                                <li>
                                    <div><span class="dichvu__nopdonquadichvu__number uk-margin-small-right">7</span><span class="dichvu__yeucautaichinh__box1__txt">Giấy công chứng không có tiền án tiền sự (Công chứng bởi 2 bên)</span></div>
                                </li>
                                <li>
                                    <div><span class="dichvu__nopdonquadichvu__number uk-margin-small-right">8</span><span class="dichvu__yeucautaichinh__box1__txt">Tự khai về tình trạng sức khỏe của bạn và người phụ thuộc (biểu mẫu có thể tải xuống từ trang web mm2h)</span></div>
                                </li>
                                <li>
                                    <div><span class="dichvu__nopdonquadichvu__number uk-margin-small-right">9</span><span class="dichvu__yeucautaichinh__box1__txt">Bản sao có công chứng giấy kết hôn (nếu kèm theo vợ/chồng)</span></div>
                                </li>
                                <li>
                                    <div><span class="dichvu__nopdonquadichvu__number uk-margin-small-right">10</span><span class="dichvu__yeucautaichinh__box1__txt">Bản sao giấy khai sinh/chứng từ pháp lý có công chứng (Nếu đi kèm với con ruột/con nuôi/con riêng của chồng hoặc vợ/ba mẹ)</span></div>
                                </li>
                                <li>
                                    <div><span class="dichvu__nopdonquadichvu__number uk-margin-small-right">11</span><span class="dichvu__yeucautaichinh__box1__txt">Bản sao có công chứng của giấy chứng nhận ngân hàng 3 tháng gần nhất</span></div>
                                    <div class="dichvu__yeucautaichinh__box1__txt">
                                        Các tài liệu tài chính liên quan khác chứng minh đủ khả năng tài chính ở lại Malaysia
                                    </div>
                                </li>
                                <li>
                                    <div><span class="dichvu__nopdonquadichvu__number uk-margin-small-right">12</span><span class="dichvu__yeucautaichinh__box1__txt">Bản sao có công chứng, giấy xác nhận tiền lương 3 tháng mới nhất/báo cáo thu nhập (nếu có việc làm)/ phiếu lương hưu</span></div>
                                </li>
                                <li>
                                    <div><span class="dichvu__nopdonquadichvu__number uk-margin-small-right">13</span><span class="dichvu__yeucautaichinh__box1__txt">Thư ủy quyền của người nộp đơn đến "Trung tâm Malaysia Ngôi Nhà Thứ 2 Của Tôi" để xác minh tài liệu, công việc và tiền lươn
                                tài chính của các bên có liên quan.</span></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>