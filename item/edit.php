<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDatabase</title>
    <style>
        body{
            font-size: 100px;
            margin-top: 100px;
            margin-left:500px;
            color: #00a087;
            
        }
    </style>
   
</head>
<body>

<?php

$serial1 = $_GET['serial1'];


$conn = new mysqli('localhost','root','','material');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
    $query="DELETE FROM room WHERE serial1='$serial1'";
    $data=mysqli_query($conn,$query);
    if($data){
        header("Location: history.php");
        echo "deleted";

    }
    else{
        echo "not";
    }
}
// delete data query

?>
</body>
</html>

