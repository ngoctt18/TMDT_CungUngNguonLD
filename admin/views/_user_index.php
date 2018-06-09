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
          <a href="http://localhost:8080/TMDT_CungUngNguonLD/admin/users.php?act=add">Thêm mới User</a>
          </div>
        <div class="card-body">
          <div class="table-responsive">
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
                  <th>Trạng thái</th>
                  <th>Action</th>
                </tr>
              </thead>

              <?php foreach($u as $key => $user){ ?>

               <tbody>
                 <tr>
                    <td><?php echo $key+1; ?></td>
                    <td><?php echo $user['id']; ?></td>
                   <td><?php echo $user['namecompany']; ?></td>
                   <td><?php echo $user['representative']; ?></td>
                   <td><?php echo $user['email']; ?></td>
                   <td><?php echo $user['username']; ?></td>
                   <td><?php echo $user['phone']; ?></td>
                   <td><?php echo $user['address']; ?></td>
                   <td><?php echo $user['status']; ?></td>
                   <td>
                      <a href="http://localhost:8080/TMDT_CungUngNguonLD/admin/users.php?act=edit&user-id=<?php echo $user['id']; ?>">Sửa</a> | 
                      <a href="http://localhost:8080/TMDT_CungUngNguonLD/admin/users.php?act=delete&user-id=<?php echo $user['id']; ?>" onclick="return confirm('Bạn chắc chắn xóa chứ');">Xóa</a>
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
