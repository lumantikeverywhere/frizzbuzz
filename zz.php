<?php
    
    $controllerBasename = (isset($_REQUEST['controller']) ? $_REQUEST['controller'] : 'fbzz');
    require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR . $controllerBasename . '.php';
    
    $controllerClass = 'controller' . $controllerBasename;
    $task = ( isset($_REQUEST['task']) ? $_REQUEST['task'] : 'display' );
    $controller = new $controllerClass();
    $controller->$task();
    
    
    