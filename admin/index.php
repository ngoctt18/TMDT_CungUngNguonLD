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
    include_once('index.php');
  }
?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">26 New Messages!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">11 New Tasks!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">123 New Orders!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5">13 New Tickets!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <!-- Area Chart Example-->
      
      <div class="row">
        <div class="col-lg-8"></div>
        <div class="col-lg-4"></div>
      </div>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <a href="users.php?act=add">Thêm mới User</a>
        <div class="card-body">
          <div class="table-responsive">

            <form action="" method="post">
              <input type="text" name="keyword" placeholder="Tìm kiếm..." value="<?php if (isset($_GET['keyword']) ? $_GET['keyword'] : ''); ?>" />
              <input type="submit" name="btnSubmit" value="Tìm">
            </form>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>ID</th>
                  <th>Tên công ty</th>
                  <th>Tên người đại diện</th>
                  <th>Email</th>
                  <th>Username</th>
                  <th>SĐT</th>
                  <th>Địa chỉ</th>
                  <th>Loại tài khoản</th>
                  <th>Trạng thái</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>STT</th>
                  <th>ID</th>
                  <th>Tên công ty</th>
                  <th>Tên người đại diện</th>
                  <th>Email</th>
                  <th>Username</th>
                  <th>SĐT</th>
                  <th>Địa chỉ</th>
                  <th>Loại tài khoản</th>
                  <th>Trạng thái</th>
                  <th>Action</th>
                </tr>
              </tfoot>
            
            <?php foreach($u as $key => $item){ ?>
              <tbody>
                <tr>
                  <td><?php echo $key+1; ?></td>
                  <td><?php echo $item['id']; ?></td>
                  <td><?php echo $item['namecompany']; ?></td>
                   <td><?php echo $item['representative']; ?></td>
                   <td><?php echo $item['email']; ?></td>
                   <td><?php echo $item['username']; ?></td>
                   <td><?php echo $item['phone']; ?></td>
                   <td><?php echo $item['address']; ?></td>
                   <td><?php echo $item['type_user']; ?></td>
                   <td><?php echo $item['status']; ?></td>
                   <td>
                      <a href="users.php?act=edit&user-id=<?php echo $item['id']; ?>">Sửa</a> | 
                      <a href="users.php?act=delete&user-id=<?php echo $item['id']; ?>" onclick="return confirm('Bạn chắc chắn xóa chứ');">Xóa</a>
                   </td>
                 </tr>
              </tbody>

            <?php
               }
               ?>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
      <!-- End Example Table-->
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

<?php
  include_once('views/_footer.php');
?>
