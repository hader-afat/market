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
    <title>Cart</title>
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
                        <a href = "/search" ><button class = "buttonx">Search</button></a>
                    </form>
                </div>
                <nav>
                    <ul class = "ulx">
                    <li><a href="/">Home Page</a></li>
                    <li><a href="/marketplace">Marketplace</a></li>
                    <li><a href="/Profile">Profile</a></li>
                    <li><a href="/">Logout</a></li>
                    <li><a href="/about">About</a></li>
                    </ul>
                </nav>
                <a href = "/cart"><img src="images/cart.png" width="30px" height="30px" ></a>
            </div>
        </div>
    </div>


    <div class="mt-3 my-5 mx-5">
        <div class="box-element" style = "border-radius : 10px;">
            <a  class="btn btn-success" href="#">&#x2190; Continue Shopping</a>
            <br>
            <br>
            <table class="table">
                <tr>
                    <th><h5>Items: <strong>5</strong></h5></th>
                    <th><h5>Total: <strong>EGP</strong></h5></th>
                    <th>
                        <a  style="float:right; margin:5px;" class="btn btn-success" href="checkoutviacredit.html">Credit card Payment</a>
                        <a  style="float:right; margin:5px;" class="btn btn-success" href="checkoutwallet.html">Use my wallet</a>
                    </th>
                </tr>
            </table>
        </div>
        <div class = "container" style = "border-radius : 10px;">
            <h3>Store Products</h3>
            <div class="box-element" style = "border-radius : 10px;">
                <div class="cart-row">
                    <div style="flex:2"></div>
                    <div style="flex:2"><strong>Item</strong></div>
                    <div style="flex:2"><strong>Price</strong></div>
                    <div style="flex:1"><strong>Quantity</strong></div>
                    <div style="flex:1"></div>
                    <div style="flex:1"><strong>Total</strong></div>
                </div>
                <div class="cart-row">
                    <div style="flex:2"><img class="row-image" src="Images/placeholder.png"></div>
                    <div style="flex:2"><p>Items Number</p></div>
                    <div style="flex:2"><p>EGP</p></div>
                    <div style="flex:1"><p class="quantity">Quant</p></div>
                    <div style = "flex:1">
                        <div class="quantity">
                            <img class="chg-quantity update-cart" src="Images/up.png">
                            <img class="chg-quantity update-cart" src="Images/down.png">
                        </div>
                    </div>
                    <div style="flex:1"><p>EGP</p></div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class = "container" style = "border-radius : 10px;">
            <h3>Market Place Products</h3>
            <div class="box-element" style = "border-radius : 10px;">
                <div class="cart-row">
                    <div style="flex:2"></div>
                    <div style="flex:2"><strong>Item</strong></div>
                    <div style="flex:2"><strong>Price</strong></div>
                    <div style="flex:1"><strong>Quantity</strong></div>
                    <div style="flex:1"></div>
                    <div style="flex:1"><strong>Total</strong></div>
                </div>
                <div class="cart-row">
                    <div style="flex:2"><img class="row-image" src="Images/placeholder.png"></div>
                    <div style="flex:2"><p>Items Number</p></div>
                    <div style="flex:2"><p>EGP</p></div>
                    <div style="flex:1"><p class="quantity">Quant</p></div>
                    <div style = "flex:1">
                        <div class="quantity">
                            <img class="chg-quantity update-cart" src="Images/up.png">
                            <img class="chg-quantity update-cart" src="Images/down.png">
                        </div>
                    </div>
                    <div style="flex:1"><p>EGP</p></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
  </body>
</html>