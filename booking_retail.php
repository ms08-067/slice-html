<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Booking Retail</title>
<link href="./assets/packages/bootstrap-4.0/css/bootstrap.css" rel="stylesheet"/>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link href="./assets/css/style.css" rel="stylesheet"/>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<div class="wrapper">
	<div class="header"><?php include("partials/header.php"); ?></div>
    <div class="main">
    	<?php include("partials/main_booking_retail.php"); ?>
    </div>
    <div class="footer">
    	<?php include("partials/footer.php"); ?>
    </div>
</div><!-- end div.wrapper -->

<script src="./assets/packages/jquery/jquery-3.4.1.min.js"></script>
<script src="./assets/packages/bootstrap-4.0/js/bootstrap.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script type="text/javascript">
	$( function() {
	    $(".date-picker").datepicker({
	    	"dateFormat" : "dd-mm-yy"
	    });


	    $('#flat-slider').slider({
		  orientation: 'horizontal',
		  range:       true,
		  values:      [17,67]
		});
	    
	 } );

</script>

</body>
</html>