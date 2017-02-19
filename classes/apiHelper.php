<?php
/**
 * Created by PhpStorm.
 * User: ekermawi
 * Date: 2/19/17
 * Time: 1:21 AM
 */
class apiHelper
{

    /**
     * calls getOffers api with specific filters and return array of the available offers
     * @param $filters (array) query string params
     * @return array
     */
    public static function getOffers($filters = array()){
        $params = array(
            'scenario' => 'deal-finder',
            'page' => 'doesntMatter',
            'uid' => 'laith',
            'productType' => 'Hotel'
        );

        $queryString = http_build_query($params);

        if(!empty($filters)) {
            $queryString .= '&' . http_build_query($filters);
        }

        $url = 'http://offersvc.expedia.com/offers/v2/getOffers?' . $queryString;

        $response = json_decode(file_get_contents($url));

        return $response->offers->Hotel;
    }

    public static function getFilters(){
        $filters = array();

        if(isset($_GET['destinationName'])) {
            $filters['destinationName'] = $_GET['destinationName'];
        }

        if(isset($_GET['lengthOfStay'])) {
            $filters['lengthOfStay'] = $_GET['lengthOfStay'];
        }

        if(isset($_GET['minTripStartDate'])) {
            $filters['minTripStartDate'] = $_GET['minTripStartDate'];
        }

        if(isset($_GET['maxTripStartDate'])) {
            $filters['maxTripStartDate'] = $_GET['maxTripStartDate'];
        }

        if(isset($_GET['minStarRating'])) {
            $filters['minStarRating'] = $_GET['minStarRating'];
        }

        if(isset($_GET['maxStarRating'])) {
            $filters['maxStarRating'] = $_GET['maxStarRating'];
        }

        if(isset($_GET['maxStarRating'])) {
            $filters['maxStarRating'] = $_GET['maxStarRating'];
        }

        return $filters;
    }
}