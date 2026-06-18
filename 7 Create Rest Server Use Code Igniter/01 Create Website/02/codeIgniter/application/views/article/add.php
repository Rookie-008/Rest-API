<div class="container">
	
	<div class="row mt-5">
		<div class="col-md-5">

			<div class="card">
			  <div class="card-header">
			    Form Add Data Article
			  </div>
			  <div class="card-body">
				<form action="" method="post">
					<?php if( validation_errors() ) : ?>
						<div class="alert alert-danger" role="alert">
							<?php echo validation_errors(); ?>
						</div>
					<?php endif; ?>
					
					<div class="mb-3">
					  <label for="articleTitle">Article Title</label>
					  <input type="text" name="articleTitle" class="form-control" id="articleTitle">
					</div>

					<div class="mb-3">
					  <label for="dataArticle">Data Article</label>
					  <input type="text" name="dataArticle" class="form-control" id="dataArticle">
					</div>

					<div class="mb-3">
					  <label for="releaseNumber">Release Number</label>
					  <input type="number" name="releaseNumber" class="form-control" id="releaseNumber">
					</div>

					<div class="mb-3">
					  <label for="email">Email</label>
					  <input type="text" name="email" class="form-control" id="email">
					</div>

					<div class="form-group">
						<label for="genre">Genre</label>
						<select class="form-select" aria-label="Default select example" id="genre" name="genre">
						  <option selected>Open this select menu</option>
						  <option value="Romance">Romance</option>
						  <option value="Horror">Horror</option>
						  <option value="Thriller">Thriller</option>
						  <option value="Fantasy">Fantasy</option>
						  <option value="SciFi">SciFi</option>
						  <option value="Comedy">Comedy</option>
						  <option value="Adventure">Adventure</option>
						  <option value="Drama">Drama</option>
						</select>
					</div>

					<button type="submit" name="add" class="btn btn-primary float-end mt-5">Add Data</button>

				</form>
			  </div>
			</div>

		</div>
	</div>

</div>
