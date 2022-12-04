<?php
	require_once '../partials/header.php';
	require_once '../partials/nav.php';
	
	require_once '../controller/article_api.php';
	require_once '../controller/methods.php';
	$articles = select();
?>

<main class="container">
  <div class="row">
		<?php foreach(filter($articles,true) as $item): ?>
			<div class="card mb-3" style="max-width: 440px;">
				<div class="row g-0">
					<div class="col-md-4 img-box">
						<img src="./images/4.jpg" class="img-fluid rounded-start">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title">
								<?=$item['title']?>
							</h5>
							<p class="card-text">
								<?=$item['content']?>
							</p>
							<p class="card-text">
								<small class="text-muted">
									<?=$item['date']?>
								</small>
							</p>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach;?>
  </div>
  <?php foreach(filter($articles, false) as $item): ?>
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
	<?php endforeach;?>
</main>

<style>
	.row{
		display:flex;
		justify-content: space-around;
		align-items: center;
	}
	.img-box{
		display:flex;
		justify-content: center;
		align-items: center;
	}
	.card-text{
		overflow:hidden;
		text-overflow:ellipsis;
		-webkit-line-clamp:3;
		display: -webkit-box;
		-webkit-box-orient: vertical;
	}
</style>

<?php require_once '../partials/footer.php';?>