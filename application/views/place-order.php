<!DOCTYPE HTML>

<?php $this->load->view("includes/head"); ?>

<body>


<?php $this->load->view("includes/header"); ?>


<section class="section-content padding-y bg">
<div class="container">



<!-- ============================ COMPONENT 2 ================================= -->
<div class="row">
		<main class="col-md-8">

<article class="card mb-4">
<div class="card-body">
	<h4 class="card-title mb-4">Sepet İnceleme</h4>
	<div class="row">
		<div class="col-md-6">
			<figure class="itemside  mb-4">
				<div class="aside"><img src="././assets/images/items/1.jpg" class="border img-sm"></div>
				<figcaption class="info">
					<p>Apple iPad (2019) 32Gb Wi-Fi gold </p>
					<span class="text-muted">2x = $560 </span>
				</figcaption>
			</figure>
		</div> <!-- col.// -->
		<div class="col-md-6">
			<figure class="itemside  mb-4">
				<div class="aside"><img src="././assets//images/items/2.jpg" class="border img-sm"></div>
				<figcaption class="info">
					<p>Apple iPad (2019) 32Gb Wi-Fi gold </p>
					<span class="text-muted">2x = $560 </span>
				</figcaption>
			</figure>
		</div> <!-- col.// -->
		<div class="col-md-6">
			<figure class="itemside mb-4">
				<div class="aside"><img src="././assets//images/items/3.jpg" class="border img-sm"></div>
				<figcaption class="info">
					<p>Apple iPad (2019) 32Gb Wi-Fi gold </p>
					<span class="text-muted">2x = $560 </span>
				</figcaption>
			</figure>
		</div> <!-- col.// -->
		<div class="col-md-6">
			<figure class="itemside  mb-4">
				<div class="aside"><img src="././assets//images/items/4.jpg" class="border img-sm"></div>
				<figcaption class="info">
					<p>Apple iPad (2019) 32Gb Wi-Fi gold </p>
					<span class="text-muted">2x = $560 </span>
				</figcaption>
			</figure>
		</div> <!-- col.// -->
	</div> <!-- row.// -->
</div> <!-- card-body.// -->
</article> <!-- card.// -->


<article class="card mb-4">
<div class="card-body">
	<h4 class="card-title mb-4">İletişim Bilgileri</h4>
	<form action="">
		<div class="row">
			<div class="form-group col-sm-6">
				<label>İsim</label>
				<input type="text" placeholder="" class="form-control">
			</div>
			<div class="form-group col-sm-6">
				<label>Soyisim</label>
				<input type="text" placeholder="" class="form-control">
			</div>
			<div class="form-group col-sm-6">
				<label>Telefon Numarası</label>
				<input type="text" value="+998" class="form-control">
			</div>
			<div class="form-group col-sm-6">
				<label>Email</label>
				<input type="email" placeholder="example@gmail.com" class="form-control">
			</div>
		</div> <!-- row.// -->	
	</form>
</div> <!-- card-body.// -->
</article> <!-- card.// -->


<article class="card mb-4">
<div class="card-body">
	<h4 class="card-title mb-4">Teslimat Bilgileri</h4>
	<form action="">
			

		<div class="row">
				<div class="form-group col-sm-6">
					<label>Ülke*</label>
					<select name="" class="form-control">
						<option value="">Çin</option>
					</select>
				</div>
				<div class="form-group col-sm-6">
					<label>Eyalet*</label>
					<input type="text" placeholder="" class="form-control">
				</div>
				<div class="form-group col-sm-8">
					<label>Sokak*</label>
					<input type="text" placeholder="" class="form-control">
				</div>
				<div class="form-group col-sm-4">
					<label>Bina</label>
					<input type="text" placeholder="" class="form-control">
				</div>
				<div class="form-group col-sm-4">
					<label>Kat</label>
					<input type="text" placeholder="" class="form-control">
				</div>
				<div class="form-group col-sm-4">
					<label>Daire</label>
					<input type="text" placeholder="" class="form-control">
				</div>
				<div class="form-group col-sm-4">
					<label>Zip</label>
					<input type="text" placeholder="" class="form-control">
				</div>
            <div class="form-group col-sm-12">
					<label>Adres Tarifi</label>
					<textarea style="height: 150px;" type="text" placeholder="" class="form-control"></textarea>
				</div>
		</div> <!-- row.// -->	
	</form>
</div> <!-- card-body.// -->
</article> <!-- card.// -->


<article class="accordion" id="accordion_pay">
	<div class="card">
		<header class="card-header">
			<img src="././assets//images/misc/wechatpay.png" class="float-right" height="24">
			<label class="form-check collapsed" data-toggle="collapse" data-target="#pay_paynet">
				<input class="form-check-input" name="payment-option" checked type="radio" value="option2">
				<h6 class="form-check-label"> 
					WeChatPay
				</h6>
			</label>
		</header>
		<div id="pay_paynet" class="collapse show" data-parent="#accordion_pay">
		<div class="card-body">
			<p class="text-center text-muted">Connect your PayPal account and use it to pay your bills. You'll be redirected to PayPal to add your billing information.</p>
			<p class="text-center">
				<a href="#"><img style="box-sizing:content-box; padding: 10px 30px; background-color: #FFC100; border-radius: 30px" src="././assets//images/misc/wechatpay.png" height="32"></a>
				<br><br>
			</p>
		</div> <!-- card body .// -->
		</div> <!-- collapse .// -->
	</div> <!-- card.// -->
	<div class="card">
	</div> <!-- card.// -->
	
</article> 
<!-- accordion end.// -->
  
		</main> <!-- col.// -->
		<aside class="col-md-4">
			<div class="card">
		<div class="card-body">
			<dl class="dlist-align">
			  <dt>Toplam Fiyat:</dt>
			  <dd class="text-right">$69.97</dd>
			</dl>
			<dl class="dlist-align">
			  <dt>Vergi:</dt>
			  <dd class="text-right"> $10.00</dd>
			</dl>
			<dl class="dlist-align">
			  <dt>Toplam:</dt>
			  <dd class="text-right text-dark b"><strong>$59.97</strong></dd>
			</dl>
			<hr>
			<p class="text-center mb-3">
				<img src="././assets//images/misc/wechatpay.png" height="26">
			</p>
			<a href="./place-order.php" class="btn btn-primary btn-block"> Sipariş Ver </a>
			
		</div> <!-- card-body.// -->
		</div> <!-- card.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->

<!-- ============================ COMPONENT 2 END//  ================================= -->




</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->


<!-- ========================= SECTION CONTENT END// ========================= -->
</body>
</html>