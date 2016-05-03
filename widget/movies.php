<div class="card narrow movies" id="online-movies">
	<div class="card-title">
		<div class="card-icon icon-play-circle-outline"></div>
		<a href=""><h2>Filmy online</h2></a>
		<div class="card-settings ripple"><span class="icon-dots-vertical"></span></div>
		<div class="card-settings-menu shadow-2">
			<div class="content">
				<a href="" class="settings-item"><span class="icon icon-share"></span>Všetky filmy online</a>
			</div>
		</div>
	</div>

	<div class="slider-movies-wrap">
		<?php @include('include/slider-movies-s2.php'); ?>
	</div>

</div> <!-- ONLINE MOVIES END -->

<div class="card narrow movies" id="dvd-movies">
	<div class="card-title">
		<div class="card-icon icon-cart"></div>
		<a href=""><h2>Filmy na DVD</h2></a>
		<div class="card-settings ripple"><span class="icon-dots-vertical"></span></div>
		<div class="card-settings-menu shadow-2">
			<div class="content">
				<a href="" class="settings-item"><span class="icon icon-share"></span>Všetky filmy na DVD</a>
			</div>
		</div>
	</div>
	<div class="slider-movies-wrap">
		<?php @include('include/slider-movies-s3.php'); ?>
	</div>
</div> <!-- ONLINE MOVIES END -->
