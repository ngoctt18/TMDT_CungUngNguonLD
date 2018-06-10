<?php 
session_start();
include_once('app/init.php');
include_once('views/_header.php');

 ?>
<style type="text/css">
  .blue {    color: #0047af;}
  .red{color: red !important;}
  .row{font-size: 18px;}
</style>
<header class="masthead" style="background-image: url('<?= empty($data['post_cover']) ? 'public/img/imgDefault.jpg' : $data['post_cover'] ?>')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h3>Hướng dẫn người tìm việc cảnh giác với các hình thức lừa đảo </h3>
                    
                    <span class="meta">Posted by
                <a href="#">Admin</a>
                on 2018-05-19 11:26:22</span>
                </div>
            </div>
        </div>
    </div>
</header>

<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-12 mx-auto">
                Để tránh bị lừa đảo khi tìm việc qua mạng, người tìm việc lưu ý:
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-10 col-md-12 mx-auto">
                <b class="blue">1. Cảnh giác khi có yêu cầu thu phí từ nhà tuyển dụng</b>
                <p>Với một số công việc đặc thù nhà tuyển dụng có thể yêu cầu người được tuyển đóng khoản tiền bảo lãnh trước khi giao tài sản, công cụ, dụng cụ làm việc... cho nhân viên. </p>
                <p><i>Ví dụ: Nhân viên giao nhận được yêu cầu đóng bảo lãnh vì doanh nghiệp sẽ giao cho người lao động lượng tài sản lớn là hàng hóa…</i></p>
                <p>Lợi dụng việc này, một số đối tượng đã tiến hành lừa đảo người tìm việc, tiến hành thu phí trong quá trình tuyển dụng như: phí xét hồ sơ, phí đồng phục, phí bảo lãnh… và chiếm đoạt luôn số tiền này.</p>
                <p>Do đó, người tìm việc cần cảnh giác khi nhận được yêu cầu thu phí từ nhà tuyển dụng, cần đánh giá độ uy tín của doanh nghiệp thật kỹ trước khi tiến hành đóng phí. Đồng thời, hãy lấy đủ các chứng từ thu tiền, kiểm tra thật kỹ các thông tin trên chứng từ (số tiền, các chữ ký, dấu mộc tròn của công ty…) để có căn cứ xử lý khi xảy ra vấn đề.</p>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-10 col-md-12 mx-auto">
                <b class="blue">2. Tìm hiểu thật kỹ về nhà tuyển dụng và công việc</b>
                <p>Hình thức lừa đảo của các đối tượng xấu ngày càng đa dạng và khó lường. Do đó, để tránh bị lừa khi đi xin việc thì người tìm việc lưu ý nên tìm hiểu thật kỹ về nhà tuyển dụng, tìm hiểu thật kỹ về công việc. Đồng thời, người tìm việc cần luôn đề cao cảnh giác, nếu thấy những điều bất thường như: không có địa chỉ công ty cụ thể, không có số điện thoại bàn, hẹn phỏng vấn tại quán cà phê, thử việc không ký hợp đồng… thì cần xem xét lại về công việc.</p>
                <p>Chúng tôi xin chúc bạn sớm tìm được công việc như ý.</p>
            </div>
        </div>
        <hr>
    </div>
    <!-- container -->
</article>



 <?php
  include_once('views/_footer.php');
?>