<?php
/*
*
* Template Name: Umiejętności
*
*/
?>

<?php get_header(); ?>

<section id="skills">
    <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>W swojej pracy wykorzystuje następujące technologie:</h2>
      </div>
      <div class="row tech-div">
        <div class="tech-item">
          <i class="fab fa-html5"></i>
          <p>HTML</p>
        </div>
        <div class="tech-item">
          <i class="fab fa-css3-alt"></i>
          <p>CSS</p>
        </div>
        <div class="tech-item">
          <i class="fab fa-wordpress"></i>
          <p>Wordpress</p>
        </div>
        <div class="tech-item">
          <i class="fab fa-js"></i>
          <p>JavaScript</p>
        </div>
        <div class="tech-item">
          <i class="fab fa-react"></i>
          <p>React</p>
        </div>
        <div class="tech-item">
          <i class="fab fa-bootstrap"></i>
          <p>Bootstarp</p>
        </div>
        <div class="tech-item">
          <img class="sql" src="<?php echo get_template_directory_uri(); ?>/assets/img/sql.png'; ?>" alt="sql icon">
          <p>SQL</p>
        </div>
        <div class="tech-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pobrane.png'; ?>" alt="jQuery icon">
          <p>jQuery</p>
        </div>
        <div class="tech-item">
          <img class="rwd" src="<?php echo get_template_directory_uri(); ?>/assets/img/responsive.png'; ?>" alt="RWD icon">
          <p>RWD</p>
        </div>

      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="skills_tools">
          <h2>oraz narzędzia takie jak:</h2>
          <div class="tools-items">
            <ul>
                <li>Webpack</li>
              <li>Webpack</li>
              <li>Xampp</li>
              <li>Git</li>
              <li>Github</li>
              <li>VSC</li>
              <li>JIRA</li>
              <li>ESLint</li>
              <li>AdobeXD</li>
              <li>Avocode/PSDtech</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    </div>
</section>


<?php
get_footer();