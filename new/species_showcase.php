


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!--styles-->
     
    
    
     <link rel="stylesheet" type="text/css" href="/Oceandb/new/style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <!--scripts-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
     <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />

</head>
<body class="bg-dark">
     <!--Navbar-->
   <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-1 fixed-top">
    <div class="container">
        <div class=" btn">
            <a href="/Oceandb/index.php" class="btn btn-primary " >Home</a>
          </div>
     

        <button 
        class="navbar-toggler"
         type = "button"  
         data-bs-toggle="collapse" 
         data-bs-target="#navmenu">
         <span class="navbar-toggler-icon"></span>
        </button>

       
            <div class="text-center">
        <?php
        
				if (isset($_SESSION['uid']))
				{
					?><a href="/Oceandb/menu/index.php" class="btn btn-primary text-center" >Place An Order</a><?php
				}else{
					?><a href="/Oceandb/menu/menu.php" class="btn btn-primary text-center" >Place An Order</a><?php
				}
				?>
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
     <div class="scontainer">
         <div class="row mt-4 " >

         <div class="col-lg-6 ">
               
               <img src="/Oceandb/dataimg/1.jpg" alt="" style=width:100% > 
              
       </div>

       <div class="col-lg-6 ">
               
               <img src="/Oceandb/dataimg/10.jpg" alt="" style=width:100% > 
              
       </div>


                                

                                           
         </div>
     </div>

     <div class="container-fluid mt-4" >
        <div class="row mt-4" id="pictures">

        <div class="col-lg-6 ">
               
               <img src="/Oceandb/dataimg/3.jpg" alt="" style=width:100% > 
              
       </div>

       <div class="col-lg-6 ">
               
               <img src="/Oceandb/dataimg/4.jpg" alt="" style=width:100% > 
              
       </div>


          

        </div>
    </div>

    <div class="container-fluid mt-4" >
        <div class="row mt-4" id="pictures">
            

            <div class="col-lg-6 ">
               
               <img src="/Oceandb/dataimg/6.jpg" alt="" style=width:100% > 
              
       </div>

       <div class="col-lg-6 ">
               
               <img src="/Oceandb/dataimg/5.jpg" alt="" style=width:100% > 
              
       </div>

                
               
        </div>
    </div>

    <div class="container-fluid mt-4" >
        <div class="row mt-4" id="pictures">



        <div class="col-lg-6 ">
               
               <img src="/Oceandb/dataimg/9.jpg" alt="" style=width:100% > 
              
       </div>

       <div class="col-lg-6 ">
               
               <img src="/Oceandb/dataimg/8.jpg" alt="" style=width:100% > 
              
       </div>


        </div>
    </div>


    <div class="container-fluid mt-4" >
        <div class="row mt-4" id="pictures">



        <div class="col-lg-6 ">
               
               <img src="/Oceandb/dataimg/7.jpg" alt="" style=width:100% > 
              
       </div>

       <div class="col-lg-6 ">
               
               <img src="/Oceandb/dataimg/11.jpg" alt="" style=width:100% > 
              
       </div>


        </div>
    </div>

    <!-- old code in case new one doesnt work.
         <div class="col-lg-6 ">
               
                   <img src="/Oceandb/dataimg/11.jpg" alt="" style=width:100% > 
                  
           </div>
    -->
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