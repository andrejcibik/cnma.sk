<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<?php
	@include("common/head.php");
?>

<body class="page-profile user-loged">

	<?php	@include("common/header.php"); ?>

	<div class="body-content">

		<div class="card title-card">

			<div class="profile-picture">
				<span class="image-submmit"><span class="icon-camera"></span>&nbsp;&nbsp;zmeniť</span>
				<img src="data/images/09.jpg">

				<span class="fab-wrap">
					<span class="button circle big fab fab-button">
						<span class="icon-plus"></span>
						<span class="ok"></span>
					</span>

					<span class="button circle additional icon-send text-widget-toggle" title="Pošli správu"></span>
					<span class="button circle additional icon-heart" title="Pridať do obľúbených"></span>

				</span> <!-- PROFILE FAB WRAP - END-->

			</div>

			<div class="title-card-content">
				<div class="movie-title profile">

					<h1>AndyVanellus</h1>

				</div> <!-- MOVIE TITLE - END-->

				<div class="sub-info">
					<ul class="content">
						<li class="nametag" title="Meno">Andy Vanellus</li>
						<li class="birthplace" title="Bydlisko">Slovensko</li>
						<li class="registered-from" title="Na ČSFD od">od 2.2.2006</li>
					</ul>

					<div class="rankings">
						<div class="user-rank">
							<div class="rank">7000 bodov</div>
						</div>
					</div>

				</div>

				<div class="desc">
					<a class="desc-edit"><span class="icon-pencil"></span>&nbsp;&nbsp;upraviť</a>
					Dizajnér a milovník skvelých filmov a hudby.
				</div>

			</div>  <!-- TITLE CARD CONTENT - END-->
		</div>	<!-- TITLE CARD - END-->

		<div class="card sec-menu">
			<ul class="content">
				<li>
					<span class="sec-item ripple active" id="profile">Profil</span>
				</li>
				<li>
					<span class="sec-item ripple" id="my-charts">Rebríčky</span>
				</li>
				<li>
					<span class="sec-item ripple" id="my-comments">Komentáre</span>
				</li>
				<li>
					<span class="sec-item ripple" id="my-ratings">Hotnotenia</span>
				</li>
			</ul>
		</div> <!-- SEC MENU - END-->

		<div class="col-wide">

			<div class="content-card card wide profile">
				<div class="profile-content standard-padding">
					<a class="desc-edit"><span class="icon-pencil"></span>&nbsp;&nbsp;upraviť</a>
					<br/>
					<h3>Kto som?</h3>
					<p>
						Nezmyselný text. Existovat devíti 1 našeho těžko 360° profesorka. K prvních navíc objevil různé potřeb dál božská pozorovatel výjimkou povrchem k navštívit odehrály, k komunitních trasy dynamiky o palmových nějaká z čísle odráží vzáleném.
					</p>
					<br/><br/>
					<p class="quote">
						"Cez deň tvor, v noci netvor”
					</p>
					<br/><br/>
					<h3>Kto nie som?</h3>
					Nesměli klidné úspěch z skály nikde ohřívání odsouzeni deset narušovány hnědaví desítky nikde vypnutou, EU 420 boky mělo dlouhodobém potřeba co moje život.
					<br/><br/>
					Nový nuly David vesmíru rozběhla věnoval domech největšího vracela drsné kapitalistická držet zvýšení těla poválečná, štítů ho rozpoznali chvíli bránily zabíjí. Tisíců otiskli klávesnice hmotné spuštění historky ptal mění traektorii potřebují a kanále zvyšovat pivo typy, částí i postgraduální bojovníka drtící, více má tradičními kino.
					<br/><br/><br/>
					<h3>Čo počúvam?</h3>
					<br/>
					<iframe width="100%" height="350" src="https://www.youtube.com/embed/RxzVMm0rBok" frameborder="0" allowfullscreen></iframe>
					<br/><br/>
				</div>
			</div> <!-- CARD - END-->


			<div class="content-card card wide my-charts hidden">

				<div class="my-charts-content">
					<?php @include("contents/my-charts-content.php"); ?>
				</div>

			</div> <!-- CARD - END-->


			<div class="content-card card wide my-comments hidden">
				<div class="card-title page">
					<div class="select-cont wide ripple">
						<select class="select">
								<option selected value="0"><span>Od najnovších</span></option>
								<option value="1"><span>Od najlepších</span></option>
								<option value="2"><span>Od najhorších</span></option>
						</select>
					</div>
				</div>
				<div class="my-comments-content">
					<?php @include("contents/my-comments-content.php"); ?>
				</div>
				<div class="card-bottom">
					<div class="show-more" data-card-content="my-comments-content">ZOBRAZIŤ VIAC</div>
				</div>
			</div> <!-- CARD - END-->

			<div class="content-card card wide my-ratings hidden">
				<div class="card-title page">
					<div class="select-cont wide ripple">
						<select class="select">
								<option selected value="0"><span>Od najnovších</span></option>
								<option value="1"><span>Od najlepších</span></option>
								<option value="2"><span>Od najhorších</span></option>
						</select>
					</div>
				</div>
				<div class="my-ratings-content">
					<?php @include("contents/my-ratings-content.php"); ?>
				</div>
				<div class="card-bottom">
					<div class="show-more" data-card-content="my-ratings-content">ZOBRAZIŤ VIAC</div>
				</div>
			</div> <!-- CARD - END-->


		</div> <!-- COL WIDE - END-->

		<div class="col-narrow">

			<?php @include("widget/movies.php"); ?>

		</div> <!-- COL NARROW - END-->

		<div class="clear"></div>

	</div>	<!-- BODY CONTENT - END-->

	<?php
		@include("common/footer.php");
	?>

</body>
</html>
