<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!--styles-->
      
      <link rel="stylesheet" type="text/css" href="cardstyles.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!--scripts-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
      <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />

</head>
<body>

    <!--Navbar-->
   <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-1 fixed-top">
    <div class="container">
      <div class="class btn">
      <a href="/OceanDB/index.php" class="btn btn-primary " >Home</a>
    </div>
        <button
        class="navbar-toggler"
         type = "button"
         data-bs-toggle="collapse"
         data-bs-target="#navmenu">
         <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
           <ul class="navbar-nav ms-auto">

               <li class="nav-item">
                <a href="#learn" class="nav-link">News cards</a>
               </li>


           </ul>
        </div>
    </div>

</nav>

<section class="bg-dark text-light p-5  ">
    <div class="container">
        <div class=" justify-content-between align-items-center">
            <h3 class="mb-3 text-center mb-md-0">News card</h3>

        </div>
    </div>
</section>


    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card">
              <div class="content">
              <div class="card-image-wrapper">
                <img src="/OceanDB/dataimg/dolphin.jpeg" class="card-img-top img-fluid" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">Winter, beloved star of 'Dolphon Tale', dies at Florida aqquarium</h5>
                <p class="card-text">what is the dolphin tale and how did it lead to the death of its famous star</p>
                <a href="https://economictimes.indiatimes.com/news/international/world-news/winter-beloved-star-of-dolphin-tale-dies-at-florida-aquarium/slideshow/87664528.cms" class="btn btn-primary">Read article</a>
              </div>
            </div>
          </div>
          </div>

          <div class="col">
            <div class="card">
              <div class="content">
              <div class="card-image-wrapper">
                <img src="/OceanDB/dataimg/indian.png" class="card-img-top img-fluid" alt="...">
              </div>

              <div class="card-body">
                <h5 class="card-title">Indian Railways' to get a movable freshwater tunnel aquarium </h5>
                <p class="card-text">this improved railway will deliver more freshwater through the tunnel algorithm.</p>
                <a href="https://economictimes.indiatimes.com/industry/transportation/railways/indian-railways-to-get-a-movable-freshwater-tunnel-aquarium-at-ksr-bengaluru-station/slideshow/84138656.cms" class="btn btn-primary">Read article</a>
              </div>
            </div>
          </div>
          </div>

          <div class="col">
            <div class="card">
              <div class="content">
              <div class="card-image-wrapper">
                <img src="/OceanDB/dataimg/love.png" class="card-img-top img-fluid" alt="...">
              </div>



              <div class="card-body">
                <h5 class="card-title">Love is in the Air: Top romantic locations in Dubai</h5>
                <p class="card-text">this article gives you the best getaway locations in dubai for all the couples</p>
                <a href="https://economictimes.indiatimes.com/magazines/travel/love-is-in-the-air-top-romantic-locations-in-dubai/articleshow/81188449.cms" class="btn btn-primary">Read article</a>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>







   





      <!--footer-->
<footer class="p-5 bg-dark text-white text-center postion-relative">
  <div class="container">
       <p class="lead">Copyright &copy; 2021 <span class="text-warning">OceanDB</span></p>      <a href="" class="postion-absolute bottom-0 end-0 p-5">
          <i class="bi bi-arrow-up circle h1"></i>
      </a>
  </div>
</footer>
</body>
</html>
