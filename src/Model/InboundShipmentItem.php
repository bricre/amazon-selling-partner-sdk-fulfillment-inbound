<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Item information for an inbound shipment. Submitted with a call to the
 * createInboundShipment or updateInboundShipment operation.
 */
class InboundShipmentItem extends AbstractModel
{
    /**
     * A shipment identifier originally returned by the createInboundShipmentPlan
     * operation.
     *
     * @var string
     */
    public $ShipmentId = null;

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
    public $QuantityShipped = null;

    /**
     * The item quantity that has been received at an Amazon fulfillment center.
     *
     * @var \Amz\FulfillmentInbound\Model\Quantity
     */
    public $QuantityReceived = null;

    /**
     * The item quantity in each case, for case-packed items. Note that QuantityInCase
     * multiplied by the number of boxes in the inbound shipment equals
     * QuantityShipped. Also note that all of the boxes of an inbound shipment must
     * either be case packed or individually packed. For that reason, when you submit
     * the createInboundShipment or the updateInboundShipment operation, the value of
     * QuantityInCase must be provided for every item in the shipment or for none of
     * the items in the shipment.
     *
     * @var \Amz\FulfillmentInbound\Model\Quantity
     */
    public $QuantityInCase = null;

    /**
     * The date that a pre-order item will be available for sale.
     *
     * @var \Amz\FulfillmentInbound\Model\DateStringType
     */
    public $ReleaseDate = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\PrepDetailsList
     */
    public $PrepDetailsList = null;
}
