<?php
$user_id = $this->session->userdata('user_id');
if (!$user_id) {
    redirect('login');
}
require_once( dirname( __FILE__ ) . '/include/navbar.php');
?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Click to Sort <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">Name</a></li>
                    <li><a href="#">Date</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-4">
            <form class="navbar-form" role="search" action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="keyword">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit" value="Search">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <a href="<?=base_url('Profile/telephone');?>" class="btn btn-primary pull-right" type="button">
            <span class="glyphicon glyphicon-plus"></span> New Contact</a>
        </div>
    </div>
    <div class="row">
        <table class="table table-hover">
            <tr>
                <th>User Name</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Email Id</th>
                <th>Mobile Number</th>
                <th>Landline</th>
            </tr>
            <!-- <?php 
            foreach ($variable as $key => $value) {

            } ?> -->
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
</div>
