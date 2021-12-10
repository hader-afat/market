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
    <title>Wallet</title>
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
                    <li><a href="/">Home</a></li>
                    <li><a href="/">Products</a></li>
                    <li><a href="/register">Register</a></li>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/about">About</a></li>
                </ul>
                </nav>
                <a href = "cart.html"><img src="images/cart.png" width="30px" height="30px" ></a>
            </div>
        </div>
    </div>
    <h2  class="titlex" style="text-align: center;color: black ;">Your Wallet Balance</h2>
    <h2 for="balance" style="text-align: center;color:green;">450</h2>
   <section class= "Form mt-5 pt-4 my-4 mx-5">
    
    <div class="small-containerx" >
        <div class="rowx">
        <div class="walletinput">
            <h3 class="catx" style="font-size: 16px;color: black;">To deposit points:</h3>
            <label for="wallet">Enter amount</label>
            <input type="number" id="wallet" name="wallet" min="1" max="500">
            <form >
                <label for="cardno"> Enter Card Number:</label><br>
                <input type="text" id="cardno" name="cardno"><br>
                <label for="expirydate">Enter Expiry date:</label> <br>
                <input type="date" id="date" value="2017-06">
                <label for="cvv">Enter CVV:</label><br>
                <input type="password" id="cvv" name="cvv">
                <input id="submit" type="submit" value="Submit" class="wallet-btn" style=" margin-bottom: 10px; margin-top: 5px;">
                <input type="reset" class="wallet-btn" style=" margin-bottom: 10px; margin-top: 5px;">
              </form>
        </div>
        
    </div>
    </section>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS 
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
 

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <sc