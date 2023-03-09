<?php 
    require_once 'conn.php';
    require_once 'update.php';
    //update query
    if(isset($_POST['hiddendata'])){
        $uniqueid = $_POST['hiddendata'];
        $username = $_POST['update_name'];
        $email = $_POST['update_email'];
        $mobile = $_POST['update_mobile'];
        $place = $_POST['update_place'];
        var_dump($username);
        $sql = "UPDATE users set username='$username',email='$email', mobile='$mobile',
        place='$place' WHERE id='$uniqueid'";

        $result=mysqli_query($conn,$sql);
    }else{
        var_dump($username);
        echo 'deu ruim';
    }  

?>