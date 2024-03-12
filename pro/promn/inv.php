<?php 

//testing
include('conn.php');
$prolist=mysqli_query($conn,'select pro from stockin');
        $prolist1=mysqli_fetch_all($prolist);
        $plc=count($prolist1); //prolist1 count
        echo"###".$plc;
        echo $prolist1[1][0];
        





?>
<select name=prolist>
<?php 
var_dump($prolist1);
for($i=0;$i<$plc;$i++) {
?> <option value="<?php echo $prolist1[$i][0];?>"><?php echo $prolist1[$i][0];?></option> <?php

}?></select>