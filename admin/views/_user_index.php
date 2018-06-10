<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Edit User</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <a href="users.php?act=add">Thêm mới User</a>
          </div>
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
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
