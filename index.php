<?php
/**
 * Created by PhpStorm.
 * User: ekermawi
 * Date: 2/19/17
 * Time: 12:43 AM
 */

include 'vendor/autoload.php';

$helper = new ApiHelper();
$filters = $helper->getFilters($_GET);
$offers = $helper->getOffers($filters);

include('views/main.php');
?>


