<?php 
  require_once './partials/header.php';
	require_once './partials/nav.php';
	require_once './data/article.php';
?>

<main class="container">
	<?php foreach($articles as $item): ?>
		<article class="blog-post">
			<h2 class="blog-post-title mb-1">
				<?=$item['title']?>
			</h2>
			<p class="blog-post-meta">
				<?=$item['date']?>
				<a href="./"><?=$item['author']?></a>
			</p>
			<p><?=$item['content']?></p>
		</article>
	<?php endforeach; ?>
</main>

<?php require_once './partials/footer.php';?>