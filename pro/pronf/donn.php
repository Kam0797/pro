<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //don summ
    include('conn.php');
    $dons=mysqli_query($conn,"select donorn.name, donn.ph, SUM(donn.amt) from donn join donorn on donorn.ph=donn.ph group by ph");
    $dons1=mysqli_fetch_all($dons);
    $c=count($dons1);
    echo"<table>";
            for($i=0;$i<$c;$i++) {
                echo "<tr>";
                for($j=0;$j<3;$j++) {   //with love
                    echo "<td>".$dons1[$i][$j]."</td>";
                }
                echo "</tr>";
            }
    echo"</table>";

    ?>
    
</body>
</html>