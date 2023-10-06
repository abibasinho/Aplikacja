<?php
$myfile = fopen("plik.txt","w")
        or die("unable to open file");
    $txt = "John Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
