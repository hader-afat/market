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
    <script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="main.css">
    <title>Add post Page</title>
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
                        <li><a href="Login.html">Login</a></li>
                        <li><a href="Profile.html">Profile</a></li>
                        <li><a href="Mainpage.html">Logout</a></li>
                        <li><a href="/about">About</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class = "container my-3">
        <h2 class = "page-title">Add a new post</h2>
        <div class = "container my-4">
        <form action="{{ url('/products') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                <div class = "row my-3 mx-1">
                    <label class=" form-label">Product Name</label>
                    <input type = "text" name = "ProductName" class = "text-input form-control">
                    <br>
                </div>
                <div>
                    <label class=" form-label">Product Description</label>
                    <teaxtarea name = "Description" id = "Description"></teaxtarea>
                    <br>
                </div>
                <div class = "row my-3">
                    <div class = "col">
                        <label class=" form-label">Price</label>
                        <input type = "text" name = "ProductName" class = "text-input form-control">
                    </div>
                    <div class = "col">
                        <label class=" form-label">Brand</label>
                        <input type = "text" name = "ProductName" class = "text-input form-control">
                    </div>
                    <br>
                </div>
                <div class = "row my-3">
                    <div class = "col">
                        <label class=" form-label">Product Image</label>
                        <input class = "file-upload-input" type = "file" onchange="readURL(this)" accept = "Image/*">
                    </div>
                    <br>
                </div>
            </form>
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
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/Addpost.js"></script>
</body>
</html>