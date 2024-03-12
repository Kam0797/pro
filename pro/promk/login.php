<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body leftmargin=30%> 
    <h2>Login</h2><br>
    <form action='login.php' method="post">
   <table>
    <tr> 
        <td>USER</td>
        <td><input type=text name=usr><br><td>
    </tr>    

    <tr>
        <td>PASSCODE</td>
        <td><input type=password name=pwauth></td>
    </tr>
     <tr>
        <td></td>
           <td><button name=submit>login</button></td>
    </tr>
    </table>
</form>
<?php 
$usr=$_POST['usr'];
$pwauth=sha1($_POST['pwauth']);
#stmt=$conn->prepare('select reg,pw from list_main where reg=? && pw= ?');
#stmt->bind_param('ss',$reg,$pwauth);
#stmt->execute;
#$q="select reg,pw from list_main where reg=$usr && pw=$pwauth";

var_dump(isset($_POST['0']));
$q="select username from list_main where reg=$usr && pw=$pwauth";
var_dump($q);
$res=mysqli_query($conn,$q);
var_dump(mysqli_query($conn,$q));
$res1=mysqli_fetch_assoc($res);
var_dump($res1);

?>
</body>
</html>
