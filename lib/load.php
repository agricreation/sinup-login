<?php
//Load all files from _templates
function load($page){
    include __DIR__ ."/../_template/$page.php";
}

//Load all tittles
function load_title($title){
    print "<title>$title</title>";
}

?>