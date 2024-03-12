<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor registration</title>
    <style>
        body {
            max-width:max-content;
            margin: auto;
        }
    </style>
     <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</head>
<body >
    <center>
    <h1> Donor details</h1><br>
    <form action="donor.php" method="post">
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
            <td align=cemter><input type=submit value=Register required></td>
        </tr>
    </table>            
    </form>
    </center>
    <?php 
    include('conn.php');
    
    $name=$_POST['name'];
    $age=$_POST['age'];settype($age,'int');
    $addr=$_POST['addr'];
    $ph=$_POST['ph'];

    $stmt=$conn->prepare('insert into donors values(?,?,?,?)');
    $stmt->bind_param('siss',$name,$age,$addr,$ph);
    $r=$stmt->execute();

    if($ph!=NULL) {
    if($r) {
        echo "<script>window.alert('ok added');</script>";
    }
    else {
        echo "<script>window.alert('errer');</script>";
    }
    }
    mysqli_query($conn,"delete from donors where ph IS NULL");


?>
    
    
</body>
</html>