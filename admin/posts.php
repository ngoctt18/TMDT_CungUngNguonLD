<?php
  include_once('app/init.php');
  include_once('views/_header.php');

  if(isset($_GET['act']) && $_GET['act'] == 'edit') {
    // Thực hiện edit ở đây
    if(empty($_GET['post-id']) || $_GET['post-id'] == null){
      header('location: posts.php');
    } else {
      $id = $_GET['post-id'];
      $pot = getPostsByID($id);      // Lấy ra ở phần edit
    }

    if(isset($_POST['submit']) && !empty($_POST['title']) && !empty($_POST['sub_title']) && !empty($_POST['body']) && !empty($_POST['salary']) && !empty($_POST['experience']) && !empty($_POST['JobType']) && !empty($_POST['location']) && !empty($_POST['AgeRequest']) && !empty($_POST['GenderRequest']) && !empty($_POST['DegreeRequest']) && !empty($_POST['amount']) && !empty($_POST['description']) && !empty($_POST['benefit']) && !empty($_POST['FileRequest']) && !empty($_POST['deadline']) && !empty($_POST['another']) && !empty($_POST['status'])){

      /*echo $_POST['title'];
      die();*/

      postsEdit($_GET['post-id'], $_POST['title'], $_POST['sub_title'], $_POST['body'], $_POST['salary'], $_POST['experience'], $_POST['JobType'], $_POST['location'], $_POST['AgeRequest'], $_POST['GenderRequest'], $_POST['DegreeRequest'], $_POST['amount'], $_POST['description'], $_POST['benefit'], $_POST['FileRequest'], $_POST['deadline'], $_POST['another'], $_POST['status']);

      header('location: posts.php');
      exit();
    }
    // Chuyển đến file edit
    include_once('views/_post_edit.php');

  }elseif(isset($_GET['act']) && $_GET['act'] == 'delete') {
    // Thực hiện xóa ở đây
      $id = 0;
        if (isset($_GET['post-id']) && $_GET['post-id'] != '' && $_GET['post-id'] > 0){
            $id = $_GET['post-id'];

            /*echo "Id = " .$id;
            die();*/

            postsDelete($id);
        }
        header('Location: posts.php');
        exit();

  } elseif(isset($_GET['act']) && $_GET['act'] == 'add') {
    // Thực hiện thêm ở đây
    if(isset($_POST['submit']) && !empty($_POST['namecompany']) && !empty($_POST['representative']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['phone']) && !empty($_POST['address']) && !empty($_POST['type_user']) && !empty($_POST['status'])){

      $password = md5($_POST['password']);
      
      usersCreate($_POST['namecompany'], $_POST['representative'], $_POST['email'], $_POST['username'], $password, $_POST['phone'], $_POST['address'], $_POST['type_user'], $_POST['status']);
      
        header('Location: users.php');
        exit();
    }
    // Chuyển đến file edit
    include_once('views/_post_create.php');
  } else {
    // Show posts index
    if(isset($_POST['btnSubmit'])) {
        if (!empty($_POST['keyword'])){
            $p = PostSearch($_POST['keyword']);
            /*echo "<pre>";
            print_r($posts);
            die();*/
        }else{
            //echo "string";
            //die();
            $p = getAllPosts();
        }
    }else{
        $p = getAllPosts();
    }
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
