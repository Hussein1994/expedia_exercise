<?php
/**
 * Created by PhpStorm.
 * User: ekermawi
 * Date: 2/19/17
 * Time: 1:21 AM
 */
class ApiHelper {
    /*
     * array of the accepted filters
     */
    const WHITELISTED_FILTERS = ['destinationCity', 'lengthOfStay', 'minTripStartDate', 'maxTripStartDate', 'minStarRating', 'maxStarRating'];

    /**
     * calls getOffers api with specific filters and return array of offers objects
     * @param $filters (array)
     * @return array
     */
    public function getOffers( $filters = array() ) {

        /*
         * api mandatory params
         */
        $params = [
            'scenario' => 'deal-finder',
            'page' => 'doesntMatter',
            'uid' => 'laith',
            'productType' => 'Hotel'
        ];

        /*
         * build query string from user filters and the mandatory params
         */
        $queryString = http_build_query($params);

        if(!empty($filters)) {
            $queryString .= '&' . http_build_query($filters);
        }

        $url = 'http://offersvc.expedia.com/offers/v2/getOffers?' . $queryString;

        $response = json_decode(file_get_contents($url));

        /*
         * check if no offers available
         */
        if(property_exists($response->offers, 'Hotel')) {
            return $response->offers->Hotel;
        } else {
            return [];
        }
    }

    /*
     * returns the valid filter from the params
     * @param $params (array)
     * @return array
     */
    public function getFilters($params) {

        $filters = [];
        foreach(self::WHITELISTED_FILTERS as $filter_name) {
            if(array_key_exists($filter_name, $params)) {
                $filters[$filter_name] = $params[$filter_name];
            }
        }
        return $filters;
    }
}