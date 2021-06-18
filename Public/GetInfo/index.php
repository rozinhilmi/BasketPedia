<?php
require "../../app/core/MVC_model.php";
?>

    <style>
      table {
        display: block;
        width: 1000px;
        font-size: 15px;
      }
      td {
        font-size: 12px;
      }
    </style>
  </head>



  <body class="bg-<?= $_SESSION['theme'] ?> <?= $_SESSION['text'] ?>">
    <!-- navbar Start -->
    <?php
      require "$absolute_path/app/views/template/navbar.php";
    ?>
    <!-- navbar end -->

    <div class="container" data-aos="fade-down" data-aos-duration="1500">
      <center>
        <br /><br /><br />
        <form action="" method="POST">
          <div class="mb-3">
            <input type="text" name="customerOrder" placeholder="Input your full name here" class="form-control" style="text-align: center; padding: 4px; width: 500px"/>
          </div>
          <button type="submit" name="getInfo" value="getInfo" style=" border-radius: 30px; border: none; height: 30px; background-color: rgb(197, 197, 197);">OK</button>
        </form>
      </center>
      <br /><br />

      <?php 
        if(isset($_POST['getInfo'])){ ?>
          <table class="table table-striped text-center table-<?= $_SESSION['theme'] ?>">
            <tr>
              <th>ID</th>
              <th>Name of Product</th>
              <th>Size</th>
              <th>Price</th>
              <th>Name of Customer</th>
              <th>Email</th>
              <th>Home Address</th>
              <th>Tracking Number</th>
              <th>Message</th>
              <th>Status</th>
            </tr>
            <?php
            $query = mysqli_query($conn,"SELECT * FROM request where fullName = '$_POST[customerOrder]'");
            while ($data = mysqli_fetch_assoc($query)){ ?>

            <tr>
              <td><?php echo $data['id']; ?></td>

              <td><?php echo $data['name']; ?></td>
              <td><?php echo $data['size']; ?></td>
              <td><?php echo $data['price']; ?></td>
              <td><?php echo $data['fullName']; ?></td>
              <td><?php echo $data['email']; ?></td>
              <td><?php echo $data['homeAddress']; ?></td>

              <td><?php echo $data['trackingNumber'] ?></td>

              <td><?php echo $data['message']; ?></td>
              <td><?php echo $data['status']; ?></td>
            </tr>
            <?php } ?>
          </table>

      <?php }
      ?>
    </div>

<?php
require "$absolute_path/app/views/template/footer.php";
?>