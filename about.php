<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marvin Hotel - À Propos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('inc/links.php') ?>
    <style>
      .box{
        border-top-color: var(--teal) !important;
      }
    </style>
</head>
<body class="bg-light">
    
    <?php require ('inc/header.php'); ?>

    <div class="my-5 px-4">
      <h2 class="fw-bold h-font text-center">QUI SOMMES-NOUS?</h2>
      <div class="h-line bg-dark"></div>
      <p class="text-center mt-3">
      Découvrez le somptueux Palais Marvin 5* <br>réservé aux adultes de 18 ans et plus et imaginé par le célèbre décorateur Gil Dez.
      </p>
    </div>

    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
          <h3 class="mb-3">Palais Marvin</h3>
          <p>
          À vingt minutes du centre de Marrakech, le Marvin Hotel est un havre de tranquillité au coeur de la palmeraie historique de la ville. Mêlant le charme de l’orient à une architecture d’inspiration coloniale, cet hôtel se déploie autour de deux bassins principaux entourés de galeries à colonnades où il fait bon flâner ou prendre ses repas. Subtilement imaginées par le décorateur Gil Dez, les vingt-deux chambres et suites...
          </p>
        </div>
        <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2  order-1">
          <img src="images/about/about.png" class="w-75">
        </div>
      </div>
    </div>

    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 px-4">
          <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
            <img src="images/about/hotel.svg" width="70px">
            <h4 class="mt-3">250 CHAMBRES</h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
          <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
            <img src="images/about/customers.svg" width="70px">
            <h4 class="mt-3">1000 Clients/Mois</h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
          <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
            <img src="images/about/rating.svg" width="70px">
            <h4 class="mt-3">300 AVIS</h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
          <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
            <img src="images/about/staff.svg" width="70px">
            <h4 class="mt-3">SERVICE CLIENT</h4>
          </div>
        </div>
      </div>
    </div>

    <h3 class="my-5 fw-bold h-font text-center">NOTRE ÉQUIPE</h3>

    <div class="container px-4">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper mb-5">
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/team.png" class="w-100">
            <h5 class="mt-2">Valentin Rongier - Portier</h5>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/team-2.png" class="w-100">
            <h5 class="mt-2">Rafael Leao - Réceptionniste</h5>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/team-3.png" class="w-100">
            <h5 class="mt-2">Vinicius Junior - Service client</h5>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/team-4.png" class="w-100">
            <h5 class="mt-2">Victor Osimhen - Bagagiste</h5>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/team-5.png" class="w-100">
            <h5 class="mt-2">Loic Remy - Cuisinier</h5>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/team-6.png" class="w-100">
            <h5 class="mt-2">Bradley Barcola - Femme de chambre</h5>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/team-7.png" class="w-100">
            <h5 class="mt-2">Lionel Messi - Serveur</h5>
          </div>
        </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <?php require('inc/footer.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 4,
      spaceBetween: 40,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>  

</body>
</html>