

<?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $Question = $_POST['Question'];
            
             $servername="localhost";
             $username="root";
             $password="";
             $database="dbrohan";

             $conn=mysqli_connect($servername, $username, $password,$database);
    
             $sql="INSERT INTO `qusdata` (`name`, `email`, `Question`) VALUES ('$name', '$email', '$Question')";
             $result=mysqli_query($conn, $sql);
    }
?>




