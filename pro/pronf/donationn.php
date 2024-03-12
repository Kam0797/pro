<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation history</title>
</head>
<body>
    <?php 
    //don hist
        include('conn.php');
        $res=mysqli_query($conn,"select donorn.name, donn.ph, donn.amt, donn.date from donn  join donorn on donorn.ph=donn.ph order by donn.date");
        $res1=mysqli_fetch_all($res);

        $c=count($res1);
    echo"<table>";
            for($i=0;$i<$c;$i++) {
                echo "<tr>";
                for($j=0;$j<4;$j++) {
                    echo "<td>".$res1[$i][$j]."</td>";
                }
                echo "</tr>";
            }
    echo"</table>";
    ?>
</body>
</html>