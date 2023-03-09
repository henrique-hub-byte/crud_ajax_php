<?php
    require_once 'conn.php';

    if(isset($_POST['deletesend'])){
     $unique=$_POST['deletesend'];
     
     $sql = "DELETE FROM users where id=$unique";
     $result=mysqli_query($conn,$sql);
    }
?>