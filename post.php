<?php
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
    <header class="masthead" style="background-image: url('<?= $data['post_cover'] ?>')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
                <h1><?= $data['title'] ?></h1>
              <h2 class="subheading"><?= $data['sub_title'] ?></h2>
              <span class="meta">Posted by
                <a href="#"><?= $data['fullname'] ?></a>
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
          <div class="col-lg-8 col-md-10 mx-auto">
            <?= $data['body'] ?>
          </div>
        </div>
      </div>
    </article>
    <?php 
      }
    ?>
    <hr>


<?php
  include_once('views/_footer.php');
?>