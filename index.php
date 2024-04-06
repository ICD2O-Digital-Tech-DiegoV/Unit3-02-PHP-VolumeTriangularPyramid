<!DOCTYPE html>
<html>
  <head>
    <!-- styles sheet for MDL -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Meta Data -->
    <title>Calculating the area of a trapizoid in php</title>

    <link rel="apple-touch-icon" sizes="180x180" href="./favicon_io (17)/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io (17)/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon_io (17)/favicon-16x16.png">
    <link rel="manifest" href="./favicon_io (17)/site.webmanifest">
  </head>
  <body>

    <?php
      echo "<h1>Calculating the area of Triangular Pyramid in php</h1>";
      echo "<br>";
      echo "<p>Enter all values.</p>";
    ?>
    <form action="./results.php" method="post" target="results">
      <label for=lblBase">Base (cm):</label>
      <input type="number" id="base" placeholder="Enter the base (mm)" name="base"><br><br>
      <label for="lblHeight">Height (cm):</label>
      <input type="number" id="height" placeholder="Enter the height (mm)" name="height"><br><br>
      <label for=lblBase2">Base2 (cm):</label>
      <input type="number" id="base2" placeholder="Enter the base2 (mm)" name="base2"><br><br>
      <input type="submit" value="Calculate Area">
    </form>
    <?php
    echo "<br>"
    ?>
      <!-- iframe for the results to show on the web page. -->
      <iframe id="results" name="results">			
        The area of the triangle is  " + $area + cm<sup>2</sup>
      </iframe>
     <center><img src="./images/Triangular Pyramid.jpg" alt="Formula 1 track" width="500" height="330"></center>
  </body>
</html>