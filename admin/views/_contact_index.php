<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <a href="http://localhost:8080/TMDT_CungUngNguonLD/admin/contact.php?act=add">Thêm mới Contact</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>ID</th>
                  <th>Tên</th>
                  <th>Email</th>
                  <th>SĐT</th>
                  <th>Nội dung</th>
                  <th>Trạng thái</th>
                  <th>Action</th>
                </tr>
              </thead>

              <?php foreach($u as $key => $item){ ?>

               <tbody>
                 <tr>
                    <td><?php echo $key+1; ?></td>
                    <td><?php echo $item['id']; ?></td>
                   <td><?php echo $item['name']; ?></td>
                   <td><?php echo $item['email']; ?></td>
                   <td><?php echo $item['phone']; ?></td>
                   <td><?php echo $item['message']; ?></td>
                   <td><?php echo $item['status']; ?></td>
                   <td>
                      <a href="http://localhost:8080/TMDT_CungUngNguonLD/admin/contact.php?act=edit&cont-id=<?php echo $item['id']; ?>">Sửa</a> | 
                      <a href="http://localhost:8080/TMDT_CungUngNguonLD/admin/contact.php?act=delete&cont-id=<?php echo $item['id']; ?>" onclick="return confirm('Bạn chắc chắn xóa chứ');">Xóa</a>
                   </td>
                 </tr>
               </tbody>

               <?php
               }
               ?>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
