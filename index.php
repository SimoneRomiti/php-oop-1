<?php

	include 'database.php';

	class Book{

		public $title;
		public $author;
		public $year;
		public $plot;

		public function __construct($constrTitle, $constrAuthor, $constrYear, $constrPlot) {
			$this->title = $constrTitle;
			$this->author = $constrAuthor;
			$this->year = $constrYear;
			$this->plot = $constrPlot;
		}

	}

	foreach ($data as $libro) {
		$book = new Book($libro['title'], $libro['author'], $libro['year'], $libro['plot']);
		$arrayObj[] = $book;
	}
	
	var_dump($arrayObj);

?>