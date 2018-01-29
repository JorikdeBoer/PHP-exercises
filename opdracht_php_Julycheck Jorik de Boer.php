<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo "PHP addignment by: "Jorik de Boer" (JulyCheck)" ?></title>
  </head>

  <body>
    <?php
        $month = "July";
        $othermonth = "April";
        function qualifymonth($month) {
        if ($month == "July") {
            echo "It's July, so it can get really hot.";
        } else {
            echo "It’s not July, so at least we’re not in the peak of the heat.";
        }}
        qualifytemp($month);
        qualifytemp($othermonth);
    ?>
  </body>
</html>

