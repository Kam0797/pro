<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate</title>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</head>
<body>
    <?php
    include('conn.php');
    session_start();

    // echo 'passed';
        $ph=$_SESSION['x'];
        var_dump($ph);
        $data=mysqli_query($conn,"select*from donorn where ph=$ph");
        $data1=mysqli_fetch_array($data);

        // $prolist=mysqli_query($conn,"select pro from product");
        // $prolist1=mysqli_fetch_all($prolist);
        // $plc=count($prolist1); //prolist1 count
        

        
    
//         session_start();
//         $ph=$_SESSION['ph'];
//         var_dump($_SESSION);

//         session_start();
// $variable = $_SESSION['variable'];echo $variable; // This will print "This is a variable from file1.php"

    ?>
    <form action="donate.php" method="post">
       
        <table widht=100 cellpadding=6px>
            <tr>
                
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Phone</th>
            </tr>
            <tr>
                
		        <td><?php echo$data1[0];?></td>
                <td><?php echo$data1[1];?></td>
                <td><?php echo$data1[2];?></td>
                <td><?php echo$data1[3];?></td>                
            </tr>
        </table>
        <center> <table>
                    <tr><th>Donation amount</th></tr>
                    <tr><td><input type="text" name="amt"></td></tr></table>
        <input type="submit" value="next">
        <!-- <a href='don_doc.php'><input type="button" value="End" ></a> -->
    </form>
    <?php
    //    $no=$_POST['no'];
    //    $pro=$_POST['pro'];
    //    $pri=$_POST['pri'];settype($pri,'int');
    //    $qty=$_POST['qty'];settype($qty,'int');
    //    $amt=$pri*$qty; $_POST['amt']=$amt;

       $amt=$_POST['amt'];settype($amt,'int');
       $date="2024-03-05";
       $stmt=$conn->prepare("insert into donn  values (?,?,?)");
       $stmt->bind_param('sis',$ph,$amt,$date);
       $stmt->execute();
       $stmt->close();
       
    //    $stmt=$conn->prepare("insert into stockout_temp(pro,pri,qty,amt)  values(?,?,?,?)");
    //    $stmt->bind_param('siii',$pro,$pri,$qty,$amt);
    //    $stmt->execute();
    $_SESSION['amt']= $amt;
    $_SESSION['name']= $data1[0];
    $_SESSION['age']= $data1[1];
    $_SESSION['addr']=$data1[2];
    $_SESSION['ph']=$data1[3];
    $_SESSION['date']=$date="2024-03-08";

    
    if($amt>0) {
     ?>
     <script>
        let res = confirm("Donation recorded, Print receipt?");
        if(res) {
            document.location.href="don_doc.php";
        }
        else {
                console.log('nothing');
        }
    </script>
    <?php } 
    mysqli_query($conn,"delete from donn where amt= 0");?>


     
</body>
</html>