<?php

spl_autoload_register('dbAutoloader');
spl_autoload_register('modelAutoloader');
spl_autoload_register('viewAutoloader');
spl_autoload_register('controllerAutoloader');



function viewAutoloader ($className) {
    
    $path = sprintf('../Classes/view/view.class.php', $className); 
    if (file_exists($path)) 
    { include $path; } 
    else 
    { echo "File not found"; } 
}

function controllerAutoloader ($className) {
    
    $path = sprintf('../Classes/controller/controller.class.php', $className); 
    if (file_exists($path)) 
    { include $path; } 
    else 
    { echo "File not found"; } 
}

function modelAutoloader ($className) {
    
    $path = sprintf('../Classes/model/model.class.php', $className); 
    if (file_exists($path)) 
    { include $path; } 
    else 
    { echo "File not found"; } 
}

function dbAutoloader ($className) {
   
    $path = sprintf('../Classes/core/dbh.class.php', $className); 
    if (file_exists($path)) 
    { include $path; } 
    else 
    { echo "File not found"; } 
}
?>

