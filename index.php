<?php
session_start();
	if (isset($_SESSION['uid']))
	{
		include('dbcon.php');
		$uid = $_SESSION['uid'];
		$query = "SELECT * FROM `user` WHERE `id` = '$uid'";
		$run = mysqli_query($conn, $query);
		$data = mysqli_fetch_assoc($run);
	}
	else{

	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Species Order</title>

	<!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />

	<!-- CSS Styling -->
 <!--styles-->
    
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <!--scripts-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
     <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />


	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css2?family=Knewave&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">


</head>
<body>
<nav style="background-color:#041C32" class="navbar navbar-expand-lg  navbar-dark py-3 fixed-top">
    <div class="container">
        <a href="#" class="navbar-brand btn ">OceanDB</a>

        <button 
        class="navbar-toggler"
         type = "button"  
         data-bs-toggle="collapse" 
         data-bs-target="#navmenu">
         <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
           <ul class="navbar-nav ms-auto ">
             
               <li class="nav-item ">
                <a href="#questions" class="nav-link">Questions</a>
                  </li>

                  <li class="nav-item ">
                <a href="#instructors" class="nav-link">Founders</a>
                  </li>
        
            <li class="nav-item">
              <a href="#contact" class="nav-link">Contact Us</a>
             </li>
               <div class="log-reg">
		
      <?php
        if (isset($_SESSION['uid']))
        {
          ?><a href="logout.php"> <button class="btn-warning btn-sm"><i class="fa fa-sign-out" aria-hidden="true">&nbsp;</i>Logout </button></a><?php
        }
        else{

        }
      ?>
  
 
           </ul>    
        </div>
    </div> 
           

</nav> 
<section style="background-color:#04293A" class=" text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start ">
    <div class="container my-10">


        <div class="d-sm-flex align-items-center justify-content-between ">
        

            <div>
            <?php
				if (isset($_SESSION['uid']))
				{
          
          
					?>	<a href="ulogin/account.php"  ><h3><i class="fa fa-user" aria-hidden="true">&nbsp;</i>Welcome <span class="text-warning"><?php echo $data['name'] ?></span></h3></a><?php
				}
				else{
					?><a href="login.php" class="btn btn-primary btn-lg text-center" >Login/Sign up</a><?php
				}
			?>
                <h1 class=" my-5 mt-12 mx-auto">What is <span class="text-warning">OceanDB</span></h1>
                <p class="lead my-4">
                    OceanDB is a marine research institution that deals with the acquisition of different aquatic species. it provides the avenue for aquariums and individuals to purchase numerous aquatic species to enrich their inventory.
                </p>

				<div class="site-menu mt-4">
				<?php
				if (isset($_SESSION['uid']))
				{
					?><a href="menu/index.php" class="btn btn-primary btn-lg" >Place An Order</a><?php
				}else{
					?><a href="menu/menu.php" class="btn btn-primary btn-lg" >Place An Order</a><?php
				}
				?>
				</div>
             
            </div>  
            
            

            <img class=" mt-6 img-fluid fade-in-up img-rounded w-50 d-none d-sm-block mb-4" src="/OceanDB/new/fish.jpeg" alt="">
        </div>
    </div>
    
</section>



<!--boxes-->
<section class="p-5">
    <div class="container">
        <div  class="row text-center g-4">
            <div class="col-md ">
                <div  style="background-color:#064663" class="card ">
                <div class="card-body text-center  text-light">
                    <div class="h1 mb-3">
                        <i class="bi bi-laptop"></i> 
                    </div>
                    <h3 class="card-title mb-3 ">
                        News blogs
                    </h3>
                      
                    <p class="card-text">
                       Up to date articles and news that talk about aquatic species and their impact on the environment.
                    </p>
                    <a href="/OceanDB/new/newsblog.php" class="btn btn-primary">Read More</a>
                </div>
              </div>
            </div> 

            <div class="col-md ">
                <div  style="background-color:#ECB365" class="card ">
                <div class="card-body text-center  text-light">
                    <div class="h1 mb-3">
                        <i class="bi bi-laptop"></i> 
                    </div>
                    <h3 class="card-title mb-3 ">
                        Acquarium profiles
                    </h3>
                      
                    <p class="card-text">
                       Take a peek into the world of aquariums and the diverse species each of them have. 
                    </p>
                    <a href="/OceanDB/new/a_profiles.php" class="btn btn-primary">View</a>
                </div>
              </div>
            </div> 

            

		</div> 
    </div>
</div>
</section> 

<!--learn sections-->
<section id = "learn" class="p-5">
    <div class="container">
       <div class="row align-items-center justify-content-between">
           <div class="col-md">
               <img src="/OceanDB/dataimg/giphy.gif" class="img-fluid" alt="">
           </div>
           <div class="col-md p-5">
               <h2>
                   Species showcase 
               </h2>
               <p class="lead">
                  Witness the diversification of aquatic species that are in the possession of OceanDB. These species can be aquired by any aquarium or individual by simply placing an order above.
                </p>
              
                <a href="/OceanDB/new/species_showcase.php" class="btm btn-light mt-3"><i class="bi bi-chevron-right"></i>Read More</a>
           </div>

       </div>
    </div>
</section>

<section id = "learn" class="p-5 bg-dark text-light">
    <div class="container">
       <div class="row align-items-center justify-content-between">
         
           <div class="col-md p-5">
               <h2>
                   Transported to your nearest Acquarium
               </h2>
               <p class="lead">
                  We have numerous ways of delivering these species to you everywhere and at anytime. This is possible via the different delivery services we provide: this includes motorcycles, trucks and even airplanes for people outside the country.
                </p>
                
                <a href="/OceanDB/new/ship.php" class="btm btn-light mt-3 bg-dark text-white"><i class="bi bi-chevron-right"></i>Read More</a>
           </div>
           <div class="col-md">
            <img src="/OceanDB/dataimg/bc850fcedb45dce673057d546b0b2810.gif" class="img-fluid" alt="">
        </div> 

       </div>
    </div>
</section>

<!--Question accordion-->
<section id="questions" class="p-5">
    <div class="container">
      <h2 class="text-center mb-4">Frequently Asked Questions</h2>
      <div class="accordion accordion-flush" id="questions">
        <!-- Item 1 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#question-one"
            >
              Where exactly are you located?
            </button>
          </h2>
          <div
            id="question-one"
            class="accordion-collapse collapse"
            data-bs-parent="#questions"
          >
            <div class="accordion-body">
              Our headquaters is located near palace mall in Spintex, Accra. but we have numerous subsidiaries in east legon, achimota and tesano. 
            </div>
          </div>
        </div>
        <!-- Item 2 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#question-two"
            >
              How much does it cost to attend?
            </button>
          </h2>
          <div
            id="question-two"
            class="accordion-collapse collapse"
            data-bs-parent="#questions"
          >
            <div class="accordion-body">
              it does not cost that much at all, entry into OceanDb is free for everyone; therefore you just need to cater for food and transportation
            </div>
          </div>
        </div>
        <!-- Item 3 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#question-three"
            >
              What do I need to Know?
            </button>
          </h2>
          <div
            id="question-three"
            class="accordion-collapse collapse"
            data-bs-parent="#questions"
          >
            <div class="accordion-body">
             OceanDb is a marine research institution that deals with the aquisition and delivery of  purchased aquatic species.
            </div>
          </div>
        </div>
        <!-- Item 4 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#question-four"
            >
              How Do I sign up?
            </button>
          </h2>
          <div
            id="question-four"
            class="accordion-collapse collapse"
            data-bs-parent="#questions"
          >
            <div class="accordion-body">
              you can simply sign up by clicking the "login/signup" button at the start of the website.
            </div>
          </div>
        </div>
   
  </section>

<section id="instructors" class="p-5" style="background-color:#064663">
    <div class="container">
        <h2  class="text-center text-light" >Introducing our founders</h2>
        <p class="lead text-center text-white mb-5">
            Behold! these are the four revolutionary founders that made OceanDb what it is today.
        </p>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card bg-ight">
                    <div class="card-body text-center">
                        <img src="https://randomuser.me/api/portraits/men/11.jpg" class = "rounded-circle mb-3" alt="">
                        <h3 class="card-title mb-3">Bradley Bands</h3>
                        <p class="card-text">As the Head manager at OceanDB, i have been working at this place for the past 6 years; and i believe in the forwars thinking vision OceanDB promotes. </p>
                        <a href="https://twitter.com/i/flow/login"><i class="bi bi-twitter text-dark mx-1"></i></a>
                        <a href="https://web.facebook.com/login/device-based/regular/login/?login_attempt=1"><i class="bi bi-facebook text-dark mx-1"></i></a>
                        <a href="https://www.google.com/search?q=linkedin&oq=linkedin&aqs=chrome.0.69i59l2j69i57j0i271l2j69i60j69i65l2.1075j0j4&sourceid=chrome&ie=UTF-8"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                        <a href="https://www.instagram.com/accounts/login/"><i class="bi bi-instagram text-dark mx-1"></i></a>
                    </div>
                </div> 

            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card bg-ight">
                    <div class="card-body text-center">
                        <img src="https://randomuser.me/api/portraits/men/13.jpg" class = "rounded-circle mb-3" alt="">
                        <h3 class="card-title mb-3">Amenoreys Sterling</h3>
                        <p class="card-text">As the head of software department at OceanDB, my team and i take care of all the technological issues and needs of the company</p>
                        <a href="https://twitter.com/i/flow/login"><i class="bi bi-twitter text-dark mx-1"></i></a>
                        <a href="https://web.facebook.com/login/device-based/regular/login/?login_attempt=1"><i class="bi bi-facebook text-dark mx-1"></i></a>
                        <a href="https://www.google.com/search?q=linkedin&oq=linkedin&aqs=chrome.0.69i59l2j69i57j0i271l2j69i60j69i65l2.1075j0j4&sourceid=chrome&ie=UTF-8"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                        <a href="https://www.instagram.com/accounts/login/"><i class="bi bi-instagram text-dark mx-1"></i></a>
                    </div>
                </div> 

            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card bg-ight">
                    <div class="card-body text-center">
                        <img src="https://randomuser.me/api/portraits/men/12.jpg" class = "rounded-circle mb-3" alt="">
                        <h3 class="card-title mb-3">Ofori Woodwork</h3>
                        <p class="card-text">I am the head of the Human/animal resource department, i take into account the protection of the species and the employees that work at the company. one might say i am the backbone to the integrity of this company.  </p>
                        <a href="https://twitter.com/i/flow/login"><i class="bi bi-twitter text-dark mx-1"></i></a>
                        <a href="https://web.facebook.com/login/device-based/regular/login/?login_attempt=1"><i class="bi bi-facebook text-dark mx-1"></i></a>
                        <a href="https://www.google.com/search?q=linkedin&oq=linkedin&aqs=chrome.0.69i59l2j69i57j0i271l2j69i60j69i65l2.1075j0j4&sourceid=chrome&ie=UTF-8"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                        <a href="https://www.instagram.com/accounts/login/"><i class="bi bi-instagram text-dark mx-1"></i></a>
                    </div>
                </div> 

            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card bg-ight">
                    <div class="card-body text-center">
                        <img src="https://randomuser.me/api/portraits/men/14.jpg" class = "rounded-circle mb-3" alt="">
                        <h3 class="card-title mb-3">James Khalifa</h3>
                        <p class="card-text">As the chief operating officer, i am the senior executive that is tasked with seeing the day-to-day administration and operational functions of a business</p>
                        <a href="https://twitter.com/i/flow/login"><i class="bi bi-twitter text-dark mx-1"></i></a>
                        <a href="https://web.facebook.com/login/device-based/regular/login/?login_attempt=1"><i class="bi bi-facebook text-dark mx-1"></i></a>
                        <a href="https://www.google.com/search?q=linkedin&oq=linkedin&aqs=chrome.0.69i59l2j69i57j0i271l2j69i60j69i65l2.1075j0j4&sourceid=chrome&ie=UTF-8"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                        <a href="https://www.instagram.com/accounts/login/"><i class="bi bi-instagram text-dark mx-1"></i></a>
                    </div>
                </div> 

            </div>
        </div>
    </div>
</section>

    <!-- Contact & Map -->
    <section id="contact" class="p-5">
        <div class="container">
          <div class="row g-4">
            <div class="col-md ">
              <h2 class="text-center">Contact Info</h2>
              <ul class="list-group list-group-flush lead" style="margin-top: 80px;">
                <li class="list-group-item">
                  <span class="fw-bold" >Main Location:</span> opposite Palace mall, Spintex, Accra.
                </li>
                <li class="list-group-item">
                  <span class="fw-bold">Company Phone:</span> (555) 555-5555
                </li>
                <li class="list-group-item">
                  <span class="fw-bold">Delivery services Phone:</span> (333) 333-3333
                </li>
                <li class="list-group-item">
                  <span class="fw-bold">Company Email:</span> (555)
                  oceandb@gmail.com
                </li>
                <li class="list-group-item">
                  <span class="fw-bold">Delivery Services Email:</span>
                  deliverp@gmail.com
                </li>
              </ul>
            </div>
            <div class="col-md">
              <div>
                <p class="text-dark h3 text-center mb-4">Visit Us</p>
              <div class="lg-6">
                <img src="/OceanDB/new/map.jpeg" style="width:100%; border-radius: 10px; height:40%">
              </div>
              </div>
            </div>
          </div>
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

 <!-- Modal -->
 <div
 class="modal fade"
 id="enroll"
 tabindex="-1"
 aria-labelledby="enrollLabel"
 aria-hidden="true"
>
 <div class="modal-dialog">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="enrollLabel">Enrollment</h5>
       <button
         type="button"
         class="btn-close"
         data-bs-dismiss="modal"
         aria-label="Close"
       ></button>
     </div>
     <div class="modal-body">
       <p class="lead">Fill out this form and we will get back to you</p>
       <form>
         <div class="mb-3">
           <label for="first-name" class="col-form-label">
             First Name:
           </label>
           <input type="text" class="form-control" id="first-name" />
         </div>
         <div class="mb-3">
           <label for="last-name" class="col-form-label">Last Name:</label>
           <input type="text" class="form-control" id="last-name" />
         </div>
         <div class="mb-3">
           <label for="email" class="col-form-label">Email:</label>
           <input type="email" class="form-control" id="email" />
         </div>
         <div class="mb-3">
           <label for="phone" class="col-form-label">Phone:</label>
           <input type="tel" class="form-control" id="phone" />
         </div>
       </form>
     </div>
     <div class="modal-footer">
       <button
         type="button"
         class="btn btn-secondary"
         data-bs-dismiss="modal"
       >
         
       </button>
       <button type="button" class="btn btn-primary">Submit</button>
     </div>
   </div>
 </div>
</div>


	
		
		

	
		<div class="overlay">
		</div>
	</div>

	<script src="bootstrap/jss/jquery.min.js"></script>
	<script src="bootstrap/jss/popper.min.js"></script>
	<script src="bootstrap/jss/bootstrap.min.js"></script>

</body>
</html>
