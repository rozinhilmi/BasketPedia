<?php
require "../../app/core/MVC_model.php";
?>
    <link rel="stylesheet" href="<?= $header_path ?>/Public/css/<?= $page->page_name ?>.css" />
  </head>
  <body>
    <!-- navbar Start -->
    <?php require "$absolute_path/app/view/navbar.php"; ?>
    <!-- navbar end -->

    <div class="primeImg"></div>
    

    <!-- form category start -->
    <br><br><br><br>
    <center>
            <a href="<?= $header_path ?>/Public/AddProducts" style="font-size : 30px;border : 1px solid black;padding:10px;">
              Add Products
            </a>
    </center>
    <br>
    <form class="formCategory" action="" method="get">
      <center>
        <select
          name="taskOption"
          class="form-select"
          aria-label="Default select example"
          style="width: 70%; float: center;"
          onchange="clicked()"
          id="select_value"
        >
          <?php
          if (isset($page->parameter)){ ?>
            <option value="<?= $page->parameter ?>" selected><?= $page->parameter ?></option>
          <?php }
          else{ ?>
            <option value="All" selected>All</option>
          <?php } ?>
          <option value="Price Lowest-Highest">Price Lowest-Highest</option>
          <option value="Price Highest-Lowest">Price Highest-Lowest</option>
          <option value="Air Jordan">Air Jordan</option>
          <option value="Kobe">Kobe</option>
          <option value="kyrie">Kyrie</option>
          <option value="Harden">Harden</option>
          <option value="Kevin Durant">Kevin Durant</option>
          <option value="Lebron">Lebron James</option>
          <option value="Paul George">Paul George</option>
          <option value="Freak">Freak</option>
          <option value="Curry">Curry</option>
          <option value="All">All</option>
        </select>

        <br /><br />
      </center>
    </form>


      <center>
        <input
          onkeydown="search()"
          type="text"
          name="search"
          placeholder="Search Shoes"
          class="form-control"
          style="
            height: 35px;
            width: 300px;
            border: 1px solid grey;
            text-align: center;
          "
          
        />
      </center>
    <br />

    <!-- form category end -->
    <!-- store start -->
    <div class="store" id="store">
        

			<?php
				while ($data = mysqli_fetch_assoc($query)){

					$result = mysqli_query($conn,"select size,stok from size where name = '$data[name]'");

					// $size = mysqli_fetch_assoc($result);
					
					$stok = 0;
					while($count = mysqli_fetch_assoc($result)){
						$stok += $count['stok'];
					}
					if ($stok>0){ ?>
						<form action="" method="POST">
							<div class="boxStore shadow p-3 mb-5 bg-body rounded" data-aos="flip-left">
									<input type="hidden" name="img" value="../images/products/<?php echo $data['img']; ?>">
                  <img  src="<?= $header_path ?>/../Public/images/products/<?php echo $data['img']; ?>" alt="">
                  <br><br>
                  <h1>
                    <input type="hidden" name= "nameBefore" value="<?php echo $data['name']; ?>">
                    <input type="text" class="form-control" name= "name" value="<?php echo $data['name']; ?>" placeholder="<?php echo $data['name']; ?>">
                </h1>
									<div class="harga">
                    <input type="hidden" name= "priceBefore" value="<?php echo $data['price']; ?>">
                    <input type="text" class="form-control" name= "price" value="<?php echo $data['price']; ?>">
                  </div>
									
                  <center>
                    <button type="submit" name="change" class="btn btn-success border-success">change</button>
                  </center>
									
									<center>

									<button name="delete" class="btn btn-danger border-danger">delete product</button>
									</center>
							</div>
						</form>
						
						

					<?php } ?>
				<?php } ?>	
		</div>
    <!-- store end -->

    <!-- myValue Start -->
    <div class="myValue"></div>
    <!-- myValue End -->

<script>
  function clicked(){
    selected = document.getElementById("select_value").value;
    let url_header = "<?= $header_path ?>/Public/Store/category/"+selected;
    window.location.assign(url_header);
  }
  
  function search() {
      if(event.keyCode == 13) {
        let search_value = document.querySelector('body input').value;
        let url_header = "<?= $header_path ?>/Public/Store/search/"+search_value;
        window.location.assign(url_header);
          
      }
  }
</script>
<?php require "$absolute_path/app/view/footer.php" ?>