<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <?php
        session_start();
        $amt=$_SESSION['amt'];
        $name=$_SESSION['name'];
        $age=$_SESSION['age'];
        $addr=$_SESSION['addr'];
        $ph=$_SESSION['ph'];
        $date=$_SESSION['date'];
        // echo "recd".$amt;

        echo"<h3>Certificate of Donation</h3><br>
        <p align=center> Hereby a sum of Rupees $amt is received from Mr/Ms $name with gratitude as a donation for carrying out social welfare activities on $date .</p>
        <br> <p align=right> Secretary<br>";
        // <button onclick='fin()'>Finish</button>  
        ?>
        <input type='button' value='Finish' onclick='fin()'>
        <script>
            function fin() {
                document.location.href='don.php';
            }
        </script>
    
</body>
</html>