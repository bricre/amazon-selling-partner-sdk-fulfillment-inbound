<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The request schema for an inbound shipment.
 */
class InboundShipmentRequest extends AbstractModel
{
    /**
     * @var \Amz\FulfillmentInbound\Model\InboundShipmentHeader
     */
    public $InboundShipmentHeader = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\InboundShipmentItemList
     */
    public $InboundShipmentItems = null;

    /**
     * A marketplace identifier. Specifies the marketplace where the product would be
     * stored.
     *
     * @var string
     */
    public $MarketplaceId = null;
}
