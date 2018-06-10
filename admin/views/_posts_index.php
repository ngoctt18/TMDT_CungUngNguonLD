<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Edit Posts</li>
      </ol>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Sub_title</th>
                  <th>Sub_title</th>
                  <th>Action</th>
                </tr>
              </thead>
             <tfoot>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <?php foreach($p as $key => $item){ ?>
                      <tbody>
                          <tr>
                              <td>
                                  <?php echo $key+1; ?>
                              </td>
                              <td>
                                  <?php echo $item['title']; ?>
                              </td>
                              <td>
                                  <?php echo $item['name']; ?>
                              </td>
                              <td>
                                  <?php echo $item['email']; ?>
                              </td>
                              <td>
                                  <?php echo $item['phone']; ?>
                              </td>
                              <td>
                                  <?php echo $item['message']; ?>
                              </td>
                              <td>
                                  <?php echo $item['status']; ?>
                              </td>
                              <td>
                                  <a href="contact.php?act=edit&cont-id=<?php echo $item['id']; ?>">Sửa</a> |
                                  <a href="contact.php?act=delete&cont-id=<?php echo $item['id']; ?>" onclick="return confirm('Bạn chắc chắn xóa chứ');">Xóa</a>
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
