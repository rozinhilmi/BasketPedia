<?php
  if (isset($_SESSION['session'])){
    if ($_SESSION['session'] == 'true'){
      header("Location: $header_path/Public/Order/");
    }
  }

  if (isset($_POST['submit'])){
    
    if ($_POST['username'] == 'admin' && $_POST['password'] == '123' ){
      echo "<script>alert('anda admin!')</script>";
      $_SESSION['session'] = 'true';
      header("Location: $header_path/Public/Order");
    }
    else{
      echo "<script>alert('anda bukan admin!')</script>";
    }
  }
  else{
    echo "<script>alert('silahkan login')</script>";
  }

?>