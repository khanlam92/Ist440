<html>
<head>
<?php include 'templates/header.html'; ?>
</head>
<body>
<?php include 'templates/main_navigation.html'; ?>

<div class="page_container">	
<?php include 'templates/banner.html'; ?>

<div class="day">
	  <h1><?php echo date("l"); ?></h1>
</div>

<table class="table table-bordered table-striped table-hover" style="margin-top: 10px;">
    <thead>
        <tr>
            <th data-field="work-item">Work Item</th>
            <th data-field="start">Start Time</th>
            <th data-field="end">End Time</th>
            <th data-field="total">Total Time</th>
            <th data-field="details">Details</th>
            <th data-field="complete">Completed</th>
        </tr>
    </thead>
    
    <tbody>
    	<?php for($i=0; $i < 10; $i++) { ?>
        <tr style="cursor: pointer;">
        	<td>example work item</td>
        	<td>1pm</td>
        	<td>5pm</td>
        	<td>4 hours</td>
        	<td>This task took me a while, I am tired</td>
        	<td>True</td>
        </tr>
        <?php } ?>
    </tbody>

</table>

<!-- Create task modal -->
<div id="create_taskModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Create Task</h4>
      </div>
      <div class="modal-body">
        
      	<form>
		  <div class="form-group">
		    <label for="work-item">Work Item</label>
		    <input type="email" class="form-control" id="work-item" placeholder="Enter a new work item">
		  </div>

		  <div class="form-group">
		    <label for="details">Details</label>
		    <input type="email" class="form-control" id="details" placeholder="Enter item details">
		  </div>

		  <div class="form-group">
		  	<label for="alloted-time">Alloted Time</label>
		  	<input type="text" class="form-control" id="alloted-time" placeholder="Enter alloted time">
		  </div>
		
		  <button type="submit" class="btn btn-primary">Submit</button>
		  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
		</form>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="time_container">
	<div class="btn-group" role="group">
  		<button id="start" type="button" class="btn btn-success btn-lg">Start</button>
  		<button id="stop" type="button" class="btn btn-danger btn-lg">Stop</button>
	</div>
</div>

</div><!-- page container -->
<script type="text/javascript" src="static/scripts/script.js"></script>
<!-- scripts go here -->
<script type="text/javascript">
$(document).ready(function(){

	$('tbody tr').hover(function(){
		console.log("HOVER");
		$(this).addClass("success");
	});
	$('tr').mouseout(function(){
		$(this).removeClass("success");
	});

	$('#start').click(function(){
		//Get the current time
		var crnt_time = (new Date()).getTime();
		$.ajax({
			type: 'post',
			url: 'log_time.php',
			data: {'type': 0},
			success: function(response){
				console.log('timer started');
				console.log(response);
			},
		});
	});

	$('#stop').click(function(){
		//Get the current time
		var crnt_time = (new Date()).getTime();
		$.ajax({
			type: 'post',
			url: 'log_time.php',
			data: {'type': 1},
			success: function(response){
				console.log('timer started');
				console.log(response);
			},
		});
	});

});
</script>
</body>

</html>