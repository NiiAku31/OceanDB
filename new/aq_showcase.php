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
<body class="bg-dark">
     <!--Navbar-->
   <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
    <div class="container">
        <a href="#" class="navbar-brand">OceanDB</a>

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
                <a href="#learn" class="nav-link">Species Showcase</a>
               </li>
            
 
           </ul>    
        </div>
    </div>

</nav> 

<section class="bg-dark text-light p-5  ">
    <div class="container">
        <div class=" justify-content-between align-items-center">
            <h3 class="mb-3 text-center mb-md-0">Species showcase</h3>
           
        </div>
    </div>
</section>



<section>
     <div class="container">
         <div class="row mt-4 " >

            
            <div class="col-lg-6 ">
                
                <img src="/Antalya Aquarium.jpeg" alt="" style=width:100% > 
               
        </div>

             <div class="col-lg-6 ">
                
                    <img src="/Antalya Aquarium.jpeg" alt="" style=width:100% > 
                   
            </div>

         </div>
     </div>

     <div class="container-fluid mt-4" >
        <div class="row mt-4" id="pictures">
            <div class="col-lg-6 ">
                
                <img class="float-right" src="/Antalya Aquarium.jpeg" alt="" style=width:100% > 
             
           </div>

            <div class="col-lg-6 ">
               
                   <img src="/Antalya Aquarium.jpeg" alt="" style=width:100% > 
                  
           </div>

               
            </div>

        </div>
    </div>

</section>

<!--footer-->
<footer class="p-5 bg-dark text-white text-center postion-relative">
    <div class="container">
        <p class="lead">Copyright &copy; 2021 <span class="text-warning">OceanDB</span></p>
        <a href="" class="postion-absolute bottom-0 end-0 p-5">
            <i class="bi bi-arrow-up circle h1"></i>
        </a>
    </div>

</footer>

</body>
</html>
