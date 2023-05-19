<?php

$Dir = "C:\\xampp\\htdocs\\web2023";
$DirEntries = scandir($Dir);
foreach ($DirEntries as $Entry) {
    echo $Entry . "<br />";
}
