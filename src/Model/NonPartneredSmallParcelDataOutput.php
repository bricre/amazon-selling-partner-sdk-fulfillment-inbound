<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Information returned by Amazon about a Small Parcel shipment by a carrier that
 * has not partnered with Amazon.
 */
class NonPartneredSmallParcelDataOutput extends AbstractModel
{
    /**
     * @var \Amz\FulfillmentInbound\Model\NonPartneredSmallParcelPackageOutputList
     */
    public $PackageList = null;
}
