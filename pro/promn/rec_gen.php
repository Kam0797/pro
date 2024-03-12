<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
</head>
<body>
    Sale Invoice
    <?php 
        include('conn.php');

        $res=mysqli_query($conn,'select*from stockin_temp');
        $res1=mysqli_fetch_all($res);
        echo"<table border=1px cellpadding=10px>
        <tr>
            <th>Sl No</th>
            <th>Product</th>
            <th>Price</th>
            <th>Units</th>
            <th>Amount</th>";
        $c=count($res1);
        for($i=0;$i<$c;$i++) { echo "<tr>";
            for ($j=0;$j<5;$j++) {
                echo "<td>".$res1[$i][$j]."</td>";
            }
            echo "</tr>";
        }
        // echo"</table>";
// echo $res1[0][1];
$tot=mysqli_query($conn,"select sum(amt) from stockin_temp");
$tot1=mysqli_fetch_array($tot);
echo "<tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>".$tot1[0]."</td></tr>";
        echo"</table>";

        mysqli_query($conn,"truncate stockin_temp");
    
    ?>
</body>
</html>