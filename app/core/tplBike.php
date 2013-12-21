<?php

class tplBike
{
	function render($tpl, $data)
	{
		if (is_array($data)) {
			$data['url'] = "http://" . $_SERVER['HTTP_HOST'];
			$file_path = 'app/tpl/' . $tpl;
			if (file_exists($file_path)) {
				$html = file_get_contents($file_path);
				foreach ($data as $key => $value) {
					$html = str_replace('{' . $key . '}', $value, $html);
				}
				return $html;
			}
		}
	}
}
