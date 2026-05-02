<?php  

  function get_CURL($url){

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    // curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);

    return json_decode($result, true);
    // var_dump($result);
  }

    $result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistic&id=tYmHguvTskR&key=AiHytfDmyTsDc-ytRfghIkjh');

    $youtubeProfilePicture = $result ['items'][0]['snippet']['thumbnails']['medium']['url'];
    $channelName = $result ['items'][0]['snippet']['title'];
    $subscriber = $result ['items'][0]['statistics']['subscriberCount'];


  // LATEST VIDEO
    $urlLatestVideo = 'https://www.googleapis.com/youtube/v3/search?key=AiHytfDmyTsDc-ytRfghIkjh&channelId=tYmHguvTskR&maxResults=1&order=date&part=snippet';

    $result = get_CURL($urlLatestVideo);
    $latestVideoId = $result['items'][0]['id']['videoId'];


  // Instagram API
    $clientId = 'j8yq5gfcdzu9oewqa';
    $accessToken = '6032143.jnfdqw.gr5flsr0';

    $result = get_CURL('https:://api.instagram.com/v1/user/self?access_token=6032143.jnfdqw.gr5flsr0');

    $usernameIG = $result['data']['username'];
    $profilePictureIG = $result['data']['profile_picture'];
    $followersIG = $result['data']['counts']['followed_by'];

  // LATEST INSTAGRAM POST
    $result = get_CURL('https:://api.instagram.com/v1/user/self/media/recent/?access_token=6032143.jnfdqw.gr5flsr0&count=6');

    $photos = [];
    foreach ($result['data'] as $photo) {
      $photos[] = $photo['image']['thumbnail']['url'];
    }

    // var_dump($photos);


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CREATE CSS -->
    <style>
      section {
        min-height: 400px;
      }
    </style>

    <!-- CSS USE LINK -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->


    <title>Create Portfolio</title>
  </head>
  <body>

    <nav class="navbar fixed navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Portfolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="#">About</a>
            <a class="nav-link" href="#">Portfolio</a>
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact</a>
          </div>
        </div>
      </div>
    </nav>


    <div class="jumbotron jumbotron-fluid bg-light mb-4 pb-5">
      <div class="container text-center">
        <img src="img/profile1.png" width="25%" class="rounded-circle img-thumbnail mt-5">
        <!-- <img src="img/profile1.png" width="300" class="rounded-circle"> -->
        <h1 class="display-4">Create Portfolio</h1>
        <p class="lead">Selamat Datang, Selamat Bertugas</p>
      </div>
    </div>


    <!-- ABOUT -->
    <section id="about" class="about">
    <div class="container">
      <div class="row mb-5">
        <div class="col text-center">
          <h2>About</h2>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-5 text-center">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-5 text-center">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
    </section>


    <!-- SOCIAL MEDIA : YOUTUBE & INSTAGRAM-->
    <section class="social bg-light" id="social">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Social Media</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-4">
                <img src="img/profile1.png" width="200" class="rounded-circle img-thumbnail">
              </div>
              <div class="col-md-8">
                <h5>Learn API</h5>
                <p>1000 Subscribers.</p>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tyYgHmKlp?rel=0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-4">
                <img src="img/profile1.png" width="200" class="rounded-circle img-thumbnail">
              </div>
              <div class="col-md-8">
                <h5>@rookie</h5>
                <p>1000 Followers.</p>
              </div>

              <div class="row">
                <div class="col">
                  <div class="ig-thumbnail">
                    <img src="img/thumbs/picture1.jpg">
                  </div>

                  <div class="ig-thumbnail">
                    <img src="img/thumbs/picture2.jpg">
                  </div>

                  <div class="ig-thumbnail">
                    <img src="img/thumbs/picture3.jpg">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




    <!-- PORTFOLIO -->
    <section id="portfolio" class="portfolio pb-4">   
    <div class="container">
      <div class="row mb-4 pt-4">
        <div class="col text-center">
          <h2>Portofolio</h2>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md">
          <div class="card">
            <img src="img/thumbs/picture1.jpg" class="card-img-top" alt="Card Image Cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            </div>
          </div>
        </div>

         <div class="col-md">
          <div class="card">
            <img src="img/thumbs/picture2.jpg" class="card-img-top" alt="Card Image Cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card">
            <img src="img/thumbs/picture3.jpg" class="card-img-top" alt="Card Image Cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            </div>
          </div>
        </div>
      </div>


      <div class="row mb-4">
        <div class="col-md">
          <div class="card">
            <img src="img/thumbs/picture4.jpg" class="card-img-top" alt="Card Image Cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            </div>
          </div>
        </div>

         <div class="col-md">
          <div class="card">
            <img src="img/thumbs/picture5.jpg" class="card-img-top" alt="Card Image Cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card">
            <img src="img/thumbs/picture6.jpg" class="card-img-top" alt="Card Image Cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>


    <!-- CONTACT US -->
    <section id="contact" class="contact bg-light mb-10">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Contact Us</h2>
          </div>
        </div>
      </div>

      <div class="row justify-content-center pb-5">
        <div class="col-lg-4">
          <div class="card text-white bg-primary mb-3 text-center">
            <div class="card-body">
              <h5 class="card-title">Contact Us</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.
            </div>
          </div>

          <ul class="list-group">
            <li class="list-group-item"><h2>Location</h2>/li>
            <li class="list-group-item">Office</li>
            <li class="list-group-item">Address</li>
            <li class="list-group-item">Email</li>
            <li class="list-group-item">Contact Person</li>
          </ul>
        </div>

        <div class="col-lg-10">
          <form>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name">
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email">
            </div>

            <div class="form-group">
              <label for="message">Message</label>
              <textarea name="message" id="message" class="form-control" cols="10" rows="5"></textarea>
            </div>

            <div class="form-group">
              <button type="button" class="btn btn-primary">Send Message!</button>
            </div>
          </form>
        </div>

      </div>
    </section>



   <footer class="bg-dark text-white">
     <div class="container">
       <div class="row pt-4">
         <div class="col text-center">
           <p>Copyright 2010.</p>
         </div>
       </div>
     </div>
   </footer>


    <!-- 
    <div class="alert alert-success" role="alert">
        A simple success alert—check it out!
    </div>

    <button type="button" class="btn btn-dark">Dark</button>
    -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>