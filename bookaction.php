<!DOCTYPE html>
<html>
<head>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<title></title>
</head>
<body>
<body style="background-color: lightgreen;">
</body>
</html>


<?php

include_once("db.php");

$roomid = $_POST["roomid"];
$fdate = $_POST["checkin"];
$tdate = $_POST["checkout"];

if($db){
	/*echo "Database connection successfully completed.";
	echo ("<br>"); */
	}

else{
	/*echo "Database connection Faild.";
	echo ("<br>");*/
}


$Result = mysqli_query($db,"INSERT INTO reservation (room_no,check_in,check_out) VALUES('$roomid','$fdate','$tdate')");

if($Result){
	echo "<script type='text/javascript'>
      
	swal({ title: 'Success !',text: 'You order will be confirm soon',icon: 'success'}).then(okay => {
	if (okay) {
    window.location.href = 'bookRoom.php';}
	});
    </script>";
	/*echo "Data added successfully.";
	echo ("<br>"); */
	}

else{
	echo "<script type='text/javascript'>
                
	swal({ title: 'An error occured!',text: 'Try again',icon: 'error'}).then(okay => {
	if (okay) {
    window.location.href = 'bookRoom.php';}
	});
    </script>";
	/*echo "Data added Faild.";
	echo ("<br>");*/
}

?>

?>