<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>pixelPlay</title>
</head>
<body>
        <header>
            <nav class="navbar">
                    <a href="#" class="nav-branding"><h1>pixelPlay</h1></a>

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
        <div class="background">
            <h1>pixelPlay</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Dolore ullam iusto distinctio veniam laboriosam perspiciatis 
                et, expedita tempore tenetur.</p>
        </div>

        <footer>
            <div class="footer-content">
                <h3>WebDev Global</h3>
                <p><?php
                    echo date("Y");
                ?></p>
            </div>
        </footer>
        <script src="js/script.js"></script>
    
</body>
</html>    