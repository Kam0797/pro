<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button {
            padding:10px;
            margin-top: 25px;
        }
        div {
            width:100vb;
            align-items: center;
        }
        #reg {
            margin-bottom: 25px;
        }
        #reg1 {
            padding-bottom: 25px;
        }
        
    </style>
</head>
<body>
    <h2>Mark Entry</h2>
    <form action="mark_reg.php" method="post">
        <table>
            <tr>
                <td id="reg1">Reg no</td>
                <td><input type="text" name="reg" id="reg"><br></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Business finance</td>
                <td><input type="text" name="bf"><br></td>
            </tr>
            <tr>
                <td>Web design</td>
                <td><input type="text" name="wd"><br></td>
            </tr>
            <tr>
                <td>Cyber law</td>
                <td><input type="text" name="cl"><br></td>
            </tr>
                <td>MIS</td>
                <td><input type="text" name="mis"><br></td>
            </tr>
            </tr>
                <td></td>
                <td align="center"><button  type=submit name=enter>Enter</button></td>
            </tr>
</table>
        </form>
        


    <?php
    
        require('conn.php');
        $reg=$_POST['reg'];
        $bf=$_POST['bf'];
        $wd=$_POST['wd'];
        $cl=$_POST['cl'];
        $mis=$_POST['mis'];
        $tot=$bf+$wd+$cl+$mis;
        $perc=$tot/4;
        $stmt=$conn->prepare('insert into list_mark values(?,?,?,?,?,?,?)');
        $stmt->bind_param('siiiiii', $reg,$bf,$wd,$cl,$mis,$tot,$perc);
        $x=$stmt->execute();
        if(x) {
               echo "<script> window.alert('mudinch');</script> ";
        }
        

    ?>
    
</body>
</html>