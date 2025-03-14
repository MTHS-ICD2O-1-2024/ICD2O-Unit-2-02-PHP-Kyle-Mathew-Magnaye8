<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="The math program, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Mr. Coxall" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.purple-deep_orange.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>The Area & Perimeter Program, in PHP</title>
  <style>
    .rectangle-title {
      color: white;
      font-size: 24px;
      text-align: left;
      /* Align text to the left */
      font-family: Arial, sans-serif;
      margin-top: 20px;
      /* Adjust margin as needed */
      margin-left: 0.3px;
      /* Optional: Add left margin for spacing */
    }
  </style>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">The Area & Perimeter Program, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/area_and_perimeter.png" alt="Area and Perimeter Image" />
      </div>
      <div class="page-content-php">
        <?php
        $length = 5;
        $width = 3;
        echo "<h2 class='rectangle-title'>The dimensions of a rectangle are: $length cm and $width cm.</h2>";
        ?>
      </div>
      <div class="page-content-php">
        <?php echo "<h5 class='result'>The area is: </h5>";
        echo "<h5 class='result'>The perimeter is: </h5>";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $length = 5;
          $width = 3;
          $area = $length * $width;
          $perimeter = 2 * ($length + $width);
        }
        ?>
      </div>
      <form method="post">
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
          Calculate
        </button>
      </form>
    </main>
  </div>
</body>

</html>