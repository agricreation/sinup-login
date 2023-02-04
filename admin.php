<?php
    include "lib/load.php";
    load(_header);
?>

    <?php
    $sql= "SELECT * FROM `signup`";
    $servername = "localhost";
    $usernames = "root";
    $passwords = "agri";
    $dbname = "agricreation_login";
    $con= mysqli_connect($servername, $usernames, $passwords, $dbname);
    // db::makeconnnection("status");
    // Validating databse $con and access table using $sql 
    $connect = mysqli_query($con,$sql);
    // if($connect){
    //     // echo "Success"; 
    // }
    ?>
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">username</th>
      <th scope="col">phone</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
      while($row = mysqli_fetch_assoc($connect)){
        ?>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['username'] ?></td>
            <td><?php echo $row['phone'] ?></td>
            <td><?php echo $row['email_address'] ?></td>
            <td><?php echo $row['password'] ?></td>
            <?php $id=$row['id']; ?>
            <th scope="col"><a href="#"><button class="btn btn-info"><i class="fa-regular fa-pen-to-square"></i> Edit</button></a></th>
            <?php echo'<th scope="col"><a href="lib/admin/delete.php?deleteid='.$id.'"><button class="btn btn-danger"><i class="fa-solid fa-trash"></i> Delete</button></a></th>
            </tr>';
            ?>
        <?php
      }
      ?>

  </tbody>
</table>
</div>