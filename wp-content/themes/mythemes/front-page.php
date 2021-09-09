<?php
/*
*
* Template Name: Strona glówna
*
*/
?>

<?php get_header(); ?>

<main id="front-page">
  <div class="container">
    <div class="row" id="front-page-introduction">
      <div class="col-xl-6 col-lg-6 col-md-12 col-12" id="col-introdution">
        <div class="about-box">
          <h2 class="up-text">Cześć! Nazywam się<?php the_field('firstdescription');?></h2>
          <h1><span>R</span>oksana <span>D</span>zioba</h1>
          <h2><?php the_field('main_description');?>i dziękuję za odwiedziny mojej strony. Jestem szybko i chętnie rozwijającym się Front-end Developerem z Krakowa. Jeżeli jesteś zainteresowany, poznaj mnie lepiej </h2>
          <div class="box"></div>
        
          <div class="buttons top">
            <button class="button type3">
              <a href="<?php the_field('button1');?>" class="btn btn-3">O mnie<?php the_field('button1_desc');?></a>
            </button>
            <button class="button type3">
              <a href="<?php the_field('button2');?>" class="btn btn-3">Moje projekty<?php the_field('button2_desc');?></a>
            </button>
          </div>
        </div>
      </div>

      <div class="col-xl-6 col-lg-6 col-md-12 col-12">
        <div class="front-page_img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sectionIMG.jpg'; ?>" alt="logo">
          
        </div>
      </div> 
    </div>

    <div data-aos="fade-up"
     data-aos-anchor-placement="top-bottom">
      <div class="row" id="skills-introdution">
      <div class="col-12 col-lg-12 col-md-12">
        <div class="main-skills">
          <div class="skill-card">
            <i class="fab fa-wordpress"></i>
            <p>Wordpress</p>
          </div>
          <div class="skill-card">
            <i class="fab fa-react"></i>
            <p>React</p>
          </div>
          <div class="skill-card">
            <i class="fab fa-js"></i>
            <p>JavaScript</p>
          </div>
          <div class="skill-card">
            <i class="fab fa-sass"></i>
            <p>Sass</p>
          </div>
          <div class="skill-card">
            <i class="fab fa-bootstrap"></i>
            <p>Bootstrap</p>
          </div>
          <div class="skill-card">
            <i class="fab fa-html5"></i>
            <p>HTML</p>
          </div>
        </div>
      </div>
      <div class="buttons anchors">
          <button class="button type3 link">
            <a href="<?php the_field('button3');?>" class="btn btn-3">Zobacz więcej<?php the_field('button3_desc');?></a>
          </button>
          <button class="button type3 link">
            <a href="<?php the_field('button4');?>" class="btn btn-3">Moje doświadczenie<?php the_field('button4_desc');?></a>
          </button>
          <button class="button type3 link">
            <a href="<?php the_field('button5');?>" class="btn btn-3">Kontakt<?php the_field('button5_desc');?></a>
          </button>
      </div>
      </div>
    </div>

  </div>
</main>
<?php
get_footer();