<!DOCTYPE HTML>
<html lang="en">

<?php $this->load->view("includes/head"); ?>

<body>


<?php $this->load->view("includes/header"); ?>


<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">

<!-- ============================ COMPONENT REGISTER   ================================= -->
	<div class="card mx-auto" style="max-width:520px; margin-top:40px;">
      <article class="card-body">
		<header class="mb-4"><h4 class="card-title">Üye Ol</h4></header>
		<form>
				<div class="form-row">
					<div class="col form-group">
						<label>İsim</label>
					  	<input type="text" class="form-control" placeholder="">
					</div> <!-- form-group end.// -->
					<div class="col form-group">
						<label>Soyisim</label>
					  	<input type="text" class="form-control" placeholder="">
					</div> <!-- form-group end.// -->
				</div> <!-- form-row end.// -->
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" placeholder="">
					<small class="form-text text-muted">Mail adresiniz asla üçüncü şahısla paylaşılmayacaktır.</small>
				</div> <!-- form-group end.// -->
				<div class="form-group">
					<label class="custom-control custom-radio custom-control-inline">
					  <input class="custom-control-input" checked="" type="radio" name="gender" value="option1">
					  <span class="custom-control-label"> Erkek </span>
					</label>
					<label class="custom-control custom-radio custom-control-inline">
					  <input class="custom-control-input" type="radio" name="gender" value="option2">
					  <span class="custom-control-label"> Kadın </span>
					</label>
				</div> <!-- form-group end.// -->
				<div class="form-row">
					<div class="form-group col-md-6">
					  <label>Eyalet</label>
					  <input type="text" class="form-control">
					</div> <!-- form-group end.// -->
					<div class="form-group col-md-6">
					  <label>Ülke</label>
					  <select id="inputState" class="form-control">
					      <option selected="">Çin</option>
					  </select>
					</div> <!-- form-group end.// -->
				</div> <!-- form-row.// -->
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Şifre</label>
					    <input class="form-control" type="password">
					</div> <!-- form-group end.// --> 
					<div class="form-group col-md-6">
						<label>Şifre Tekrar</label>
					    <input class="form-control" type="password">
					</div> <!-- form-group end.// -->  
				</div>
			    <div class="form-group">
			        <button type="submit" class="btn btn-primary btn-block"> Kayıt Ol  </button>
			    </div> <!-- form-group// -->      
			        
			</form>
		</article><!-- card-body.// -->
    </div> <!-- card .// -->
    <p class="text-center mt-4"> Zaten bir hesabınız var mı? <a href="./signin">Giriş Yap</a></p>
    <br><br>
<!-- ============================ COMPONENT REGISTER  END.// ================================= -->


</section>
<!-- ========================= SECTION CONTENT END// ========================= -->


<?php $this->load->view("includes/footer2"); ?>


</body>
</html>