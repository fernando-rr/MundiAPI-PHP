<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Tests;

use MundiAPILib\APIException;
use MundiAPILib\Exceptions;
use MundiAPILib\APIHelper;
use MundiAPILib\Models;

class ChargesControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \MundiAPILib\Controllers\ChargesController Controller instance
     */
    protected static $controller;

    /**
     * @var HttpCallBackCatcher Callback
     */
    protected $httpResponse;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass()
    {
        $client = new \MundiAPILib\MundiAPIClient();
        self::$controller = $client->getCharges();
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Todo Add description for test testTestGetCharge
     */
    public function testTestGetCharge()
    {
        // Parameters for the API call
        $chargeId = 'ch_wbnd47nCJJFKVZQy';

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->getCharge($chargeId);
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }
}
