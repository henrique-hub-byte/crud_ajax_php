<?php 
    require_once 'conn.php';
   
     if(isset($_POST['updateid'])){
        $user_id=$_POST['updateid'];
        $sql = "SELECT * FROM users where id = '$user_id'";
        $result=mysqli_query($conn,$sql);
        $response=array();
        while($row = mysqli_fetch_assoc($result)){
            $response = $row;
        }
        echo json_encode($response);
    } else {
        echo 'else';
        $response['status']=200;
        $response['message']='Invalid or data nor found';
    }

     
 

    
