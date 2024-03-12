<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passen reg</title>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</head>
<body>
    
    <h1> Passenger Registration</h1><br>
    <form action="passen.php" method="post">
    <table>
        <tr>
            <td>Aadhar id</td>
            <td><input type="text" name="uid" required></td>
        </tr>
        <tr>
            <td>First Name</td>
            <td><input type=text name="fnm"required></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="lnm" required></td>
        </tr>
             <td>E-mail</td>
             <td><input type="email" name="email" placeholder="enter email" pattern="[^ @]*@[^ @]*"></td>
        </tr>     
        <tr>
            <td>Phone</td>
            <td><input type="text" name="ph" required></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="addr" required></td>
        </tr>
        <tr>
            <td>Date of Birth</td>
            <td><input type="date" name="dob" required></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td></td>
            <td align="center"> <input type=submit value=Register ></td>
        </tr>
    </table>            
    </form>
    <?php 
    include('conn.php');

    $uid=$_POST['uid'];
    $fnm=$_POST['fnm']; 
    $lnm=$_POST['lnm'];
    $email=$_POST['email'];
    $ph=$_POST['ph'];
    $addr=$_POST['addr'];
    $dob=$_POST['dob'];
    // echo $ph;
    if($uid==null) {$uid=0;}
    
    else 
    {
    $stmt=$conn->prepare('insert into passen values(?,?,?,?,?,?,?)');
    $stmt->bind_param('sssssss',$uid,$fnm,$lnm,$email,$ph,$addr,$dob);
    $r=$stmt->execute();

    if($r) {
        echo "<script>window.alert('ok added');</script>";
    }
    else {
        echo "<script>window.alert('errer');</script>";
    }
    }
    mysqli_query($conn,"delete from passen where uid is null");


?>
    
    
</body>
</html>