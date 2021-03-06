<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!--styles-->
     <link rel="stylesheet" type="text/css" href="login.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <!--scripts-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
     <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />

</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="d-flex flex-column justify-content-between">
            <div class="card mt-3 p-5">
                <div class="logo mb-3"><img src=""></div>
                <div>
                    <p class="mb-1">Start managing your</p>
                    <h4 class="mb-5 text-white">money with us!</h4>
                </div><a href="/signup.html" ><button class="btn btn-primary btn-lg"><small>Already signed up?</small><span>&nbsp;Log in</span> </button></a>
            </div>
            <div class="card two bg-white px-5 py-4 mb-3">
                <div class="form-group"><input type="email" class="form-control" id="mail" required><label class="form-control-placeholder" for="mail">Email</label></div>
                <div class="form-group"><input type="text" class="form-control" id="name" required><label class="form-control-placeholder" for="name">Full Name</label></div>
                <div class="form-group"><input type="password" class="form-control" id="password" required><label class="form-control-placeholder" for="password">Password</label></div> <a href="/index.html"> <button class="btn btn-primary btn-block btn-lg mt-1 mb-2"><span>Get started<i class="fas fa-long-arrow-alt-right ml-2"></i></span></button></a>
            </div>
        </div>
    </div>
</body>
</html>
