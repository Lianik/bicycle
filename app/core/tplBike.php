<?php

class tplBike
{
	
	function render($tpl, $data)
	{
		if (is_array($data)) {
			$file_path = 'app/views/' . $tpl;
			if (file_exists($file_path)) {
				$pre_html = file_get_contents($file_path);
				$html = $pre_html;
				foreach ($data as $key => $value) {
					$html = str_replace('{' . $key . '}', $value, $html);
				}
				return $html;
			}
		}
	}
}
