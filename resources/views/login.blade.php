<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">
    <link rel =  "shortcut icon" href = "Images/outlet.png">
    <script src="https://kit.fontawesome.com/8d4c067090.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="main.css">
    <title>Login</title>
  </head>
  <body>

    <div class="headerx">
        <div class = "containerx">
            <div class="navbarx">
                <div class="logo">
                    <a href = "#"><img src = "images/outlet.png" width="125px"></a>
                </div>
                <div class="searchingx">
                    <form class = "formx" id="form" role="search">
                        <input class = "searchx" type="search" id="query" name="q"
                        placeholder="Search..."
                        aria-label="Search through site content">
                        <button class = "buttonx">Search</button>
                    </form>
                </div>
                <nav>
                    <ul class = "ulx">
                        <li><a href="/">Home Page</a></li>
                        <li><a href="/register">Register</a></li>
                        <li><a id="logout" href="">Logout</a></li>
                        <li><a href="/about">About</a></li>
                    </ul>
                </nav>
                <a href = "cart.html"><img src="images/cart.png" width="30px" height="30px" ></a>
            </div>
        </div>
    </div>
    
    <section class = "Form mt-5 pt-4 my-4 mx-5">
        <div class = "container">
            <div class = "row rowl no-gutters">
                <div class = "col-lg-5">
                    <img src = "Images/model.jpeg" class ="img1 img-fluid" alt = "">
                </div>
                <div class="col-lg-7 mt-5 px-5 pt-4">
                    <div class="logo">
                        <a href = "Mainpage.html"><img src = "images/outlet.png" width="125px"></a>
                    </div>
                    <h4 class = "font_weight_light">Sign into your account</h4>
                    <form action="{{ url('/login') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input  id="mail" type = "email" placeholder = "Email-Address" class = "from-control my-2 p-2 " name="email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input id="pass" type = "password" placeholder = "*****" class = "from-control my-2 p-2" name="password">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button id="login" type = "submit" class = "btn1 mt-3 mb-5">Login</button>
                            </div>
                        </div>
                        <p>Don't have an account? <a href = "/register" >Register here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
   
<div class="footerx">
    <div class="containerx">
        <div class="rowx">
                <div class="footer-col-1x">
                    <h3>Download Our App</h3>
                   <div class="app-logo">
                    <img src="images/appgoogle.jpg">
                   </div>
                </div>
                <div class="footer-col-2x">
                   <img src="images/outlet.png">
                   <p>Our Purpose Is to Make Worldwide Products Accessible to the Many. </p>
                </div>
                <div class="footer-col-3x">
                    <h3>Useful Links</h3>
                    <ul class = "ulx">
                        <li>Shipping information</li>
                        <li>Refund Policy</li>
                        <li>Join Affiliate</li>
                        <li>Help</li>
                    </ul>
                </div>
                <div class="footer-col-4x">
                    <h3>Follow Us</h3>
                    <ul class = "ulx">
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Twitter</li>
                        <li>Youtube</li>
                    </ul>
                </div>
        </div>
        <hr><p class="copyrightx">Copyright 2021- Ecommerce Website ASU</p>
    </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/login.js"></script>
</body>
</html>