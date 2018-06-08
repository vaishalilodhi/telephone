<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url() . 'css/bootstrap.css'; ?>" />
    <link rel="stylesheet" type="text/css" href="<?=base_url() . 'css/bootstrap.min.css'; ?>" />
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Telephone Directory</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="pull-right"><a href="<?=base_url('login/index');?>">Login</a></li>
                <li class="pull-right"><a href="#">Logout</a></li>
            </ul>
        </div>
    </nav>
