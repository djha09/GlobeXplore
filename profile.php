<?php
include("dbconnect.php");
$query = "select * from users";
$result = mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="details">
        <?php
        if($row = mysqli_fetch_assoc($result)){
            
        
            echo $row['id'];
            echo $row['name'];
            echo $row['email'];
        }
            ?>
        
        
<span></span>
<span></span>
<span></span>




    </div>
</body>
</html>