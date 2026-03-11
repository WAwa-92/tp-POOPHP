<?php

require_once 'classes/Book.php';
require_once 'classes/Magazine.php';
require_once 'classes/Library.php';

try {
	// instanciation de la librairie
	$library = new Library();

	// création des items à afficher
	$book1 = new Book('Harry Potter à l\'école des sorciers', 'J. K. Rowling', '1H.webp', 320);
	$book2 = new Book('Harry Potter et la Chambre des secrets', 'J. K. Rowling', '2H.webp', 368);
	$book3 = new Book('Harry Potter et le Prisonnier d\'Azkaban', 'J. K. Rowling', '3H.webp', 448);
	$book4 = new Book('Harry Potter et la Coupe de feu', 'J. K. Rowling', '4H.webp', 736);

	// ajout des items à la librairie
	$library->addItem($book1);
	$library->addItem($book2);
	$library->addItem($book3);
	$library->addItem($book4);

	// récupération des items pour affichage
	$items = $library->getItems();
} catch (Throwable $error) {
	echo '<h2>Erreur : ' . htmlspecialchars($error->getMessage(), ENT_QUOTES, 'UTF-8') . '</h2>';
	exit;
}

?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TP Library</title>
	<style>
		body {
			margin: 0;
			font-family: Arial, sans-serif;
			background: #f5f5f7;
			color: #1f2937;
		}

		.container {
			max-width: 980px;
			margin: 30px auto;
			padding: 0 16px;
		}

		h1 {
			margin-bottom: 24px;
		}

		.grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
			gap: 16px;
		}

		.card {
			background: #ffffff;
			border-radius: 10px;
			box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
			overflow: hidden;
		}

		.card img {
			width: 100%;
			height: 220px;
			object-fit: cover;
			display: block;
			background: #e5e7eb;
		}

		.content {
			padding: 12px;
		}

		.title {
			margin: 0 0 8px;
			font-size: 1.1rem;
		}

		.text {
			margin: 4px 0;
		}
	</style>
</head>
<body>
	<main class="container">
		<h1>Bibliothèque (<?= Library::getTotalItems(); ?> items)</h1>

		<section class="grid">
			<?php foreach ($items as $item) : ?>
				<article class="card">
					<img
						src="images/<?= htmlspecialchars($item->getCoverImage(), ENT_QUOTES, 'UTF-8'); ?>"
						alt="Couverture de <?= htmlspecialchars($item->getTitle(), ENT_QUOTES, 'UTF-8'); ?>"
					>
					<div class="content">
						<h2 class="title"><?= htmlspecialchars($item->getTitle(), ENT_QUOTES, 'UTF-8'); ?></h2>
						<p class="text">Auteur : <?= htmlspecialchars($item->getAuthor(), ENT_QUOTES, 'UTF-8'); ?></p>
						<p class="text"><?= htmlspecialchars($item->getInfo(), ENT_QUOTES, 'UTF-8'); ?></p>
					</div>
				</article>
			<?php endforeach; ?>
		</section>
	</main>
</body>
</html>
