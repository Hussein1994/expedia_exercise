<?php

namespace spec;

use ApiHelper;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ApiHelperSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(ApiHelper::class);
    }

    function it_ignores_non_whitelisted_filters() {
        $params = ['my_name_is' => 'laith', 'destinationCity' => 'amman'];
        $this->getFilters($params)->shouldHaveCount(1);
        $this->getFilters($params)->shouldHaveKey('destinationCity');
    }

    function it_should_return_array() {
        $this->getOffers()->shouldBeArray();
    }

    /*
     * it returns empty array when no offers available with the selected filters
     */
    function it_should_return_empty_array() {
        $params = ['minTripStartDate' => '2018-05-31'];
        $this->getOffers($params)->shouldHaveCount(0);
    }
}
