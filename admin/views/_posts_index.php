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
                  <th>#</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Status</th>
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
              <tbody>
              <?php
              $i=1;
              foreach($posts as $post){
                $status = "";
                if($post['status']==0)
                  $status = "Draft";
                elseif ($post['status']==1) 
                  $status = "Active";
                elseif ($post['status']==2) 
                  $status = "Delete";
                echo '<tr>';
                echo    '<td>'.$i.'</td>';
                echo    '<td>'.$post['title'].'</td>';
                echo    '<td>'.$post['fullname'].'</td>';
                echo    '<td>'.$status.'</td>';
                echo    '<td>
                            <a class="btn btn-success" href="posts.php?act=edit&post-id='.$post['id'].'" role="button">Edit</a> 
                            <a class="btn btn-danger deleteButton" data-id="'.$post['id'].'" data-toggle="modal" href="" data-target="#deletePostModal" role="button">Delete</a> 
                        </td>';
                echo '</tr>';
                $i++;
              }
              ?>                
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
