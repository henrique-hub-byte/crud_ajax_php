<?php
require_once 'conn.php';

extract($_POST);

if (isset($_POST['nameSend']) && isset($_POST['emailSend']) && isset($_POST['mobileSend']) && isset($_POST['placeSend'])
) {
    $sql =  "INSERT INTO users (username,email,mobile,place) values ('$nameSend','$emailSend',
    '$mobileSend', '$placeSend')";
    
    $result=mysqli_query($conn,$sql);
    echo "usuario inserido";
}else {
    echo 'não deu de inserir o user';
}
