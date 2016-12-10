<?php 

class controller{
	
	public function loadview($viewName, $viewData = array())	{
		extract($viewData);
		include 'views/'.$viewName.'.php';
	}
}
?>