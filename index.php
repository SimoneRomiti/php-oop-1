<?php

	include 'database.php';

	class Book{

		// ATTRIBUTI
		public $title;
		public $author;
		public $year;
		public $plot;
		public $discount = 0;

		// COSTRUTTORE: una volta dichiarata dentro la classe, appena creo un oggetto della classe, l'oggetto stesso richiama automaticamente la funzione costruttore. $this è l'oggetto che richiama la funzione
		public function __construct($constrTitle, $constrAuthor, $constrYear, $constrPlot) {
			$this->title = $constrTitle;
			$this->author = $constrAuthor;
			$this->year = $constrYear;
			$this->plot = $constrPlot;
		}

		// METODO: $this è uguale all'oggetto che richiama la funzione, se ho un oggetto della classe Book che si chiama $pluto e faccio $pluto->setDiscount(...) in quel caso $this->discount = 40 significa $pluto->discount = 40
		public function setDiscount($num){
			if($num < 1980){
				$this->discount = 40;
			}
		}
	}

	// Ciclo su array database e per ogni elemento presente nell'array genero un oggetto istanza della classe Book al quale applico la funzione per applicargli lo sconto oppure no e lo pusho dentro un nuovo array per creare un array contenente tutti gli oggetti della classe Book
	foreach ($data as $libro) {
		$book = new Book($libro['title'], $libro['author'], $libro['year'], $libro['plot']);
		$book->setDiscount($book->year);
		$arrayObj[] = $book;
	}
	
	var_dump($arrayObj);

?>