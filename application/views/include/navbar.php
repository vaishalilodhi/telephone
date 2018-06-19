<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url() . 'css/bootstrap.css'; ?>" />
    <link rel="stylesheet" type="text/css" href="<?=base_url() . 'css/bootstrap.min.css'; ?>" />
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Telephone Directoy</a> 
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?=base_url('welcome_message');?>">Home</a></li>
                <li><a href="#">About</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?=base_url('login/register');?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
                </li>
                <li>
                    <a href="<?=base_url('login');?>"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                </li>
            </ul>
        </div>
    </nav>
