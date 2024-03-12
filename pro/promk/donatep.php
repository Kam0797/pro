<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include ('conn.php');
        session_start();
        $ph=$_SESSION['x'];

        $data=mysqli_query($conn,"select*from donors where ph=$ph");
        $data1=mysqli_fetch_array($data);

        $plist=mysqli_query($conn,"select plant from plant");
        $plist1=mysqli_fetch_all($plist);
        $plc=count($plist1); //plist1 count

    ?>
    <form action="donatep.php" method="post">
       
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
        <table>
                <tr>
                    <th>Select plant </th>
                    <td><select name='pl'>
			<?php 
      for($i=0;$i<$plc;$i++) {
?> <option value="<?php echo $plist1[$i][0];?>"><?php echo $plist1[$i][0];?></option> <?php
        
      }?></select></td>
      <td><input type='text' name='qty'></td>
                </tr>
        </table>
        <input type="submit" value="next">
        <!-- <a href='don_doc.php'><input type="button" value="End" ></a> -->
    </form>

        <?php
            $qty=$_POST['qty'];settype($qty,'int');
            $pl=$_POST['pl'];
            $date='2024-03-09';
            $stmt=$conn->prepare("insert into donsp values (?,?,?,?)");
            $stmt->bind_param('ssis',$ph,$pl,$qty,$date);
            $stmt->execute();

        $x=mysqli_query($conn,"update  plant set inc = inc +$qty where plant = $pl");
        // $stmt=$conn->prepare("update  plant set inc = inc + ? where plant = ?");
        //     $stmt->bind_param('is',$qty,$pl);
        //     $stmt->execute();

        if(!$stmt) {
            echo "<script> window.alert('po'); </script>";
        }

         ?>

</body>
</html>