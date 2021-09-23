<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Reasons why a given seller SKU is not recommended for shipment to Amazon's
 * fulfillment network.
 */
class SKUInboundGuidance extends AbstractModel
{
    /**
     * The seller SKU of the item.
     *
     * @var string
     */
    public $SellerSKU = null;

    /**
     * The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @var string
     */
    public $ASIN = null;

    /**
     * Specific inbound guidance for an item.
     *
     * @var \Amz\FulfillmentInbound\Model\InboundGuidance
     */
    public $InboundGuidance = null;

    /**
     * A list of reasons for the current inbound guidance for this item.
     *
     * @var \Amz\FulfillmentInbound\Model\GuidanceReasonList
     */
    public $GuidanceReasonList = null;
}
