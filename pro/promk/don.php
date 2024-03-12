<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donations</title>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</head>
<body>

    <H1> Donor verification </H1>
    <form action="don.php" method="post">
        <input type="text" name="ph" required>
        <input type="submit" value="Verify"><br>
        <input type=radio name=opt1 value='a' >Tree/Plant<br>
        <input type=radio name=opt1 value='2' >Cash donation
    </form>
   
    <?php 
        include ("conn.php");
        $ph=$_POST['ph'];
        if($ph==NULL) {$ph='a';}
        //echo 'ghjk';var_dump($ph);
        $v=mysqli_query($conn,"select ph from donors where ph = '$ph'");
        //var_dump($v);
        $v1=mysqli_fetch_array($v);
        //echo'lkj';var_dump($v1[0]);
        //mysqli_query($conn,"insert into bill values($v1[0])");
        // $x='hjk';
        session_start();
        $_SESSION['x']=$ph;
        //echo'lklk';var_dump($_SESSION);
        
        
        
        // //echo'lkj';echo $ph==$v1[0];
         if($ph==$v1[0] && $_POST['opt1']=='a') 
         {  echo "<script>
                document.location.href='donatep.php';
            </script>"; }
         elseif($ph==$v1[0] && $_POST['opt1']=='2') {
            echo "<script>
                document.location.href='donate.php';
            </script>"; 
         }
        //  else echo "<script> window.alert('adei'); </script>"; 

        // else echo 'false';
        // echo $v1["ph"];
        // session_start();
        // $_SESSION['ph']=$v1;

        // session_start();
        // $_SESSION['variable'] = 'This is a variable from file1.php';

// mysqli_query($conn,'truncate bill');



?>

</body>
</html>