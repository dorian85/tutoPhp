<?php
	require_once "model.php";
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Tuto Blog</title>
		<link rel="stylesheet" type="text/css" href="reset.css">
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="articles-list">
				<?php foreach ($articles as $article) : ?>
				<article>
					<h1><?php echo $article->getTitle(); ?></h1>
					<div class="meta-data">
						<span class="category">Catégorie : <?php echo $article->getCategory(); ?></span> -
						<span class="creation-date">Date : <?php echo $article->getCreatedAt(); ?></span> -
						<span class="author">Auteur : <?php echo $article->getAuthor(); ?></span>
					</div>
					<p><?php echo $article->getContent(); ?></p>
				</article>
			<?php endforeach; ?>
			</div>
		</div>
	</body>
</html>