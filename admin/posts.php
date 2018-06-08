<?php
  include_once('app/init.php');
  include_once('views/_header.php');

  if(isset($_GET['act']) && $_GET['act'] == 'edit') {
    // Thực hiện edit ở đây
    if(empty($_GET['post-id']) || $_GET['post-id'] == null){
      header('location: posts.php');
    } else {
      $id = $_GET['post-id'];
      $post = getPostsByID($id);      

    }
    if(isset($_POST['submit']) && !empty($_POST['title']) && !empty($_POST['sub_title']) && !empty($_POST['body']) && !empty($_POST['postStatus'])){

      $title = trim($_POST['title']);
      $subtitle = trim($_POST['sub_title']);
      $body = trim($_POST['body']);
      $status = trim($_POST['postStatus']);
      echo $status;die;

      if(postsEdit($_GET['post-id'], $title, $subtitle, $body, $status)){
        $check_update = true;
      } else {
        $check_update = false;
      }
      header('location: posts.php');

    }
    // Chuyển đến file edit
    include_once('views/_post_edit.php');

  } elseif(isset($_GET['act']) && $_GET['act'] == 'del') {
    // Thực hiện xóa ở đây
    $id = $_GET['post-id'];
    if (postsDelete($id)) {
      header('location: posts.php');
    }

  } elseif(isset($_GET['act']) && $_GET['act'] == 'add') {
    // Thực hiện xóa ở đây

  } else {
    // Show posts index
    $posts = getAllPosts();
    //var_dump($posts);die;
    include_once('views/_posts_index.php');
  }
?>

<div class="modal fade" id="deletePostModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Delete?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Do you want delete this post?</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <?= '<a class="btn btn-primary" id="deleteAccept" href="">Delete</a>' ?>
      </div>
    </div>
  </div>
</div>

<?php
  include_once('views/_footer.php');
?>
