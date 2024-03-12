<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add plants</title>Add plant/tree
</head>
<body>
    <form action="plant.php" method="post">
    Plant name<input type='text' name='pl'><br>
    <input type= 'submit' value='Confirm' id='xy'>
</form>
    <?php
        include('conn.php');
        $pl=$_POST['pl'];
        $stmt=$conn->prepare("insert into plant (plant) values(?)");
        $stmt->bind_param('s',$pl);
        $stmt->execute();
        // $x=mysqli_query($conn,"insert into plant values('$pl',1,2)");
echo'mair';
        if($stmt) {
            echo "<script> window.alert('OK added'); </script>";
        }

?>
    
</body>
</html>