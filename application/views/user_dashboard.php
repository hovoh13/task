<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('util/user/css/style.css') ?>" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<script src="<?= base_url('util/js/underscore-min.js') ?>" ></script>
	<script src="<?= base_url('util/user/js/script.js') ?>" ></script>
</head>
<body>
<div class="container h-100">
	<div class="row h-100 justify-content-center align-items-center">
		<div class="col-lg-4 col-md-6  col-sm-12">
		<form    method="post" id="logon"  >
		  <div class="form-group">
		    <label for="name">User name:</label>
		    <input type="text" class="form-control" name="name" id="name`">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" name="pwd" id="pwd">
		  </div>
		  <button type="submit" class="btn btn-primary" id="submit">Log on</button>
		</form>
		<div class=" alert alert-danger">
		    <strong>Error !</strong> Such people do not exist
		</div>
		</div>
	</div>
</div>
<div class="container users_body">
	<div id="users">
			
	</div>
	<a href="#"  class="btn btn-primary btn-sm logout"  >Log Out</a>
	<h3>Active users</h3>
	<div class="row"  id="activ_users">
		
	</div>
</div>
</body>
</html>