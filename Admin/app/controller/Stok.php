<?php
if (!isset($_SESSION['session'])){
  header("Location: index.php");
}

if (isset($_POST['update'])){
  
  if ($_POST['stok'] != ""){
    echo $_POST['stok'] . "<br>" . $_POST['id'];
    $query = mysqli_query($conn,"UPDATE size SET stok = $_POST[stok] where id = $_POST[id]");
  }
  header("Location: $header_path/Public/Stok");
}

if (isset($_GET['search'])){
  $query = mysqli_query($conn,"SELECT * FROM size where name like '%$_GET[search]%'");
}else{
  $query = mysqli_query($conn,"SELECT * FROM size");
}
?>