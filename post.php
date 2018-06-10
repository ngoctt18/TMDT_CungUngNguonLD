<?php
session_start();
include_once('app/init.php');
include_once('views/_header.php');

if (isset($_GET["post-id"])) {
  $id = $_GET["post-id"];
  $post = get_post_by_id($id);
} else {
  header("location:index.php");
}
?>

    <!-- Page Header -->
    <?php
      foreach ($post as $data) { 
    ?>
<style type="text/css">
  label.labelPosts {  font-size: 18px;}
  .blue {    color: #0047af;}
  .red{color: red !important;}
</style>

<header class="masthead" style="background-image: url('<?= empty($data['post_cover']) ? 'public/img/imgDefault.jpg' : $data['post_cover'] ?>')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1><?= $data['title'] ?></h1>
                    <h2 class="subheading"><?= $data['sub_title'] ?></h2>
                    <span class="meta">Posted by
                <a href="#"><?= $data['namecompany'] ?></a>
                on <?= $data['created_at'] ?></span>
                <p><label class="labelPosts"><i class="fa fa-clock-o blue" aria-hidden="true"></i> Hạn nộp hồ sơ: <?= $data['deadline'] ?> </label></p>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-12 mx-auto blue">
                <?= $data['body'] ?>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-4 col-md-5 mx-auto">
                <label class="labelPosts"><i class="fa fa-usd blue" aria-hidden="true"></i> Mức lương:
                    <?= $data['salary'] ?> Triệu</label>
            </div>
            <div class="col-lg-4 col-md-5 mx-auto">
                <label class="labelPosts"><i class="fa fa-map-marker blue" aria-hidden="true"></i> Địa điểm làm việc: </label>
                <?= $data['location'] ?>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-4 col-md-5 mx-auto">
                <label class="labelPosts"><i class="fa fa-briefcase blue" aria-hidden="true"></i> </i> Kinh nghiệm: <?= $data['experience'] ?> </label>
            </div>
            <div class="col-lg-4 col-md-5 mx-auto">
                <label class="labelPosts"><i class="fa fa-address-card-o blue" aria-hidden="true"></i> Yêu cầu bằng cấp: <?= $data['DegreeRequest'] ?> </label>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-4 col-md-5 mx-auto">
                <label class="labelPosts"><i class="fa fa-user-o blue" aria-hidden="true"></i> Số lượng cần tuyển: <?= $data['amount'] ?></label>
            </div>
            <div class="col-lg-4 col-md-5 mx-auto">
                <label class="labelPosts"><i class="fa fa-transgender blue" aria-hidden="true"></i> Yêu cầu giới tính: <?= $data['GenderRequest'] ?></label>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-4 col-md-5 mx-auto">
                <label class="labelPosts"><i class="fa fa-address-card blue" aria-hidden="true"></i> Hình thức làm việc: <?= $data['JobType'] ?></label>
            </div>
            <div class="col-lg-4 col-md-5 mx-auto">
                <label class="labelPosts"><i class="fa fa-birthday-cake blue" aria-hidden="true"></i> Yêu cầu độ tuổi: <?= $data['AgeRequest'] ?></label>
            </div>
        </div>
        <hr>


        <div class="row">
            <div class="col-lg-10 col-md-12 mx-auto">
                <h3 class="blue">Thông tin tuyển dụng chi tiết</h3>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-2 col-md-2 mx-auto">
                <label class="labelPosts">MÔ TẢ CÔNG VIỆC </label>
            </div>
            <div class="col-lg-6 col-md-8 mx-auto">
                <label class="labelPosts"><?= $data['description'] ?> </label>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-2 col-md-2 mx-auto">
                <label class="labelPosts">QUYỀN LỢI ĐƯỢC HƯỞNG </label>
            </div>
            <div class="col-lg-6 col-md-8 mx-auto">
                <label class="labelPosts"><?= $data['benefit'] ?> </label>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-2 col-md-2 mx-auto">
                <label class="labelPosts">YÊU CẦU KHÁC </label>
            </div>
            <div class="col-lg-6 col-md-8 mx-auto">
                <label class="labelPosts"><?= $data['another'] ?> </label>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-2 col-md-2 mx-auto">
                <label class="labelPosts">HỒ SƠ BAO GỒM </label>
            </div>
            <div class="col-lg-6 col-md-8 mx-auto">
                <label class="labelPosts"><?= $data['FileRequest'] ?> </label>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-2 col-md-2 mx-auto">
                <label class="labelPosts"></label>
            </div>
            <div class="col-lg-6 col-md-8 mx-auto">
                <label class="labelPosts"><i class="fa fa-clock-o blue" aria-hidden="true"></i> Hạn nộp hồ sơ: <?= $data['deadline'] ?> </label>
            </div>
        </div>
        <hr>


        <div class="row">
            <div class="col-lg-10 col-md-12 mx-auto">
                <h3 class="blue">Thông tin liên hệ</h3>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-2 col-md-2 mx-auto">
                <label class="labelPosts">NGƯỜI LIÊN HỆ </label>
            </div>
            <div class="col-lg-6 col-md-8 mx-auto">
                <label class="labelPosts"><?= $data['representative'] ?> </label>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-2 col-md-2 mx-auto">
                <label class="labelPosts">ĐỊA CHỈ LIÊN HỆ </label>
            </div>
            <div class="col-lg-6 col-md-8 mx-auto">
                <label class="labelPosts"><?= $data['address'] ?> </label>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-2 col-md-2 mx-auto">
                <label class="labelPosts">EMAIL LIÊN HỆ </label>
            </div>
            <div class="col-lg-6 col-md-8 mx-auto">
                <label class="labelPosts"><?= $data['email'] ?> </label>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-2 col-md-2 mx-auto">
                <label class="labelPosts">ĐIỆN THOẠI LIÊN HỆ </label>
            </div>
            <div class="col-lg-6 col-md-8 mx-auto">
                <label class="labelPosts"><?= $data['phone'] ?> </label>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-10 col-md-12 mx-auto">
                <div class="alert alert-danger" role="alert">Người tìm việc cảnh giác với các hình thức lừa đảo <span class="red"> >> <a href="waring.php"> BẤM XEM NGAY!</a></span> </div>
            </div>
        </div>
        <hr>


    </div>
    <!-- container -->
</article>
<?php 
      }
    ?>
<hr>

<?php
  include_once('views/_footer.php');
?>