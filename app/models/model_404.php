<?php

class Model_404 extends Model
{
	
	public function get_data()
	{	
		$data = array(
			'title' => 'Not Found',
			'sitename' => 'bicycle.com',
			'content' => '<h1>404! Nothing to do here, little bastard!</h1>',
		);
 		
		return $data;
	}
}
