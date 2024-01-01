<?php 
    echo "<h4>";

    echo "<b style='color:green;'>// Print Statement</b><br><br>";

    print "Double quotes: <b style='color:red;'>Hello!</b><br><br>";

    print 'Single quotes: <b style="color:red;">Hello!</b><br><br>';
    
    print ('Round braces with single quotes: <b style="color:red;">Hello!</b><br><br>');

    echo "<span style='color:green;'>// You cant use comma seprated vaules using print statement</span><br>";
    echo "Use comma gives seprated values as a string: <b style='color:red;'>Hello"," World!</b><br><br>";

    print "Use dot as a concatination with merge both the values in single: <b style='color:red;'>Hello"." World!</b><br><br>";

    print "Print number: <b style='color:red;'";
    // print 5678;
    print "</b><br>";
    print 5678;
    
    echo "<br><br>Print number with decimal: <b style='color:red;'";
    // print 567.98;
    echo "</b><br>";
    print 567.98;

    echo "</h4>";
?>