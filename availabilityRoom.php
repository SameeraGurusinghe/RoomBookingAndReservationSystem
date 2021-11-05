<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	 <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet" type="text/css">
  	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
  	<script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<title>booking</title>


<!--<script language="javascript">
    $(document).ready(function () {
        $("#txtdate1").datepicker({
            minDate: 0
        });
    });

    $(document).ready(function () {
        $("#txtdate2").datepicker({
            minDate: 0
        });
    });
</script>-->


</head>

<body style="background-color: lightgreen;">

<button class="btn btn-dark"><a href="bookRoom.php">BOOK A ROOM</a></button>

<div class="row">

<div class="col-sm-12 text-center">
    <h3>Check Availability</h3>
    
    <form action="book.php" method="post">
    <div class="social text-center">

        <input type="date" name="checkin" placeholder="Check in">
        <input type="date" name="checkout" placeholder="Check out">

        <button type="submit" class="btn-secondary" style="width: 60px;">CHECK</button>

    </div><br>
	</form>

</div>
</div>

</body>
</html>