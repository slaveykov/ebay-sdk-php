<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Account\Types;

use DTS\eBaySDK\Account\Types\GetAFulfillmentPolicyByIDRestResponse;

class GetAFulfillmentPolicyByIDRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetAFulfillmentPolicyByIDRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\GetAFulfillmentPolicyByIDRestResponse', $this->obj);
    }

    public function testExtendsFulfillmentPolicy()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\FulfillmentPolicy', $this->obj);
    }
}
