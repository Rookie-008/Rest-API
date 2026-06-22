<div class="container">
	
	<div class="row mt-5">
		<div class="col-md-5">

			<div class="card">
			  <div class="card-header">
			    Form Change Data Article
			  </div>

			  <div class="card-body">
				<form action="" method="post">
				<!-- 	<?php if( validation_errors() ) : ?>
						<div class="alert alert-danger" role="alert">
							<?php echo validation_errors(); ?>
						</div>
					<?php endif; ?> -->

					<input type="hidden" name="id" value="<?php echo $article2['id']; ?>">

					<div class="mb-3">
					  <label for="articleTitle">Article Title</label>
					  <input type="text" name="articleTitle" class="form-control" id="articleTitle" value="<?php echo $article2['articleTitle']; ?>">
					  <div class="form-text text-danger"><?php echo form_error('articleTitle'); ?></div>
					</div>

					<div class="mb-3">
					  <label for="dataArticle">Data Article</label>
					  <input type="text" name="dataArticle" class="form-control" id="dataArticle" value="<?php echo $article2['dataArticle']; ?>">
					  <div class="form-text text-danger"><?php echo form_error('dataArticle'); ?></div>
					</div>

					<div class="mb-3">
					  <label for="releaseNumber">Release Number</label>
					  <input type="number" name="releaseNumber" class="form-control" id="releaseNumber" value="<?php echo $article2['releaseNumber']; ?>">
					  <div class="form-text text-danger"><?php echo form_error('releaseNumber'); ?></div>
					</div>

					<div class="mb-3">
					  <label for="email">Email</label>
					  <input type="text" name="email" class="form-control" id="email" value="<?php echo $article2['email']; ?>">
					  <div class="form-text text-danger"><?php echo form_error('email'); ?></div>
					</div>

					<div class="form-group">
						<label for="genre">Genre</label>
						<select class="form-select" aria-label="Default select example" id="genre" name="genre" value="<?php echo $article2['genre']; ?>">

							<?php foreach( $genre as $dbGenre ) : ?>
								<?php if( $dbGenre == $article2['genre'] ) : ?>
									<option value="<?php echo $dbGenre; ?>" selected><?php echo $dbGenre; ?></option>
								<?php else : ?>
									<option value="<?php echo $dbGenre; ?>"><?php echo $dbGenre; ?></option>
								<?php endif; ?>
							<?php endforeach; ?>

						</select>
					</div>
					
					<button type="submit" name="change" class="btn btn-primary float-end mt-5">Change Data</button>

				</form>
			  </div>
			</div>

		</div>
	</div>	

</div>