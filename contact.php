<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Contact us</title>
</head>
<body class="bg-dark">

<!-- navbar -->
<div class="header mb-5">

      <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
          <a class="navbar-brand text-white font-weight-bold brand-text" href="#">Digital Service</a>

          <button class="navbar-toggler nt" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" onclick="hideShow2()">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto ">
              <a class="nav-link active text-white mx-3" aria-current="page" href="index.php">Home</a>
              <a class="nav-link text-white mx-3" href="about.php">About</a>
              <a class="nav-link text-white mx-3" href="services.php">Services</a>
              <a class="nav-link text-white mx-3" href="contact.php">Contact</a>
            </div>
          </div>
        </div>
        <br>


      </nav>






    </div>
<!-- end navbar -->

<div class="container bg-dark text-white contact-title" id="contact-titleID">
<div class="title text-center">
  <h1>Contact Us</h1>
  <p>Feel free to contact with us</p>
  <br>
</div>

<div class="form-div text-center">
  <form action="sendmail.php" method="post">
   
    <input type="text" name="name" placeholder="Your name" class="my-2" required> <br>
    
    <input type="email" name="email" placeholder="Your email" class="my-2" required> <br>
   
    <input type= "text" name="subject" placeholder="subject" class="my-2" required> <br>
    
    <textarea name="message" class="my-2"  id="textarea" cols="70" rows="5" placeholder="Message" required></textarea> <br>
    
    <button type="submit" name="submit" class="btn-primary mb-5" >Send mail</button>

  </form>
</div>

  <?php

include_once 'footer.php';

?>

</div>
  









<script src="app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>
</html>



