<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Booking</title>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="./assets/packages/bootstrap-4.0/css/bootstrap.css" rel="stylesheet"/>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link href="./assets/css/style.css" rel="stylesheet"/>

</head>

<body>

<div class="wrapper">
	<div class="header"><?php include("partials/header.php"); ?></div>
    <div class="main">
    	<?php include("partials/main_booking.php"); ?>
    </div>
    <div class="footer">
    	<?php include("partials/footer.php"); ?>
    </div>
</div><!-- end div.wrapper -->

<script src="./assets/packages/jquery/jquery-3.4.1.min.js"></script>
<script src="./assets/packages/bootstrap-4.0/js/bootstrap.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="./assets/js/main.js"></script>

<script type="text/javascript">
	$( function() {
	    $(".date-picker").datepicker({
	    	"dateFormat" : "dd-mm-yy"
	    });
	 } );

</script>

</body>
</html>