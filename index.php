<?php

use Asymptix\core\Route;

require_once("./vendor/autoload.php");
require_once("./conf/Config.php");

session_start();
header('X-Powered-By: Asymptix PHP Framework, PHP/' . phpversion());

include("modules/dbconnection.module.php");
include("modules/settings.module.php");
include("modules/session.module.php");
include("modules/filter.module.php");
include("modules/localization.module.php");

/**
 * Fetching request parameters
 */
$request = $_SERVER['REQUEST_URI'];

/**
 * Fetch arguments of the request and separate request string from arguments.
 */
$_ARGS = array();
$qmPosition = strrpos($request, "?");
if ($qmPosition !== false) {
    $argumentsStr = substr($request, $qmPosition + 1);
    foreach (explode("&", $argumentsStr) as $argPairStr) {
        list($argumentName, $argumentValue) = explode("=", $argPairStr);

        $_ARGS[$argumentName] = $argumentValue;
    }

    $request = substr($request, 0, $qmPosition);
}

/**
 * Pagination
 */
if (isset($_ARGS['pn'])) {
    $_REQUEST['pn'] = (integer)$_ARGS['pn'];
}

$_ROUTE = new Route(array_filter(explode("/", $request)));
if (empty($_ROUTE->controller)) {
    $_ROUTE->controller = "index";
    if (User::checkLoggedIn()) {
        $_ROUTE->controller = "dashboard";
    }
}
/**
 * Switches to the needed control
 */
$_ROUTE->isBackend = !in_array($_ROUTE->controller, array(
    'index',
    'login', 'logout', 'forgot-password', 'sign-up',
    'pricing', 'contact-us'
));

if ($_ROUTE->isBackend && !User::checkLoggedIn()) {
    $_ROUTE->isBackend = false;
    $_ROUTE->controller = "login";
}
if ($_ROUTE->controller == "login" && User::checkLoggedIn()) {
    $_ROUTE->isBackend = true;
    $_ROUTE->controller = "dashboard";
}

if ($_ROUTE->isBackend) {
    require_once("controllers/backend/" . $_ROUTE->controller . ".php");
    require_once("templates/backend/master.tpl.php");
} else {
    require_once("controllers/frontend/" . $_ROUTE->controller . ".php");
    require_once("templates/frontend/master.tpl.php");
}

?>