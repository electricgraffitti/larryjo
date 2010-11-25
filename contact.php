<!DOCTYPE html>
<html>
	<head>
    <?php require_once("views/head/headmeta.php"); ?>
    <?php require_once("views/title.php"); ?>
</head>
	<body>
			<div id="mast_header">
				<div id="header"> 
					<div id="logo">
						<a href="index.php">Home</a>
						<h1>Larry Finn Photography</h1>						
					</div><!-- logo div -->
				</div><!--end header --> 
			</div>
			
			<div id="mast_banner">
				<div id="menu">
				<?php require_once("views/menu.php"); ?>
				</div><!-- menu div -->
				<div id="banner">
					<?php require_once("views/banners/contact_banner.php"); ?>
				</div><!--end of banner-->
			</div><!-- end of mast banner-->
			
			<div id="mast_footer">
				<div id="footer">
					<div id="footer_menu">
						<?php require("views/menu.php"); ?>
					</div><!--footer menu div --> 
					<?php require("views/footer.php"); ?>
				</div><!--end footer-->
			</div><!--end of mast_footer-->
	</body>
</html>