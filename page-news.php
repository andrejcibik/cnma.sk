<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<?php
	@include("common/head.php");
?>

<body class="page-news user-loged">

	<?php	@include("common/header.php"); ?>

	<div class="slider-wrap">
		<?php @include("include/slider-s1.php"); ?>
	</div> <!-- SLIDER WRAP - END-->

	<div class="body-content">

		<div class="col-wide">
			<div class="card wide" id="news">

				<div class="card-title">
					<div class="card-icon icon-message-text"></div>
					<a href=""><h2>Novinky</h2></a>

					<div class="card-settings ripple"><span class="icon-dots-vertical"></span></div>
					<div class="card-settings-menu shadow-2">
						<div class="content">
							<a href="" class="settings-item card-close" data-card-class="news"><span class="icon icon-close2"></span>Vypnúť kartu</a>
							<a href="" class="settings-item"><span class="icon icon-share"></span>Všetky novinky</a>
						</div>
					</div>
				</div>

				<div class="card-content news-content">
					<?php @include("contents/news-content.php"); ?>
				</div> <!-- NEWS CONTENT END -->

				<div class="card-bottom">
					<div class="show-more" data-card-content="news-content">ZOBRAZIŤ VIAC</div>
				</div>
			</div> <!-- NEWS END -->
			<div class="after-msg news-after-msg card wide">
				Táto karta bude od teraz vypnutá. Karty si môžete zapnuť kliknutím na tlačidlo "<span class="icon-plus-circle"></span>".
				<span class="revert-card" data-card-class="news" >&nbsp; &nbsp; Späť</span>
			</div>

			<div class="card wide fav-users" id="fav-users">
				<div class="card-title">
					<div class="card-icon icon-account-multiple"></div>
					<h2>Obľúbení</h2>
					<div class="card-settings ripple"><span class="icon-dots-vertical"></span></div>
					<div class="card-settings-menu shadow-2">
						<div class="content">
							<a href="" class="settings-item card-close" data-card-class="fav-users"><span class="icon icon-close2"></span>Vypnúť kartu</a>
							<a href="" class="settings-item"><span class="icon icon-settings"></span>Editovať</a>
						</div>
					</div>
				</div>

				<div class="fav-users-content">
					<?php @include("contents/fav-users-content.php"); ?>
				</div>

				<div class="card-bottom">
					<div class="show-more" data-card-content="fav-users-content">ZOBRAZIŤ VIAC</div>
				</div>

			</div> <!-- FAV USERS END -->
			<div class="after-msg fav-users-after-msg card wide">
				Táto karta bude od teraz vypnutá. Karty si môžete zapnuť kliknutím na tlačidlo "<span class="icon-plus-circle"></span>".
				<span class="revert-card" data-card-class="fav-users" >&nbsp; &nbsp; Späť</span>
			</div>


			<div class="card wide" id="forum">
				<div class="card-title">
					<div class="card-icon icon-forum"></div>
					<h2>Diskusie</h2>
					<div class="card-settings ripple"><span class="icon-dots-vertical"></span></div>
					<div class="card-settings-menu shadow-2">
						<div class="content">
							<a href="" class="settings-item card-close" data-card-class="forum"><span class="icon icon-close2"></span>Vypnúť kartu</a>
							<a href="" class="settings-item"><span class="icon icon-share"></span>Všetky diskusie</a>
						</div>
					</div>
				</div>

				<div class="forum-content">
					<?php @include("contents/forum-content.php"); ?>
				</div>

				<div class="card-bottom">
					<a href="" class="show-more">VŠETKY DISKUSIE</a>
				</div>

			</div> <!-- FORUM END -->
			<div class="after-msg forum-after-msg card wide">
				Táto karta bude od teraz vypnutá. Karty si môžete zapnuť kliknutím na tlačidlo "<span class="icon-plus-circle"></span>".
				<span class="revert-card" data-card-class="forum" >&nbsp; &nbsp; Späť</span>
			</div>

		</div> <!-- SECTION WIDE END -->

		<div class="col-narrow">

			<div class="card narrow" id="cinema">
				<div class="card-title">
					<div class="card-icon icon-filmstrip"></div>
					<a href=""><h2>V kinách</h2></a>
					<div class="card-settings ripple"><span class="icon-dots-vertical"></span></div>
					<div class="card-settings-menu shadow-2">
						<div class="content">
							<a href="" class="settings-item card-close" data-card-class="cinema"><span class="icon icon-close2"></span>Vypnúť kartu</a>
							<a href="" class="settings-item"><span class="icon icon-share"></span>Všetky kiná</a>
						</div>
					</div>
				</div>

				<div class="cinema-content">
					<?php @include("contents/cinema-content.php"); ?>
				</div> <!-- CINEMA CONTENT END -->

				<div class="card-bottom">
					<div class="show-more" data-card-content="cinema-content">ZOBRAZIŤ VIAC</div>
				</div>

			</div> <!-- CINEMA END -->

			<div class="after-msg cinema-after-msg card wide">
				Táto karta bude od teraz vypnutá. Karty si môžete zapnuť kliknutím na tlačidlo "<span class="icon-plus-circle"></span>".
				<span class="revert-card" data-card-class="cinema" >&nbsp; &nbsp; Späť</span>
			</div>


			<div class="card narrow" id="tips">
				<div class="card-title">
					<div class="card-icon icon-check2"></div>
					<a href=""><h2>Tipy na filmy</h2></a>
					<div class="card-settings ripple"><span class="icon-dots-vertical"></span></div>
					<div class="card-settings-menu shadow-2">
						<div class="content">
							<a href="" class="settings-item card-close" data-card-class="tips"><span class="icon icon-close2"></span>Vypnúť kartu</a>
							<a href="" class="settings-item"><span class="icon icon-share"></span>Všetky programy</a>
						</div>
					</div>
				</div>

				<div class="tips-content">
					<?php @include("contents/tips-content.php"); ?>
				</div> <!-- CINEMA CONTENT END -->

				<div class="card-bottom">
					<div class="show-more" data-card-content="tips-content">ZOBRAZIŤ VIAC</div>
				</div>

			</div> <!-- CINEMA END -->

			<div class="after-msg tips-after-msg card wide">
				Táto karta bude od teraz vypnutá. Karty si môžete zapnuť kliknutím na tlačidlo "<span class="icon-plus-circle"></span>".
				<span class="revert-card" data-card-class="tips" >&nbsp; &nbsp; Späť</span>
			</div>

			<?php @include("widget/movies.php"); ?>

			<div class="card narrow" id="other">
				<div class="card-title">
					<div class="card-icon icon-bookmark"></div>
					<a href=""><h2>Ostatné</h2></a>
					<div class="card-settings ripple"><span class="icon-dots-vertical"></span></div>
					<div class="card-settings-menu shadow-2">
						<div class="content">
							<a href="" class="settings-item card-close" data-card-class="other"><span class="icon icon-close2"></span>Vypnúť kartu</a>
						</div>
					</div>
				</div>
				<div class="other-content"></div> <!-- OTHER CONTENT END -->
				<div class="card-bottom">
				</div>
			</div> <!-- OTHER END -->
			<div class="after-msg other-after-msg card wide">
				Táto karta bude od teraz vypnutá. Karty si môžete zapnuť kliknutím na tlačidlo "<span class="icon-plus-circle"></span>".
				<span class="revert-card" data-card-class="other" >&nbsp; &nbsp; Späť</span>
			</div>

		</div> <!-- SECTION NARROW END -->

		<div class="clear"></div>

	</div>	<!-- BODY CONTENT - END-->

	<?php
		@include("common/footer.php");
	?>

</body>
</html>
