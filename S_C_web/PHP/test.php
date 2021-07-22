<!DOCTYPE html>
<html>
<body>

<h1> Thank you &nbsp
    <?php
    $spacei="&nbsp";
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $age = $_POST["age"];
    $name = $fname.$spacei.$lname;
    echo($name."<h1>");
    echo ("<h3> we will use this information to improve this website for a better user experience<h3>");
    $myfile = fopen("Survey.txt","a");
    fwrite($myfile,"Firstname:\n".$fname."\nLastname:\n".$lname."\nAge:\n".$age."\n");
    fclose($myfile);
?> 

</body>
</html>