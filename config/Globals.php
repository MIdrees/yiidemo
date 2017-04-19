<?php

//require(__DIR__ . 'components/Customer.php');
//$customerGlobal = new Customer;
$webRootPath = realpath(dirname(__FILE__).'/../');
setGlobalVar('webRootPath', $webRootPath);


$componentsPath = getGlobalVar('webRootPath') .'/components';
setGlobalVar('componentsPath', $componentsPath);

require(getGlobalVar('componentsPath') . '/Customer.php');
require(getGlobalVar('componentsPath') . '/Order.php');


function getGlobalMessage()
{
    return "This is string defined in global.php";
}

function yiiparam($name, $default = null)
{
    if ( isset(Yii::$app->params[$name]) )
        return Yii::$app->params[$name];
    else
        return $default;
}

function setSession($name, $value)
{
    Yii::$app->session->set($name, $value);
}

function getSession($name)
{
    return Yii::$app->session->get($name);
}

function genericEventHandlerFunction($event)
{
	$msg = 'Event handled with data: ' . $event->data; 
    setSession('eventMessage', $msg);
}


function setGlobalVar($name, $value)
{
    $GLOBALS[$name] = $value;
}

function getGlobalVar($name)
{
    return $GLOBALS[$name];
}

