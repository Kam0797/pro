<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipts</title>
</head>
<body>
    <?php
    include('conn.php');
    session_start();

    // echo 'passed';
        $ph=$_SESSION['x1'];
        var_dump($ph);
        $data=mysqli_query($conn,"select*from supl where ph=$ph");
        $data1=mysqli_fetch_array($data);

        $prolist=mysqli_query($conn,"select pro from product");
        $prolist1=mysqli_fetch_all($prolist);
        $plc=count($prolist1); //prolist1 count


        
    
//         session_start();
//         $ph=$_SESSION['ph'];
//         var_dump($_SESSION);

//         session_start();
// $variable = $_SESSION['variable'];echo $variable; // This will print "This is a variable from file1.php"

    ?>
    <form action="receipt.php" method="post">
        Name<?php echo$data1[0];?>
        Age<?php echo$data1[1];?>
        Address<?php echo$data1[2];?>
        Phone<?php echo$data1[3];?>
        <table>
            <tr>
                <th>Product</th>
                <th>Price p.u.</th>
                <th>Qty</th>
                <th>Amt</th>
            </tr>
            <tr>
                <td>
		<select name=pro>
			<?php 
      for($i=0;$i<$plc;$i++) {
?> <option value="<?php echo $prolist1[$i][0];?>"><?php echo $prolist1[$i][0];?></option> <?php
        
      }?></select></td>
                
                <td><input type=text name=pri></td>
                <td><input type=text name=qty></td>
                <td><input type=text name=amt></td>
                
            </tr>
        </table>
        <input type="submit" value="next">
        <a href='rec_gen.php'><input type="button" value="End" onclick=""></a>
    </form>
    <?php
        
        $pro=$_POST['pro'];
        $pri=$_POST['pri'];settype($pri,'int');
        $qty=$_POST['qty'];settype($qty,'int');
        $amt=$pri*$qty; $_POST['amt']=$amt;
        $date="2024-03-05";
        $stmt=$conn->prepare("insert into stockin values (?,?,?,?,?,?)");
        $stmt->bind_param('ssiiis',$ph,$pro,$pri,$qty,$amt,$date);
        $stmt->execute();
        $stmt->close();

        
        $stmt=$conn->prepare("insert into stockin_temp(pro,pri,qty,amt)  values(?,?,?,?)");
        $stmt->bind_param('siii',$pro,$pri,$qty,$amt);
        $stmt->execute();

    
     ?>
</body>
</html>