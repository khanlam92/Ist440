$(document).ready(function(){
	//console.log('document ready');
	var url = document.URL;
	if(url.indexOf("success") > -1)
	{
		console.log("Congrads you are now signed up!");
	}
	else if(url.indexOf("fail") > -1)
	{
		console.log("We're sorry something went wrong!")
	}

	//Display current page
	if(url.indexOf("/") > -1)
	{
		$('#home').addClass('active');
		$('#profile').removeClass('active');
		$('#about').removeClass('active');
		$('#timesheet').removeClass('active');
		$('#contact').removeClass('active');
		$('#settings').removeClass('active');
	}
	if(url.indexOf("profile") > -1)
	{
		$('#profile').addClass('active');
		$('#about').removeClass('active');
		$('#timesheet').removeClass('active');
		$('#contact').removeClass('active');
		$('#home').removeClass('active');
		$('#settings').removeClass('active');
	}
	if(url.indexOf("timesheet") > -1)
	{

		$('#timesheet').addClass('active');
		$('#profile').removeClass('active');
		$('#about').removeClass('active');
		$('#contact').removeClass('active');
		$('#home').removeClass('active');
		$('#settings').removeClass('active');
	}
	if(url.indexOf("settings") > -1)
	{
		$('#settings').addClass('active');
		$('#profile').removeClass('active');
		$('#about').removeClass('active');
		$('#timesheet').removeClass('active');
		$('#contact').removeClass('active');
		$('#home').removeClass('active');
	}
	if(url.indexOf("about") > -1)
	{
		$('#about').addClass('active');
		$('#profile').removeClass('active');
		$('#timesheet').removeClass('active');
		$('#contact').removeClass('active');
		$('#home').removeClass('active');
		$('#settings').removeClass('active');
	}
	if(url.indexOf("contact") > -1)
	{
		$('#contact').addClass('active');
		$('#profile').removeClass('active');
		$('#about').removeClass('active');
		$('#timesheet').removeClass('active');
		$('#home').removeClass('active');
		$('#settings').removeClass('active');
	}
});
