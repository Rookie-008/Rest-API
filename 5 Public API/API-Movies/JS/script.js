function searchMovies() {
	$('#movie-list').html('');

	$.ajax({
		type: 'get',
		url: 'http://omdbapi.com',
		dataType: 'json',
		data: {
			'apikey': '352d2c5a',
			's': $('#search-input').val()
		},
		success: function (result) {
			// Show JSON Object
			//console.log(result);

			if ( result.Response == "True" ) {
				// Show JSON Object
				let movies = result.Search;
				//console.log(movies);

				$.each(movies, function (i, data){
					$('#movie-list').append(`
						<div class="col-md-5">
							<div class="card mb-5">
								<img src="`+ data.Poster +`" class="card-img-top" alt="...">
								<div class="card-body">
								  	<h5 class="card-title">`+ data.Title +`</h5>
									<h6 class="card-subtitle mb-2 text-body-secondary">` + data.Year + `</h6>
								  	<a href="#" class="card-link see-details" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="`+ data.imdbID +`">See Details</a>
								</div>
							</div>
						</div>
					`);
				});

				$('#search-input').val('');

			} else {
				// Show Error Message
				//$('#movie-list').html('<h1 class="text-center">Movie Not Found!</h1>')
				//$('#movie-list').html('<h1 class="text-center">' + result.Error + '</h1>')
				
				$('#movie-list').html(`
					<div class="col">
						<h1 class="text-center">` + result.Error + `</h1>
					</div>
				`)
			}
		}
	});
};


$('#search-button').on('click', function () {
	
	searchMovies();	

});


$('#search-input').on('keyup', function (event) {
	// Cara 1 --> which
	if (event.which === 13) {
		searchMovies();
	};

	// Cara 2 --> keyCode
	//if (event.keyCode === 13) {
	//	searchMovies();
	//};
});


$('#movie-list').on('click', '.see-details', function () {
	// Check Data ID 
	//console.log($(this).data('id'));

	$.ajax({
		type: 'get',
		url: 'http://omdbapi.com',
		dataType: 'json',
		data: {
			'apikey': '352d2c5a',
			'i': $(this).data('id')
		},
		success: function (movie) {
			if( movie.Response === "True" ) {

				$('.modal-body').html(`
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-5">
								<img src="`+ movie.Poster +`" class="img-fluid">
							</div>

							<div class="col-md-10">
								<ul class="list-group">
									<li class="list-group-item"><h3>`+ movie.Title +`</h3></li>
									<li class="list-group-item"> Released : `+ movie.Released +`</li>
									<li class="list-group-item"> Genre : `+ movie.Genre +`</li>
									<li class="list-group-item"> Director : `+ movie.Director +`</li>
									<li class="list-group-item"> Actor : `+ movie.Actor +`</li>
								</ul>
							</div>
						</div>
					</div>
				`);

			}
		}
	});

});