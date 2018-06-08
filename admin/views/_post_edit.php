
<!-- Main Content -->
<div class="content-wrapper" style="background: #fff;">
    <div class="container-fluid">
    <div class="col-lg-12 col-md-12 mx-auto">
        <p>Edit posts</p>
        <form name="editPost" id="editPost" action="" method="post">
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="title">Title</label>
            <big>Title</big>
            <input type="text" class="form-control" id="title" name="title" value="<?= isset($_POST['title']) ? $_POST['title'] : $post['title']; ?>">
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="sub_title">Sub Title</label>
            <big>Sub Title</big>
            <input type="text" class="form-control" id="sub_title" name="sub_title" value="<?= isset($_POST['sub_title']) ? $_POST['sub_title'] : $post['sub_title']; ?>">
            </div>
        </div>

        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="body">Content</label>
            <big>Content</big>
            <textarea rows="8" class="form-control" id="body" name="body"><?= isset($_POST['body']) ? $_POST['body'] : $post['body']; ?></textarea>
            </div>
        </div>
        <?php
            $status = isset($_POST['postStatus']) ? $_POST['postStatus'] : $post['status'];
        ?>
        <div class="control-group">
            <big>Status</big>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="postStatus" id="exampleRadios1" value="0" <?= $status == 0 ? 'checked' : ''; ?>>
                <label class="form-check-label" for="exampleRadios1">
                    Draft
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="postStatus" id="exampleRadios2" value="1" <?= $status == 1 ? 'checked' : ''; ?>>
                <label class="form-check-label" for="exampleRadios2">
                    Active
                </label>
            </div>
        </div>
        
        <br>
        <div id="success"></div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary">Edit</button>
        </div>
        </form>
    </div>
    </div>
</div>

<hr>