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
          <!-- <a href="posts.php?act=add">Thêm mới Post</a> -->
          </div>
        <div class="card-body">
          <div class="table-responsive">

          <form action="" method="post">
              <input type="text" name="keyword" placeholder="Tìm kiếm..." />
              <input type="submit" name="btnSubmit" value="Tìm">
            </form>


            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>ID</th>
                  <th>Tiêu đề</th>
                  <th>Tiêu đề con</th>
                  <th>Trạng thái</th>
                  <th>Action</th>
                </tr>
              </thead>

              <?php foreach($p as $key => $item){ ?>
              <tbody>
                <tr>
                  <td>
                      <?php echo $key+1; ?>
                  </td>
                  <td>
                      <?php echo $item['id']; ?>
                  </td>
                  <td>
                      <?php echo $item['title']; ?>
                  </td>
                  <td>
                      <?php echo $item['sub_title']; ?>
                  </td>
                  <td>
                      <?php echo $item['status']; ?>
                  </td>
                  <td>
                      <a href="posts.php?act=edit&post-id=<?php echo $item['id']; ?>">Sửa</a> |
                      <a href="posts.php?act=delete&post-id=<?php echo $item['id']; ?>" onclick="return confirm('Bạn chắc chắn xóa chứ');">Xóa</a>
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
