<header id="document-header" class="shadow-2">
	<a href="index.php" class="logo">
		<img src="images/logo.svg" onerror="this.onerror=null;this.src='images/logo.png';" title="Úvod">
	</a>

	<nav class="menu-main">
		<ul class="menu-cont">
			<li>
				<a href="" class="item level-1">Novinky</a>
			</li>
			<li>
				<a href="" class="item level-1">Videá</a>
			</li>
			<li>
				<a href="" class="item level-1">Programy</a>
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

	<div class="header-search">
		<input class="searchInput" type="text" placeholder="Nájdi filmy, seriály, umelcov a viac...">
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

<div class="page-overlay"></div>

<div class="text-widget shadow-4">
	<label><span class="icon-pencil"></span>Napíš, čo máš na srdci</label>
	<textarea class="textarea"></textarea>
	<span class="bar"></span>

	<span class="button login-button send-button ripple">Odoslať&nbsp;&nbsp;<span class="icon-send"></span></span>
	<span class="button button-sec back-button ripple">Späť</span>

</div>
