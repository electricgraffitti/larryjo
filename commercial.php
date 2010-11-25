<!DOCTYPE html>
<html>
    <head>
      <?php require_once("views/head/headmeta.php"); ?>
	    <?php require_once("views/title.php"); ?>
    </head>
	<body>
	  <div id="wrapper">
				<div id="mast_header">
  				<div id="header"> 
						<div id="logo">
							<a href="index.php">Home</a>
							<h1>Larry Finn Photography</h1>						
						</div><!-- logo div -->
  				</div><!--end header --> 
 				</div>
				
					<div id="menu">
					<?php require_once("views/menu.php"); ?>
					</div><!-- menu div -->
      		<div id="banner">
      		  <?php require_once("views/banners/commercial_banner.php");?>
      		</div>


				
				<div id="mast_footer">
					<div id="footer">
						<div id="footer_menu">
							<?php require("views/menu.php"); ?>
						</div><!--footer menu div --> 
						<?php require("views/footer.php"); ?>
						
 					</div><!--end footer-->
				</div><!--end of mast_footer-->
		</div>

    <?php require_once("views/javascripts.php"); ?>
    <script src="public/javascripts/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
    <script src="public/javascripts/application.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
    		$(document).ready(function(){
    			$("a[rel^='prettyPhoto']").prettyPhoto();
    		});
    	</script>
    	
	</body>
</html>