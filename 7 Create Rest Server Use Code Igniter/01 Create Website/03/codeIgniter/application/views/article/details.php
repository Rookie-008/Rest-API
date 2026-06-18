<div class="container">
	<div class="row mt-5">
		<div class="col-md-5">
			
			<div class="card">
			  <h5 class="card-header">Details Data Article</h5>
			  <div class="card-body">
			    <h5 class="card-title"><?php echo $article2['articleTitle']; ?></h5>
			    <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $article2['dataArticle']; ?></h6>
			    <p class="card-text"><?php echo $article2['releaseNumber']; ?></p>
			    <p class="card-text"><?php echo $article2['email']; ?></p>
			    <p class="card-text"><?php echo $article2['genre']; ?></p>
			    <a href="<?php echo base_url() ?>article" class="btn btn-primary">Back To Article</a>
			  </div>
			</div>

		</div>
	</div>
</div>