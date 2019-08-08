<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="aStar Fashion Template Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.3/bootstrap.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <link rel="stylesheet" href="styles/index_cardlayout.css">
    <title>shop</title>
</head>

<body>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap-4.1.3/popper.js"></script>
    <script src="styles/bootstrap-4.1.3/bootstrap.min.js"></script>
    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script src="plugins/greensock/TimelineMax.min.js"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="plugins/greensock/animation.gsap.min.js"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="plugins/Isotope/isotope.pkgd.min.js"></script>
    <script src="plugins/Isotope/fitcolumns.js"></script>
    <script src="js/custom.js"></script>

    <div class="super_container">
        <?php 
            include 'header.php';
//            include 'include/index_banner.php';
        ?>
        <br>
        <div class="boxes">
		<div class="section_container">
			<div class="container">
				<div class="row">
					
					<!-- Box -->
					<div class="col-lg-4 box_col">
						<div class="box">
							<div class="box_image"><img src="images/box_1.jpg" alt=""></div>
							<div class="box_title trans_200"><a href="categories.html">summer collection</a></div>
						</div>
					</div>

					<!-- Box -->
					<div class="col-lg-4 box_col">
						<div class="box">
							<div class="box_image"><img src="images/box_2.jpg" alt=""></div>
							<div class="box_title trans_200"><a href="categories.html">eyewear collection</a></div>
						</div>
					</div>

					<!-- Box -->
					<div class="col-lg-4 box_col">
						<div class="box">
							<div class="box_image"><img src="images/box_3.jpg" alt=""></div>
							<div class="box_title trans_200"><a href="categories.html">basic pieces</a></div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Categories -->

	<div class="categories">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="categories_list_container">
							<ul class="categories_list d-flex flex-row align-items-center justify-content-start">
								<li><a href="categories.html">new arrivals</a></li>
								<li><a href="categories.html">recommended</a></li>
								<li><a href="categories.html">best sellers</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Products -->

	<div class="products">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="products_container grid">
							
							<!-- Product -->
							<div class="product grid-item hot">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/product_1.jpg" alt="">
										<div class="product_tag">hot</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">long red shirt</a></div>
										<div class="product_price">$39.90</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>

							<!-- Product -->
							<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image"><img src="images/product_2.jpg" alt=""></div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">hype grey shirt</a></div>
										<div class="product_price">$19.50</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>

							<!-- Product -->
							<div class="product grid-item sale">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/product_3.jpg" alt="">
										<div class="product_tag">sale</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">long sleeve jacket</a></div>
										<div class="product_price">$32.20<span>RRP 64.40</span></div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>

							<!-- Product -->
							<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/product_4.jpg" alt="">
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">denim men shirt</a></div>
										<div class="product_price">$59.90</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>

							<!-- Product -->
							<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/product_5.jpg" alt="">
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">long red shirt</a></div>
										<div class="product_price">$79.90</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>

							<!-- Product -->
							<div class="product grid-item new">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/product_6.jpg" alt="">
										<div class="product_tag">new</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">hype grey shirt</a></div>
										<div class="product_price">$59.90</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>

							<!-- Product -->
							<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/product_7.jpg" alt="">
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">long sleeve jacket</a></div>
										<div class="product_price">$15.90</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>

							<!-- Product -->
							<div class="product grid-item sale">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/product_8.jpg" alt="">
										<div class="product_tag">sale</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">denim men shirt</a></div>
										<div class="product_price">$43.99<span>RRP 64.40</span></div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
        
        <br>
        <?php
            include 'footer.php';
        ?>

    </div>
</body>

</html>
