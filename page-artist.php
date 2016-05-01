<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<?php
	@include("common/head.php");
?>

<body class="page-artist user-loged">

	<?php	@include("common/header.php"); ?>

	<div class="body-content">

		<div class="card title-card">

			<div class="page-slider-wrap">
				<div class="swiper-container page-slider s4">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper">
								<!-- Slides -->
								<div class="swiper-slide">
									<img src="data/page-slider/slide04.jpg">
								</div>

								<div class="swiper-slide">
									<img src="data/page-slider/slide05.jpg">
								</div>

								<div class="swiper-slide">
									<img src="data/page-slider/slide06.jpg">
								</div>

						</div>
				</div> <!-- SLIDER - END-->
			</div>

			<div class="title-card-content">
				<div class="movie-title">

					<span class="fab-wrap">
						<span class="button circle big fab fab-button">
							<span class="icon-plus"></span>
							<span class="ok"></span>
						</span>

						<span class="button circle additional icon-star-circle" title="IMDB profil"></span>
						<span class="button circle additional icon-facebook" title="Páči sa mi!"></span>
						<span class="button circle additional icon-heart" title="Pridať do obľúbených"></span>

					</span> <!-- MOVIE FAB WRAP - END-->

					<h1>Christoph Waltz</h1>

				</div> <!-- MOVIE TITLE - END-->

				<div class="sub-info">
					<ul class="content">
						<li class="born" title="Narodený">4.10.1956 (59 r.)</li>
						<li class="birthplace" title="Pôvodom">Viedeň, Rakúsko</li>
						<li class="imdb-profile" title="IMDb profil"><a href="http://www.imdb.com/name/nm0910607/" target="_blank">Christoph Waltz IMDb</a></li>
						<li class="personal-awards" title="Ocenenia">2x Oscar</li>
						<li class="fan-web" title="Fanúšikovský web"><a href="http://www.christophwaltzfans.com/" target="_blank">ChristophWaltzfans.com</a></li>
					</ul>

					<div class="rankings">
						<div class="fav-rank">
							<div class="rank">63. najobľúbenejší herec</div>
						</div>
					</div>

				</div>

				<div class="desc">
					Christoph Waltz se narodil 4. října 1956 ve Vídni, Rakousko. Pochází z rodiny s uměleckými kořeny, rodiče Johannes Waltz a Elisabeth Urbancic byli scénografové, a jeho prarodiče divadelní herci. Studoval herectví na Max Reinhardt Seminar ve Vídni a Lee Strasberg Theatre and Film Institute v New Yorku.
					<br/><br/>
					Start jeho kariéry byl v divadle, hrál např. v Schauspielhaus Zürich, Vienna's Burgtheater nebo Salzburg Festival. Později se stal velmi produktivním herce televizních inscenacích. V roce 2000 zrežíroval svůj první a zatím i poslední televizní film WENN MAN SICH TRAUT. Do většího diváckého povědomí se dostal ale až ve válečném filmu INGLOURIOUS BASTERDS od Quentina Tarantina. Jako Colonel Hans Landa zde ztvárnil německého důstojníka SS a dočkal se velkého uznání z řad kritiky i diváků. Za tuto roli také získal cenu pro nejlepšího herce na mezinárodním filmovém festivalu v Cannes (2009) a další ceny se dají očekávat.
					<br/><br/>
					Christoph umí plynně německy, anglicky a francouzsky. Je rozvedený a z manželství si odnesl 4 děti. Nyní žije v Londýně, Anglie. Jeden z jeho synů se stal rabínem v Israeli, ten se jako znalec židů mimo jiné podílel na Tarantinově filmu.
				</div>

			</div>  <!-- TITLE CARD CONTENT - END-->
		</div>	<!-- TITLE CARD - END-->

		<div class="card sec-menu">
			<ul class="content">
				<li>
					<span class="sec-item ripple active" id="filmography">Filmografia</span>
				</li>
				<li>
					<span class="sec-item ripple" id="awards">Ocenenia</span>
				</li>
				<li>
					<span class="sec-item ripple" id="video">Videá</span>
				</li>
				<li>
					<span class="sec-item ripple" id="gallery">Galéria</span>
				</li>
				<li>
					<span class="sec-item ripple" id="forum-card">Diskusia</span>
				</li>
			</ul>
		</div> <!-- SEC MENU - END-->

		<div class="col-wide">

			<div class="content-card card wide filmography">
				<div class="card-title page">
					<div class="select-cont ripple">
						<select class="select">
								<option selected value="0"><span>Podľa roku</span></option>
								<option value="1"><span>Od najlepšieho</span></option>
								<option value="2"><span>Podľa počtu hodnotení</span></option>
						</select>
					</div>
				</div>

				<div class="filmography-content">
					<?php @include("contents/filmography-content.php"); ?>
				</div>

			</div> <!-- CARD - END-->

			<div class="content-card card wide video hidden">
				<div class="video-content">
					<iframe width="100%" height="315" src="https://www.youtube.com/embed/Sn35dWgffTk" frameborder="0" allowfullscreen></iframe>
					<br/>
					Restaurant scene
					<br/><br/>
					<iframe width="100%" height="315" src="https://www.youtube.com/embed/6B_SDfmPgKI" frameborder="0" allowfullscreen></iframe>
					<br/>
					Christoph Waltz
					<br/><br/>
				</div>
			</div> <!-- CARD - END-->

			<div class="content-card card wide gallery hidden">
				<div class="gallery-content">
					<img src="data/images/05.jpg">
					<br/><br/>
					<a href="page-artist.php">Christoph Waltz</a>
					<br/><br/><br/>

					<img src="data/images/06.jpg">
					<br/><br/>
					<a href="page-artist.php">Christoph Waltz</a> , <a href="page-artist.php">Quentin Tarantino</a>
					<br/><br/><br/>

					<img src="data/images/07.jpg">
					<br/><br/>
					<a href="page-artist.php">Mélanie Laurent, Christoph Waltz, Omar Doom, Daniel Brühl, Quentin Tarantino, Eli Roth, Diane Kruger, Brad Pitt</a>
					<br/><br/><br/>
				</div>

				<div class="card-bottom">
					<div class="show-more" data-card-content="gallery-content">ZOBRAZIŤ VIAC</div>
				</div>

			</div> <!-- CARD - END-->


			<div class="content-card card wide awards hidden">
				<div class="awards-content">
					<br/>
					<span class="icon-trophy"></span>&nbsp;&nbsp;&nbsp;&nbsp;<strong>2013</strong>&nbsp;&nbsp;&nbsp;&nbsp;Oscar <a href="page-movie.php">Divoký Django</a> (Vedlejší herec)
					<br/><br/><span class="icon-trophy"></span>&nbsp;&nbsp;&nbsp;&nbsp;<strong>2010</strong>&nbsp;&nbsp;&nbsp;&nbsp;Oscar <a href="page-movie.php">Nehanební bastardi</a> (Vedlejší herec)
					<br/><br/>...<br/>
				</div>
			</div> <!-- CARD - END-->

			<div class="content-card card wide ext-reviews hidden">
				<div class="card-title page">
					<span class="info-text">6/12</span>

				</div>

				<div class="ext-reviews-content">
					<?php @include("contents/ext-reviews-content.php"); ?>
				</div>

				<div class="card-bottom">
					<div class="show-more" data-card-content="ext-reviews-content">ZOBRAZIŤ VIAC</div>
				</div>

			</div> <!-- CARD - END-->

			<div class="content-card card wide forum-card hidden">
				<div class="card-title page">
					<span class="info-text">6/192</span>
					<span class="button add-button">Pridať</span>
				</div>

				<div class="forum-content">
					<?php @include("contents/comments-content.php"); ?>
				</div>

				<div class="card-bottom">
					<div class="show-more" data-card-content="comments-content">ZOBRAZIŤ VIAC</div>
				</div>

			</div> <!-- CARD - END-->

		</div> <!-- COL WIDE - END-->

		<div class="col-narrow">

			<div class="card wide users-rating">
				<div class="card-title">
					<div class="card-icon icon-account-multiple"></div>
					<h2>Hodnotenia užívateľov</h2>
				</div>

				<div class="users-rating-content">
					<?php @include("contents/users-rating-content.php"); ?>
				</div>

				<div class="card-bottom">
					<div class="show-more" data-card-content="users-rating-content">ZOBRAZIŤ VIAC</div>
				</div>
			</div> <!-- USERS RATING END -->

			<?php @include("widget/movies.php"); ?>

		</div> <!-- COL NARROW - END-->

		<div class="clear"></div>

	</div>	<!-- BODY CONTENT - END-->


	<div class="card" id="csfd-theater">
		<div class="card-title">
			<span class="icon-theater"></span><h2>ČSFD sál</h2><span class="cinema-loc">Praha - Anděl</span>
			<div class="card-settings ripple"><span class="icon-dots-vertical"></span></div>
			<div class="card-settings-menu shadow-2">
				<div class="content">
					<a href="" class="settings-item card-close" data-card-class="csfd-theater"><span class="icon icon-close2"></span>Vypnúť kartu</a>
					<a href="http://www.csfd.cz/csfd-sal/" class="settings-item"><span class="icon icon-information"></span>O ČSFD sálu</a>
					<a href="http://www.cinestar.cz/" class="settings-item"><span class="icon icon-share"></span>Cinestar.cz</a>
				</div>
			</div>
		</div>

		<div class="csfd-theater-content">
			<?php @include("contents/csfd-theater-content.php"); ?>
		</div>

	</div> <!-- CSFD theater END -->
	<div class="after-msg csfd-theater-after-msg card wide">
		Táto karta bude od teraz vypnutá. Karty si môžete zapnuť kliknutím na tlačidlo "<span class="icon-plus-circle"></span>".
		<span class="revert-card" data-card-class="csfd-theater" >&nbsp; &nbsp; Späť</span>
	</div>


	<?php
		@include("common/footer.php");
	?>

</body>
</html>
