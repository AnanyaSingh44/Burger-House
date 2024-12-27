<!doctype html>
<html>
    <head>
        <title> insert page</title>
</head>
<body>
    
        <?php
        $conn=mysqli_connect("localhost","root","aayushi@24","burger");
        if($conn === false)
        {
            die("error:could not connect".mysqli_connect_error());
        }
        $n1=$_REQUEST['n1'];
        $e1=$_REQUEST['e1'];
        $d1=$_REQUEST['d1'];
        $t1=$_REQUEST['t1'];
        $num1=$_REQUEST['num1'];
        $sql="INSERT INTO booking1 values ('$n1','$e1','$d1','$t1','$num1')";
        if(mysqli_query($conn,$sql)){
            echo "<h3> data stored succesfully</h3>";
            echo "\n$n1\n$e1\n$d1\n$t1\n$num1";
        }
        else{
        echo "error: ush! sorry $sql"
    .mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>

    </body>
    </html>
