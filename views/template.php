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
	<div class="container">
		<div class="row">
			<h1>Topo</h1>
			<?php $this->loadViewInTemplate($viewName, $viewData); ?>
			<h1>Rodapé</h1>
		</div>
	</div>




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="<?php echo BASE_URL;  ?>/assets/js/bootstrap.js"></script>
</body>
</html>