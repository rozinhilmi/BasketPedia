<?php
if (!isset($_SESSION['session'])){
  header("Location: $header_path/Public/Login");
} 

if(isset($page->method) && isset($page->parameter)){
  // method category
  if ($page->method == "category"){
    if ($page->parameter == 'Price Lowest-Highest'){
      $query = mysqli_query($conn,"SELECT id,name,price,img FROM products order by price");
    }
    else if ($page->parameter == 'Price Highest-Lowest'){
      $query = mysqli_query($conn,"SELECT id,name,price,img FROM products order by price DESC");
    }
    else if ($page->parameter == 'All'){
      $query = mysqli_query($conn,"SELECT id,name,price,img FROM products ORDER by id DESC");
    }
  
    else{
      $query = mysqli_query($conn,"SELECT id,name,price,img FROM products WHERE name like '%$page->parameter%' ORDER by id DESC" );
    }
  }

  // method search
  else if($page->method == "search"){
    $query = mysqli_query($conn,"SELECT id,name,price,img FROM products where name like '%$page->parameter%'   ORDER by id DESC");
  }

  else{header("Location: $header_path/Public/Store");}

}
else{
  $query = mysqli_query($conn,"SELECT id,name,price,img FROM products ORDER by id DESC");
}




if (isset($_POST['change'])){

  $nameBefore = $_POST['nameBefore'];
  $name = ucwords($_POST['name']);
  $priceBefore = $_POST['priceBefore'];
  $price = $_POST['price'];
	

  $query = mysqli_query($conn,"UPDATE products SET name = '$name', price = '$price' where name = '$nameBefore' and price = $priceBefore");
  $query = mysqli_query($conn, "UPDATE size SET name = '$name' where name = '$nameBefore'");
  $query = mysqli_query($conn, "UPDATE request SET name = '$name' where name = '$nameBefore'");

	header("Location: $header_path/Public/Store");

  
  
}

//delete product
if (isset( $_POST['delete'])){
	// echo $_POST['name']."<br>";
	// echo $_POST['img'];		
	$query = mysqli_query($conn,"DELETE FROM products where name like '%$_POST[name]%'");
	$query = mysqli_query($conn,"DELETE FROM size where name like '%$_POST[name]%'");
	$query = mysqli_query($conn,"ALTER TABLE products DROP id;");
	$query = mysqli_query($conn,"ALTER TABLE products ADD id INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST;");
	$query = mysqli_query($conn,"ALTER TABLE size DROP id;");
	$query = mysqli_query($conn,"ALTER TABLE size ADD id INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST;");
	unlink($_POST['img']);

	header("Location: store.php");
	
}
?>