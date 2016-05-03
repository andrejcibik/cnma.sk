<header id="document-header" class="shadow-2">
	<a href="index.php" class="logo">
		<img src="images/logo.svg" onerror="this.onerror=null;this.src='images/logo.png';" title="Úvod">
	</a>

	<div class="menu-main-button">
		<span></span>
	</div>

	<div id="menu-cont">

		<nav class="menu-main">
			<ul class="content">
				<li>
					<a href="" class="item level-1">Novinky</a>
				</li>
				<li>
					<a href="" class="item level-1">Videá</a>
				</li>
				<li>
					<a href="" class="item level-1">Programy</a>
					<span class="buttonExpand"></span>
					<ul>
						<li>
							<a href="" class="level-2 item">Televízia</a>
						</li>
						<li>
							<a href="" class="level-2 item">Kino</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="" class="item level-1">Rebríčky</a>
					<span class="buttonExpand"></span>
					<ul>
						<li>
							<a href="" class="level-2 item">Top 200</a>
						</li>
						<li>
							<a href="" class="level-2 item">Najobľúbenejšie</a>
						</li>
						<li>
							<a href="" class="level-2 item">Najlepšie seriály</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="" class="item level-1">Filmy online</a>
					<span class="buttonExpand"></span>
					<ul>
						<li>
							<a href="" class="level-2 item">Filmy Alza</a>
						</li>
						<li>
							<a href="" class="level-2 item">Filmy na DVD</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="" class="item level-1">Fórum</a>
				</li>
			</ul>
		</nav>
	</div>

	<div class="header-search" style="display: none">
		<input class="searchInput" type="text" placeholder="Nájdi filmy, umelcov a viac...">
		<span class="icon-magnify"></span>
	</div>

	<div href="" class="header-user loged-in">
		<span class="header-user-pic" style="background-image: url('data/profil.jpg')">
			<span class="header-msg-warning shadow-2">2</span>
		</span>

		<a href="page-login.php" class="icon-account header-use-loged-out"></a>

		<div class="options-menu shadow-2">
			<div class="content">
				<a href="page-profile.php" class="item prim"><span class="icon icon-email-outline"></span>Správy</a>
					<span class="separator"></span>
				<a href="page-profile.php" class="item"><span class="icon icon-account"></span>Profil</a>
				<a href="page-profile.php" class="item"><span class="icon icon-settings"></span>Nastavenia</a>
					<span class="separator"></span>
				<a href="" class="item logout"><span class="icon icon-power"></span>Odhlásiť</a>
			</div>
		</div>
	</div>

</header> <!-- DOCUMENT HEADER - END-->


<div class="cards-plus top">
	<span class="button circle big icon-plus cards-plus-button tip" title="Pridajte kartu"></span>
	<div class="cards-plus-menu card">
		<div class="content">

			<div class="cards-plus-item ripple news-plus-item" data-card-class="news">
				<span class="icon icon-message-text"></span><h4>Novinky</h4> <span class="icon icon-plus"></span>
			</div>

			<div class="cards-plus-item ripple fav-users-plus-item" data-card-class="fav-users">
				<span class="icon icon-account-multiple"></span><h4>Obľúbení užívatelia</h4> <span class="icon icon-plus"></span>
			</div>

			<div class="cards-plus-item ripple cinema-plus-item" data-card-class="cinema">
				<span class="icon icon-filmstrip"></span><h4>V kinách</h4><span class="icon icon-plus"></span>
			</div>

			<div class="cards-plus-item ripple tips-plus-item" data-card-class="tips">
				<span class="icon icon-check2"></span><h4>Tipy na filmy</h4><span class="icon icon-plus"></span>
			</div>

			<div class="cards-plus-item ripple forum-plus-item" data-card-class="forum">
				<span class="icon icon-forum"></span><h4>Diskusie</h4><span class="icon icon-plus"></span>
			</div>

			<div class="cards-plus-item ripple cnma-theater-plus-item" data-card-class="cnma-theater">
				<span class="icon icon-theater"></span><h4>CNMA naživo</h4><span class="icon icon-plus"></span>
			</div>

			<div class="cards-plus-item ripple other-plus-item" data-card-class="other">
				<span class="icon icon-bookmark"></span><h4>Ostatné</h4><span class="icon icon-plus"></span>
			</div>


		</div>
	</div>
</div> <!-- PLUS CARD END -->



<div id="menu-mobile-cont">

	<div class="header-search">
		<input class="searchInput" type="text" placeholder="Nájdi filmy, umelcov a viac...">
		<span class="icon-magnify"></span>
	</div>

</div>


<div class="master-wrap"> <!-- ENDS AFTER FOOTER !!!!! -->


	<div class="page-overlay"></div>

	<div class="text-widget shadow-4">
		<label><span class="icon-pencil"></span>Napíš, čo máš na srdci</label>
		<textarea class="textarea"></textarea>
		<span class="bar"></span>

		<span class="button login-button send-button ripple">Odoslať&nbsp;&nbsp;<span class="icon-send"></span></span>
		<span class="button button-sec back-button ripple">Späť</span>

	</div>
