<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Information required to create an Amazon-partnered carrier shipping estimate, or
 * to alert the Amazon fulfillment center to the arrival of an inbound shipment by
 * a non-Amazon-partnered carrier.
 */
class TransportDetailInput extends AbstractModel
{
    /**
     * @var \Amz\FulfillmentInbound\Model\PartneredSmallParcelDataInput
     */
    public $PartneredSmallParcelData = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\NonPartneredSmallParcelDataInput
     */
    public $NonPartneredSmallParcelData = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\PartneredLtlDataInput
     */
    public $PartneredLtlData = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\NonPartneredLtlDataInput
     */
    public $NonPartneredLtlData = null;
}
