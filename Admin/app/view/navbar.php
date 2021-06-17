<nav class="navbar navbar-expand-lg navbar-light shadow">
  <div class="container">
    <a class="navbar-brand" href="order.php"
      ><img src="<?= $header_path ?>/../Public/images/logo/logo.png" alt=""
    /></a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= $header_path ?>/Public/Order"
            >Order</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= $header_path ?>/Public/Store">Store</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= $header_path ?>/Public/Stok">Stok</a>
        </li>
        <li class="nav-item">
          <a
            class="nav-link active"
            href="contact.php"
            tabindex="-1"
            aria-disabled="true"
            >Contact</a
          >
        </li>
      </ul>
    </div>
  </div>
</nav>