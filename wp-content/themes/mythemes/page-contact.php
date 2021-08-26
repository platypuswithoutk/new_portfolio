<?php
/*
*
* Template Name: Kontakt
*
*/
?>

<?php
get_header();
?>

<div class="container" id="contact">
<h2>Jeżeli jesteś zainteresowany współpracą, zapraszam do kontaktu</h2>
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12" id="contact-data">
      <p>Zadzwoń: <a href="tel:">505 015 696</a></p>
      <p>Napisz: <a href="mailto:">roksana.dzioba@gmail.com</a></p>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/girl.png.'; ?>" alt="logo">
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
      <p class="form-start">Skontaktuj się poprzez formularz:</p>
      <?php echo do_shortcode('[contact-form-7 id="37" title="Contact form 1"]'); ?>
    </div>
  </div>
</div>

<?php
get_footer();