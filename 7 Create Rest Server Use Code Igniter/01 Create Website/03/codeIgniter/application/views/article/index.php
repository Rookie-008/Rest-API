<!-- <?php var_dump($article2); ?> -->

<div class="container">
	<?php if( $this->session->flashdata() ) : ?>
		<div class="row mt-5">
			<div class="col-md-5">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					Data Article <strong>Success!</strong> <?php echo $this->session->flashdata('flash'); ?>.
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<div class="row mt-5 mb-5">
		<div class="col-md-5">
			<a href="<?php echo base_url(); ?>article/add" class="btn btn-primary">Add Data Article</a>
		</div>
	</div>

	<div class="row mt-5">
		<div class="col-md-5">
			<form action="" method="post">
				<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="Search Article..." name="keyword">
				  <button class="input-group-text btn btn-primary" type="submit">Search</button>
				</div>
			</form>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-5">
			<h1>ARTICLE COLLECTION</h1>

			<?php if( empty($article2) ) : ?>
				<div class="alert alert-danger" role="alert">
				  Data Article Is Not Found!
				</div>
			<?php endif; ?>
			
			<ul class="list-group">
				<?php foreach ( $article2 as $dbArticle ) : ?>
					<li class="list-group-item">
						<?php echo $dbArticle['articleTitle']; ?>
						<a href="<?php echo base_url(); ?>article/delete/<?php echo $dbArticle['id']; ?>" class="badge bg-danger float-end" onclick="return confirm('Do You Want Delete The Data?');">Delete</a>

						<a href="<?php echo base_url(); ?>article/change/<?php echo $dbArticle['id']; ?>" class="badge bg-success float-end">Change</a>

						<a href="<?php echo base_url(); ?>article/details/<?php echo $dbArticle['id']; ?>" class="badge bg-primary float-end">Details</a>	
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

</div>