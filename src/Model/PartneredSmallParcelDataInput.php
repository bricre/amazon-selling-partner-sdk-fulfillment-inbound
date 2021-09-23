<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Information that is required by an Amazon-partnered carrier to ship a Small
 * Parcel inbound shipment.
 */
class PartneredSmallParcelDataInput extends AbstractModel
{
    /**
     * @var \Amz\FulfillmentInbound\Model\PartneredSmallParcelPackageInputList
     */
    public $PackageList = null;

    /**
     * The Amazon-partnered carrier to use for the inbound shipment.
     *
     * @var string
     */
    public $CarrierName = null;
}
