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
    <section class = "Form mt-5 pt-4 my-4 mx-5">
        <div class = "container">
            <div class = "row rowl no-gutters">
                <div class = "col-lg-5">
                    <img src = "Images/model.jpeg"  alt = "">
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
                                <input  id="mail" name="email" type = "email" placeholder = "Email-Address" class = "from-control my-2 p-2 ">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input id="pass" name="password" type = "password" placeholder = "*****" class = "from-control my-2 p-2">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button id="login" type = "submit" class = "btn1 mt-3 mb-5">Login</button>
                            </div>
                        </div>
                        <a href = "Password_Change.html">Forgot Password</a>
                        <p>Don't have an account? <a href = "/register" >Register here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <script src="jquery-3.6.0.min.js"></script>
    <script src="login.js"></script>
  </body>
</html>