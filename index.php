<?php

require_once 'classes/Book.php';
require_once 'classes/Magazine.php';
require_once 'classes/Library.php';

try {
	// instanciation de la librairie
	$library = new Library();

	// création des items à afficher
	$bookHarryOne = new Book('Harry Potter à l\'école des sorciers', 'J. K. Rowling', '1H.webp', 320);
	$bookHarryTwo = new Book('Harry Potter et la Chambre des secrets', 'J. K. Rowling', '2H.webp', 368);
	$magazineVogue = new Magazine('Vogue', 'Condé Nast', 'vogue.webp', 42);
	$magazineFader  = new Magazine('Fader', 'Fader Media', 'fader.webp', 118);

	// ajout des items à la librairie
	$library->addItem($bookHarryOne);
	$library->addItem($bookHarryTwo);
	$library->addItem($magazineVogue);
	$library->addItem($magazineFader);
	$items = $library->getItems();
} catch (Exception $error) {
	echo '<h2>Erreur : ' . htmlspecialchars($error->getMessage()) . '</h2>';
	exit;
}

require 'views/library.phtml';
