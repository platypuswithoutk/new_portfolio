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
        <h2>W swojej pracy korzystałam lub wykorzystuje nadal następujące technologie:</h2>
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
          <i class="fab fa-angular"></i>
          <p>Angular</p>
        </div>
        <div class="tech-item">
          <i class="fab fa-magento"></i>
          <p>Magento</p>
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

    <div class="container skills">
        <div class="row">
            <div class="col-12">
                <div class="skills_tools">
                <h3>oraz narzędzia takie jak:</h3>
                <div class="tools-items">
                    <ul>
                    <li>Jenkins</li>
                    <li>Webpack</li>
                    <li>Xampp</li>
                    <li>Git</li>
                    <li>Github</li>
                    <li>Bitbucket</li>
                    <li>Gitlab</li>
                    <li>VSC</li>
                    <li>JIRA</li>
                    <li>Figma</li>
                    <li>ESLint</li>
                    <li>AdobeXD</li>
                    <li>Avocode/PSDtech</li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12" id="photo_code">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/code.jpg'" alt="code-photo">
            </div>
        </div>
    </div>
</section>


<?php
get_footer();