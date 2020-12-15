<?php

spl_autoload_register('dbAutoloader');
spl_autoload_register('modelAutoloader');
spl_autoload_register('viewAutoloader');
spl_autoload_register('controllerAutoloader');



function viewAutoloader ($className) {
    //add code to autoload classes from the controller, view and model folders
    $path = sprintf('Classes/view/usersview.class.php', $className); 
    if (file_exists($path)) 
    { include $path; } 
    else 
    { echo "File not found"; } 
}

function controllerAutoloader ($className) {
    //add code to autoload classes from the controller, view and model folders
    $path = sprintf('Classes/controller/userscontroller.class.php', $className); 
    if (file_exists($path)) 
    { include $path; } 
    else 
    { echo "File not found"; } 
}

// the class names should be same as file names
function modelAutoloader ($className) {
    //add code to autoload classes from the controller, view and model folders
    $path = sprintf('Classes/model/users.class.php', $className); 
    if (file_exists($path)) 
    { include $path; } 
    else 
    { echo "File not found"; } 
}

function dbAutoloader ($className) {
    //add code to autoload classes from the controller, view and model folders
    $path = sprintf('Classes/core/dbh.class.php', $className); 
    if (file_exists($path)) 
    { include $path; } 
    else 
    { echo "File not found"; } 
}
?>

