<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo "PHP addignment by: "Jorik de Boer" (PHP wiskundetabel)" ?></title>
  </head>

  <body>
     <?php
        $i=1;
        $j=1;
        
        while($i<= 10){ 
            
            while($j==1){
            echo $i*$j." | ";    
            $j=$j+1;   
            }
            
            while($j== 2){
            echo $i*$i." | ";
            $j=$j+1;
            }
            
            while($j== 3){
            echo $i*$i*$i." | ";
            $j=$j+1;
            }
            
        echo "<br>";
        $j=1;
        $i=$i+1;
        }
     ?>
  </body>
</html>
