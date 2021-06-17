<?php
if (isset($_POST['accept'])){
  // echo $_POST['naindex.phpme']." ".$_POST['size'];
  $query = mysqli_query($conn,"UPDATE request set trackingNumber = '$_POST[trackingNumber]', message = '$_POST[message]', status = '$_POST[accept]' where id = '$_POST[id]'");
  // header("Location: order.php");
}

if (isset($_POST['decline'])){
  $query = mysqli_query($conn,"UPDATE request set trackingNumber = '$_POST[trackingNumber]', message = '$_POST[message]', status = '$_POST[decline]' where id = '$_POST[id]'");
  $query = mysqli_query($conn,"SELECT stok from size where name = '$_POST[name]' and size = '$_POST[size]'");
  $stok = mysqli_fetch_assoc($query)['stok'];
  $stok+=1;
  $query = mysqli_query($conn,"UPDATE size SET stok = $stok where name = '$_POST[name]' and size = '$_POST[size]'");
  // header("Location: order.php");
}

if (isset($_POST['update'])){
  $query = mysqli_query($conn,"UPDATE request set trackingNumber = '$_POST[trackingNumber]', message = '$_POST[message]' where id = '$_POST[id]'");
  // header("Location: order.php");
}

if (isset($_POST['delete'])){
  $query = mysqli_query($conn,"DELETE FROM request WHERE id = '$_POST[id]'");
 
  $query = mysqli_query($conn,"	ALTER TABLE request DROP id
  ");
  $query = mysqli_query($conn,"	ALTER TABLE request ADD id INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
  // header("Location: order.php");

}
?>