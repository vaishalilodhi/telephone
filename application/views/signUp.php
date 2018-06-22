<?php
require_once( dirname( __FILE__ ) . '/include/navbar.php');
?>
<div class="container">
    <h1>Create your account</h1>
    <div class="row">
        <form class="col-md-6" method="post" action="<?=base_url('login/register_user');?>">
            <div class="form-group">
                <label for="uname">User Name</label>
                <input type="text" class="form-control" id="uname" name="uname" placeholder="Pick User Name">
            </div>
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter Full Name">
            </div>
            <div class="form-group">
                <label for="emailid">Email address</label>
                <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label for="new_password">Password</label>
                <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Enter password">
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile Number">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="submit" class="btn btn-danger">Cancel</button>
        </form>
    </div>
</div>
<?php require_once( dirname( __FILE__ ) . '/include/footer.php');?>
