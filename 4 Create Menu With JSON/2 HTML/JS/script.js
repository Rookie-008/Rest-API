function showAllMenu() {
    $.getJSON('data/traditionalFood.json', function(data) {
    // Cara 1 : Menampilkan Data
    //console.log(data);
    
    // Cara 2 : Menampilkan Data
    let menu = data.menu;
    //console.log(menu);
    
    // Cara 3 : Menampilkan Data
    $.each(menu, function (i, data) {
        // Check Index dan Data
        //console.log(i);
        //console.log(data);
        
            $('#daftar-menu').append('<div class="col-md-4"><div class="card mb-3"><img src="img/menu/' + data.image + '" class="card-img-top" width="120"><div class="card-body"><h5 class="card-title">' + data.nameProduct + '</h5><p class="card-text">' + data.description + '</p><a href="#" class="btn btn-primary">Pesan Sekarang</a><h5 class="card-title">Rp.' + data.price + '</h5></div></div></div>');
        });
    });
}

showAllMenu();


$.getJSON('data/traditionalFood.json', function(data) {
    // Cara 1 : Menampilkan Data
    //console.log(data);
    
    // Cara 2 : Menampilkan Data
    let menu = data.menu;
    //console.log(menu);
    
    // Cara 3 : Menampilkan Data
    $.each(menu, function (i, data) {
        // Check Index dan Data
        //console.log(i);
        //console.log(data);
        
        $('#daftar-menu').append('<div class="col-md-4"><div class="card mb-3"><img src="img/menu/' + data.image + '" class="card-img-top" width="120"><div class="card-body"><h5 class="card-title">' + data.nameProduct + '</h5><p class="card-text">' + data.description + '</p><a href="#" class="btn btn-primary">Pesan Sekarang</a><h5 class="card-title">Rp.' + data.price + '</h5></div></div></div>');
    });
});


$('.nav-link').on('click', function () {
    $('.nav-link').removeClass('active');
    $(this).addClass('active')
    
    let category = $(this).html();
    // Check Inspect Element Console
    //console.log(category);
    
    $('h1').html(category);
    
    if( category == 'All Menu' ) {
        showAllMenu();
        return;
    }
    
    $.getJSON('data/traditionalFood.json', function (data) {
        let menu = data.menu;
        let content = '';
        
        $.each(menu, function (i, data) {
            if (data.category == category.toLowerCase()) {
                content += '<div class="col-md-4"><div class="card mb-3"><img src="img/menu/' + data.image + '" class="card-img-top" width="120"><div class="card-body"><h5 class="card-title">' + data.nameProduct + '</h5><p class="card-text">' + data.description + '</p><a href="#" class="btn btn-primary">Pesan Sekarang</a><h5 class="card-title">Rp.' + data.price + '</h5></div></div></div>'
            }
        });
        
        $('#daftar-menu').html(content);
    });
});
   
