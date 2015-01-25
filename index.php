<?php
	date_default_timezone_set('Asia/Taipei');
	
	class developTools{
		private $linkList;
		public function __construct($list){
			foreach($list as $link){
				echo $this->createLink($link);
				echo '<br>';
			}
		}
		private function createLink($link){
			return '<a href="'.$link->path.'">'.$link->name.'</a>';
		}
	}

	if(isset($_GET['develop']) && $_GET['develop'] == 'true'){
			echo '<h1>Develop mode on.</h1>';
			$develop = new developTools(json_decode(file_get_contents('developList.json')));
			//json_decode(file_get_contents('developList.json'))
	}
