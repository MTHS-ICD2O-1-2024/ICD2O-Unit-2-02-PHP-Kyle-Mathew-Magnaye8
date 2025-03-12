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
  <title>The Area & Perimiter program, in PHP</title>
  <style>
    .rectangle-title {
      color: white;
      font-size: 24px;
      text-align: center;
      font-family: Arial, sans-serif;
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">The Area & Perimiter program, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/area_and_perimeter.png" alt="area and perimiter image" />
      </div>
      <div class="page-content-php">
        <?php
        $length = 5;
        $width = 3;
        echo "<h2 class='rectangle-title'>The dimensions of a rectangle are: $length cm and $width cm.</h2>";
        ?>
      </div>
      <form method="post">
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
          Calculate
        </button>
      </form>
      <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
        <p>The area is: <?php echo number_format($area, 15); ?> cm²</p>
        <p>The perimeter is: <?php echo number_format($perimeter, 16); ?> cm</p>
      <?php endif; ?>
    </main>
  </div>
</body>

</html>