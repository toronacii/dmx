<?php include 'partials/header.html' ?>

<div id="carousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel" data-slide-to="0" class="active"></li>
		<li data-target="#carousel" data-slide-to="1"></li>
		<li data-target="#carousel" data-slide-to="2"></li>
		<li data-target="#carousel" data-slide-to="3"></li>
		<li data-target="#carousel" data-slide-to="4"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img src="images/carousel/00.jpg" class="img-responsive" alt="00">
		</div>
		<div class="item">
			<img src="images/carousel/01.jpg" class="img-responsive" alt="01">
		</div>
		<div class="item">
			<img src="images/carousel/02.jpg" class="img-responsive" alt="02">
		</div>
		<div class="item">
			<img src="images/carousel/03.jpg" class="img-responsive" alt="03">
		</div>
		<div class="item">
			<img src="images/carousel/04.jpg" class="img-responsive" alt="04">
		</div>
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<?php include 'partials/footer.html' ?>
