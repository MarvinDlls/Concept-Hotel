<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marvin Hotel - HOME</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="shortcut icon" href="./images/icon.png">
    <?php require('inc/links.php') ?>
    <style type="text/css">
      body{
        background: url(#);
        background-repeat: no-repeat;
      }
    </style>
    <style>   
      .availability-form{
        margin-top: -50px;
        z-index: 2;
        position: relative;
      }

      @media screen and (max-width: 575px) {
        .availability-form{
        margin-top: 25px;
        padding: 0 35px;
      }
    }
    </style>
</head>
<body class="bg-light">
    
    <?php require ('inc/header.php'); ?>

    <div class="container-fluid px-lg-4 mt-4">
<div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/photo/1.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/photo/2.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/photo/3.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/photo/4.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/photo/5.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/photo/6.png" class="w-100 d-block" />
      </div>
    </div>
  </div>
</div>

<div class="container availability-form">
  <div class="row">
    <div class="col-log-12 bg-white shadow p-4 rounded">
      <h5 class="mb-4">Vérifier la disponibilité de la réservation</h5>
      <form>
        <div class="row align-items-end">
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight: 500;">Date d'arrivée</label>
            <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight: 500;">Date de départ</label>
            <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight: 500;">Adulte(s)</label>
            <select class="form-select shadow-none">
              <option value="1">Un</option>
              <option value="2">Deux</option>
              <option value="3">Trois</option>
            </select>
          </div>
          <div class="col-lg-2 mb-3">
            <label class="form-label" style="font-weight: 500;">Enfant(s)</label>
            <select class="form-select shadow-none">
              <option value="1">Un</option>
              <option value="2">Deux</option>
              <option value="3">Trois</option>
            </select>
        </div>
        <div class="col-lg-1 mb-lg-3 mt-2">
          <button type="submit" class="btn text-white shadow-none custom-bg">Valider</button>
        </div>
      </form>
    </div>
  </div>
</div>

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">NOS CHAMBRES</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/chambres/ch-1.png" class="card-img-top">
        <div class="card-body">
          <h5>Chambre prestige</h5>
          <h6 class="mb-4">150€/nuit</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Détails</h6>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              1 Lit deux places
            </span>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              1 Salle de bain
            </span>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              1 Balcon
            </span>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              2 Fauteuils
            </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1">Équipements</h6>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              Wi-fi
            </span>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              Cheminée
            </span>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              Sèche cheveux
            </span>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              Serviettes
            </span>
          </div>
          <div class="guests mb-4">
            <h6 class="mb-1">Invités</h6>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              5 Adultes
            </span>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              4 Enfants
            </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Notes</h6>
            <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>           
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Réserver</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Plus de détails</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/chambres/ch-2.png" class="card-img-top">
        <div class="card-body">
          <h5>Chambre prestige</h5>
          <h6 class="mb-4">150€/nuit</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Détails</h6>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              1 Lit deux places
            </span>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              1 Salle de bain
            </span>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              1 Balcon
            </span>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              2 Fauteuils
            </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1">Équipements</h6>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              Wi-fi
            </span>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              Cheminée
            </span>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              Sèche cheveux
            </span>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              Serviettes
            </span>
          </div>
          <div class="guests mb-4">
            <h6 class="mb-1">Invités</h6>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              5 Adultes
            </span>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              4 Enfants
            </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Notes</h6>
            <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>           
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Réserver</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Plus de détails</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/chambres/ch-3.png" class="card-img-top">
        <div class="card-body">
          <h5>Chambre prestige</h5>
          <h6 class="mb-4">150€/nuit</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Détails</h6>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              1 Lit deux places
            </span>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              1 Salle de bain
            </span>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              1 Balcon
            </span>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              2 Fauteuils
            </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1">Équipements</h6>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              Wi-fi
            </span>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              Cheminée
            </span>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              Sèche cheveux
            </span>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              Serviettes
            </span>
          </div>
          <div class="guests mb-4">
            <h6 class="mb-1">Invités</h6>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              5 Adultes
            </span>
            <span class="badge bg-light text-dark text-wrap rounded-pill">
              4 Enfants
            </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Notes</h6>
            <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-half text-warning"></i>
            </span>           
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Réserver</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Plus de détails</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-12 text-center mt-5">
      <a href="chambres.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Plus de chambres ></a>
    </div>
  </div>
</div>

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">NOS ÉQUIPEMENTS</h2>

<div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/equipements/IMG_43553.svg" width="80px">
        <h5 class="mt-3">Wi-Fi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/equipements/IMG_27079.svg" width="80px">
        <h5 class="mt-3">Alarme incendie</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/equipements/IMG_41622.svg" width="80px">
        <h5 class="mt-3">Télévision</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/equipements/IMG_47816.svg" width="80px">
        <h5 class="mt-3">Spa</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/equipements/IMG_96423.svg" width="80px">
        <h5 class="mt-3">Radiateur</h5>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="équipements.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Plus d'équipements ></a>
      </div>
    </div>
</div>

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">AVIS</h2>

<div class="container mt-5">
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper mb-5">

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/about/rating.svg" width="30px">
            <h6 class="m-0 ms-2">Anonyme1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Aperiam, ullam optio amet quos molestias officia animi! 
            Consequatur possimus distinctio cumque?
          </p>
          <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/about/rating.svg" width="30px">
            <h6 class="m-0 ms-2">Anonyme1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Aperiam, ullam optio amet quos molestias officia animi! 
            Consequatur possimus distinctio cumque?
          </p>
          <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/about/rating.svg" width="30px">
            <h6 class="m-0 ms-2">Anonyme1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Aperiam, ullam optio amet quos molestias officia animi! 
            Consequatur possimus distinctio cumque?
          </p>
          <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/about/rating.svg" width="30px">
            <h6 class="m-0 ms-2">Anonyme1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Aperiam, ullam optio amet quos molestias officia animi! 
            Consequatur possimus distinctio cumque?
          </p>
          <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/about/rating.svg" width="30px">
            <h6 class="m-0 ms-2">Anonyme1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Aperiam, ullam optio amet quos molestias officia animi! 
            Consequatur possimus distinctio cumque?
          </p>
          <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Plus encore ></a>
    </div>
</div>

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REJOIGNEZ-NOUS</h2>

<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3395.3322868087453!2d-7.9366440237533515!3d31.67948283926266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdaff39b80848b19%3A0xe113dd4143a8a4a6!2sPalais%20Ronsard%20Relais%20%26%20Ch%C3%A2teaux.!5e0!3m2!1sfr!2sfr!4v1707508593619!5m2!1sfr!2sfr" loading="lazy"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Contactez-nous</h5>
          <a href="tel: +212524298684" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +212 524298684
          </a>
          <br>
          <a href="tel: +212524298684" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +212 524298684
          </a>
        </div>
        <div class="bg-white p-4 rounded mb-4">
          <h5>Nos réseaux</h5>
          <a href="https://www.instagram.com/palaisronsardmarrakech/" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-instagram me-1"></i> Instagram
            </span>
          </a>
          <br>
          <a href="https://www.facebook.com/PalaisRonsardMarrakech/" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-facebook me-1"></i> Facebook
            </span>
          </a>
        </div>
      </div>         
    </div>
</div>

  <?php require('inc/footer.php'); ?>
   
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

      <script>
        var swiper = new Swiper(".swiper-container", {
          spaceBetween: 30,
          effect: "fade",
          loop: true,
          autoplay: {
            delay: 3500,
            disableOnIntercation: false,
          }
        });

        var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
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
              slidesPerView: 2,
            },
            1024: {
              slidesPerView: 3,
            },
          }
        });
      </script>

  </body>
</html>