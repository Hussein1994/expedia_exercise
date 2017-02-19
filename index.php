<?php
/**
 * Created by PhpStorm.
 * User: ekermawi
 * Date: 2/19/17
 * Time: 12:43 AM
 */

spl_autoload_register(function ($class) {
    $file = 'classes/' . $class . '.php';
    if (file_exists($file)) {
        include_once($file);
    } else {
        trigger_error('Error: Could not load class ' . $class . '!');
        exit();
    }
});

$filters = apiHelper::getFilters();
$offers = apiHelper::getOffers($filters);
//print_r($offers);die;

include('views/main.php');
?>


