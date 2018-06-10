
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
            <input type="text" class="form-control" id="title" name="title" >
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="sub_title">Sub Title</label>
            <big>Sub Title</big>
            <input type="text" class="form-control" id="sub_title" name="sub_title" >
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="body">Body</label>
            <big>Body</big>
            <textarea rows="8" class="form-control" id="body" name="body"></textarea>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="salary">salary</label>
            <big>salary</big>
            <input type="text" class="form-control" id="salary" name="salary">
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="experience">Experience</label>
            <big>Experience</big>
            <textarea rows="8" class="form-control" id="experience" name="experience"></textarea>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="JobType">JobType</label>
            <big>JobType</big>
            <input type="text" class="form-control" id="JobType" name="JobType" >
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="location">location</label>
            <big>location</big>
            <input type="text" class="form-control" id="location" name="location" 
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="AgeRequest">AgeRequest</label>
            <big>AgeRequest</big>
            <input type="text" class="form-control" id="AgeRequest" name="AgeRequest" >
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="GenderRequest">GenderRequest</label>
            <big>GenderRequest</big>
            <input type="text" class="form-control" id="GenderRequest" name="GenderRequest">
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="DegreeRequest">DegreeRequest</label>
            <big>DegreeRequest</big>
            <input type="text" class="form-control" id="DegreeRequest" name="DegreeRequest" >
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="amount">amount</label>
            <big>amount</big>
            <input type="text" class="form-control" id="amount" name="amount">
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="description">description</label>
            <big>description</big>
            <textarea rows="8" class="form-control" id="description" name="description"></textarea>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="benefit">benefit</label>
            <big>benefit</big>
            <textarea rows="8" class="form-control" id="benefit" name="benefit"></textarea>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="FileRequest">FileRequest</label>
            <big>FileRequest</big>
            <textarea rows="8" class="form-control" id="FileRequest" name="FileRequest"></textarea>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="deadline">deadline</label>
            <big>deadline</big>
            <input type="text" class="form-control" id="deadline" name="deadline">
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="another">another</label>
            <big>another</big>
            <textarea rows="8" class="form-control" id="another" name="another"></textarea>
            </div>
        </div>
        <div class="control-group">
            <big>Status</big>
            <div class="form-check">
                <select class="form-control" id="status" name="status">
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </div>
        </div>
        <!-- <?php
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
        </div> -->
        
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