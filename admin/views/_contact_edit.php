
<!-- Main Content -->
<div class="content-wrapper" style="background: #fff;">
    <div class="container-fluid">
    <div class="col-lg-12 col-md-12 mx-auto">
        <p style="color: red">Edit post of <?php echo $contact['name']; ?></p>

        <form name="editContact" id="editContact" action="" method="post">
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="name">Name</label>
            <big>Name</big>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $contact['name']; ?>">
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="email">Email</label>
            <big>Email</big>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $contact['email']; ?>" />
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="phone">Phone</label>
            <big>Phone</big>
            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $contact['phone']; ?>" />
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="message">Message</label>
            <big>Message</big>
            <input type="text" class="form-control" id="message" name="message" value="<?php echo $contact['message']; ?>" />
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
        <!-- <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="status">Status</label>
            <big>Status</big>
            <input type="text" class="form-control" id="status" name="status" value="<?php echo $user['status']; ?>" />
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