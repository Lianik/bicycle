<?php
// move to bootstrap
include 'tplBike.php';
class View
{
	
	public $template_view = 'template_view.php';

	function generate($content_view, $template_view, $data = null)
	{
		$tplBike = new tplBike();
		var_dump($data);
		//TODO Implement template engine
		$test = array(
			'sitename' => "Truesite.com",
			'title' => "Ololoevka",
			'content' => "Contentovka",
		);
		$html = $tplBike->render($template_view, $test);
		print $html;

	}
}
