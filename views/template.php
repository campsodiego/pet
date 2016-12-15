<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Template</title>
	<link href="<?php echo BASE_URL;  ?>/assets/css/style.css" rel="stylesheet">
</head>
<body>
	<h1>Topo</h1>
	<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	<h1>Rodapé</h1>
</body>
</html>