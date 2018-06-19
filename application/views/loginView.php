<?php
require_once( dirname( __FILE__ ) . '/include/navbar.php');
?>
<div class="container">
    <h1>Log in</h1>
    <div class="row">
        <?php
        $success_msg = $this->session->flashdata('success_msg');
        $error_msg = $this->session->flashdata('error_msg');
        if (isset($success_msg)) { ?>
            <div class="alert alert-success"><?=$success_msg;?></div>
        <?php } elseif(isset($error_msg)) { ?>
            <div class="alert alert-danger"><?=$error_msg;?></div>
        <?php } ?>
        <form class="col-md-4" method="post" action="<?=base_url('login/login_user');?>">
            <div class="form-group">
                <label for="user_name">User Name</label>
                <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter User Name">
            </div>
            <div class="form-group">
                <label for="user_password">Password</label>
                <input type="password" class="form-control" id="user_password" name="user_password" placeholder="Password">
            </div>
            <input type="submit" value="Login" name="login" class="btn btn-primary" />
            <button type="submit" class="btn btn-danger">Cancel</button>
        </form>
    </div>
    <br>
    <div class="row">
        <p>New user <a href="<?=base_url('login/register');?>">Register here.</a></p>
    </div>
</div>
<?php require_once( dirname( __FILE__ ) . '/include/footer.php');?>
