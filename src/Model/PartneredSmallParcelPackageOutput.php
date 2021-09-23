<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Dimension, weight, and shipping information for the package.
 */
class PartneredSmallParcelPackageOutput extends AbstractModel
{
    /**
     * @var \Amz\FulfillmentInbound\Model\Dimensions
     */
    public $Dimensions = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\Weight
     */
    public $Weight = null;

    /**
     * The carrier specified with a previous call to putTransportDetails.
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
