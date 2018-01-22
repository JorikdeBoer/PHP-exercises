<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo "PHP addignment by: "Jorik de Boer" (fix PHP syntax errors)" ?></title>
  </head>

  <body>
      <?php
        // o in 0 veranderd, ; toegevoegd, ) i.p.v. }
        $ages = array(10,50,39,40,67,99,7,2,10,88);
        $sum = 0;
        
        // Made function more simple and readable
        function getAverageAge($ages) {
        return $average = array_sum($ages)/count($ages);       
          }
        
        echo getAverageAge($ages);
        
        // php end
        ?>
  </body>
</html>
