<?php

	include 'database.php';

	class Book{

		public $title;
		public $author;
		public $year;
		public $plot;
		public $discount = 0;

		public function __construct($constrTitle, $constrAuthor, $constrYear, $constrPlot) {
			$this->title = $constrTitle;
			$this->author = $constrAuthor;
			$this->year = $constrYear;
			$this->plot = $constrPlot;
		}

		public function setDiscount($num){
			if($num < 1980){
				$this->discount = 40;
			}
		}
	}


	foreach ($data as $libro) {
		$book = new Book($libro['title'], $libro['author'], $libro['year'], $libro['plot']);
		$arrayObj[] = $book;
	}

		foreach ($arrayObj as $obj) {
			$obj->setDiscount($obj->year);
		}
	
	var_dump($arrayObj);

?>