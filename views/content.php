<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: ekermawi-->
<!-- * Date: 2/20/17-->
<!-- * Time: 1:25 AM-->
<!-- */-->
<div class="main">
    <div class="container">
        <?php if(!is_null($offers)) { ?>
            <div id="products" class="row list-group">
                <?php foreach ($offers as $offer) { ?>
                    <div class="item  col-xs-4 col-lg-4 list-group-item">
                        <div class="thumbnail">
                            <img class="group list-group-image" src="<?php echo $offer->hotelInfo->hotelImageUrl ?>" alt="" />
                            <div class="caption">
                                <h4 class="group inner list-group-item-heading">
                                    <a href="<?php echo urldecode($offer->hotelUrls->hotelInfositeUrl); ?>"><?php echo $offer->hotelInfo->hotelName; ?></a> <?php echo "&nbsp;" . str_repeat("<span>★</span>",$offer->hotelInfo->hotelStarRating);?>
                                </h4>
                                <p class="group inner list-group-item-text">
                                    <?php echo $offer->hotelInfo->description ?>
                                </p>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <span>Address: <?php echo $offer->hotelInfo->hotelCountryCode . ', ' . $offer->hotelInfo->hotelCity . ', ' . $offer->hotelInfo->hotelStreetAddress ?></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <?php switch ($offer->hotelUrgencyInfo->almostSoldStatus) {
                                            case 'AVAILABLE' : ?>
                                                <?php if($offer->hotelPricingInfo->percentSavings != 0.0) { ?>
                                                    Price per night: $<?php echo $offer->hotelPricingInfo->originalPricePerNight; ?>, book now and save <?php echo $offer->hotelPricingInfo->percentSavings; ?>%
                                                <?php } else { ?>
                                                    Price per night: $<?php echo $offer->hotelPricingInfo->originalPricePerNight; ?>
                                                <?php } ?>
                                                <?php break;
                                            case 'ALMOST_SOLD' : ?>
                                                <span style="color:red">Almost sold!</span><br>
                                                <?php if($offer->hotelPricingInfo->percentSavings != 0.0) { ?>
                                                    Price per night: $<?php echo $offer->hotelPricingInfo->originalPricePerNight; ?>, book now and save <?php echo $offer->hotelPricingInfo->percentSavings; ?>%
                                                <?php } else { ?>
                                                    Price per night: $<?php echo $offer->hotelPricingInfo->originalPricePerNight; ?>
                                                <?php } ?>
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
        <?php } else {?>
            <span>No offers found!</span>
        <?php } ?>
    </div>
</div>