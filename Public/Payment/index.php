<?php
require "../../app/core/MVC_model.php";
?>


  <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/payment.css?<?= time(); ?>" />
</head>



<body class="bg-<?= $_SESSION['theme'] ?> <?= $_SESSION['text'] ?>">
  <!-- navbar Start -->
  <?php
    require "$absolute_path/app/views/template/navbar.php";
  ?>
  <!-- navbar end -->

  <!-- myPage start -->
  <div class="myPage" data-aos="fade-down" data-aos-duration="1500">
  
    <form action="" method="POST" class="paymentForm">
      <center><h1>PAYMENT FORM</h1></center>
      <div class="product">
        <img src="<?= BASE_URL ?>/Public/images/products/<?= $img; ?>" alt="">
        <div class="value">
          
          <div class="merk text-center"><?php
              echo $name;
            ?>
          </div>
          
            
          <div class="harga text-center">IDR : <?= $price ?></div>
          <div class="harga text-center">size : <?= $size ?></div>

          <input type="hidden" name="img" value="<?= $img; ?>">
          <input type="hidden" name="name" value="<?= $name; ?>">
          <input type="hidden" name="price" value="<?= $price; ?>">
          <input type="hidden" name="size" value="<?= $size; ?>">

          <?= $alert ?>
          <div class="input">
            <div class="mb-3">
              <label for="fullName" class="form-label">Full Name</label>
              <input type="text" name="fullName" class="form-control">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
              <label for="homeAddress" class="form-label">Home Address</label>
              <input type="text" name="homeAddress" class="form-control">
              <div id="emailHelp" class="form-text">We'll never share your information with anyone else.</div>
            </div>

          </div>
          
          <button type="submit" name="buy">Buy</button>
          <br><br>
        </div>
      </div>
    </form>
  </div>
  <!-- myPage end -->
    
<?php
require "$absolute_path/app/views/template/footer.php";
?>
