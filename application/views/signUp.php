<?php
require_once( dirname( __FILE__ ) . '/include/header.php');
require_once( dirname( __FILE__ ) . '/include/navbar.php');
?>
<div class="row">
    <?php
    $success_msg = $this->session->flashdata('success_msg');
    $error_msg = $this->session->flashdata('error_msg');
    if (isset($success_msg)) { ?>
        <div class="alert alert-success"><?=$success_msg;?></div>
    <?php } elseif(isset($error_msg)) { ?>
        <div class="alert alert-danger"><?=$error_msg;?></div>
    <?php } ?>
    <form class="col-md-6" method="post" action="<?=base_url('login/register_user');?>">
        <div class="form-group">
            <label for="profile">Upload Profile</label>
            <input type="file" class="form-control" id="profile" name="profile">
        </div>
        <div class="form-group">
            <label for="uname">User Name</label>
            <input type="text" class="form-control" id="uname" name="uname" placeholder="Pick User Name">
        </div>
        <div class="form-group">
            <label for="fname">First Name</label>
            <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name">
        </div>
        <div class="form-group">
            <label for="mname">Middle Name</label>
            <input type="text" class="form-control" id="mname" name="mname" placeholder="Enter Middle Name">
        </div>
        <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name">
        </div>
        <div class="form-group">
            <label for="user_email">Email address</label>
            <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Enter Email">
        </div>
        <div class="form-group">
            <label for="new_password">Password</label>
            <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Enter password">
        </div>
        <div class="form-group">
            <label for="mobile">Mobile Number</label>
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile Number">
        </div>
        <div class="form-group">
            <label for="landline">Landline Number</label>
            <input type="text" class="form-control" id="landline" name="landline" placeholder="Enter Landline Number">
        </div>
        <div class="form-group">
            <label for="notes">Notes</label>
            <textarea class="form-control" id="notes" name="notes" placeholder="Enter Note"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="submit" class="btn btn-danger">Cancel</button>
    </form>
</div>
<?php require_once( dirname( __FILE__ ) . '/include/footer.php');?>