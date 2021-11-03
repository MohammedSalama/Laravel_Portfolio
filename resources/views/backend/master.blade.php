<!DOCTYPE html>
<html lang="en">

<head>

    @include('backend.head')
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  @include('backend.main-header')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Muhammed Salama</h1>
      <p>I'm <span class="typed" data-typed-items="Back End Developer, Laravel , Freelancer , PHP"></span></p>
      <div class="social-links">
        <a href="https://twitter.com/Mohamed90466173" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/2020Muhammed96/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://github.com/MohammedSalama" class="github"><i class="bx bxl-github"></i></a>
        <a href="https://www.instagram.com/geek_muhammed/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/in/muhammed-s-2b13a4a0/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

  @include('backend.section')

    <!-- ======= Facts Section ======= -->
  @include('backend.fact-section')
  <!-- End Facts Section -->

    @include('backend.section-skills')

    <!-- ======= Resume Section ======= -->
    @include('backend.resume-section')

    <!-- ======= Portfolio Section ======= -->
    @include('backend.portfolio-section')

    <!-- ======= Services Section ======= -->
   @include('backend.service-section')

    <!-- ======= Testimonials Section ======= -->
    @include('backend.testimonials-section')

    <!-- ======= Contact Section ======= -->
   @include('backend.contact-section')

  </main><!-- End #main -->

 @include('backend.footer')

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

 @include('backend.vendor')

</body>

</html>
