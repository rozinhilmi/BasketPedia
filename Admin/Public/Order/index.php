<?php
require "../../app/core/MVC_model.php";
?>


    <link rel="stylesheet" href="<?= $header_path ?>/Public/css/table.css" />
  </head>
  <body>
    <!-- navbar Start -->
    <?php require "$absolute_path/app/view/navbar.php"; ?>
    <!-- navbar end -->

    <!-- table order Start -->
    <br /><br /><br />
    <div class="theTable">
      <center>
        <table class="table table-striped">
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
            <th>Accept</th>
            <th>Decline</th>

            <th></th>
          </tr>
          <?php
          $query = mysqli_query($conn,"SELECT * FROM request ORDER by id DESC");
          while ($data = mysqli_fetch_assoc($query)){ ?>
          <form action="" method="POST">
            <tr>
              <td><?php echo $data['id']; ?></td>
              <input
                type="hidden"
                name="id"
                value="<?php echo $data['id']; ?>"
              />

              <td><?php echo $data['name']; ?></td>
              <td><?php echo $data['size']; ?></td>
              <td><?php echo $data['price']; ?></td>
              <td><?php echo $data['fullName']; ?></td>
              <td><?php echo $data['email']; ?></td>
              <td><?php echo $data['homeAddress']; ?></td>

              <td>
                <input
                  type="text"
                  name="trackingNumber"
                  value="<?php echo $data['trackingNumber'] ?>"
                  placeholder="<?php echo $data['trackingNumber'] ?>"
                />
              </td>

              <input
                type="hidden"
                name="name"
                value="<?php echo $data['name']; ?>"
              />
              <input
                type="hidden"
                name="size"
                value="<?php echo $data['size']; ?>"
              />

              <td>
                <input
                  type="text"
                  name="message"
                  value="<?php echo $data['message']; ?>"
                />
              </td>
              <td><?php echo $data['status']; ?></td>
              <?php
                if ($data['status'] != "rejected" ){ ?>
              <td>
                <button
                  type="submit"
                  class="btn btn-dark"
                  value="accepted"
                  name="accept"
                >
                  Accept
                </button>
              </td>
              <td>
                <button
                  type="submit"
                  class="btn btn-dark"
                  value="rejected"
                  name="decline"
                >
                  Decline
                </button>
              </td>

              <?php }
                else{ ?>
              <td>
                <button
                  type="submit"
                  class="btn btn-dark"
                  value="update"
                  name="update"
                >
                  update
                </button>
              </td>
              <td></td>
              <td>
                <button type="submit" class="btn btn-dark" name="delete">
                  X
                </button>
              </td>
              <?php }
              ?>
            </tr>
          </form>
          <?php } ?>
        </table>
      </center>
    </div>
    <!-- table order Enc -->

<?php require "$absolute_path/app/view/footer.php" ?>