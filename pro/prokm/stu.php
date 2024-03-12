<!DOCTYPE html>
<head> <title>Base page</title>

</head>
<body>
    <?php
        error_reporting(E_ALL);
        ini_set("display_errors",1);
        include('conn.php');
    ?>
    <H3 align=center> Register</h3>
    <form action="stu.php" method="POST">
        <table>
            <tr>
                <td>Reg No:</td>
                <td><input type=text name=reg required></td>
            </tr>
                <td>Name:</td>
                <td><input type=text name=name required></td>
            </tr>
            <tr>
                <td>Class:</td>
                <input type=text name=cls required><br>
        phone:<input type=text name=ph required><br>
        Password:<input type=password name=pw0 required id="p0"><br>
        <span></span> 
        Re-type Password:<input type=password name=pw1 required id="p1"><br>
            <!---<script language=javascript>
                function pwval() {
                    if(document.getElementById(p0).value!=document.getElementById(p1).value) {
                        console.log("passcodes dont match, yu suck");
                    }
                    else {
                        console.log(document.getElementById(p1).value);
                    }
                }
            </script>--->
            <?/*php if ($_POST['pw0']==$_POST['pw1']) {
                $pw=$pw0=$pw1;
            }
            else {
                echo ("You suck");
            }*/?>
    
        <button type=submit name=submit>Register</button>
</form>
<script> function clearText() {
         // access input field
         let p1 = document.getElementById('p1');
         // clear the input field.
         p1.value = "";}
    </script>
<?php
    

    $reg=$_POST['reg'];
    $name=$_POST['name'];
    $cls=$_POST['cls'];
    //$ph=settype($_POST['ph'],"string");  --shit code
    $ph=$_POST['ph'];
    var_dump($_POST['ph']);

    echo strlen($ph);

    if($_POST['pw0']==$_POST['pw1'] & strlen($ph)==10)  {
        $pw=sha1($_POST['pw1']);
        #nothing
        echo $reg."<br>".$name."<br>".$cls."<br>".$ph."<br>".$pw;

    #mysqli_query($conn,"create table ")

    $stmt=$conn->prepare('insert into list_main values (?,?,?,?,?)');
    $stmt->bind_param('sssis',$reg,$name,$cls,$ph,$pw);
    $stmt->execute();
    echo '<script> alert("OK added")</script>'; 
    }
    elseif(strlen($ph)!=10) {
        echo '<script> alert("phone number ku evlo number??; Register failed.")</script>'; 
       
    }
    else{
        //
    }

//echo 'something'.'<br>';

    if($_POST['pw0']!=$_POST['pw1']){
        //echo 'something2';
        $pw=0;
       // echo ("kam password correct ta poodu da... thappu"."<br>");
       
       echo '<script> alert("kam password correct ta poodu da... thappu;Register failed.")</script>'; 
       ?><script>clearText();</script><?php
    }
    
    
?>
</body>
</html>
