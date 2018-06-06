<?php
require_once( dirname( __FILE__ ) . '/include/header.php');
require_once( dirname( __FILE__ ) . '/include/navbar.php');
?>
<form class="col-md-6">
    <div class="form-group">
        <label for="profile">Upload Profile</label>
        <input type="file" class="form-control" id="profile">
    </div>
    <div class="form-group">
        <label for="fname">First Name</label>
        <input type="text" class="form-control" id="fname" placeholder="Enter First Name">
    </div>
    <div class="form-group">
        <label for="mname">Middle Name</label>
        <input type="text" class="form-control" id="mname" placeholder="Enter Middle Name">
    </div>
    <div class="form-group">
        <label for="lname">Last Name</label>
        <input type="text" class="form-control" id="lname" placeholder="Enter Last Name">
    </div>
    <div class="form-group">
        <label for="inputEmail">Email address</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="mobile">Mobile Number</label>
        <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile Number">
    </div>
    <div class="form-group">
        <label for="landline">Landline Number</label>
        <input type="text" class="form-control" id="landline" placeholder="Enter Landline Number">
    </div>
    <div class="form-group">
        <label for="note">Notes</label>
        <textarea class="form-control" id="note" placeholder="Enter Note"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="submit" class="btn btn-danger">Cancel</button>
</form>
<?php require_once( dirname( __FILE__ ) . '/include/footer.php');?>