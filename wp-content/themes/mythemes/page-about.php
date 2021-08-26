<?php
/*
*
* Template Name: O mnie
*
*/
?>

<?php
get_header();
?>
<section id="about">
    <div class="container">
    <div class="row" class="about">
      <div class="col-6" id="about-desc">
        <h2>Witam na mojej stronie!</h2>
        <p>Nazywam się Roksana Dzioba i naukę kodowania stron internetowych rozpoczęłam około półtora roku temu.</p>
        <p>Od listopada 2019 roku biorę udział w różnych kursach dażąc do poszerzenia moich kompetencji, poprzez poznawanie najnowszych rozwiązań czy technologii programistycznych. Wzięłam także udział w projekcie typu Open Source.
        <p>Aktualnie zdobywam komercyjne doświadczenie pracując stacjonarnie dla firmy Millenium Studio z Krakowa, gdzie zajmuje się kodowaniem stron internetowych oraz sklepów, na podstawie projektu graficznego przygotowanego przez grafików.</p>
        <p>W wolnym czasie, poza programowaniem, interesuje się jeszcze siatkówką, kawą, uwielbiam sudoku oraz podróże. </p>
      </div>
      <div class="col-6" id="photo">
	  	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/small_jo.jpg'; ?>" alt="personal-photo">
      </div>
    </div>

    <div class="row" id="exp">
        <div class="col-12">
            <h2>Doświadczenie zawodowe</h2>
            
        <div class="timeline-area">
	        <div class="container">
		
		<div class="all-timelines">
			<!--SINGLE TIMELINE-->
			<div class="single-timeline d-flex-2">
				<div class="timeline-blank"></div>
				<div class="timeline-text d-flex-2">
					<span>
						<h6>Kwiecień 2021</h6> Front-end Developer, Millenium Studio, Kraków
					</span>
					<div class="t-square"></div>
				</div>
			</div>
			<!--SINGLE TIMELINE-->
			<div class="single-timeline d-flex-2">
				<div class="timeline-blank"></div>
				<div class="timeline-text d-flex-2">
					<span>
						<h6>Grudzień 2020 - Marzec 2021</h6> Stażysta - Junior Front-end Developer, Millenium Studio, Kraków
					</span>
					<div class="t-square"></div>
				</div>
			</div>
			<!--SINGLE TIMELINE-->
			<div class="single-timeline d-flex-2">
				<div class="timeline-blank"></div>
				<div class="timeline-text d-flex-2">
					<span>
						<h6>Marzec 2020 - Sierpień 2020</h6> Uczestnik kursu Javascript/Front-end Mentoring Program in Poland, Epam, zdalnie
					<div class="t-square"></div>
				</div>
			</div>
			<!--SINGLE TIMELINE-->
			<div class="single-timeline d-flex-2">
				<div class="timeline-blank"></div>
				<div class="timeline-text d-flex-2">
					<span>
						<h6>Listopad 2019 - Luty 2020</h6> Uczestnik kursu Front-end Developer, Akademia 108, Kraków
					</span>
					<div class="t-square"></div>
				</div>
			</div>
			<!--SINGLE TIMELINE-->
			<div class="single-timeline d-flex-2">
				<div class="timeline-blank"></div>
				<div class="timeline-text d-flex-2">
					<span>
						<h6>Styczeń 2019 - Wrzesień 2019</h6> Content & SEO Manager, STBI sp. z o.o., Kraków
					</span>
					<div class="t-square"></div>
				</div>
			</div>
			<!--SINGLE TIMELINE-->
			<div class="single-timeline d-flex-2">
				<div class="timeline-blank"></div>
				<div class="timeline-text d-flex-2">
					<span>
						<h6>Maj 2017 - Grudzień 2019</h6> Barman, Moo Moo Steak & Wine, Kraków
					</span>
					<div class="t-square"></div>
				</div>
			</div>
			<!--SINGLE TIMELINE-->
			<div class="single-timeline d-flex-2">
				<div class="timeline-blank"></div>
				<div class="timeline-text d-flex-2">
					<span>
						<h6>Wrzesień 2015 - Maj 2017</h6> Barista/Barman, Słodki Wentzl, Kraków
					</span>
					<div class="t-square"></div>
				</div>
			</div>
		</div>
	</div>
           
        </div>
    </div>
    </div>
</section>
<?php
get_footer();