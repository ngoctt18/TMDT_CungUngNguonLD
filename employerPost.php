<?php

include_once('config.php');
include_once('app/func/employer.php');
include_once('views/_header.php');
include_once('app/func/post.php');

if (!isset($_SESSION['usernameEmployer'])) {
  header('location: employerLogin.php');
  exit();
}

$dataPosts = get_all_posts();
foreach ($dataPosts as $dataPosts) {
  # code...
}

$usernameEmployer = $_SESSION['usernameEmployer'];
$employerAcc = $_SESSION['employerAcc'];

// var_dump($employerAcc);
foreach ($employerAcc as $dataAcc) {
  # code...  fuck
}

if (isset($_POST['submit'])) {
  if (!empty($_POST['title']) && !empty($_POST['sub_title']) && !empty($_POST['body']) && !empty($_POST['description']) && !empty($_POST['experience']) && !empty($_POST['benefit']) && !empty($_POST['degreeRequest']) && !empty($_POST['ageRequest']) && !empty($_POST['genderRequest']) && !empty($_POST['salary']) && !empty($_POST['amount']) && !empty($_POST['jobType']) && !empty($_POST['location']) && !empty($_POST['fileRequest']) && !empty($_POST['another']) && !empty($_POST['deadline']) ) {
    # code...
    if (insertEmployerPost($_POST['title'], $_POST['sub_title'], $_POST['body'], $_POST['salary'], $_POST['experience'], $_POST['jobType'], $_POST['location'], $_POST['ageRequest'], $_POST['genderRequest'], $_POST['degreeRequest'], $_POST['amount'], $_POST['description'], $_POST['benefit'], $_POST['fileRequest'], $_POST['deadline'], $_POST['another'], $dataAcc['id']  )) {
      // Đăng tin tuyển dụng thành công
      
      

      // Code giở
    }
  }
}

?>
<style>
/* Credit to bootsnipp.com for the css for the color graph */

.colorgraph {
    height: 5px;
    border-top: 0;
    background: #c4e17f;
    border-radius: 5px;
    background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}

.employerWaring {
    color: red;
}
</style>
<link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<body>
    <!-- Include the above in your HEAD tag -->
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('public/img/post-sample-image.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h2>Đăng tin tuyển dụng</h2>
                        <span class="subheading">Nhanh chóng, an toàn và hiệu quả!</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-md-10">
                <form role="form" action="" method="post">
                    <h2>Đăng tin tuyển dụng <small> Nhanh chóng, an toàn và hiệu quả!</small></h2>
                    <hr class="colorgraph">
                    <div class="form-group">
                        <label for="title">Tiêu đề tin</label>
                        <input type="text" name="title" id="title" class="form-control input-lg" placeholder="Tiêu đề tin"  required>
                    </div>
                    <div class="form-group">
                        <label for="sub_title">Tiêu đề phụ</label>
                        <input type="text" name="sub_title" id="sub_title" class="form-control input-lg" placeholder="Tiêu đề phụ"  required>
                    </div>
                    <div class="form-group">
                        <label for="body">Nội dung tin tuyển dụng</label>
                        <textarea class="form-control" id="body" name="body" rows="5" placeholder="Nội dung tin tuyển dụng"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="description">Mô tả công việc</label>
                        <textarea class="form-control" id="description" name="description" rows="5" placeholder="Mô tả công việc"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="experience">Yêu cầu kinh nghiệm</label>
                        <textarea class="form-control" id="experience" name="experience" rows="5" placeholder="Yêu cầu kinh nghiệm"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="benefit">Quyền lợi được hưởng</label>
                        <textarea class="form-control" id="benefit" name="benefit" rows="5" placeholder="Quyền lợi được hưởng"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="degreeRequest">Yêu cầu về trình độ</label>
                        <input type="text" name="degreeRequest" id="degreeRequest" class="form-control input-lg" placeholder="Yêu cầu về trình độ"  required>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label for="ageRequest">Yêu cầu độ tuổi</label>
                                <input type="text" name="ageRequest" id="ageRequest" class="form-control input-lg" placeholder="Yêu cầu độ tuổi"  required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label for="genderRequest">Yêu cầu giới tính</label>
                                <input type="text" name="genderRequest" id="genderRequest" class="form-control input-lg" placeholder="Yêu cầu giới tính"  required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label for="salary">Mức lương</label>
                                <input type="text" name="salary" id="salary" class="form-control input-lg" placeholder="Mức lương"  required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label for="amount">Số lượng cần tuyển</label>
                                <input type="text" name="amount" id="amount" class="form-control input-lg" placeholder="Số lượng cần tuyển"  required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jobType">Hình thức làm việc</label>
                        <input type="text" name="jobType" id="jobType" class="form-control input-lg" placeholder="Hình thức làm việc"  required>
                    </div>
                    <div class="form-group">
                        <label for="location">Địa điểm làm việc</label>
                        <input type="text" name="location" id="location" class="form-control input-lg" placeholder="Tiêu đề phụ"  required>
                    </div>
                    <div class="form-group">
                        <label for="fileRequest">Hồ sơ bao gồm</label>
                        <textarea class="form-control" id="fileRequest" name="fileRequest" rows="5" placeholder="Hồ sơ bao gồm"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="another">Yêu cầu khác</label>
                        <textarea class="form-control" id="another" name="another" rows="4" placeholder="Yêu cầu khác"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label for="deadline">Hạn nộp hồ sơ</label>
                                <input type="text" name="deadline" id="deadline" class="form-control input-lg" placeholder="Hạn nộp hồ sơ"  required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 col-sm-3 col-md-3">
                        </div>
                        <div class="col-xs-8 col-sm-9 col-md-9">
                            Khi click <strong class="label label-primary">Đăng tin</strong>, nghĩa là bạn đã đồng ý với <a href="#" data-toggle="modal" data-target="#t_and_c_m">Chính sách và điều khoản</a> của chúng tôi, bao gồm cả chính sách về cookie.
                        </div>
                    </div>
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <button type="submit" class="btn btn-primary btn-block btn-lg" name="submit">Đăng tin</button>
                        </div>
                    </div>
                </form>
                <br>
            </div>
        </div>
        <?php 
  include_once('views/_footer.php');
 ?>
    </div>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="public/vendor/jquery/jquery.min.js"></script>
</body>