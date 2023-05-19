<?php

$Dir = "C:\\xampp\\htdocs";
$DirOpen = opendir($Dir);
while ($CurFile = readdir($DirOpen)) {
    echo $CurFile . "<br />";
}
closedir($DirOpen);
