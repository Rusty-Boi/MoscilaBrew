<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoscilaBrew Login</title>
    <link rel="stylesheet" href="login.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="backbutton">
            <a class="nav-link back" href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
              </svg>
            Back</a>
        </div>
        <div class="containerForm d-flex">
            <div class="slider">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="coffee-18.jpg" class="carousel-img d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="Coffee-wallpaper-hd-wallpapers-download.jpg" class="carousel-img d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="R.jpg" class="carousel-img d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
            </div>
            
            <div class="mx-auto bg warning">
                <h1>Welcome to MoscilaBrew,<br>
                Sign in Continue</h1>
        
                <h4>Don't have an account? <a class="nav-link" href="register.html">create an account</a></h4>
                    
                    <form class="d-flex loginForm">
                        <label id="label" for="email">Email</label><br>
                        <input type="email" id="email" name="Email"><br>
                        <label id="label" for="password">Password</label><br>
                        <input type="password" id="password" name="Password"><br>
                        
                    </form>
                    <br>
        
                    <a class="nav-link" href="register.html"><ins>Forgot Password?</ins></a>
                    <br>
                    <button onclick="login()" class="button" type="button">Login</button>
                    
            </div>
        </div>
       
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>

</body>
</html>