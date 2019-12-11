<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tile Calculator | Demo</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">


  <!-- Plugin CSS -->
  <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="css/demo.css">

  <!-- Styles for Intro.js Library Guided Tour  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.9.3/introjs.css">


</head>

<body id="page-top">

  <!-- Navigation -->
  <header>
      <?php include ('header.php');?>
  </header>

  <div id="calculator">

    <h1>Tile Calculator</h1>

    <form id ="form" data-intro="Enter your measurements" data-step="2">

        <select id="units" name="selectUnit" data-intro="First, select your preferred unit of measurement from the dropdown menu." data-step="1">
            <option disabled selected value="selectUnit">-- select unit --</option>
            <option value="cm">cm</option>
            <option value="in">in</option>
            <option value="ft">ft</option>
        </select>

        <!-- tile size -->
        <div id="tileSize">

            <h2>Tile Size</h2>

            <label>Length</label>
            <input type="text" id="tilelength" />

            <label>Width</label>
            <input type="text" id="tilewidth" />



        </div>

        <!-- area -->
        <div id="area">

            <h2>Area to Cover</h2>

            <label> Length</label>
            <input type="text" id="arealength"  />

            <label> Width</label>
            <input type="text" id="areawidth"  />

        </div>

        <!-- gap sizing -->
        <div id="gapSizing">

            <h2>Grout Gap Size</h2>

            <input type="text" id="gapsize" />

        </div>

    </form> <!-- end of form -->

    <button id="calcButton" onclick="passFromValue();" data-intro="Press the calculate button to get your results." data-step="3">Calculate</button>
    <input id="resetButton" type="button" value="Reset" onclick="resetForm()" />

    <div id="resultsCont">
        <p id="result"></p>
        <p id="tileAllowance"></p>
    </div>

    <button id="downloadBtn" onclick="downloadInfo();">Download</button>

    <div id="details"></div>

</div> <!-- end of calculator -->

<script>

 

</script>

<!-- javascript for app demo-->
<script src="js/demo.js"></script>



  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Intro.js Library, adds guided tour of app -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.9.3/intro.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/tenai-custom.js"></script>


</body>

</html>
