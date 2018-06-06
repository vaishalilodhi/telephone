<?php
require_once( dirname( __FILE__ ) . '/include/header.php');
require_once( dirname( __FILE__ ) . '/include/navbar.php');
?>
<div class="row">
    <form class="col-md-4">
        <div class="form-group">
            <label for="uname">User Name</label>
            <input type="email" class="form-control" id="uname" placeholder="Enter User Name">
        </div>
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <button type="submit" class="btn btn-danger">Cancel</button>
    </form>
</div>
<br>
<div class="container">
    <div class="row">
        <p>New user <a href="<?=site_url('/SignUp/index');?>">Register here.</a></p>
    </div>
</div>
<?php require_once( dirname( __FILE__ ) . '/include/footer.php');?>
