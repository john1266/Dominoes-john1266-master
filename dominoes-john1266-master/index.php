<?php  
//create an array for each dot//
$nums = [ '<div class="dot"></div>', '<div class="dot"></div><div class="dot"></div>', '<div class="dot"></div><div class="dot"></div><div class="dot"></div>', '<div class="dot"></div><div class="dot"></div><div class="dot"></div><div class="dot"></div>', '<div class="dot"></div><div class="dot"></div><div class="dot"></div><div class="dot"></div><div class="dot"></div>' , '<div class="dot"></div><div class="dot"></div><div class="dot"></div><div class="dot"></div><div class="dot"></div><div class="dot"></div>'];

$random = rand(0,5); //this will randomize each dot//

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DOMinoes with PHP</title>
  <link rel="stylesheet" href="dominoes.css">
</head>
<body>
  <h1>Kyle Johnston Dominoes</h1>
  
  <div class="dominoes">

   <?php for ($i =0; $i < 100; $i++) : ?>
    <?php 
          $num = $nums [rand(0, count($nums) -1)]; 
      ?>
    <div class="domino">

      <div class="dots">
      <?php echo $num; ?>
      </div>
      
      <?php 
          $num = $nums [rand(0, count($nums) -1)]; 
      ?>
      <div class="dots ">
      <?php echo $num; ?>
      </div>
 
    </div>

    <?php endfor; ?>
  </div>
</body>
</html>