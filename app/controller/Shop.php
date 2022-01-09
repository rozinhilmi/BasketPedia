<?php
if (isset($page->method) && isset($page->parameter) ){
	$query = mysqli_query($conn,"SELECT id,name,img,price from products where id = '$page->parameter' ");
	$data = mysqli_fetch_assoc($query);
	// echo mysqli_num_rows($query);

	$id = $data['id'];
	$name = $data['name'];
	$img = $data['img'];
	$price = $data['price'];

	if ($data == 0){
		header("Location: $BASE_URL/Public/Store");
	}
	// echo "method exist";
}
else{
	
	header("Location: $BASE_URL/Public/Store");	
	// echo "method doesent exist";
}

if (isset($_POST['submit'])){
	header("Location: $BASE_URL/Public/Payment/".$_POST['id']."/".$_POST['size']);
}
?>