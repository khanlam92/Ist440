<html>
<head>
<?php include 'templates/header.html'; ?>
</head>
<body>
<?php include 'templates/main_navigation.html'; ?>
<link rel="stylesheet" type="text/css" href="static/css/index_style.css">

<div class="page_container">
	<?php include 'templates/banner.html'; ?>

<div id="welcome_header" class="jumbotron">
	<h1>Manage your time<br>Like a <strong>Boss</strong></h1>
	<span class="glyphicon glyphicon-usd">Save time, money, and heartache</span><br>
	<span class="glyphicon glyphicon-tree-conifer">Less tree paper, more green paper.</span><br>
	<span class="glyphicon glyphicon-plane">See productivity sky rocket</span><br><br>
	<p><a class="btn btn-primary btn-lg" href="about.php" role="button">Learn more</a></p>
</div>
<!-- Begin signup form -->
<form id="signup">
  <div id="email_container" class="form-group has-feedback">
    <label>Email address</label>
  	<input id="email" type="email" class="form-control" placeholder="Enter email">
  	<i class="glyphicon glyphicon-user form-control-feedback"></i>
  </div>
  <div id="password_container" class="form-group has-feedback">
    <label>Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    <i class="glyphicon glyphicon-exclamation-sign form-control-feedback"></i>
  </div>
  <div id="company_container" class="form-group">
    <label>Company</label>
    <input type="text" class="form-control" id="company" placeholder="Company">
  </div>
  <button type="submit" class="btn btn-primary btn-lg">Sign up</button>
</form>
<!-- End signup form -->

<!-- Login modal -->
<div id="login" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
      	<form id="login">
			<div id="email_container" class="form-group has-feedback">
			<label>Email address</label>
				<input id="email" type="email" class="form-control" placeholder="Enter email">
				<i class="glyphicon glyphicon-user form-control-feedback"></i>
			</div>
			<div id="password_container" class="form-group has-feedback">
			<label>Password</label>
			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			<i class="glyphicon glyphicon-exclamation-sign form-control-feedback"></i>
			</div>
			<button type="submit" class="btn btn-primary btn-lg">Login</button>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End login modal -->

</div>
<!-- End page container -->

<!-- Begin page level scripts -->
<script type="text/javascript" src="static/scripts/script.js"></script>
<script>
$(document).ready(function(){
	$('#email_container').tooltip({'trigger':'focus', 'title': 'This will be your user name', 'placement': 'right'});
	$('#password_container').tooltip({'trigger':'focus', 'title': 'Must be more than 8 characters', 'placement': 'right'});
});
</script>
</body>
</html>
