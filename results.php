<?php
  $base = $_POST['base'];
  $height = $_POST['height'];
$base2 = $_POST['base2'];
  $area = $base * $height *$base2 / (1/6);
?>
<h3>Result:</h3>
The area of the triangle is <?php echo $area ?>cm<sup>2</sup>