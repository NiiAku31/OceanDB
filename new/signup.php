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
    <div class="body-background">
        <div class="container-fluid d-flex justify-content-center align-items-center h-100">
            <div class="card p-3 text-center py-4">
                <h4>Create account</h4>
                <div> <span>Already have an account?</span> <a href="/login.html" class="text-decoration-none">Sign-in</a> </div>
                <div class="mt-3 px-3"> <input class="form-control" placeholder="Username"> </div>
                <div class="input-group px-3 mt-3"> <input type="text" class="form-control" placeholder="First Name" aria-label="Username"> <span></span> <input type="text" class="form-control" placeholder="Last Name" aria-label="Server"> </div>
                <div class="mt-3 px-3"> <input class="form-control" placeholder="E-mail"> </div>
                <div class="mt-3 d-grid px-3"><a href="/index.html"> <button class="btn btn-primary btn-block btn-signup text-uppercase"> Signup</button> </a></div>
                <div class="px-3">
                    <div class="mt-2 form-check d-flex flex-row"> <input class="form-check-input" type="checkbox" value="" id="services"> <label class="form-check-label ms-2" for="services"> I have read and agree to the terms. </label> </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
