<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bk1</title>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</head>
<body>
    <form action="booking1.php" method="post">
        From <input type="text" name="from">
        To <input type="text" name="to">
        Date <input type="date" name="date">
        Class<select name="cls">
            <option value="Economy">Economy</option>
            <option value="Premium">Premium</option>
            <option value="Business">Business</option>
        </select>
    </form>

    <?php 
        $from=$_POST['from'];
        $to=$_POST['to'];
        $date=$_POST['date'];
        $cls=$_POST['cls'];

        $stmt=$conn->prepare("select fid,fcname,price,seats from flits where depport=? && arrport=?");
        $stmt->bind_param('ss',$from,$to);
        $stmt->execute();

        $res=$stmt->get_result();
        $res1=$res->fetch_array();
        var_dump($res1);

        


        ?>
</body>
</html>