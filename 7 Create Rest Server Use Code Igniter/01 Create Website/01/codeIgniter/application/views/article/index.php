<!-- <?php var_dump($article2); ?> -->

<div class="container">
	
	<div class="row">
		<div class="col-md-5">
			<h1>ARTICLE COLLECTION</h1>
			
			<ul class="list-group">
				<?php foreach ( $article2 as $dbArticle ) : ?>
					<li class="list-group-item"><?php echo $dbArticle['articleTitle']; ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

</div>