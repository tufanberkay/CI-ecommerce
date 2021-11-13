<!DOCTYPE HTML>
<html lang="en">

<?php $this->load->view("includes/head"); ?>

<body>


<?php $this->load->view("includes/header"); ?>


<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-conten padding-y" style="min-height:84vh">

<!-- ============================ COMPONENT LOGIN   ================================= -->
	<div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
      <div class="card-body">
      <h4 class="card-title mb-4">Giriş Yap</h4>
      <form>
          <div class="form-group">
			 <input type="email" class="form-control" placeholder="Email Adresi" >
          </div> <!-- form-group// -->
          <div class="form-group">
			<input type="password" class="form-control" placeholder="Şifre" >
          </div> <!-- form-group// -->
          
          <div class="form-group">
          	<a href="#" class="float-right">Şifremi unuttum</a>
           
          </div> <!-- form-group form-check .// -->
          <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block"> Giriş  </button>
          </div> <!-- form-group// -->    
      </form>
      </div> <!-- card-body.// -->
    </div> <!-- card .// -->

     <p class="text-center mt-4"> Hala hesabınız yok mu? <a href="./register">Üye Ol</a></p>
     <br><br>
<!-- ============================ COMPONENT LOGIN  END.// ================================= -->


</section>
<!-- ========================= SECTION CONTENT END// ========================= -->


<?php $this->load->view("includes/footer2"); ?>

</body>
</html>