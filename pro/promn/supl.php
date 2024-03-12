<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</head>
<body>
    
    <h1> Supplier details</h1><br>
    <form action="supl.php" method="post">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" required></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input type=text name="age"required></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="addr" required></td>
        </tr>
             <td>Phone</td>
             <td><input type="text" name="ph" required></td>
        </tr>     
        <tr>
            <td></td>
            <td><input type=submit value=Register required></td>
        </tr>
    </table>            
    </form>
    <?php 
    include('conn.php');

    $name=$_POST['name'];
    $age=$_POST['age']; settype($age,'int');
    $addr=$_POST['addr'];
    $ph=$_POST['ph'];
    echo $ph;
    if($ph==null) {$ph=0;}
    
    else 
    {
    $stmt=$conn->prepare('insert into supl values(?,?,?,?)');
    $stmt->bind_param('siss',$name,$age,$addr,$ph);
    $r=$stmt->execute();

    if($r) {
        echo "<script>window.alert('ok added');</script>";
    }
    else {
        echo "<script>window.alert('errer');</script>";
    }
    }
    mysqli_query($conn,'delete from supl where ph=0');


?>
    
    
</body>
</html>