<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script&family=Pacifico&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/6cbe71aebe.js"></script>

    <title>Document</title>

    <style>
        .bg-light {
            background-color: #d4c7c7 !important;
        }
        a {
            color: #251400;
            text-decoration: none;
        }
        a:hover {
            color: #ffffff !important;
            text-decoration: none;
        }
        .nav-link {
            color: #251400 !important;
        }
        h3 {
            font-family: 'Pacifico', cursive;
            color: #1c232d;
            text-shadow: 2px 2px #d4c7c7;
        }
        tbd {
            font-family: 'Oleo Script', cursive;
            font-family: 'Pacifico', cursive;
        }
        .mt-5 {
            color: #ffffff;
            font-family: 'Oleo Script', cursive;
            text-shadow: 2px 2px #251400;
        }
        .btn {
            border-radius: 25px;

            border-color: #251400;
            background-color: #d4c7c7;
            color: #251400;
        }
        .btn:hover {
            background-color: #1c232d;
            border-color: #1c232d;
        }

        .btn-dark {
            border-radius: 25px;
            color: #ffffff;
            background-color: #1c232d;
        }

        .btn-dark:hover {
            background-color: #ED9121;
            border-color: #1c232d;
            background-color: #d4c7c7;
            color: #251400;
        }
    </style>
</head>
<body style = "background-image: 
    url(images/bgimg1.jpg); 
    background-repeat: repeat; 
    background-attachment: fixed;">

    <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-light navbar-light fixed-top container">
    <!-- Brand -->
        <div class = "container">
            <a class="navbar-brand" href="#">BISTROS <span style = "font-family: 'Pacifico', cursive;">Jacksonville, FL</span></a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-expanded = "false">
                <span class="navbar-toggler-icon" ></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Reservations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Jobs</a>
                </li>
                <li class="nav-item">
                
                    <a class="nav-link" href="#"><i class="fa fa-star" aria-hidden="true" style = "text-shadow: 1px 1px black; font-size: 18px;"></i> Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><strong>1-800-123-4567</strong></a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!--content-->
    <!--CONTAINER 1-->
    <div class = "container text-center"
        style = "background-image: 
        url(images/kitchen1.jpg); 
        background-repeat: no-repeat; 
        background-color: black;
        height: 543px;
        width: 100%;">
        <div class = "row">
            <div class = "col-md-12">
            <h1 class = "mt-5" style = "padding-top: 100px;">Voted best new restaurant in Jacksonville</h1>

            <p style = "padding-top: 100px;">
                <button type = "button" class = "btn btn-lg btn-success">Order Online</button>
            </p>
            <br><br>
            </div>
        </div>
    </div>    

    <!--CONTAINER 2-->
    <div class = "container" style = "background-color: #d4c7c7; opacity: 0.9;">

        <div class = "row">
        <div class = "col-md-12 text-center"><br>
            <h3>Our Menu</h3><br>
            </div>
            <br><br>

            <div class = "col-md-4 text-center">
                <img src = "images/breakfast.jpg" class = "img-thumbnail">
                <br><br>
                <a href = "#" class = "btn btn-dark">Breakfast</a>
                <br><br>
            </div>
            <div class = "col-md-4 text-center">
            <img src = "images/lunch.jpg" class = "img-thumbnail">
                <br><br>
                <a href = "#" class = "btn btn-dark">Lunch</a>
                <br><br>
            </div>
            <div class = "col-md-4 text-center">
            <img src = "images/dinner.jpg" class = "img-thumbnail">
                <br><br>
                <a href = "#" class = "btn btn-dark">Dinner</a>
                <br><br>
            </div>
            <br><br>
        </div>
        <br><br>
    </div>    
 
     <!--CONTAINER 3-->
    <div class = "container" style = "background-color: #ffffff;">

        <div class = "row">
            <div class = "col-md-6"><br>
                <h3>Our Chef: Macy Cooke</h3><br>
                <p class = "lead">
                    <img src = "images/chef.jpg" class = "img-thumbnail" style = "padding: 10px, width: 150px; float:right;">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque laboriosam iusto earum rerum nostrum est facilis ratione amet deleniti minus quam perspiciatis eos, quos animi at velit blanditiis ea quae?
                    <br><br>
                    Lorem ipsum, dolor sit amet <strong>BISTROS </strong> consectetur adipisicing elit. Ad commodi natus, odio, eveniet maxime eius consequuntur accusamus autem cum dicta harum esse error nisi. Possimus doloribus nostrum dolorem distinctio nemo?
                    <br><br>
                    <img src = "images/socialicons.jpg">
                </p>
            </div>
<!--stars from font awesome-->
            <div class = "col-md-6" style = "background-color: #f8f8f8; border-left: 1px dashed gray;"><br>
                <h3>Critical Acclaim</h3><br>
                <p class = "lead" style = "text-align: justify;">
                    <i class="fa fa-star" aria-hidden="true" style = "color:gold; text-shadow: 1px 1px black; font-size: 18px;"></i>
                    <i class="fa fa-star" aria-hidden="true" style = "color:gold; text-shadow: 1px 1px black; font-size: 18px;"></i>
                    <i class="fa fa-star" aria-hidden="true" style = "color:gold; text-shadow: 1px 1px black; font-size: 18px;"></i>
                    <i class="fa fa-star" aria-hidden="true" style = "color:gold; text-shadow: 1px 1px black; font-size: 18px;"></i>
                    <i class="fa fa-star" aria-hidden="true" style = "color:gold; text-shadow: 1px 1px black; font-size: 18px;"></i>
                    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque laboriosam iusto earum rerum nostrum est facilis ratione amet deleniti minus quam perspiciatis eos, quos animi at velit blanditiis ea quae?"
                    "<br><span style = "color: #251400; font-size: 14px; float: right;">--The Jacksonville Sun</span>
                    <br><br>
                </p>
                    <p class = "lead" style = "text-align: justify;">
                    <i class="fa fa-star" aria-hidden="true" style = "color:gold; text-shadow: 1px 1px black; font-size: 18px;"></i>
                    <i class="fa fa-star" aria-hidden="true" style = "color:gold; text-shadow: 1px 1px black; font-size: 18px;"></i>
                    <i class="fa fa-star" aria-hidden="true" style = "color:gold; text-shadow: 1px 1px black; font-size: 18px;"></i>
                    <i class="fa fa-star" aria-hidden="true" style = "color:gold; text-shadow: 1px 1px black; font-size: 18px;"></i>
                    <i class="fa fa-star" aria-hidden="true" style = "color:gold; text-shadow: 1px 1px black; font-size: 18px;"></i>
                    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque laboriosam iusto earum rerum nostrum est facilis ratione amet deleniti minus quam perspiciatis eos, quos animi at velit blanditiis ea quae?"
                    "<br><span style = "color: #251400; font-size: 14px; float: right;">--The Jacksonville Sun</span>
                </p>
                <br><br>
            </div>
        </div>
    </div>  
    
    <!--CONTAINER 4-->
    <div class = "container" style = "background-color: #d4c7c7; color: gray; opacity: 0.81;">

        <div class = "row">
            <div class = "col-md-4">
                <p class = "text-left"
                style = "line-height: 2.9em; color: #000000; padding-top: 14px; font-size: 14px;">Copyright 2018, Bistros LLC
                </p>
            </div>
            <div class = "col-md-4">
            <p class = "text-center"
                style = "line-height: 2.9em; color: #000000; padding-top: 14px; font-size: 14px;">Bistros, 20 East Bay St., Jax, FL 322222
            </p>
            </div>
            <div class = "col-md-4">
            <p class = "text-right"
                style = "line-height: 2.9em; color: #000000; padding-top: 14px; font-size: 14px;">
                <a href = "#">Privacy Policy</a> | <a href = "#">Terms of Use</a>
            </p>
            </div>
        </div>
    </div>    
    

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>