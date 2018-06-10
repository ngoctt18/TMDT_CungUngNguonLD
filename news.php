<?php
session_start();
include_once('app/init.php');
include_once('views/_header.php');

if (isset($_GET["news-id"])) {
  $id = $_GET["news-id"];
  $news = getNewsByID($id);
} else {
  header("location:index.php");
}

?>

<!-- Page Header -->
<?php
  foreach ($news as $data) { 
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
                    <h2><?= $data['title'] ?></h2>
                    <h5 class="subheading"><?= $data['sub_title'] ?></h5>
                    <span class="meta">Posted by
                <a href="#"><?= $data['representative'] ?></a>
                on <?= $data['created_at'] ?></span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-12 mx-auto">
                <?= $data['body'] ?>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-4 col-md-5 mx-auto">
                
            </div>
            <div class="col-lg-4 col-md-5 mx-auto">
                
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