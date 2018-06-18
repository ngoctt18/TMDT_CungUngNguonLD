<?php
  include_once('app/init.php');
  include_once('views/_header.php');

  if(isset($_GET['act']) && $_GET['act'] == 'edit') {
    // Thực hiện edit ở đây
    if(empty($_GET['user-id']) || $_GET['user-id'] == null){
      header('location: users.php');
    } else {
      $id = $_GET['user-id'];
      $user = getUserByID($id);      // Lấy ra ở phần edit
    }
    if(isset($_POST['submit']) && !empty($_POST['namecompany']) && !empty($_POST['representative']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['phone']) && !empty($_POST['address']) && !empty($_POST['type_user']) && !empty($_POST['status'])){
      
      usersEdit($_GET['user-id'], $_POST['namecompany'], $_POST['representative'], $_POST['email'], $_POST['username'], $_POST['phone'], $_POST['address'], $_POST['type_user'], $_POST['status']);

      header('location: users.php');
      exit();
    }
    // Chuyển đến file edit
    include_once('views/_user_edit.php');

  }elseif(isset($_GET['act']) && $_GET['act'] == 'delete') {
    // Thực hiện xóa ở đây
      $id = 0;
        if (isset($_GET['user-id']) && $_GET['user-id'] != '' && $_GET['user-id'] > 0){
            $id = $_GET['user-id'];

            /*echo "Id = " .$id;
            die();*/

            usersDelete($id);
        }
        header('Location: users.php');
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
    include_once('views/_user_create.php');
  } else {
    // Show posts index
    if(isset($_POST['btnSubmit'])) {
        if (!empty($_POST['keyword'])){
            $u = usersSearch($_POST['keyword']);
            /*echo "<pre>";
            print_r($posts);
            die();*/
        }else{
            //echo "string";
            //die();
            $u = getAllUsers();
        }
    }else{
        $u = getAllUsers();
    }
    //var_dump($posts);die;
    include_once('views/_user_index.php');
  }
?>

<div class="modal fade" id="deletePostModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bạn chắc chắn xóa?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Bạn muốn xóa tài khoản này?</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy bỏ</button>
        <?= '<a class="btn btn-primary" id="deleteAccept" href="">Delete</a>' ?>
      </div>
    </div>
  </div>
</div>

<?php
  include_once('views/_footer.php');
?>