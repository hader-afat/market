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
    <title>Register</title>
  </head>
  <body>

    <section class = "Form mt-5 pt-3 my-4 mx-5">
        <div class = "container">
            <div class = "row rowl no-gutters">
                <div class = "col-lg-5">
                    <img src = "Images/model2.jpg" class ="img1 img-fluid" alt = "">
                </div>
                <div class="col-lg-7 mt-5 px-5 pt-4">
                    <div class="logo">
                        <a href = "Mainpage.html"><img src = "images/outlet.png" width="125px"></a>
                    </div>
                    <h4 class = "font_weight_light">Create a new account</h4>

                    <form action="{{ url('/register') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input id="name" type = "text" name="name" placeholder = "Enter Name" class = "from-control my-2 p-2 ">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-4">
                                <input id="usrname" type = "text" name="username" placeholder = "Username" class = "from-control my-2 p-2">
                            </div>
                            <div class="col-md-5">
                                <select name="region" id = "Region" class = "from-control my-2 p-2" >
                                    <option value="">Choose..</option>
                                    <option value="cairo">cairo</option>
                                    <option value="giza">giza</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input id="mail" name="email" type = "email" placeholder = "Email-Address" class = "from-control my-2 p-2 ">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input id="pass" name="password" type = "password" placeholder = "Enter Password" class = "from-control my-2 p-2">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type = "password" placeholder = "Confirm Password" class = "from-control my-2 p-2">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input class = "file-upload-input" name="image" type = "file" onchange="readURL(this)" accept = "Image/*">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button id="register" type = "submit" class = "btn1 mt-3 mb-5">Register</button>
                                <p>Already have an account?<a href="/login"> Login</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery-3.6.0.min.js"></script>
    <script src="register.js"></script>
    </body>
</html>