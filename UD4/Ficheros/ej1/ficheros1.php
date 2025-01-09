<?php
    $filename = 'ficheros1.txt';
    if (file_exists($filename)) {
        $count = file('ficheros1.txt');
        $count[0] ++;
        $fp = fopen("ficheros1.txt", "w");
        fputs($fp, "$count[0]");
        fclose($fp);
        echo $count[0];
}
else {
    $fh = fopen("ficheros1.txt", "w");
    if($fh==false) die("unable to create file");
        fputs($fh, 1);
        fclose($fh);
        $count = file('ficheros1.txt');
        echo $count[0];
    }
?>