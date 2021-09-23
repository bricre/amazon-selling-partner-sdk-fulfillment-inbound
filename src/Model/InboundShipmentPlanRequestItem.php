<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Item information for creating an inbound shipment plan. Submitted with a call to
 * the createInboundShipmentPlan operation.
 */
class InboundShipmentPlanRequestItem extends AbstractModel
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
     * @var \Amz\FulfillmentInbound\Model\Condition
     */
    public $Condition = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\Quantity
     */
    public $Quantity = null;

    /**
     * The item quantity in each case, for case-packed items. Note that QuantityInCase
     * multiplied by the number of cases in the inbound shipment equals Quantity. Also
     * note that all of the boxes of an inbound shipment must either be case packed or
     * individually packed. For that reason, when you submit the
     * createInboundShipmentPlan operation, the value of QuantityInCase must be
     * provided for every item in the shipment or for none of the items in the
     * shipment.
     *
     * @var \Amz\FulfillmentInbound\Model\Quantity
     */
    public $QuantityInCase = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\PrepDetailsList
     */
    public $PrepDetailsList = null;
}
