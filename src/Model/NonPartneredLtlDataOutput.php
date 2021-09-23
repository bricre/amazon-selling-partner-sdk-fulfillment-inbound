<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Information returned by Amazon about a Less Than Truckload/Full Truckload
 * (LTL/FTL) shipment shipped by a carrier that has not partnered with Amazon.
 */
class NonPartneredLtlDataOutput extends AbstractModel
{
    /**
     * The carrier that you are using for the inbound shipment.
     *
     * @var string
     */
    public $CarrierName = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\ProNumber
     */
    public $ProNumber = null;
}
