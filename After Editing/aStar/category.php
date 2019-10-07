<!DOCTYPE html>
<html lang="en">
<head>
<title>Categories</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="aStar Fashion Template Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.3/bootstrap.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/categories.css">
<link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  //z-index: 60; /* Sit on top */
  padding-top: 100px; /* Location of the box */
    
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>

<body>

<div class="super_container">

	<!-- Header -->
	<?php 
	include 'header.php';
	
	//include 'include/index_card_layout.php';
	?>


	<!-- Products -->

	<div class="products">

		<!-- Sorting & Filtering -->
		<div class="products_bar">
			<div class="section_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="products_bar_content d-flex flex-column flex-xxl-row align-items-start align-items-xxl-center justify-content-start">
								<div class="product_categories">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li class="active"><a href="#">All</a></li>
										<li><a href="#">Hot Products</a></li>
										<li><a href="#">New Products</a></li>
										<li><a href="#">Sale Products</a></li>
									</ul>
								</div>
								<div class="products_bar_side ml-xxl-auto d-flex flex-row align-items-center justify-content-start">
									<div class="products_dropdown product_dropdown_sorting">
										<div class="isotope_sorting_text"><span>Default Sorting</span><i class="fa fa-caret-down" aria-hidden="true"></i></div>
										<ul>
											<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'>Default</li>
											<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "price" }'>Price</li>
											<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "name" }'>Name</li>
										</ul>
									</div>
									<div class="product_view d-flex flex-row align-items-center justify-content-start">
										<div class="view_item active"><img src="images/view_1.png" alt=""></div>
										<div class="view_item"><img src="images/view_2.png" alt=""></div>
										<div class="view_item"><img src="images/view_3.png" alt=""></div>
									</div>
									<div class="products_dropdown text-right product_dropdown_filter">
										<div class="isotope_filter_text"><span>Filter</span><i class="fa fa-caret-down" aria-hidden="true"></i></div>
										<ul>
											<li class="item_filter_btn" data-filter="*">All</li>
											<li class="item_filter_btn" data-filter=".hot">Hot</li>
											<li class="item_filter_btn" data-filter=".new">New</li>
											<li class="item_filter_btn" data-filter=".sale">Sale</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="products_container grid">
							
							<!-- Product -->
							<div class="product grid-item hot"  productid="123" id="pro">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/product_1.jpg" alt="">
										<div class="product_tag">hot</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html" id="title">long red shirt</a></div>
										<div class="product_price">$39.90</div>
										<div class="product_button ml-auto mr-auto trans_200"><a id="myBtn" href="#"><span>Know More</span></a></div>
										<div class="product_button ml-auto mr-auto trans_200"><a id="getpro" onclick="javascript: order();" href="#"><span>WhatsApp Us</span></a></div>
									</div>
								</div>	
							</div>

							<!-- Product -->
<!--
							<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image"><img src="images/product_2.jpg" alt=""></div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">hype grey shirt</a></div>
										<div class="product_price">$19.50</div>
										<div class="product_button ml-auto mr-auto trans_200"><a id="getpro" onclick="javascript: order();" href="#"><span>Know More</span></a></div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#"><span>WhatsApp Us</span></a></div>
									</div>
								</div>	
							</div>
-->

							<!-- Product -->
						

							<!-- Product -->
<!--
							<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/product_4.jpg" alt="">
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">denim men shirt</a></div>
										<div class="product_price">$59.90</div>
										<div class="product_button ml-auto mr-auto trans_200"><a id="getpro" onclick="javascript: order();" href="#"><span>Know More</span></a></div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#"><span>WhatsApp Us</span></a></div>
									</div>
								</div>	
							</div>
-->

							<!-- Product -->
<!--
							<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/product_5.jpg" alt="">
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">long red shirt</a></div>
										<div class="product_price">$79.90</div>
										<div class="product_button ml-auto mr-auto trans_200"><a id="getpro" onclick="javascript: order();" href="#"><span>Know More</span></a></div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#"><span>WhatsApp Us</span></a></div>
									</div>
								</div>	
							</div>
-->

							<!-- Product -->
<!--
							<div class="product grid-item new">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/product_6.jpg" alt="">
										<div class="product_tag">new</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">hype grey shirt</a></div>
										<div class="product_price">$59.90</div>
										<div class="product_button ml-auto mr-auto trans_200"><a id="getpro" onclick="javascript: order();" href="#"><span>Know More</span></a></div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#"><span>WhatsApp Us</span></a></div>
									</div>
								</div>	
							</div>
-->

							<!-- Product -->
<!--
							<div class="product grid-item hot">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/product_13.jpg" alt="">
										<div class="product_tag">hot</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">long red shirt</a></div>
										<div class="product_price">$39.90</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#"><span>WhatsApp Us</span></a></div>
									</div>
								</div>	
							</div>

							 Product 
							<div class="product grid-item new">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/product_14.jpg" alt="">
										<div class="product_tag">new</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">hype grey shirt</a></div>
										<div class="product_price">$19.50</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#"><span>WhatsApp Us</span></a></div>
									</div>
								</div>	
							</div>
-->

							<!-- Product -->
							

							<!-- Product -->
							

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div id="content"><h1 style="text-align:center;" id="content_title"></h1>
    <div class="row">
        <div class="col-4">
			<img class="img-responsive" id="product_pic" src = "" alt="">
		</div>
		<div class="col-2"></div>
		<div class="col-6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam saepe sint soluta libero provident corrupti magnam ut esse temporibus veniam. Harum perferendis rem alias dolores ipsum minima nulla, atque voluptatum.</div>
    </div>
    </div>
  </div>

</div>


	<!-- Newsletter -->

	
	<!-- Footer -->


<?php  
	include 'footer.php';
?>
	
</div>

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
<script src="js/categories.js"></script>
<script src="js/whatsapp.js"></script>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
 modal.style.display = "block";
     var x=document.getElementById("myBtn").parentNode.parentNode;

    var y=x.children[0].innerHTML;
	
    
  document.getElementById("content_title").innerHTML = y;
    
	var pic = x.parentNode.children[0].children[0].src;
	document.getElementById("product_pic").src = pic;
	//console.log(pic);
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>