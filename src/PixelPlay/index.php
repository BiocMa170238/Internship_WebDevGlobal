<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>pixelPlay</title>
</head>
<body>
        <header>
            <nav class="navbar">
                    <h1>pixelPlay</h1>

                    <ul class="nav-menu" id="mainmenu">
                        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Login</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Register</a></li>
                    </ul>
                    <div class="hamburger">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>   
            </nav>  
        </header>
         <!-- landing slider -->
        
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="#"><img src="img/landingPage.jpg" class="d-block w-100" alt="..."></a>
                </div>
                <div class="carousel-item">
                    <a href="#"><img src="img/pic2.jpg" class="d-block w-100" alt="..."></a>
                </div>
                <div class="carousel-item">
                    <a href="#"><img src="img/pic3.jpg" class="d-block w-100" alt="..."></a>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
         
        <!-- end of slider -->

        
        <footer>
            <div class="footer-content">
                <h3>WebDev Global</h3>
                <p><?php
                    echo date("Y");
                ?></p>
            </div>
        </footer>

        <script src="js/script.js"></script>
        <script src="js/bootstrap.min.js"></script>
    
</body>
</html>    