<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Information returned by Amazon about a Small Parcel shipment by an
 * Amazon-partnered carrier.
 */
class PartneredSmallParcelDataOutput extends AbstractModel
{
    /**
     * @var \Amz\FulfillmentInbound\Model\PartneredSmallParcelPackageOutputList
     */
    public $PackageList = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\PartneredEstimate
     */
    public $PartneredEstimate = null;
}
