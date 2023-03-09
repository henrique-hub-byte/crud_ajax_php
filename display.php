<?php
require 'conn.php';

if (isset($_POST['displaySend'])) {

  $table = '<br><table class="table">
    <thead class="table-dark">
    <tr>
      <th>ID</th>   
      <th>Username</th>
      <th>Email<s/th>
      <th>Mobile</th>
      <th>Place</th>
      <th>Operations</th>
      
    </tr>
    </thead>';
  $sql = "SELECT * FROM `users`";
  $result = mysqli_query($conn, $sql);
  $number = 1;
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $username = $row['username'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $place = $row['place'];
    $table .= '<tr>
        <td>' . $id . '</td>
        <td>' . $username . '</td>
        <td>' . $email . '</td>
        <td>' . $mobile . '</td>
        <td>' . $place . '</td>
        <td>
          <button class="btn btn-dark" onclick="updateUser('. $id .')">Update</button>
          <button class="btn btn-danger" onclick="deleteUser('. $id .')">Delete</button>
        </td>
        </tr>';
        $number++;
  }

  $table .= '</table>';
  echo $table;
}
?>
