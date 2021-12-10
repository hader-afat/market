<!DOCTYPE html>
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
    <title>My Account</title>
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
                        <li><a href="Mainpage.html">Home Page</a></li>
                        <li><a href="Marketplace.html">Marketplace</a></li>
                        <li><a href="Register.html">Register</a></li>
                        <li><a href="Login.html">Login</a></li>
                        <li><a href="profile">Profile</a></li>
                        <li><a href="Mainpage.html">Logout</a></li>
                        <li><a href="Aboutus.html">About</a></li>
                    </ul>
                </nav>
                <a href = "cart.html"><img src="images/cart.png" width="30px" height="30px" ></a>
            </div>
        </div>
    </div>

    <div class="container">
           <!--h2 class="title">Featured Products</h2-->
            <div class="summaryz">
                <div class="row">
                    <div class="col-7z">
                        <img style = "width : 280px; height : 200px;" src={{ asset('images/users/'.$user->image) }} >
                    </div>
                    <div class="col">
                        <div class = "orderz">
                            <a href="orderhistory.html" class="btn-lg btn-block btnz my-2">My Orders</a><br>
                            <a href="" class="btn-lg btn-block btnz my-2">Add a New Product</a><br> 
                            <a href="" class="btn-lg btn-block btnz my-2">Update Information</a><br> 
                            <a href="wallet.html" class="btn-lg btn-block btnz my-2">My Wallet</a>
                        </div>        
                    </div>
                </div>
                <br>
                <div class = "container">
                    <h3>Personal Information</h3>
                    <br>
                </div>
                <div class = "container">
                    <div class = "row">
                        <div class="col ml-4">
                            <i class="attz">Name: </i>
                            <i>{{ $user->name }}</i>
                        </div>
                        {{-- <div class = "col ml-4">
                            <i class="attz">Last Name: </i>
                            <i>Elsayed</i>
                        </div> --}}
                        <div class = "col ml-4">
                            <i class="attz">Preferred Language : </i>
                            <i>English</i>
                        </div>
                    </div>	
                </div>
                <br>
                <div class = "container">
                    <h3>Security</h3>
                    <br>
                </div>
                <div class = "container">
                    <div class = "row">
                        <div class = "col ml-6">
                            <i class="attz">Email: </i>
                            <i>{{ $user->email }}</p>   
                        </div>
                        <div class = "col ml-6">
                            <i class="attz">Region: </i>
                            <i>{{ $user->region }}</p> 
                                <a href="Password_Change.html" class="btnx my-2">Change Password</a><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
</body>    
</html>