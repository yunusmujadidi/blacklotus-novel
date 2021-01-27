<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/style.css?v=0.2">

    <link rel="icon" href="https://freepngimg.com/download/anime/10-2-anime-png-images.png">
    
    <title>blacklotus translation</title>
  </head>
  <body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">blacklotus <span class="greeting">translation</span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Subscribe</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Read</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-outline-success sign_in_button" href="#">Sign In</a>
              </li>
            </ul>
          </div>
        </nav>


        <?php
          define("GELANG",1);
        if(isset($_GET['page']))
        {
            // ada variabel "page"
            $page = $_GET['page'];
            
            // siapkan file php yg diinginkan
            $file_php = $page.".php";
            
            // cek file ada atau tidak?
            if(file_exists($file_php))
            {
                // ada filenya...
                require_once $file_php;
            }
            else
            {
                // tidak ada file!
                
            }
        }
        else
        {
            require_once "default.php";
        }
    ?>
         
      

        
    
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>