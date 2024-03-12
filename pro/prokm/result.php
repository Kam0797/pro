<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>

    <style>
        table {
            border:2px solid yellow;
            padding: 4px;
            margin:10px;
            border-radius:8px;
        }
        td,th {
            padding: 11px;
            border:2px dotted grey;
            border-radius:8px;
        }
        body {
         margin: 50px;
        }
    </style>
        
</head>
<body>
<form action=result.php method=post>
    Reg no: <input type="text" name="reg">
    <button type="submit" name="Submit">Check result</button>
</form> 
    
    <?php
    include('conn.php');//echo'hgc';
    settype($_POST['reg'],'int'); 
    $reg=$_POST['reg'];
    //var_dump($_POST['reg']);
    //$res=mysqli_query($conn,"select bf,wd,cl,mis from list_mark where reg='$reg'");   
//$q="select * from list_mark where reg=$reg"; //echo $q;
    $res=mysqli_query($conn,"select * from list_mark where reg=$reg"); echo "<br>"."Register no:".$reg;  
    // $stmt=$conn->prepare(" bf,wd,cl,mis from list_mark where reg=?");
    // $stmt->bind_param('s',$reg);
    // $stmt->execute();
    //var_dump($res);echo '<br>';
    // if(mysqli_fetch_assoc($res)) {
    //     var_dump(mysqli_fetch_assoc($res));
    // }
    // else echo'ffok';
    
    // $res1=mysqli_fetch_array($res);
    // echo'res1='; var_dump($res1);
   
    $row = mysqli_fetch_array($res);
        //echo "<tr>";
        // foreach ($row as $key => $value) {
        //     echo "<td>" . $value . "</td>"."<br>";
        // }
        
        //var_dump($row);
        //echo "</tr>";
     
    ?>
    <table>
        <tr>
            <th>Subject</th>
            <th>Marks</th>
        </tr>
        <tr>
            <td>BIZ FIN</td>
            <td><?php echo$row[1];?></td>
        </tr>
        <tr>
            <td>WEB DESIGN</td>
            <td><?php echo$row[2];?></td>
        </tr>
        <tr>
            <td>CYBER LAW</td>
            <td><?php echo$row[3];?></td>
        </tr>
        <tr>
            <td>MIS</td>
            <td><?php echo$row[4];?></td>
        </tr>
        <tr>
            <td>TOTAL</td>
            <td><?php echo$row[5];?></td>
        </tr>
        <tr>
            <td>PERCENTAGE%</td>
            <td><?php echo$row[6];?></td>
        </tr>
    </table>
<?php
//var_dump($row[0]);
?>

            
    
</body>
</html>




