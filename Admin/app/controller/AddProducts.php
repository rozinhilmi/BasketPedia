<?php
$query = mysqli_query($conn,"SELECT name,price,img FROM products");

function uploadImg(){
  var_dump($_FILES);
  $imgName = $_FILES['img']['name'];
  $error = $_FILES['img']['error'];
  $size = $_FILES['img']['size'];
  $locationUp = $_FILES['img']['tmp_name'];
  $formatFile = $_FILES['img']['type'];
  
  $format = "";
  $formatFix = "";
  for ($i = strlen($imgName)-1; $i>=0; $i--){
    $format .= $imgName[$i];
    if ($imgName[$i] == ".") {
      break;
    }
  }
  for ($i=strlen($format)-1;$i>=0;$i--){
    $formatFix .= $format[$i];
  }
  
  $nameFix = ucwords($_POST['productName'].$formatFix);

  if ($error == 0 ){
    if ($size < 2000000){
      // echo $formatFile;
      if($formatFile == 'image/jpeg' || $formatFile == 'image/png'){
        // echo $nameFix;
        $absolute_path = realpath($_SERVER["DOCUMENT_ROOT"])."/BasketPedia";
        move_uploaded_file($locationUp,$absolute_path.'/Public/images/products/'.$nameFix);
        var_dump($absolute_path.'/Public/images/products/'.$nameFix);

      }
      else{
        echo "<center><h1> format file harus jpg/png </h1></center>";
      }
    }
    else{
      echo "ukuran file terlalu besar";
    }
  }
  else{
    echo "file kegedean";
  }
}

if (isset($_POST['add'])){ // apabila tombol upload ditekan

  if ( $_FILES['img']['name'] != "" && $_POST['productName'] != "" && $_POST['price'] != ""  ){

    $imgName = $_FILES['img']['name'];
    
    $format = "";
    $formatFix = "";
    for ($i = strlen($imgName)-1; $i>=0; $i--){
      $format .= $imgName[$i];
      if ($imgName[$i] == ".") {
        break;
      }
    }
    for ($i=strlen($format)-1;$i>=0;$i--){
      $formatFix .= $format[$i];
    }
    
    $nameFix = ucwords($_POST['productName'].$formatFix);
    
    
    uploadImg();
    
    // $productName = ucwords($_POST['productName']);
    // $price = $_POST['price'];

    // $size41 = $_POST['size41'];
    // $size42 = $_POST['size42'];
    // $size43 = $_POST['size43'];
    // $size44 = $_POST['size44'];
    // $size45 = $_POST['size45'];

    // $query = mysqli_query($conn,"INSERT INTO products VALUES(0, '$productName', '$nameFix',$price)");
    // $query = mysqli_query($conn,"INSERT INTO size VALUES(0, '$productName', 41, '$size41')");
    // $query = mysqli_query($conn,"INSERT INTO size VALUES(0, '$productName', 42, '$size42')");
    // $query = mysqli_query($conn,"INSERT INTO size VALUES(0, '$productName', 43, '$size43')");
    // $query = mysqli_query($conn,"INSERT INTO size VALUES(0, '$productName', 44, '$size44')");
    // $query = mysqli_query($conn,"INSERT INTO size VALUES(0, '$productName', 45, '$size45')");

    // header("Location: $header_path/Public/Store");
  }
  else{
    echo "<script>alert('form harus diisi lengkap!')</script>";
  }
}
?>