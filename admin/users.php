<?php
  include_once('app/init.php');
  include_once('views/_header.php');

  if(isset($_GET['act']) && $_GET['act'] == 'edit') {
    // Thực hiện edit ở đây
    if(empty($_GET['user-id']) || $_GET['user-id'] == null){
      header('location: users.php');
    } else {
      $id = $_GET['user-id'];
      $user = getUserByID($id);      
    }
    if(isset($_POST['submit']) && !empty($_POST['namecompany']) && !empty($_POST['representative']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['phone']) && !empty($_POST['address']) && !empty($_POST['status'])){

      $namecompany = trim($_POST['namecompany']);
      $representative = trim($_POST['representative']);
      $email = trim($_POST['email']);
      $username = trim($_POST['username']);
      $phone = trim($_POST['phone']);
      $address = trim($_POST['address']);
      $status = trim($_POST['status']);

      //echo $status;die;

      if(usersEdit($_GET['user-id'], $namecompany, $representative, $email, $username, $phone, $address, $status)){
        $check_update = true;
      } else {
        $check_update = false;
      }
      header('location: users.php');
    }
    // Chuyển đến file edit
    include_once('views/_user_edit.php');

  } elseif(isset($_GET['act']) && $_GET['act'] == 'delete') {
    // Thực hiện xóa ở đây
      $id = 0;
        if (isset($_GET['user-id']) && $_GET['user-id'] != '' && $_GET['user-id'] > 0){
            $id = $_GET['user-id'];

            /*echo "Id = " .$id;
            die();*/

            usersDelete($id);
        }
        header('Location: http://localhost:8080/TMDT_CungUngNguonLD/admin/users.php');
        exit();

  } elseif(isset($_GET['act']) && $_GET['act'] == 'add') {
    // Thực hiện xóa ở đây
    if(isset($_POST['submit']) && !empty($_POST['namecompany']) && !empty($_POST['representative']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['phone']) && !empty($_POST['address']) && !empty($_POST['status'])){

      $namecompany = trim($_POST['namecompany']);
      $representative = trim($_POST['representative']);
      $email = trim($_POST['email']);
      $username = trim($_POST['username']);
      /*$password = trim($_POST['password']);*/
      $password = md5($_POST['password']);
      $phone = trim($_POST['phone']);
      $address = trim($_POST['address']);
      $status = $_POST['status'];


      //echo $username;
      //die();

      //echo $status;die;
      if(usersCreate($namecompany, $representative, $email, $username, $password, $phone, $address, $status)){
        $check_add= true;
        header('Location: http://localhost:8080/TMDT_CungUngNguonLD/admin/users.php');
        exit();
      } else {
        $check_add = false;      
      }
    }
    // Chuyển đến file edit
    include_once('views/_user_create.php');
  } else {
    // Show posts index
    $u = getAllUsers();
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