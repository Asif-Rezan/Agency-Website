<!DOCTYPE html>
<html lang="en">

<head>


  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  


  <title>Digital Services</title>
</head>

<body>
  <img src="images/background.jpg" alt="image" class="img-fluid img">

  <div class="container">

    <div class="header ">

      <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
          <a class="navbar-brand text-white font-weight-bold brand-text" href="#">Digital Service</a>

          <button class="navbar-toggler nt" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" onclick="hideShow()">
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


    <div class="title-text text-white container ">
      <h1 class="mt-5">Your Business! Our Concern!</h1>
      <p>Let us try to help to grow your business</p>
      <button onclick="window.location.href='contact.php'" class="border border-info btn text-white font-weight-bold rounded-pill">Contact</button>
      <button onclick="window.location.href='about.php'" class="border border-info btn text-white font-weight-bold rounded-pill">About</button>

    </div>



    <!-- Cards Section -->

    <div class="row text-center">

    <div class="col-lg-3 col-md-6 card-col">
        <a href="">
        <div class="card" style="width: 18rem;">
          <img src="https://seo-trench.com/wp-content/uploads/2019/11/12-Websites-You-Should-Check-Out-to-Learn-Web-Development-Fast.png" class="card-img-top" alt="image" style="height: 165px;">
          <div class="card-body">
            <h5 class="card-title">Web Devlopment</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            
          </div>
        </div>
        </a>
        
      </div>

      <div class="col-lg-3 col-md-6 card-col">
        <a href="">
        <div class="card" style="width: 18rem;">
          <img src="https://www.kit.edu.bd/wp-content/uploads/2015/12/Advanced-Graphic-Design-course-in-uttara.jpg" class="card-img-top" alt="image" style="height: 165px;">
          <div class="card-body">
            <h5 class="card-title">Graphics Design</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            
          </div>
        </div>
        </a>
        
      </div>

      <div class="col-lg-3 col-md-6 card-col">
        <a href="">
        <div class="card" style="width: 18rem;">
          <img src="https://marketingbitz.com/wp-content/uploads/2018/02/Digital-Marketing.jpg" class="card-img-top" alt="image" style="height: 165px;">
          <div class="card-body">
            <h5 class="card-title">Digital Marketing</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
           
          </div>
        </div>
        </a>
       

      </div>

      <div class="col-lg-3 col-md-6 card-col">
        <a href="">
        <div class="card" style="width: 18rem;">
          <img src="https://www.oberlo.com/media/1603954182-seo-article-header.png" alt="image" style="height: 145px;">
          <div class="card-body">
            <h5 class="card-title">Search Engine Optimization (SEO)</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
           
          </div>
        </div>
         </a>
        
      </div>



    </div>

   



  </div>

  <br>
  <br>

  <?php
  include_once "footer.php";

  ?>


  

  



  



  <script src="app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>



</html>