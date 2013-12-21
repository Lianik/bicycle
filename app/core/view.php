<?php

class View
{
	
	public $template = 'template_view.php';

	function generate($template, $data = null)
	{
		$tplBike = new tplBike();
		$html = $tplBike->render($template, $data);
		
		print $html;
	}
}
