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
    <script src="https://kit.fontawesome.com/8d4c067090.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="main.css">
    <title>Order History</title>
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
                    <li><a href="/marketplace">Marketplace</a></li>
                    <li><a href="/register">Register</a></li>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/profile">Profile</a></li>
                    <li><a href="Mainpage.html">Logout</a></li>
                    <li><a href="/about">About</a></li>
                    </ul>
                </nav>
                <a href = "cart.html"><img src="images/cart.png" width="30px" height="30px" ></a>
            </div>
        </div>
    </div>
    
    <div class = "container">
        <div class="summaryz">
            <div class="row">
                <div class="col-7z">
                    <img style = "width : 280px; height : 200px;" src="Images/user.png" >
                </div>
                <div class="col">
                    <div class = "orderz">
                        <a href="/orderhistory" class="btn-lg btn-block btnz my-2">My Orders</a><br>
                        <a href="" class="btn-lg btn-block btnz my-2">Add a New Product</a><br> 
                        <a href="" class="btn-lg btn-block btnz my-2">Update Information</a><br> 
                        <a href="/wallet" class="btn-lg btn-block btnz my-2">My Wallet</a>
                    </div>        
                </div>
            </div>
            <div>
            <h1 class="page-title " style="text-align: center;">Order History</h1> 
            <div class="catx">
            <h3>Your Purchases</h3>
            <p>See how your orders are managed and check the latest status of your order</p>
            </div>
            </div>   
            <section  class = "Form mt-5 pt-4 my-4 mx-5" style="margin: auto;">
                <div class = "container">
                    <div class = "row rowl no-gutters">
                        <div class="rowx">
                        <h4>Order #123</h4>
                        </div>
                        <img class="orderhx-img" style="position: relative;" src="Images/chair.jpg" >
                        <div class="col-2x">
                            <div class="rowx">
                        <label for="item"  style="color: black;text-align: center;font-size: 16px;">Rotating chair</label>
                            </div>
                            <div class="rowx">
                        <p class="catx" style="color: black;font-size: 14px;">Quantity: 1</p>
                        </div>
                        <p class="catx"style="color: black;font-size: 14px;">Price: 600</p>
                        <p class="catx" style="color: black;font-size: 14px;">Date: <span id="datetime">17-11-2021</span></p>
                            <div class="small-containerx">
                                <div style="text-align: center; ">
                                <a class="btnx" href="checkout.html">Buy again</a>
                                <br>
                                <a class="btnx" style="padding-top: 10px ; margin-top: 10px;" href=#>Request Return</a>
                                </div>               
                                </div>
                            </div>
                        </div>
                </div>
            </section>
    
            <section  class = "Form mt-5 pt-4 my-4 mx-5" style="margin: auto;">
                <div class = "container">
                    <div class = "row rowl no-gutters">
                        <div class="rowx">
                        <h4>Order #203</h4>
                        </div>
                        <img class="orderhx-img" style="position: relative;" src="Images/mi.png" >
                        <div class="col-2x">
                            <div class="rowx">
                        <label for="item"  style="color: black;text-align: center;font-size: 16px;">Miband 5</label>
                            </div>
                            <div class="rowx">
                        <p class="catx" style="color: black;font-size: 14px;">Quantity: 2</p>
                        </div>
                        <p class="catx"style="color: black;font-size: 14px;">Price: 1100</p>
                        <p class="catx" style="color: black;font-size: 14px;">Date: <span id="datetime">10-9-2021</span></p>
                            <div class="small-containerx">
                                <div style="text-align: center; ">
                                <a class="btnx" href="checkout.html">Buy again</a>
                                <br>
                                <a class="btnx" style="padding-top: 10px ; margin-top: 10px;" href=#>Request Return</a>
                                </div>               
                                </div>
                            </div>
                        </div>
                </div>
            </section>   
                <section  class = "Form mt-5 pt-4 my-4 mx-5" style="margin: auto;">
                <div class = "container">
                    <div class = "row rowl no-gutters">
                        <div class="rowx">
                        <h4>Order #177</h4>
                        </div>
                        <img class="orderhx-img" style="position: relative;" src="Images/flasha.png" >
                        <div class="col-2x">
                            <div class="rowx">
                        <label for="item"  style="color: black;text-align: center;font-size: 16px;">Flash Drive</label>
                            </div>
                            <div class="rowx">
                        <p class="catx" style="color: black;font-size: 14px;">Quantity: 1</p>
                        </div>
                        <p class="catx"style="color: black;font-size: 14px;">Price: 150</p>
                        <p class="catx" style="color: black;font-size: 14px;">Date: <span id="datetime">1-8-2021</span></p>
                            <div class="small-containerx">
                                <div style="text-align: center; ">
                                <a class="btnx" href="checkout.html">Buy again</a>
                                <br>
                                <a class="btnx" style="padding-top: 10px ; margin-top: 10px;" href=#>Request Return</a>
                                </div>               
                                </div>
                            </div>
                        </div>
                </div>   
            </section>
        </div>
    </div>

    <div class="brandsx">
        <div class="small-containerx">
            <div class="rowx">
                <div class="col-5x">
                    <img src="images/oppoo.png">
                </div>
                <div class="col-5x">
                    <img src="images/coca.png">
                </div>
                <div class="col-5x">
                    <img src="images/mi logo.png">
                </div>
                <div class="col-5x">
                    <img src="images/paypal.png">
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