<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        select{
            font-size: 40px;
        }
    </style>
</head>
<body>
    <form action="">
        <?php
            $database="manojdb";
            $user="root";
            $pass="";
            $host="localhost";

            $con=mysqli_connect($host,$user,$pass,$database);

            $query="select * from students";
            $resultQuery=mysqli_query($con,$query);

            echo "<select name='' id=''>";
            echo "<option value=''>Student Name</option>";
            while($row=mysqli_fetch_array($resultQuery)){
                // echo $row['name'];
                echo "<option value='".$rowp['name']."'>".$row['name']."</option>";
            }
            echo " </select>";
        ?>
    </form>
</body>
</html>