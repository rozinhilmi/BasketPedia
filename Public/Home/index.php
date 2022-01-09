<?php
require "../../app/core/MVC_model.php";
?>
    <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/index.css?<?php echo time(); ?>" />
  </head>
  <body class="bg-<?= $_SESSION['theme'] ?>">
    <!-- navbar Start -->
    <?php
      require "$absolute_path/app/views/template/navbar.php";
    ?>
    <!-- navbar end -->

    <!-- Slider main container -->
    <div class="swiper-container" data-aos="fade-down" data-aos-duration="1500">
      <div class="heading-1">
        <h1 class="text-center">New Arival</h1>
      </div>
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <a
          href="<?= BASE_URL ?>/Public/Shop/id/4"
          class="swiper-slide swiper-1"
          ><h1 class="text-center brand-name">Kobe 6 Protro</h1></a
        >
        <a
          href="<?= BASE_URL ?>/Public/Shop/id/8"
          class="swiper-slide swiper-2"
          ><h1 class="text-center brand-name">Kyrie Low 3</h1></a
        >
        <a
          href="<?= BASE_URL ?>/Public/Shop/id/7"
          class="swiper-slide swiper-3"
          ><h1 class="text-center brand-name">Zoom Freak 2</h1></a
        >
        <a
          href="<?= BASE_URL ?>/Public/Shop/id/10"
          class="swiper-slide swiper-4"
          ><h1 class="text-center brand-name">Lebron Soldier 14</h1></a
        >
        <a
          href="<?= BASE_URL ?>/Public/Shop/id/5"
          class="swiper-slide swiper-5"
          ><h1 class="text-center brand-name">Lebron 18</h1></a
        >
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- If we need scrollbar -->
      <div class="swiper-scrollbar"></div>
    </div>
    <!-- myValue Start -->
    <div class="myValue"></div>
    <!-- myValue End -->

    <script src="<?= BASE_URL ?>/Public/js/swiper/swiper-bundle.min.js"></script>
    <script src="<?= BASE_URL ?>/Public/js/swiper/swiper-bundle.js"></script>
    <script>
      const swiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        effect: 'coverflow',
        followFinger: 'true',
        allowTouchMove: 'true',

        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
      });
    </script>
<?php
require "$absolute_path/app/views/template/footer.php";
?>