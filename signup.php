<?php
session_start();
?>
<html>
<head>
<?php include 'templates/header.html'; ?>
</head>
<body>
<?php include 'templates/main_navigation.html'; ?>
<div class="page_container">
	<div id="jumbo" class="jumbotron">
  		<h1>Not a member?  Sign Up!</h1>
  		<p>Sign up is quick and easy</p>
  		<p><a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#create_userModal" href="#" role="button">Sign Up!</a></p>
	</div>

	<!-- Sign up modal -->
	<div id="create_userModal" class="modal fade">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Sign Up Today!</h4>
	      </div>
	      <div class="modal-body">
	        
	      	<form class="form-horizontal" action="php/create_user.php" method="POST">
			  <div class="form-group">
			    <label class="col-sm-2 control-label">Email</label>
			    <div class="col-sm-10">
			      <input id="signup_email" name="email" type="email" class="form-control" placeholder="Email">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label">Password</label>
			    <div class="col-sm-10">
			      <input id="signup_password" name="password" type="password" class="form-control" placeholder="Password">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-primary btn-lg active">Sign Up!</button>
				  <button type="button" class="btn btn-default btn-lg active" data-dismiss="modal">Back</button>
			    </div>
			  </div>
			</form>

	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

</div><!-- page container -->
<?php include 'templates/scripts.html'; ?>
<script type="text/javascript" src="static/scripts/signup_validation.js"></script>
</body>
</html>