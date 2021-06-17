<?php
require "../../app/core/MVC_model.php";
?>

  <link rel="stylesheet" href="<?= $header_path ?>/Public/css/addProducts.css">
</head>
<body>
  <!-- navbar Start -->
  <?php require "$absolute_path/app/view/navbar.php"; ?>
  <!-- navbar end -->
  <div class="container">

    <form action="" method="POST" class="paymentForm"  enctype="multipart/form-data">
      <center><h1>Product Form</h1></center>
      <div class="product">
        
        <div class="value">
          <admin class="input">
            <label for="img">upload img</label>
            <input type="file"  name="img" style="font-size: 16px;">
            <label for="productName">Product Name</label>
            <input type="text" class="form-control" name="productName" placeholder="Product Name">
            <label for="price">Price</label>
            <input type="text" class="form-control" name="price" placeholder="Price">
            
            <label for="size">size and stok</label>
            <input type="text" class="form-control" placeholder="size41" name="size41">
            <input type="text" class="form-control" placeholder="size42" name="size42">
            <input type="text" class="form-control" placeholder="size43" name="size43">
            <input type="text" class="form-control" placeholder="size44" name="size44">
            <input type="text" class="form-control" placeholder="size45" name="size45">
          </admin/stok.phpdiv>
          
          <button type="submit" class="btn btn-outline-dark" name="add">Add Products</button>
          <br><br>
          

          
        </div>
      </div>
    </form>
    </div>
    
  </div>

  <?php require "$absolute_path/app/view/footer.php" ?>