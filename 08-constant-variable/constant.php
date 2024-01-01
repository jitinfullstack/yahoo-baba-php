<?php 
    echo "<h4>";

    echo "<b style='color:green;'>// Constant Variable</b><br><br>";

    echo "define('num',50) : <b style='color:green;'>// Constant</b><br>";
    define('num1',50);
    echo num1;
    echo "<br><br>";
    
    echo "define('num',50) : <b style='color:green;'>// Constant can't be redefine</b><br>";
    define('num2',50);
    echo "<span style='color:green;'>define('num2',20) </span><br>";
    echo num2;
    echo "<br><br>";
    
    echo "define('num',50) : <b style='color:green;'>// Constant perform arthimetics operations</b><br>";
    define('num3',50);
    echo "<span style='color:green;'>$ num3 + 20 </span><br>";
    echo num3 + 20;
    echo "<br><br>";

    echo "define('num4',50, true) : <b style='color:green;'>// If true then use with case sensitive</b><br>";
    define('num4',50,true);
    echo num4;
    echo "<br>";

    echo "</h4>";
?>