<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarouselProducts</title>
	<style>
		*{
			padding-left: 1px;
			margin: 0;
			box-sizing: border-box;
			}
		body{
			font-family: monospace, sans-serif;
		}

		.section-header span{
			color: black;

		}
		.section-header a{
			text-decoration: none;
		}
		.section-header h2{
			font-size: 36px;
		}

		.header-link{
			font-size: 24px;
		}

		.thumb-carousel-item {
			display: grid;
			gap: 1rem;
			grid-auto-flow: column;
			grid-auto-columns: 19%;
			
			overflow-x: auto;
			overscroll-behavior-inline: contain;
		}

		.snaps-inline{
			scroll-snap-type: inline mandatory;
			
		}

		.snaps-inline > *{
			scroll-snap-align: start;
		}

		.image-wrapper img{
			border-radius: 20px;
		}
		.grid-item-wrapper a{
			text-decoration: none;
		}
		.thumbnail-meta  {
			color:black;
			display: grid;
			
			gap: 2%;
			padding: 5px;
			margin-bottom: 10px;
			
			background:scroll;
			box-shadow:
			inset 0 -3em 3em rgba(0, 0, 0, 0.1),
			0 0 0 2px rgb(255, 255, 255),
			0.3em 0.3em 1em rgba(0, 0, 0, 0.3);	

		}
		.thumbnail-meta h4{
			font-size: 20px;
		}
		
		
	</style>
</head>
<body>
<div class="thumb-carousel-wrapper">
	<!--
	<div class="prev arrow" style="">
		<span><img src="img/left-arrow.pn" alt="icon" width="50px" style="display: unset;"></span>
	</div>
	-->
	<div class="section">
		<div class="section-header">
			<h2>
				<a href="#" title=""><span>Apple MacBook</span>
					<img src="img/arrow-right.png" alt="icon">
				</a>
			</h2>
			<a href="#" title="View More" class="header-link view-more"><span>VIEW MORE</span>
				<img src="img/arrow-right.png" alt="icon" width="19px" >
			</a>
		</div>
		<div class="thumb-carousel" id="thumbCarousel1">

			<div class="list draggable">
				<div class="track">
					
				<!-- OVDE POSTAVI PETLJU I PONOVI OVAJ ELEMENT 24 PUTA -->
				<div class="thumb-carousel-item snaps-inline">
				<?php for ($i = 1; $i <=24; $i++) : ?>

				<li>
						<div class="grid-item-wrapper">
							<a href="#" class="thumbnail-link preview-thumb">
								<div class="thumbnail">
									<div class="thumbnail-photo">
										<div class="image-wrapper">
											<img src="https://picsum.photos/id/48/367/267" class="" alt="" ></img>
										</div>
										<div class="thumbnail-overlay">
											<span class="thumbnail-badge"></span>
										</div>

										<div class="info-layer">
											<div class="info-layer-content">
												<span class="info-item date"></span>
											</div>
										</div>
									</div>
									<div class="thumbnail-meta">
										<h4 class="titletruncate">MACBOOK <?php echo " $i" ?></h4>
										<div class="info-items byline">
											<span class="info-item studio-name">
												Apple
											</span>
										</div>
									</div>
								</div>
							</a>
						</div>
					 </li>
					<?php endfor; ?>
					</div>

					
					<!-- KRAJ PHP PETLJE -->

				</div>
			</div>
		</div>
		<!--
			<div class="next arrow" style="">
				<span><img src="img/arrow-right.pn" alt="icon" width="50px"></span>
			</div>
		</div>
				-->
	</div>
</body>
</html>