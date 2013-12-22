<?php

class Model_Main extends Model
{
	
	public function get_data()
	{	
		$data = array(
			'title' => 'Workers List',
			'sitename' => 'bicycle.com',
		);
		$max_items = 3;
		$from = 0;
		$to = $max_items;
		if (isset($_GET['page']) && is_numeric($_GET['page'])) {
			$to = $max_items * $_GET['page'];
			$from = $to - $max_items;
		}
		global $db_conf;
		$db = new PDO($db_conf['db_url'], $db_conf['user'], $db_conf['pass']);
		try {
			$query = "SELECT * FROM employees ORDER BY eid LIMIT " . $from . ", " . $to;
		    $stmt = $db->query($query);
			$db_result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		} catch(PDOException $ex) {
		    echo $ex->getMessage();
		    die();
		}

		$tplBike = new tplBike();
		$table_data['head'] = "<th>ID</th><th>ФИО</th><th>Специализация</th>";
		$table_data['content'] = $this->prepare_table_data($db_result);
		$data['content'] = $tplBike->render('table_view.php', $table_data);

		$count = $db->query("SELECT COUNT(eid) AS count FROM employees")->fetch();
		if ($count['count'] > $max_items) {
			$data['content'] .= $this->prepare_pager($max_items, $count['count']);
		}
 		
		return $data;
	}


	/**
	 * Prepares data for the table body.
	 * TODO Move to another class for reusage.
	 * TODO Implement theming for tables
	 */
	function prepare_table_data($db_result) {
		$html = "";
		foreach ($db_result as $key => $value) {
			$html .= "<tr><td>" . implode("</td><td>", $value) . "</td></tr>";
		}
		return $html;
	}


	/**
	 * Prepares pager markup
	 * TODO Make reusable and move to another class
	 * TODO Implemet theming for list
	 */
	function prepare_pager($max, $count = 1) {
		$page = (isset($_GET['page']) ? $_GET['page'] : 1);
		$pages = ceil($count / $max);
		$html = '<div class="item-list"><ul class="pager">';
		for ($i=1; $i <= $pages; $i++) { 
			$class = ($i == $page ? 'active' : 'inactive' );
			$html .= '<li><a href="/?page=' . $i . '" class="' . $class . '">' . $i . '</a></li>';
		}
		$html .= '</ul></div>';

		return $html;
	}

}
