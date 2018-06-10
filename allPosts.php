<?php
    session_start();
    include_once('app/init.php');
    include_once('views/_header.php');

    if(isset($_POST['submit'])) {
        if (!empty($_POST['keyword'])){
            $posts = searchPost($_POST['keyword']);
            /*echo "<pre>";
            print_r($posts);
            die();*/
        }else{
            //echo "string";
            //die();
            $posts = get_all_posts();
        }
    }else{
        $posts = get_all_posts();
    }
?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('public/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h2>Website hỗ trợ cung ứng nguồn lao động</h2>
                    <span class="subheading">Nhanh chóng, tin cậy, hiệu quả</span>
                    <br>
                    <form action="" method="post">
                        <div class="container">
                            <div class="input-group">
                                <!-- <input type="hidden" name="act" value="search" /> -->
                                <input type="text" class="form-control" name="keyword" placeholder="Tìm kiếm..." value="<?php if (isset($_GET['keyword']) ? $_GET['keyword'] : ''); ?>" />
                                <span class="input-group-btn">
                            <button class="btn btn-search" name="submit" type="submit"><i class="fa fa-search fa-fw"></i> Search</button>
                          </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php

                    foreach ($posts as $post) { ?>
                <div class="post-preview">
                    <a href="post.php?post-id=<?= $post['id'] ?>">
                        <h2 class="post-title">
                                    <?= $post['title'] ?>
                                </h2>
                        <h3 class="post-subtitle">
                                    <?= $post['sub_title'] ?>
                                </h3>
                    </a>
                    <p class="post-meta">Posted by
                        <a href="#">
                            <?= $post['namecompany'] ?>
                        </a>
                        on
                        <?= $post['created_at'] ?>
                    </p>
                </div>
                <hr>
                <?php }

                ?>
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-md-12 mx-auto">
            <div class="alert alert-danger" role="alert">Người tìm việc cảnh giác với các hình thức lừa đảo <span class="red"> >> <a href="waring.php"> BẤM XEM NGAY!</a></span> </div>
        </div>
    </div>
    <hr>
</div>

<?php
    include_once('views/_footer.php');
?>