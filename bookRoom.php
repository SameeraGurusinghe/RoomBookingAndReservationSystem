<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<title>booking</title>

</head>

<body style="background-color: lightgreen;">

<button class="btn btn-dark"><a href="availabilityRoom.php">CHECK AVAILABILITY</a></button>
<div class="row">

<div class="col-sm-12 text-center">
    <h3>Book a Room</h3>
    
    <form action="bookaction.php" method="post">
    <div class="social text-center">
        <input type="date" name="checkin" placeholder="Check in">
        <input type="date" name="checkout" placeholder="Check out">
        <input type="text" name="roomid" placeholder="Room id">

        <button type="submit" class="btn-secondary">BOOKING</button>

    </div><br>
	</form>

</div>
</div>

</body>
</html>