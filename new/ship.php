<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!--styles-->
      <link rel="stylesheet" type="text/css" href="style.css">
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
      <div class=" btn">
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
                <a href="#learn" class="nav-link">Shipping Details</a>
               </li>


           </ul>
        </div>
    </div>

</nav>


<section class="bg-white text-dark text-center p-5  ">
    <div class="container">
        <div class="row align-items-center justify-content-between">
     
        <div class=" justify-content-between align-items-center">

            <h3 class="mb-3 text-center mb-md-0">Visit Us</h3>

            <div class="col-md text-center">
            <img src="/OceanDB/new/map.jpeg" class="img-fluid " style="border-radius: 30px; width:800px; height:500px " alt="">
            </div>


        </div>
        </div>
    </div>
</section>

<section>
    <div class="container  text-light">
    <div class="row bg-secondary align-items-center justify-content-between">
        <div class="col-md text-center">
            <p class="h3">Available Delivery options</p>
        </div>

    </div>
</div>
</section>


    <section class="p-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md ">
                    <div class="card text-dark">
                        <div class="card-image-wrapper">
                          <img src="/OceanDB/new/bike.png" class="card-img-top img-fluid" alt="...">
                        </div>
                        <div class="card-body text-center">
                          <h5 class="card-title">By Motorcycle</h5>
                          <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                        </div>

                    </div>
                </div>

                <div class="col-md ">
                    <div class="card text-dark">
                        <div class="card-image-wrapper">
                          <img src="/OceanDB/new/plane.jpg" class="card-img-top img-fluid" alt="...">
                        </div>
                        <div class="card-body text-center">
                          <h5 class="card-title">By plane</h5>
                          <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                        </div>

                    </div>
                </div>

                <div class="col-md ">
                    <div class="card text-dark">
                        <div class="card-image-wrapper">
                          <img src="/OceanDB/new/fish.jpeg" class="card-img-top img-fluid" alt="...">
                        </div>
                        <div class="card-body text-center">
                          <h5 class="card-title">By Van</h5>
                          <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                        </div>

                    </div>
                </div>



        </div>
    </div>
    </section>

    <section>
        <div class="container">
            <div class="row text-center align-items-center justify-content-between">
                <div class="col h3">
                    <p>Delivery information</p>
                </div>

            </div>
            <div class="row">
                <div class="col-md text-center align-items-center justify-content-between">

                    <ul class="list-group list-group-flush lead">
                      <li class="list-group-item">
                        <span class="fw-bold" >Main Location:</span> 50 Main st Boston MA
                      </li>
                      <li class="list-group-item">
                        <span class="fw-bold">Company Phone:</span> (555) 555-5555
                      </li>
                      <li class="list-group-item">
                        <span class="fw-bold">Delivery services Phone:</span> (333) 333-3333
                      </li>
                      <li class="list-group-item">
                        <span class="fw-bold">Company Email:</span> (555)
                        enroll@frontendbc.test
                      </li>
                      <li class="list-group-item">
                        <span class="fw-bold">Delivery Services Email:</span>
                        student@frontendbc.test
                      </li>
                    </ul>
                  </div>
            </div>
        </div>
    </section>

    <section>
      <div class="text-center mb-4">
        <?php
				if (isset($_SESSION['uid']))
				{
					?><a href="/OceanDB/menu/index.php" class="btn btn-primary btn-lg" >Place An Order</a><?php
				}else{
					?><a href="/OceanDB/menu/menu.php" class="btn btn-primary btn-lg" >Place An Order</a><?php
				}
				?>
        </div>
</section>






<!--footer-->
<footer class="p-5 bg-dark text-white text-center postion-relative">
    <div class="container">
        <p class="lead">Copyright &copy; 2021  <span class="text-warning">OceanDB</span></p>
        <a href="" class="postion-absolute bottom-0 end-0 p-5">
            <i class="bi bi-arrow-up circle h1"></i>
        </a>
    </div>
</footer>

</body>
</html>
