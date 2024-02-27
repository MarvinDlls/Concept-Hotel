<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marvin Hotel - CONTACT</title>
    <?php require('inc/links.php') ?>
</head>
<body class="bg-light">
    
    <?php require ('inc/header.php'); ?>

    <div class="my-5 px-4">
      <h2 class="fw-bold h-font text-center">CONTACT</h2>
      <div class="h-line bg-dark"></div>
      <p class="text-center mt-3">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br>Fuga accusantium delectus itaque magnam, harum molestiae dolorem voluptates nulla vitae eum.
      </p>
    </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 mb-5 px-4">

          <div class="bg-white rounded shadow p-4">
            <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3395.3322868087453!2d-7.9366440237533515!3d31.67948283926266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdaff39b80848b19%3A0xe113dd4143a8a4a6!2sPalais%20Ronsard%20Relais%20%26%20Ch%C3%A2teaux.!5e0!3m2!1sfr!2sfr!4v1707508593619!5m2!1sfr!2sfr" loading="lazy"></iframe>

              <h5>Adresse</h5>
              <a href="https://maps.app.goo.gl/wk2CU5sihYZAwniz7" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                <i class="bi bi-geo-alt-fill"></i> ABYAD, Municipalité, Palais Marvin Propriété SALAH 7, Marrakech, Maroc
              </a>

          <h5 class="mt-4">Contactez-nous</h5>
          <a href="tel: +212524298684" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +212 524298684
          </a>
          <br>
          <a href="tel: +212524298684" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +212 524298684
          </a>

          <h5 class="mt-4">
              Email
          </h5>
          <a href="mailto: marvindillenseger@gmail.com" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-envelope-fill"></i> marvindillenseger@gmail.com</a>

          <h5 class="mt-4">Nos réseaux</h5>
          <a href="https://www.instagram.com/palaisronsardmarrakech/" class="d-inline-block text-dark fs-5 me-2" target="_blank">
              <i class="bi bi-instagram me-1"></i>
          </a>
          <a href="https://www.facebook.com/PalaisRonsardMarrakech/" class="d-inline-block text-dark fs-5" target="_blank">
              <i class="bi bi-facebook me-1"></i>
          </a>
          </div>
      </div>
      <div class="col-lg-6 col-md-6 px-4">
        <div class="bg-white rounded shadow p-4">
          <form>
            <h5>Envoyer un message</h5>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Nom</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Prénom</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Email</label>
              <input type="email" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Objet</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Message</label>
              <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
            </div>
            <button type="submit" class="btn text-white custom-bg mt-3">ENVOYER</button>
          </form>
        </div>        
      </div>
    </div>
  </div>

  <?php require('inc/footer.php'); ?>
   

</body>
</html>