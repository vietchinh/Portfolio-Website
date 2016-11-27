<?php
#this is gzip compression, just to make things a bit faster.
ob_start("ob_gzhandler");
?>
<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<title>home page</title>
			<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
			<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="css/grid.css">
			<script src="jquery-3.1.1.min.js"></script>
			<?php require_once "array-content.php"; session_start() ?>
		</head>
		<body>
			<div class="row">
				<div class="column-20">
					<div class="profileicon-section">
						<img src="img/temp.png" class="profile-icon" />
							<h3>Vietchinh Pham</h3>
							<p align="center">
							<?php
								echo $randomtext[mt_rand(0, (count($randomtext) - 1) )];
							?>
							</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="column-20">
					<div class="menu-buttons-section">
						<?php
							while (current($content)){
								$contentkey = key($content);
								echo "<button onclick='{$content[$contentkey][1]}();' >{$contentkey}</button>";
								next($content);
							}
							reset($content);
						?>
					</div>
				</div>
			</div>
			<div class="row">
				<?php
					while (current($content)){
						$contentkey = key($content);
						echo "
						<div id='{$content[$contentkey][1]}'> 
							{$content[$contentkey][0]}
						</div>";
						next($content);
					}
					reset($content);
				?>
			</div>
		<?php require_once "javascript.php"; ?>
		</body>
	</html>
	