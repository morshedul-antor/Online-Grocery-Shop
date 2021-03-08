   <div class="main main-raised">
        <div class="container mainn-raised" style="width:100%;">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/1.jpg" alt="Dhaka" style="width:100%;">
      </div>
      <!-- <div class="item">
        <img src="img/2.jpg" style="width:100%;">
      </div> -->
      <!-- <div class="item">
        <img src="img/4.jpg" alt="Dhaka" style="width:100%;">
      </div> -->
      <!-- <div class="item">
        <img src="img/5.jpg" alt="Dhaka" style="width:100%;">
      </div> -->
      <div class="item">
        <img src="img/3.jpg" alt="Dhaka" style="width:100%;">
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control _26sdfg" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only" >Previous</span>
    </a>
    <a class="right carousel-control _26sdfg" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Fruits and Vegetable</a></li>
									<li><a data-toggle="tab" href="#tab1">Baking Needs</a></li>
									<li><a data-toggle="tab" href="#tab1">Beverage</a></li>
									<li><a data-toggle="tab" href="#tab1">Cooking Needs</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->
					<!-- Products tab & slick -->
					<div class="col-md-12 mainn mainn-raised">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1" >
									<?php
                    // connecting database
                    include 'db.php';
                // showing new product
					      $product_query = "SELECT * FROM products,categories WHERE product_cat = cat_id AND product_id BETWEEN 70 AND 75";
                $run_query = mysqli_query($con,$product_query);
                if (mysqli_num_rows($run_query) > 0) {
                  // fetching
                    while ($row = mysqli_fetch_array($run_query)) {
                        $pro_id = $row['product_id'];
                        $pro_cat = $row['product_cat'];
                        $pro_brand = $row['product_brand'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_image = $row['product_image'];
                        $cat_name = $row["cat_title"];
                        echo "
								<div class='product'>
									<a href='product.php?p=$pro_id'><div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
										<div class='product-label'>
											<span class='sale'>-30%</span>
											<span class='new'>NEW</span>
										</div>
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_price<del class='product-old-price'></del></h4>
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
										<div class='product-btns'>
											<button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
											<button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
											<button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>
										</div>
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
									</div>
								</div>
			";
		}
        ;
}
?>
										<!-- product -->
										<!-- /product -->
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section mainn mainn-raised">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Days</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Hours</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Secs</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">hot deal this week</h2>
							<p>New Collection Up to 50% OFF</p>
							<a class="primary-btn cta-btn" href="store.php">Shop now</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top selling</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab2">Bread and Bakery</a></li>
									<li><a data-toggle="tab" href="#tab2">Frozen and Canneds</a></li>
									<li><a data-toggle="tab" href="#tab2">Diabetic Foods</a></li>
									<li><a data-toggle="tab" href="#tab2">Cooking Needs</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->
					<!-- Products tab & slick -->
					<div class="col-md-12 mainn mainn-raised">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										<?php
                    // connecting database
                    include 'db.php';
                // showing top selling    
					      $product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 59 AND 65";
                $run_query = mysqli_query($con,$product_query);
                if (mysqli_num_rows($run_query) > 0) {
                    while ($row = mysqli_fetch_array($run_query)) {
                        $pro_id = $row['product_id'];
                        $pro_cat = $row['product_cat'];
                        $pro_brand = $row['product_brand'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_image = $row['product_image'];
                        $cat_name = $row["cat_title"];
                        echo "
								<div class='product'>
									<a href='product.php?p=$pro_id'><div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
										<div class='product-label'>
											<span class='sale'>-30%</span>
											<span class='new'>NEW</span>
										</div>
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_price<del class='product-old-price'></del></h4>
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
										<div class='product-btns'>
											<button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
											<button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
											<button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>
										</div>
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
									</div>
								</div>
			";
		}
        ;
}
?>
										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>
						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div id="get_product_home">
								<!-- product widget -->
								<!-- product widget -->
							</div>
							<div id="get_product_home2">
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/p28.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">SNAKS</p>
										<h3 class="product-name"><a href="#">CATBERY DAIRY MILK</a></h3>
										<h4 class="product-price">100<del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- /product widget -->
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/p71.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">BAVERAGES</p>
										<h3 class="product-name"><a href="#">HORLICKS JAR</a></h3>
										<h4 class="product-price">300<del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- /product widget -->
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/p59.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">COOKING NEEDS</p>
										<h3 class="product-name"><a href="#">PRAN CHINIGURA RICE</a></h3>
										<h4 class="product-price">235<del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>
						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/p35.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">DAIRY</p>
										<h3 class="product-name"><a href="#">CHEESE</a></h3>
										<h4 class="product-price">150<del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- /product widget -->
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/p47.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">BREAD AND BAKERY</p>
										<h3 class="product-name"><a href="#">ALL TIME BUTTER BUN</a></h3>
										<h4 class="product-price">20<del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- /product widget -->
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/p31.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">DAIRY</p>
										<h3 class="product-name"><a href="#">EGG</a></h3>
										<h4 class="product-price">120<del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/p20.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">MEAT AND FISH</p>
										<h3 class="product-name"><a href="#">COW LIVER</a></h3>
										<h4 class="product-price">800<del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- /product widget -->
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/p17.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">MEAT AND FISH</p>
										<h3 class="product-name"><a href="#">WHOLE BROILER CHICKEN</a></h3>
										<h4 class="product-price">170<del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- /product widget -->
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/p16.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">MEAT AND FISH</p>
										<h3 class="product-name"><a href="#">BEEF REGULAR</a></h3>
										<h4 class="product-price">600<del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>
					<div class="clearfix visible-sm visible-xs">
					</div>
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>
						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/p25.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">MEAT AND FISH</p>
										<h3 class="product-name"><a href="#">RUI FISH</a></h3>
										<h4 class="product-price">800<del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- /product widget -->
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/p11.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">BAVERAGES</p>
										<h3 class="product-name"><a href="#">ISPAHANI MIRJAPUR TEA</a></h3>
										<h4 class="product-price">210<del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- /product widget -->
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/p7.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">FRUITS AND VEGETABLES</p>
										<h3 class="product-name"><a href="#">ONION</a></h3>
										<h4 class="product-price">80<del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/p6.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">FRUITS AND VEGETABLES</p>
										<h3 class="product-name"><a href="#">POTATO</a></h3>
										<h4 class="product-price">31<del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- /product widget -->
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/p61.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">COOKING NEEDS</p>
										<h3 class="product-name"><a href="#">PRAN MANGO PICKLE</a></h3>
										<h4 class="product-price">135<del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- /product widget -->
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/p53.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">BAKING NEEDS</p>
										<h3 class="product-name"><a href="#">BASUNDHARA ATA</a></h3>
										<h4 class="product-price">70<del class="product-old-price"></del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
</div>
