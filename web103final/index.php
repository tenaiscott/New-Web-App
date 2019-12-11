<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Kelly's Hack Tile Calculator</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendor/simple-line-icons/css/flaticon.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

  <!-- Custom styles for this template -->
  <link href="css/new-age.min.css" rel="stylesheet">
  <link href="css/tenai-custom.css" rel="stylesheet">

</head>

<body id="page-top">

  <button onclick="jumpTop()" id="totop" title="Go to top">&#8679;</button>

  <!-- Navigation -->
  <header>
      <?php include ('header.php');?>
  </header>

  <section class="masthead">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-6 my-auto">
          <div class="banner-content mx-auto">
            <h1 id= "mh" class="mb-5">Simplify your tiling project with our Tile Calculator.  Just enter some simple measurements, and leave the rest to us.  We will handle all the math, and give you the exact number of tiles needed for your project.  We will even calculate how many extra tiles you should purchase to account for breakage or future repairs.  Our Tile Calculator is simple, intuitive, and practical; perfect for DIY’ers and professionals.</h1>
            <a href="demo.php" class="btn btn-outline btn-xl js-scroll-trigger">Try Our Demo!</a>
          </div>
        </div>
        <div class="col-lg-6 my-auto">
          <div class="device-container">
            <div class="device-mockup macbook_2015.gold">
              <div class="device">
                <div class="screen">
                  <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                  <img src="img/demo-screen-2.jpg" class="img-fluid" alt="">
                </div>
                <div class="button">
                  <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="download bg-primary text-center" id="download">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <h2 id="getcalculating" class="ml13 section-heading">Get Calculating</h2>

          <p>Our tile calculator is available on any mobile device! Download now to get started!</p>
          <div class="badges">
            <a class="badge-link" href="#"><img class="appstores" src="img/google-play-badge.svg" alt=""></a>
            <a class="badge-link" href="#"><img class="appstores"src="img/app-store-badge.svg" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="features" id="features">
    <div class="container">
      <div class="section-heading text-center">
        <h2 id="featuresHead">Customizable and Easy to Use</h2>
        <p class="text-muted">Check out some of the Tile Calculator's features!</p>
        <hr>
      </div>
      <div class="row">
        <div class="col-lg-4 my-auto">
          <div class="device-container">
            <div class="device-mockup iphone6_plus portrait white">
              <div class="device">
                <div class="screen">
                  <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                  <img src="img/iphone-screen.jpg" class="img-fluid" alt="">
                </div>
                <div class="button">
                  <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 my-auto">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="feature-item">
                  <i class="flaticon-ruler-and-pencil text-primary"></i>
                  <button class="accordion-control">Unit Options</button>
                  <div class="accordion-panel text-muted">Our Tile Calculator works in centimetres, inches, and feet.</div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="feature-item">
                  <i class="flaticon-bricks text-primary"></i>
                  <button class="accordion-control">Custom Grout Gap</button>
                  <div class="accordion-panel text-muted">Enter a custom grout gap size, so you know exactly how many tiles you need.</div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="feature-item">
                  <i class="flaticon-home-1 text-primary"></i>
                  <button class="accordion-control">Recommendations</button>
                  <div class="accordion-panel text-muted">We provide a recommendation on how many extra tiles you should purchase, so you don’t have to worry about accidents.</div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="feature-item">
                  <i class="icon-printer text-primary"></i>
                  <button class="accordion-control">Download &amp; Print</button>
                  <div class="accordion-panel text-muted">Download and print your results for reference throughout your project.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="cta">
    <div class="cta-content">
      <div id="typewriteText" class="container">

      </div>
    </div>
    <div class="overlay"></div>
  </section>

  <section class="contact bg-primary" id="contact">
    <div class="container">
      <form onsubmit="formSubmit()">      
          <input name="name" type="text" class="contact-form" placeholder="Name" />   
          <input name="email" type="text" class="contact-form" placeholder="Email" />
          <textarea name="text" class="contact-form" placeholder="Message"></textarea>
          <input type="submit" value="SUBMIT"/>
  
      </form>
    </div>
  </section>

  <footer>
    <?php include ('footer.php');?>
  </footer>

  <script>

    // Change About Text Size
    var mastheadText = document.getElementById("mh");
    mastheadText.style.fontSize = "2em";

    // Add dynamic year in footer
    var footerContent = document.getElementById("footerCopy");
    footerContent.innerHTML = ("&copy;Tenai Scott " + new Date().getFullYear());

    // Change Features Heading Size
    var featuresH = document.getElementById("featuresHead");
    featuresH.style.fontSize = "60px";
    

  </script>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  
    <!-- Typewriter Plugin -->
    <script type="text/javascript" src="https://cdn.rawgit.com/mrvautin/typewrite/master/dist/typewrite.min.js"></script>

    <!-- Anime.js Plugin-->
    <script src="js/anime.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/tenai-custom.js"></script>
  <script src="js/new-age.min.js"></script>



</body>

</html>
