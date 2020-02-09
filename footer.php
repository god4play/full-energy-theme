<footer class="footer">

  <div class="container-fluid nav" id="footer-nav">

    <div class="container row align-items-center justify-content-between">
      <!-- Logo -->
      <a class="nav-brand col-sm-1" href="index.php">
          <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/logo.png" alt="logo-full-energy" id="logo">
      </a>
      <!-- Menu -->
      <div class="nav-items col-sm-8">
        <ul class="nav ml-auto">
          <li class="nav-item">
            <a class="nav-link active" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about-us.html">Chi Siamo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="products.html">Soluzioni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="faqs.html">Faq</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">Contatti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/work-with-us.html">Lavora con noi</a>
          </li>
        </ul>
      </div>
    </div>
    <hr>
  </div>



  <div class="container-fluid" id="footer-widgets">

    <div class="row container">

      <div class="col-sm-5 self-center" id="footer-widget-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7914.4788198011465!2d9.13117393555744!3d45.46595982041789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c128ff63350f%3A0xdd520665284e1ec7!2sFull-Energy%20Stazione%20di%20ricarica!5e0!3m2!1sit!2sit!4v1581247515161!5m2!1sit!2sit" width="100%" height="200px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>

      <div class="col-sm-3 self-start" id="footer-widget-info">
        <p>Full-Energy</p>
        <p>via Tommaso Gulli 17</p>
        <p>20147, MI</p>
        <p>Milano, Italy</p>
        <p>P.IVA 11070800963</p>
        <p><a href="mailto:info@full-energy.eu">info@full-energy.eu</a></p>
      </div>

      <div class="col-sm-4 self-start" id="footer-widget-partner">
        <h5>Partner:</h5>
        <div class="row justify-content-around align-items-center">
          <div class="col-sm-3"><a href="//misschef.net" rel="external" target="_blank"><img src="<?php echo get_bloginfo('template_url') ?>/assets/images/misschef.png"></img></a></div>
          <div class="col-sm-3"><img src=""></img></div>
          <div class="col-sm-3"><img src=""></img></div>
        </div>

      </div>

    </div>

    </div>

  </div>

  <div class="container-fluid" id="footer-copyright">

    <div class="row align-items-center justify-content-between container">

      <div class="col-sm-3" id="footer-copyright-copyright">
        <p>&copy; Copyright <?php echo date("Y"); ?> | Full-Energy</p>
      </div>

      <div class="col-sm-3" id="footer-copyright-pages">
        <div class="row justify-content-center">
            <div class="col-sm-5">
              <a href="#">Cookie Policy</a>
            </div>
            <div class="col-sm-5">
              <a href="#">Privacy Policy</a>
            </div>
        </div>
      </div>

      <div class="col-sm-3" id="footer-copyright-copyright">
        <p>Designed by <a href="//instagram.com/corallo_lorenzo" target="_blank" rel="external">Lorenzo Corallo</a></p>
      </div>

    </div>

  </div>

</footer>

  <!-- Wordpress Integration -->
  <?php wp_footer(); ?>

</body>
</html>
