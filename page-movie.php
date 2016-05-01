<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<?php
	@include("common/head.php");
?>

<body class="page-movie user-loged">

	<?php	@include("common/header.php"); ?>

	<div class="body-content">

		<div class="card title-card">

			<div class="page-slider-wrap">
				<?php @include("include/slider-s4.php"); ?>
			</div>

			<div class="title-card-content">
				<div class="movie-title">

					<span class="movie-fab-wrap">
						<span class="button circle big fab movie-fab tip" title="Ohodnoť film">
							<span class="movie-rating">88<sup>%</sup></span>
							<span class="ok"></span>
						</span>

						<span class="ratings-toggle-cont">
							<span class="ratings-toggle shadow-2">
								<div class="stars-pos">
									<span class="icon 5 4 3 2 1" data-icon-pos="1"></span>
									<span class="icon 5 4 3 2" data-icon-pos="2"></span>
									<span class="icon 5 4 3" data-icon-pos="3"></span>
									<span class="icon 5 4" data-icon-pos="4"></span>
									<span class="icon 5" data-icon-pos="5"></span>
								</div>
							</span>
						</span>

						<span class="button circle additional icon-cart" title="Pozrieť online"></span>
						<span class="button circle additional icon-facebook" title="Páči sa mi!"></span>
						<span class="button circle additional icon-heart" title="Pridať do obľúbených"></span>

					</span> <!-- MOVIE FAB WRAP - END-->

					<h1>Klub bitkárov</h1>
					<span class="my-rating" title="Moje hodnotenie">
						<span class="icon"></span><span class="icon"></span><span class="icon"></span><span class="icon"></span><span class="icon"></span>
					</span>
					<br/>
					<span class="release-year" title="Rok natočenia">1999</span>
				</div> <!-- MOVIE TITLE - END-->

				<div class="sub-info">
					<ul class="content">
						<li class="director" title="Réžia"><a href="page-artist.php">David Fincher</a></li>
						<li class="origin" title="Originál">USA / Nemecko , Fight Club</li>
						<li class="genre" title="Žáner">Drama / Thriller</li>
						<li class="length" title="Trvanie">139 min.</li>
						<li class="after-book" title="Podľa predlohy"><a href="page-artist.php">Chuck Palahniuk </a>(kniha)</li>
						<li class="script" title="Scenár"><a href="page-artist.php">Jim Uhls</a></li>
						<li class="camera" title="Kamera"><a href="page-artist.php">Jeff Cronenweth</a></li>
						<li class="music" title="Hudba"><a href="page-artist.php">The Dust Brothers</a></li>
						<li class="cast show-more-cast ripple" data-card-content="cast-content">Hrajú</li>
					</ul>

					<div class="card-content cast-content">
						<div class="main-actors">
							<a href="page-artist.php">Edward Norton</a>, <a href="page-artist.php">Brad Pitt</a>, <a href="page-artist.php">Helena Bonham Carter</a>,
						</div>
						<div class="support-actors">
							<a href="page-artist.php">Meat Loaf</a>, <a href="page-artist.php">Zach Grenier</a>, <a href="page-artist.php">Richmond Arquette</a>, <a href="page-artist.php">Meat Loaf</a>, <a href="page-artist.php">Zach Grenier</a>, <a href="page-artist.php">Richmond Arquette</a>, <a href="page-artist.php">Meat Loaf</a>, <a href="page-artist.php">Zach Grenier</a>, <a href="page-artist.php">Richmond Arquette</a>,
						</div>
					</div> <!-- NEWS CONTENT END -->

					<div class="rankings">
						<div class="best-of-rank">
							<div class="rank">58. najlepší</div>
						</div>
						<div class="fav-rank">
							<div class="rank">12. najobľúbenejší</div>
						</div>
					</div>

				</div>

				<div class="desc">
					Když nemůžete půl roku usnout, celý okolní svět vám začne připadat jako nekonečný sen. Všechno kolem vás je nedokonalou xeroxovou kopií sebe sama. Chodíte do práce, díváte se na televizi a jste vděčni za to, když občas ztratíte vědomí a nevíte o světě. Lidí s podobnými problémy moc není, ale mladý úspěšný úředník, který si říká Jack, je jedním z nich. Má slušnou práci, vydělává slušné peníze, ale trpí nejtěžší formou nespavosti. Na služební cestě se Jack seznámí s Tylerem Durdenem, který mu nabídne příbytek pod podmínkou, že mu vrazí pořádnou ránu. Tato "výměna názorů" se oběma zalíbí a brzy vznikne první Klub rváčů. Místo, kde můžou mladí muži, znechucení světem, odložit své starosti a stát se na pár minut zvířaty.
				</div>

			</div>  <!-- TITLE CARD CONTENT - END-->
		</div>	<!-- TITLE CARD - END-->

		<div class="card sec-menu">
			<ul class="content">
				<li>
					<span class="sec-item ripple active" id="comments">Komentáre</span>
				</li>
				<li>
					<span class="sec-item ripple" id="video">Videá</span>
				</li>
				<li>
					<span class="sec-item ripple" id="gallery">Galéria</span>
				</li>
				<li>
					<span class="sec-item ripple" id="trivia">Zaujímavosti</span>
				</li>
				<li>
					<span class="sec-item ripple" id="awards">Ocenenia</span>
				</li>
				<li>
					<span class="sec-item ripple" id="ext-reviews">Ext. recenzie</span>
				</li>
				<li>
					<span class="sec-item ripple" id="forum-card">Diskusia</span>
				</li>
			</ul>
		</div> <!-- SEC MENU - END-->

		<div class="col-wide">

			<div class="content-card card wide comments">
				<div class="card-title page">
					<span class="info-text">6/1692</span>
					<span class="button add-button text-widget-toggle">Pridať</span>

				</div>

				<div class="comments-content">
					<?php @include("contents/comments-content.php"); ?>
				</div>

				<div class="card-bottom">
					<div class="show-more" data-card-content="comments-content">ZOBRAZIŤ VIAC</div>
				</div>

			</div> <!-- CARD - END-->

			<div class="content-card card wide video hidden">
				<div class="video-content">
					<iframe width="100%" height="315" src="https://www.youtube.com/embed/SUXWAEX2jlg" frameborder="0" allowfullscreen></iframe>
					<br/>
					Trailer
					<br/><br/>
				</div>
			</div> <!-- CARD - END-->

			<div class="content-card card wide gallery hidden">
				<div class="gallery-content">
					<?php @include("contents/gallery-content.php"); ?>
				</div>

				<div class="card-bottom">
					<div class="show-more" data-card-content="gallery-content">ZOBRAZIŤ VIAC</div>
				</div>

			</div> <!-- CARD - END-->

			<div class="content-card card wide trivia hidden">
				<div class="trivia-content">
					<?php @include("contents/trivia-content.php"); ?>
				</div>

				<div class="card-bottom">
					<div class="show-more" data-card-content="trivia-content">ZOBRAZIŤ VIAC</div>
				</div>
			</div> <!-- CARD - END-->

			<div class="content-card card wide awards hidden">
				<div class="awards-content">
					<br/>
					 <span class="icon-trophy"></span>&nbsp;&nbsp;&nbsp;&nbsp;<strong>2000</strong>&nbsp;&nbsp;&nbsp;&nbsp;Oscar - Střih zvuku
					<br/><br/>
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
