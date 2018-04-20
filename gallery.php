<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>3D Gallery with CSS3 and jQuery</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="3D Gallery with CSS3 and jQuery" />
        <meta name="keywords" content="3d, gallery, jquery, css3, auto, slideshow, navigate, mouse scroll, perspective" />
        <meta name="author" content="Codrops" />
        <!-- <link rel="stylesheet" type="text/css" href="assets/dist/3dgallery/css/demo.css" /> -->
        <link rel="stylesheet" type="text/css" href="assets/dist/3dgallery/css/style.css" />
		<script type="text/javascript" src="assets/dist/3dgallery/js/modernizr.custom.53451.js"></script>
    </head>
    <body>
        <!-- <div class="container"> -->
			<!-- Codrops top bar -->


			<section id="dg-container" class="dg-container" style="margin-top: 40px">
				<div class="dg-wrapper">
					<a href="#" class="dg-center"><div>http://www.colazionedamichy.it/</div><img src="assets/images/thai modern hous/TIVE-EX-แบบที่-4.jpg"></a>
					<a href="#" class="dg-center"><img src="assets/images/thai modern house type 02/TIVE-EX2.jpg" alt="image02" ><div>http://www.percivalclo.com/</div></a>
					<a href="#" class="dg-center"><img src="assets/images/thai modern hous/TIVE-EX-แบบที่-4.jpg" alt="image03"><div>http://www.wanda.net/fr</div></a>
					<a href="#" class="dg-center"><img src="assets/images/thai modern house type 02/TIVE-EX2.jpg" alt="image04"><div>http://lifeingreenville.com/</div></a>
					<a href="#" class="dg-center"><img src="assets/images/thai modern hous/TIVE-EX-แบบที่-4.jpg" alt="image05"><div>http://circlemeetups.com/</div></a>
					<a href="#" class="dg-center"><img src="assets/images/thai modern house type 02/TIVE-EX2.jpg" alt="image06"><div>http://www.castirondesign.com/</div></a>
					<a href="#" class="dg-center"><img src="assets/images/thai modern hous/TIVE-EX-แบบที่-4.jpg" alt="image07"><div>http://www.foundrycollective.com/</div></a>

				</div>
				<nav>	
					<span class="dg-prev">&lt;</span>
					<span class="dg-next">&gt;</span>
				</nav>
			</section>
        <!-- </div> -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="assets/dist/3dgallery/js/jquery.gallery.js"></script>
		<script type="text/javascript">
			$(function() {
				$('#dg-container').gallery();
			});
		</script>
    </body>
</html>