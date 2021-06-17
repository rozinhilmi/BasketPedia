<?php


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

  else{header("Location: $BASE_URL/Public/Store");}

}
else{
  $query = mysqli_query($conn,"SELECT id,name,price,img FROM products ORDER by id DESC");
}


if (isset($_GET['message'])){
  echo $_GET['message'];
  // header("Location: store.php");
}
?>