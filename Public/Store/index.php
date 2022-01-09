<?php
require "../../app/core/MVC_model.php";
?>

    <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/store.css?<?php echo time(); ?>" />
  </head>

  
  <body class="bg-<?= $_SESSION['theme'] ?> <?= $_SESSION['text'] ?>">
    <!-- navbar Start -->
    <?php
      require "$absolute_path/app/views/template/navbar.php";
    ?>
    <!-- navbar end -->

    <div class="primeImg"  data-aos="fade-down" data-aos-duration="1500"></div>

    <!-- form category start -->
    <br />
    <form class="formCategory" action="" method="get">
      <center>
        <select
          name="taskOption"
          class="form-select bg-<?= $_SESSION['theme'] ?> <?= $_SESSION['text'] ?>"
          aria-label="Default select example"
          style="width: 70%; float: center;"
          onchange="clicked()"
          id="select_value"
        >
          <?php
            if (isset($page->parameter)){ ?>
              <option value="All" selected><?php echo $page->parameter ?></option>
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
          style="
            height: 35px;
            width: 300px;
            border: 1px solid grey;
            text-align: center;
          "
          id="search_input"
          class="form-control bg-<?= $_SESSION['theme'] ?> <?= $_SESSION['text'] ?> ?>"
          
          
        />
      </center>
    <br />

    <!-- form category end -->
    <!-- store start -->
    <div class="store" id="store">
      <?php
				while ($data = mysqli_fetch_assoc($query)){

					$result = mysqli_query($conn,"SELECT stok from size where name = '$data[name]'");
					$stok = 0;
					while($count = mysqli_fetch_assoc($result)){
						$stok += $count['stok'];
					}
					if ($stok>0){ ?>
            <form action="<?= BASE_URL ?>/Public/Shop/id/<?= $data['id']; ?>" method="POST">
              <button class="boxStore shadow p-3 mb-5 bg-body rounded" type="submit" name="click" data-aos-duration = "500" data-aos="flip-left" >
                <img src="<?= BASE_URL ?>/Public/images/products/<?php echo $data['img']; ?>" alt="" />
                <h1><?php echo $data['name']; ?></h1>
                <div class="harga">
                  IDR :
                  <?php echo $data['price']; ?>
                </div>
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
              </button>
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
        let url_header = "<?= BASE_URL ?>/Public/Store/category/"+selected;
        window.location.assign(url_header);
      }
      
      function search() {
          if(event.keyCode == 13) {
            let search_value = document.querySelector('body input').value;
            let url_header = "<?= BASE_URL ?>/Public/Store/search/"+search_value;
            window.location.assign(url_header);
              
          }
      }
      // Folder Store live search
      var keyword = document.getElementById('search_input');
      var store = document.getElementById('store');

      keyword.addEventListener('keyup', function(){
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(){
          if(xhr.readyState == 4 && xhr.status == 200 ){
            store.innerHTML = xhr.responseText;

          }
        }
        xhr.open('GET', "<?= BASE_URL ?>/Public/Store/ajax_live_search.php/search/"+keyword.value ,true);
        xhr.send();

      })
      
    </script>

<?php
require "$absolute_path/app/views/template/footer.php";
?>