<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<?php include_once("db.php"); ?>
<body style="background-color: lightgreen;">

    
<div class="container"><br>
    <div class="info text-center">
    <h4>Available Rooms for your selection time range</h4>
    </div><br>
<table class="table table-sm table-hover table-secondary">
<thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Room No</th>
        <th scope="col">Type</th>
        <th scope="col">Rate</th>
    </tr>
</thead>

<tbody>
<tr>
    <?php

    $date1 = $_POST["checkin"];
    $date2 = $_POST["checkout"];

    $Result = mysqli_query($db,"SELECT * FROM room WHERE room_no NOT IN (SELECT DISTINCT room_no FROM reservation WHERE check_in <= '$date1' AND check_out >= '$date2')");

    while($row=mysqli_fetch_array($Result)){
    $id = $row["id"];
    $roomno = $row["room_no"];
    $type = $row["type"];
    $rate = $row["rate"];
    ?>


    <td><?php echo $id ?></td>
    <td><?php echo $roomno ?></td>
    <td><?php echo $type ?></td>
    <td><?php echo $rate ?></td>
</tr>

<?php } ?>

</tbody>
</table>
</div>


