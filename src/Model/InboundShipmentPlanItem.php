<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Item information used to create an inbound shipment. Returned by the
 * createInboundShipmentPlan operation.
 */
class InboundShipmentPlanItem extends AbstractModel
{
    /**
     * The seller SKU of the item.
     *
     * @var string
     */
    public $SellerSKU = null;

    /**
     * Amazon's fulfillment network SKU of the item.
     *
     * @var string
     */
    public $FulfillmentNetworkSKU = null;

    /**
     * The item quantity that you are shipping.
     *
     * @var \Amz\FulfillmentInbound\Model\Quantity
     */
    public $Quantity = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\PrepDetailsList
     */
    public $PrepDetailsList = null;
}
