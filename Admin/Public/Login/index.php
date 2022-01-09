<?php
require "../../app/core/MVC_model.php";
?>

    <link rel="stylesheet" href="<?= $header_path ?>/Public/css/index.css" />
    <style>
      body {
        background-color: black;
        display: flex;
        flex-wrap: wrap;
        height: 100vh;
      }
      .formLogin {
        width: 700px;
        margin: auto;
        padding: 30px;
        color: white;
      }
    </style>
  </head>
  <body>
    <form class="formLogin" action="" method="POST">
      <h1 class="text-center">Admin</h1>
      <div class="mb-3">
        <label for="username" class="form-label">username</label>
        <input type="text" name="username" class="form-control" />
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input
          type="password"
          name="password"
          class="form-control"
          id="exampleInputPassword1"
        />
      </div>

      <button type="submit" name="submit" class="btn btn-primary ctr">
        Submit
      </button>
    </form>

<?php require "$absolute_path/app/view/footer.php" ?>