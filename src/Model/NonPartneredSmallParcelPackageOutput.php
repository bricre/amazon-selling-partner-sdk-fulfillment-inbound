<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Carrier, tracking number, and status information for the package.
 */
class NonPartneredSmallParcelPackageOutput extends AbstractModel
{
    /**
     * The carrier that you are using for the inbound shipment.
     *
     * @var string
     */
    public $CarrierName = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\TrackingId
     */
    public $TrackingId = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\PackageStatus
     */
    public $PackageStatus = null;
}
