<?php 

class controller{
	
	public function loadview($viewName, $viewData = array())	{
		extract($viewData);
		include 'views/'.$viewName.'.php';
	}

	public function loadTemplate($viewName, $viewData = array()){
		include 'views/template.php';
	}

	public function loadViewInTemplate($viewName, $viewData = array()){
		extract($viewData);
		include 'views/'.$viewName.'.php';
	}

	public function verifica_login()
	{
		if(!empty($_SESSION['logado']))
		{
			return true;
		}
		else
		{
			return false;

			// redirecionar para pagina de login
		}

		
	}
}
?>