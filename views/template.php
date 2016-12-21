<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Template</title>
	<link href="<?php echo BASE_URL;  ?>/assets/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo BASE_URL;  ?>/assets/css/style.css" rel="stylesheet">
</head>
<body>

	<section class="header">
		<nav class="navbar navbar-default navbar-custom">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="<?php echo BASE_URL;  ?>">Pet<span>SHOP</span></a>
		    </div>
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="<?php echo BASE_URL;  ?>/anuncios/lista_anuncio">Anuncios <span class="sr-only">(current)</span></a></li>
		        <li><a href="<?php echo BASE_URL;  ?>/banner/lista_banner">Banners</a></li>
		      </ul>
		      <a href="<?php echo BASE_URL;  ?>/login/login" id="login"><span class="glyphicon glyphicon-user"></span></a>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container -->
		</nav>
	</section>

	<section class="body">
		<div class="container container-custom">
			<div class="row">
					
				<div class="col-md-12" id="body">
					<?php $this->loadViewInTemplate($viewName, $viewData); ?>
				</div>
			</div>
		</div>
	</section>
	
	<div class="footer">
		<div class="container">
			Desenvolvido por Diego Rodrigues Campos 
			<br/><br/><br/><br/><br/><br/>
		</div>
	</div>




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="<?php echo BASE_URL;  ?>/assets/js/bootstrap.js"></script>
	<script src="<?php echo BASE_URL;  ?>/assets/js/customScritp.js"></script>
</body>
</html>