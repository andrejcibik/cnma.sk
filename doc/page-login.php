<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<?php
	@include("common/head.php");
?>

<body class="page-login">

	<?php	@include("common/header.php"); ?>

	<div class="body-content">

		<div class="card login-modal">

			<a href="https://www.facebook.com/AndyVanellus" class="button facebook-login big circle icon-facebook tip" target="_blank" title="Prihláste sa cez Facebook."></a>

			<form>
			  <div class="group">
			    <input type="text" class="form"><span class="highlight"></span><span class="bar"></span>
			    <label><span class="icon-account"></span>Prezývka</label>
			  </div>
			  <div class="group">
			    <input type="password" class="form"><span class="highlight"></span><span class="bar"></span>
			    <label><span class="icon-key"></span>Heslo</label>
			  </div>
			  <a href="index.php" class="button login-button ripple">Prihlásiť</a>
			</form>

				<a href="index.php" class="button button-sec ripple">Registrovať</a>
				<br/>
				<a href="index.php" class="button button-sec disabled">Aké mám heslo?</a>

		</div> <!-- LOGIN MODAL - END-->

	</div>	<!-- BODY CONTENT - END-->



	<?php
		@include("common/footer.php");
	?>

</body>
</html>
