<?php
require_once( dirname( __FILE__ ) . '/include/navbar.php');
?>
<div class="container">
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle pull-right" type="button" data-toggle="dropdown">Click to Sort<span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Name</a></li>
            <li><a href="#">Date</a></li>
        </ul>
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
    </div>
</div>
