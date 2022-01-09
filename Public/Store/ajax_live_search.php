<?php
$absolute_path = realpath($_SERVER["DOCUMENT_ROOT"])."/BasketPedia";
define('BASE_URL','http://localhost/BasketPedia');
require "$absolute_path/app/controller/connector_db.php";
function parseURL(){
  $link_addres = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  if(isset($link_addres)){
    $url = rtrim($link_addres,"/");
    $url = filter_var($url,FILTER_SANITIZE_URL);
    $url = explode("/",$url);
    return $url;
  }
}
// var_dump(parseURL());
$url = parseURL();
$method = $url[7];
if(isset($url[8])){
  $parameter = $url[8];
}
else{$parameter = "";}
$parameter = str_replace("%20"," ",$parameter);

$query = mysqli_query($conn,"SELECT id,name,price,img FROM products where name like '%$parameter%'   ORDER by id DESC");
?>
<?php
				while ($data = mysqli_fetch_assoc($query)){

					$result = mysqli_query($conn,"SELECT stok from size where name = '$data[name]'");
					$stok = 0;
					while($count = mysqli_fetch_assoc($result)){
						$stok += $count['stok'];
					}
					if ($stok>0){ ?>
            <form action="<?= BASE_URL ?>/Public/Shop/id/<?= $data['id']; ?>" method="POST">
              <button class="boxStore shadow p-3 mb-5 bg-body rounded" type="submit" name="click" >
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
    <?php } 
?>

