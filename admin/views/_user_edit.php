
<!-- Main Content -->
<div class="content-wrapper" style="background: #fff;">
    <div class="container-fluid">
    <div class="col-lg-12 col-md-12 mx-auto">
        <p>Edit User</p>
        <form name="editUser" id="editUser" action="" method="post">
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="namecompany">NameCompany</label>
            <big>NameCompany</big>
            <input type="text" class="form-control" id="namecompany" name="namecompany" value="<?php echo $user['namecompany']; ?>">
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="representative">Representative</label>
            <big>Representative</big>
            <input type="text" class="form-control" id="representative" name="representative" value="<?php echo $user['representative']; ?>" />
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="email">Email</label>
            <big>Email</big>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>" />
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="username">Username</label>
            <big>Username</big>
            <input type="text" class="form-control" id="username" name="username" value="<?php echo $user['username']; ?>" />
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="phone">Phone</label>
            <big>Phone</big>
            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $user['phone']; ?>" />
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="address">Address</label>
            <big>Address</big>
            <input type="text" class="form-control" id="address" name="address" value="<?php echo $user['address']; ?>" />
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
            <label for="status">Status</label>
            <big>Status</big>
            <input type="text" class="form-control" id="status" name="status" value="<?php echo $user['status']; ?>" />
            </div>
        </div>

        <!-- <div class="control-group">
            <big>Status</big>
            <div class="form-check">
                <select class="form-control" id="status" name="status">
                    <option value="0">0</option>
                    <option value="1">1</option>
                </select>
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