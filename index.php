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
?>
<html>
    <head>
        <title>Expedia Hotels</title>
        <meta charset="utf-8">
        <link href="http://www.expedia.com/favicon.ico" rel="icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="/theme/default.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>
    <div class="container">
        <div class="well well-sm">
            <strong>Display</strong>
            <div class="btn-group">
                <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                        class="glyphicon glyphicon-th"></span>Grid</a>
            </div>
        </div>
        <div id="products" class="row list-group">
            <?php foreach ($offers as $offer) { ?>
            <div class="item  col-xs-4 col-lg-4 list-group-item">
                <div class="thumbnail">
                    <img class="group list-group-image" src="<?php echo $offer->hotelInfo->hotelImageUrl ?>" alt="" />
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">
                            <?php echo $offer->hotelInfo->hotelName . "&nbsp;"; echo str_repeat("<span>★</span>",$offer->hotelInfo->hotelStarRating);?>
                        </h4>
                        <p class="group inner list-group-item-text">
                            <?php echo $offer->hotelInfo->description ?>
                        </p>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <?php switch ($offer->hotelUrgencyInfo->almostSoldStatus) {
                                    case 'AVAILABLE' : ?>
                                        <p class="lead">$21.000</p>
                                        <?php break;
                                    case 'ALMOST_SOLD' : ?>
                                        <p class="danger">
                                            <span style="color:red">Almost sold!</span>
                                        <p class="lead">$21.000</p>
                                        </p>
                                        <?php break;
                                    case 'NO_DATA' : ?>
                                        <span style="color:red">Sold out!</span>
                                        <?php break;
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    </body>
</html>

