<?php
require "../../app/core/MVC_model.php";
?>

    <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/shop.css?v=<?php echo time(); ?>" />
  </head>

  
  <body class="bg-<?= $_SESSION['theme'] ?> <?= $_SESSION['text'] ?>">
    <!-- navbar Start -->
    <?php
      require "$absolute_path/app/views/template/navbar.php";
    ?>
    <!-- navbar end -->

    <!-- container start -->
    <center>
      <div class="sizeChart">
        <img src="<?= BASE_URL ?>/Public/images/sizeChart.jpg" alt="" />
        <button onclick="sizeChart()">X</button>
      </div>
    </center>
    <div class="container" data-aos="fade-down" data-aos-duration="1500">


      <form action="" method="POST" class="contain">


        <div class="gambar">
          <img src="<?= BASE_URL ?>/Public/images/products/<?php echo $img ?>" alt="" />
        </div>

        <div class="formPembayaran">
          <center>
            <div class="merk">
              <?php
						echo $name;
					?>
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>" />
            <br /><br />
            <div class="harga">
              IDR :
              <?php echo $price ?>
            </div>
            <br /><br />
            <label for="size"><h1>Size :</h1></label>

            <select name="size" id="" class="form-select bg-<?= $_SESSION['theme'] ?> <?= $_SESSION['text'] ?>">
              <?php
							$query = mysqli_query($conn,"SELECT name from products where id = $id");
							$nameOfSize = mysqli_fetch_assoc($query)['name'];
							$query = mysqli_query($conn,"SELECT size FROM size where name = '$nameOfSize' and stok>0");
              while ($data = mysqli_fetch_assoc($query)){ ?>
              <option value="<?php echo $data['size']; ?>">
                <h2><?php echo $data['size']; ?></h2>
              </option>
              <?php } ?>
            </select>
            <br />

            <br />
            <button type="submit" name="submit">Buy</button><br />
            
          </center>
        </div>
      </form>
      <button class="sizeButton" onclick="sizeChart()">view size chart</button>
      
    </div>
    <!-- container end -->


<?php
require "$absolute_path/app/views/template/footer.php";
?>