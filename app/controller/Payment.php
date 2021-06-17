<?php
// $alert = "";
if ( isset($page->method) && isset($page->parameter) ){
  $query = mysqli_query($conn,"SELECT id,name,price,img from products where id = '$page->method'");
  
  $data = mysqli_fetch_assoc($query);
  $id = $data['id'];
  $name = $data['name'];
  $img = $data['img'];
  $price = $data['price'];
  $size = $page->parameter;

  $validation = mysqli_query($conn,"SELECT stok from size where name = '$name' and size = '$size' ");
  $result = mysqli_fetch_assoc($validation);
  if ($result['stok'] == 0 ){
    $message = "<script>alert('oops, stok yang anda cari baru saja habis')</script>"; 
    header("Location: $BASE_URL/Public/Store/index.php?message=$message"); 
  }
  // var_dump($data);
  // echo $size;
}
else {
  header("Location: $BASE_URL/Public/Store");

}

if (isset($_POST['buy'])){
  
  if (!$_POST['fullName']=="" && !$_POST['email']=="" && !$_POST['homeAddress']=="" ){
    
    $validation = mysqli_query($conn,"SELECT stok from size where name = '$name' and size = '$size' ");
    $result = mysqli_fetch_assoc($validation);
    // echo "<script>alert($result[stok])</script>";
    if ($result['stok'] <= 0 ){
      $message = "<script>alert('oops, stok yang anda cari baru saja habis')</script>"; 
      header("Location: $BASE_URL/Public/Store/index.php?message=$message"); 
    }
    else{
      $alert = "";
      $name = strip_tags($_POST['name']);
      $size = strip_tags($_POST['size']);
      $price = strip_tags($_POST['price']);
      $fullName = strip_tags($_POST['fullName']);
      $email = strip_tags($_POST['email']);
      $homeAddress = strip_tags($_POST['homeAddress']);

      $query = mysqli_query($conn,"INSERT INTO request values(0,'$name','$size','$price', '$fullName', '$email', '$homeAddress' ,'','','on request')");

      $query = mysqli_query($conn,"SELECT stok FROM size WHERE name = '$_POST[name]' and size = '$_POST[size]' ");
      if (mysqli_num_rows($query) > 0){
        $stok = mysqli_fetch_assoc($query)['stok'];
        $stok -= 1;
      }
      $query = mysqli_query($conn,"UPDATE size set stok = $stok WHERE name = '$_POST[name]' and size = '$_POST[size]' ");
      

      header("Location: $BASE_URL/Public/GetInfo");
    }
  }
  else{
    $alert = '<div class="alert alert-danger text-center" role="alert" style="width: 100%;">all form must be filled</div>';
  } 
}
?>