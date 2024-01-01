<?php 
    echo "<h4>";

    echo "<b style='color:green;'>// Data Types</b><br><br>";

    $name = "Anil Kumar";
    echo "This is a string variable : <b style='color:red;'>".$name."</b><br>";
    var_dump($name);
    echo "<br><br>";

    $number = 2678;
    echo "This is a integer variable : <b style='color:red;'>".$number."</b><br>";
    var_dump($number);
    echo "<br><br>";
    
    $decimal = 2678.99;
    echo "This is a float variable : <b style='color:red;'>".$decimal."</b><br>";
    var_dump($decimal);
    echo "<br><br>";
    
    $boolean = true;
    echo "This is a boolean variable : <b style='color:red;'>".$boolean."</b><br>";
    var_dump($boolean);
    echo "<br><br>";
    
    $array = array("html","css","js");
    echo "<span style='color:green;'>// You won't be able to print an array using string concatination.</span><br>";
    echo "This is a array variable : <b style='color:red;'> $ array </b><br>";
    var_dump($array);
    echo "<br><br>";
    
    $null = null;
    echo "<span style='color:green;'>// You won't be able to print an null value.</span><br>";
    echo "This is a null variable : <b style='color:red;'> $ null </b><br>";
    var_dump($null);
    echo "<br><br>";

    echo "</h4>";
?>