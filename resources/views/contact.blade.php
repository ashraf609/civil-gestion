<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Civil | Entreprise</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction - v1.3.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Civil Entreprise<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
     <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">Accueil</a></li>
          <li><a href="/about" >À Propos</a></li>
          <li><a href="/service" >Services</a></li>
          <li><a href="/project" >Projets</a></li>
          <li><a href="/contact" class="active">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Contact</h2>
        <ol>
          <li><a href="index.html">Accueil</a></li>
          <li>Contact</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
   <!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <!-- ... (other sections remain the same) ... -->

    <div class="row gy-4 mt-1">

      <div class="col-lg-6">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.732342519365!2d2.294481315674074!3d48.85884407928793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671d8b8c18c7f%3A0x5c1e5cf5eaa3d3f!2sTour+Eiffel!5e0!3m2!1sfr!2sfr!4v1640904158145"
          frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
      </div><!-- End Google Maps -->

      <div class="col-lg-6">
        <form id="projectRequestForm" method="post" role="form" class="php-email-form">
          <div class="row gy-4">
            <div class="col-lg-6 form-group">
              <input type="text" name="project_name" class="form-control" id="project_name" placeholder="Nom du Projet" required>
            </div>
            <div class="col-lg-6 form-group">
              <input type="text" class="form-control" name="project_description" id="project_description" placeholder="Description du Projet" required>
            </div>
            <div class="col-lg-6 form-group">
              <input type="date" class="form-control" name="request_date" id="request_date" required>
            </div>
            <div class="col-lg-6 form-group">
              <select name="user_id" id="user_id" class="form-control" required>
                <option value="">Sélectionnez un utilisateur</option>
              </select>
            </div>
          
            <div class="my-3">
              <div class="loading">Chargement</div>
          
              <div class="sent-message">Votre demande de projet a été envoyée. Merci !</div>
            </div>
            <div class="text-center"><button type="submit">Envoyer la Demande</button></div>
          </div>
        </form>
      </div><!-- End Contact Form -->

    </div>

  </div>
</section><!-- End Contact Section -->



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

  <div class="footer-content position-relative">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="footer-info">
            <h3>Nom de l'Entreprise</h3>
            <p>
              123 Rue des Ingénieurs <br>
              75001 Paris, France<br><br>
              <strong>Téléphone:</strong> +33 1 23 45 67 89<br>
              <strong>Email:</strong> contact@entreprise.com<br>
            </p>
            <div class="social-links d-flex mt-3">
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div><!-- End footer info column-->

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Liens Utiles</h4>
          <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">À Propos</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Conditions d'Utilisation</a></li>
            <li><a href="#">Politique de Confidentialité</a></li>
          </ul>
        </div><!-- End footer links column-->

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nos Services</h4>
          <ul>
            <li><a href="#">Ingénierie Structurelle</a></li>
            <li><a href="#">Gestion de Projet</a></li>
            <li><a href="#">Consultation Technique</a></li>
            <li><a href="#">Aménagement Urbain</a></li>
            <li><a href="#">Rénovation</a></li>
          </ul>
        </div><!-- End footer links column-->

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Projets Récents</h4>
          <ul>
            <li><a href="#">Construction de Pont</a></li>
            <li><a href="#">Réhabilitation de Bâtiment</a></li>
            <li><a href="#">Aménagement de Parc</a></li>
            <li><a href="#">Rénovation d'Infrastructures</a></li>
            <li><a href="#">Développement Durable</a></li>
          </ul>
        </div><!-- End footer links column-->

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Contactez-Nous</h4>
          <ul>
            <li><a href="#">Formulaire de Contact</a></li>
            <li><a href="#">Nos Bureaux</a></li>
            <li><a href="#">Support Client</a></li>
            <li><a href="#">Recrutement</a></li>
            <li><a href="#">Partenariats</a></li>
          </ul>
        </div><!-- End footer links column-->

      </div>
    </div>
  </div>

  <div class="footer-legal text-center position-relative">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Nasma OUARDI</span></strong>. Tous droits réservés
      </div>
      <div class="credits">
        <!-- Tous les liens dans le pied de page doivent rester intacts. -->
        <!-- Vous pouvez supprimer les liens uniquement si vous avez acheté la version pro. -->
        <!-- Informations sur la licence : https://bootstrapmade.com/license/ -->
        <!-- Achetez la version pro avec un formulaire de contact PHP/AJAX fonctionnel : https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
        Conçu par <a href="https://bootstrapmade.com/">Nasma OUARDI</a> Distribué par <a
          href="https://themewagon.com">Nasma OUARDI</a>
      </div>
    </div>
  </div>

</footer>


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
  // Fetch users and populate the dropdown
  fetch('http://localhost:3000/api/users') // Update with your actual API endpoint
    .then(response => response.json())
    .then(users => {
      const userSelect = document.getElementById('user_id');
      users.forEach(user => {
        const option = document.createElement('option');
        option.value = user.id;
        option.textContent = user.name;
        userSelect.appendChild(option);
      });
    })
    .catch(error => console.error('Error fetching users:', error));

  // Handle form submission
  document.getElementById('projectRequestForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const formData = new FormData(this);
    fetch('http://localhost:3000/api/project_requests', {
      method: 'POST',
      body: JSON.stringify(Object.fromEntries(formData)),
      headers: { 'Content-Type': 'application/json' }
    })
    .then(response => response.json())
    .then(data => {
      if (data.error) {
        alert('Error: ' + data.error);
      } else {
        alert('Project request sent successfully!');
        this.reset(); // Clear the form fields
      }
    })
    .catch(error => console.error('Error:', error));
  });
});

  </script>

</body>

</html>