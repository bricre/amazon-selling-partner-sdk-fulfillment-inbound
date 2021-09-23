<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Information that you provide to Amazon about a Small Parcel shipment shipped by
 * a carrier that has not partnered with Amazon.
 */
class NonPartneredSmallParcelDataInput extends AbstractModel
{
    /**
     * The carrier that you are using for the inbound shipment.
     *
     * @var string
     */
    public $CarrierName = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\NonPartneredSmallParcelPackageInputList
     */
    public $PackageList = null;
}
