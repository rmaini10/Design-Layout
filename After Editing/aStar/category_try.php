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
<link rel="stylesheet" href="styles/category_try.css">
<link rel="stylesheet" href="styles/share.css">
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

<!--new-->

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
  <items>
  <div class="row">
<div class="card" productid="123" class="col-md-4">
  <div class="cardheader">
    <div class="rating">
      <p><i class="fas fa-star"></i> 3.9</p>
    </div>
    <div class="price">
      <p>$ 21</p>
    </div>
  </div>

  <div class="imgbox">
    <img src="http://cliqq.co.uk/wp-content/uploads/2014/11/WIne-Bottle.jpg" alt="winebottle">
  </div>

  <h3>Wine Bottle</h3>

  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

  <button class="btn_1" id ="myBtn">Details</button>
  <button class="btn_2" onclick="order()" id ="btn_whatsapp">WhatsApp Us</button>
</div>
<div class="card" productid="123" class="col-md-4">
  <div class="cardheader">
    <div class="rating">
      <p><i class="fas fa-star"></i> 3.9</p>
    </div>
    <div class="price">
      <p>$ 21</p>
    </div>
  </div>

  <div class="imgbox">
    <img src="http://cliqq.co.uk/wp-content/uploads/2014/11/WIne-Bottle.jpg" alt="winebottle">
  </div>

  <h3>Wine Bottle</h3>

  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

  <button class="btn_1" id ="myBtn">Details</button>
  <button class="btn_2" onclick="order()" id ="btn_whatsapp">WhatsApp Us</button>
</div>
<div class="card" productid="123" class="col-md-4">
  <div class="cardheader">
    <div class="rating">
      <p><i class="fas fa-star"></i> 3.9</p>
    </div>
    <div class="price">
      <p>$ 21</p>
    </div>
  </div>

  <div class="imgbox">
    <img src="http://cliqq.co.uk/wp-content/uploads/2014/11/WIne-Bottle.jpg" alt="winebottle">
  </div>

  <h3>Wine Bottle</h3>

  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

  <button class="btn_1" id ="myBtn">Details</button>
  <button class="btn_2" onclick="order()" id ="btn_whatsapp">WhatsApp Us</button>
</div>
</div>
	</items>
		
	</div>
    <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content container">
        <span class="close">&times;</span>
        <div class="row">
        <div class="col-10" id="content"><h1 style="text-align:center;" id="content_title"></h1>
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <img class="img-responsive" width="100%" height="100%" id="product_pic" src = "" alt="">
                </div>
               
				<div class="col-sm-4 col-md-4">
					<ul>
					<li>Product Id : <h3 id ="pro_id"></h3></li>
					<li>Price : <h3 id ="pro_price"></h3></li>
					<li id="pro_desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel optio tempore illo ullam, est culpa hic aut explicabo, dolore accusantium facilis perferendis, nam at expedita voluptatem dicta unde error molestias?</li>	
					</ul>
					<button id ="whatsapp" onclick ="whatsapp()" class="btn btn-success btn-lg">WhatsApp Us</button>
				
				</div>
				
            </div>
        </div>
        <div class="col-2" id="share" class="col-sm-2 col-md-2">
                <span class="share">Share</span>
                <i class="line"></i>
                <a href="#" class="icons">Twitter</a>
                <a href="#" class="icons">Facebook</a>
                <a href="#" class="icons">Mail</a>
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
 /* modal.style.display = "block";
     var x=document.getElementById("myBtn").parentNode.parentNode;
    var y=x.children[0].innerHTML;
	
    
  document.getElementById("content_title").innerHTML = y;
    
	var pic = x.parentNode.children[0].children[0].src;
	document.getElementById("product_pic").src = pic;
	//console.log(pic); */
	modal.style.display = "block";
	var x=document.getElementById("myBtn");
	var title = x.parentNode.children[2].innerHTML;
	document.getElementById("content_title").innerHTML = title;
var pic =x.parentNode.children[1].children[0].src;
document.getElementById("product_pic").src = pic;
var id =x.parentNode.getAttribute("productid");
	/* console.log(id); */
var rate = x.parentNode.children[0].children[1].children[0].innerHTML;
	
	document.getElementById("pro_price").innerHTML = rate;
	
	document.getElementById("pro_id").innerHTML = id;
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