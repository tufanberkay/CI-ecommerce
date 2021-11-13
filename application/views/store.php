<!DOCTYPE HTML>
<html lang="en">

<?php $this->load->view("includes/head"); ?>

<body>


<?php $this->load->view("includes/header"); ?>


<!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg">
<div class="container">
	<h2 class="title-page">Tüm Ürünlerimiz</h2>
	
</div> <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
<div class="container">

<div class="row">
	<aside class="col-md-3">
		
<div class="card">
	<article class="filter-group">
		<header class="card-header">
			<a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
				<i class="icon-control fa fa-chevron-down"></i>
				<h6 class="title">Kategoriler</h6>
			</a>
		</header>
		<div class="filter-content collapse show" id="collapse_1" style="">
			<div class="card-body">
				
				<ul class="list-menu">
				<li><a href="#">People  </a></li>
				<li><a href="#">Watches </a></li>
				<li><a href="#">Cinema  </a></li>
				<li><a href="#">Clothes  </a></li>
				<li><a href="#">Home items </a></li>
				<li><a href="#">Animals</a></li>
				<li><a href="#">People </a></li>
				</ul>

			</div> <!-- card-body.// -->
		</div>
	</article> <!-- filter-group  .// -->

	
	<article class="filter-group">
		<header class="card-header">
			<a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true" class="">
				<i class="icon-control fa fa-chevron-down"></i>
				<h6 class="title">Fiyat aralığı </h6>
			</a>
		</header>
		<div class="filter-content collapse show" id="collapse_3" style="">
			<div class="card-body">
				
				<div class="form-row">
				<div class="form-group col-md-6">
				  <label>Min</label>
				  <!-- <input class="form-control" placeholder="$0" type="number"> -->
				  	<select class="mr-2 form-control">
						<option value="0">$0</option>
						<option value="50">$50</option>
						<option value="100">$100</option>
						<option value="150">$150</option>
						<option value="200">$200</option>
						<option value="500">$500</option>
						<option value="1000">$1000</option>
					</select>
				</div>
				<div class="form-group text-right col-md-6">
				  <label>Max</label>
				  	<select class="mr-2 form-control">
						<option value="50">$50</option>
						<option value="100">$100</option>
						<option value="150">$150</option>
						<option value="200">$200</option>
						<option value="500">$500</option>
						<option value="1000">$1000</option>
						<option value="2000">$2000+</option>
					</select>
				</div>
				</div> <!-- form-row.// -->
				<button class="btn btn-block btn-primary">Filtrele</button>
			</div><!-- card-body.// -->
		</div>
	</article> <!-- filter-group .// -->
	
</div> <!-- card.// -->

	</aside> <!-- col.// -->
	<main class="col-md-9">

<header class="border-bottom mb-4 pb-3">
		<div class="form-inline">
			<span class="mr-md-auto">32 Ürün Bulundu </span>
			
		</div>
</header><!-- sect-heading -->

<div class="row">
	<div class="col-md-4">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
				
				<img src="assets/images/items/1.jpg">
				
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
				<div class="fix-height">
					<a href="./product_detail" class="title">Great item name goes here</a>
					<div class="price-wrap mt-2">
						<span class="price">$1280</span>
						<del class="price-old">$1980</del>
					</div> <!-- price-wrap.// -->
				</div>
				<a href="#" class="btn btn-block btn-success">Added to cart </a>
			</figcaption>
		</figure>
	</div> <!-- col.// -->

	<div class="col-md-4">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
				<img src="assets/images/items/2.jpg">
				
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
				<div class="fix-height">
					<a href="./product_detail" class="title">Product name goes here just for demo item</a>
					<div class="price-wrap mt-2">
						<span class="price">$1280</span>
					</div> <!-- price-wrap.// -->
				</div>
				<a href="#" class="btn btn-block btn-primary">Add to cart </a>	
			</figcaption>
		</figure>
	</div> <!-- col.// -->

	<div class="col-md-4">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
				<img src="assets/images/items/3.jpg">
				
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
				<div class="fix-height">
					<a href="./product_detail" class="title">Product name goes here just for demo item</a>
					<div class="price-wrap mt-2">
						<span class="price">$1280</span>
					</div> <!-- price-wrap.// -->
				</div>
				<a href="#" class="btn btn-block btn-primary">Add to cart </a>	
			</figcaption>
		</figure>
	</div> <!-- col.// -->

	<div class="col-md-4">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
				<img src="assets/images/items/4.jpg">
				
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
				<div class="fix-height">
					<a href="./product_detail" class="title">Product name goes here just for demo item</a>
					<div class="price-wrap mt-2">
						<span class="price">$1280</span>
					</div> <!-- price-wrap.// -->
				</div>
				<a href="#" class="btn btn-block btn-primary">Add to cart </a>	
			</figcaption>
		</figure>
	</div> <!-- col.// -->

	<div class="col-md-4">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
				<img src="assets/images/items/5.jpg">
				
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
				<div class="fix-height">
					<a href="./product_detail" class="title">Product name goes here just for demo item</a>
					<div class="price-wrap mt-2">
						<span class="price">$1280</span>
					</div> <!-- price-wrap.// -->
				</div>
				<a href="#" class="btn btn-block btn-primary">Add to cart </a>	
			</figcaption>
		</figure>
	</div> <!-- col.// -->

	<div class="col-md-4">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
				<img src="assets/images/items/6.jpg">
				
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
				<div class="fix-height">
					<a href="./product_detail" class="title">Product name goes here just for demo item</a>
					<div class="price-wrap mt-2">
						<span class="price">$1280</span>
					</div> <!-- price-wrap.// -->
				</div>
				<a href="#" class="btn btn-block btn-primary">Add to cart </a>	
			</figcaption>
		</figure>
	</div> <!-- col.// -->

	<div class="col-md-4">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
				<img src="assets/images/items/7.jpg">
				
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
				<div class="fix-height">
					<a href="./product_detail" class="title">Product name goes here just for demo item</a>
					<div class="price-wrap mt-2">
						<span class="price">$1280</span>
					</div> <!-- price-wrap.// -->
				</div>
				<a href="#" class="btn btn-block btn-primary">Add to cart </a>	
			</figcaption>
		</figure>
	</div> <!-- col.// -->

	<div class="col-md-4">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
				<img src="assets/images/items/1.jpg">
				
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
				<div class="fix-height">
					<a href="./product_detail" class="title">Product name goes here just for demo item</a>
					<div class="price-wrap mt-2">
						<span class="price">$1280</span>
					</div> <!-- price-wrap.// -->
				</div>
				<a href="#" class="btn btn-block btn-primary">Add to cart </a>	
			</figcaption>
		</figure>
	</div> <!-- col.// -->
</div> <!-- row end.// -->


<nav class="mt-4" aria-label="Page navigation sample">
  <ul class="pagination">
    <li class="page-item disabled"><a class="page-link" href="#">Önceki</a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Sonraki</a></li>
  </ul>
</nav>

	</main> <!-- col.// -->

</div>

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->


<?php $this->load->view("includes/footer2"); ?>



</body>
</html>